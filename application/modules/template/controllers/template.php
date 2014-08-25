<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->init_config();
    }
    
    public function index() {
        
    }
    
    public function all() {
        $this->_data['all'] = $this->mdl_template_options->get_all();
        $this->_data['view'] = "options/all";
        echo Modules::run("template/admin", $this->_data);
    }
    
    public function add() {
        $this->_data['action'] = "insert";
        $this->_data['view'] = "options/form";
        $this->_data['id'] = -1;
        
        /* Is needed for repopulate the form when using flashdata */
        if (is_array($this->session->flashdata('post'))) {       
            $this->_data = array_merge( $this->_data, $this->session->flashdata('post'));
        }
        echo Modules::run("template/admin", $this->_data);
    }
    
    public function delete($id) {
        if (isset($id)) {
            $this->mdl_template_options->delete_by_id($id);
            success_flashdata("<p>Option deleted</p>");
            $this->redirect_home();
        }
    }
    
    public function get_by_slug($slug) {
        return $this->_data[$slug];
    }
    
    public function edit($id) {
        if(isset($id)) {
            $this->_data['id'] = (int) $id;
            $this->_data['action'] = "update";
            $this->_data['view'] = 'options/form';
            $object = $this->mdl_template_options->get_by_id($id);
            $this->_data = array_merge( $this->_data, array_pop($object->result_array()) );
            
            /* Is needed for repopulate the form when using flashdata */
            if (is_array($this->session->flashdata('post'))) {       
                $this->_data = array_merge( $this->_data, $this->session->flashdata('post'));
            }
            echo Modules::run("template/admin", $this->_data);
        }
    }
    
    public function insert() {
       $object_data = $this->post_populate();
       if ($this->validate()) {
           if ( method_exists($this->mdl_template_options, $this->input->post('action')) ) {
                call_user_func_array( array($this->mdl_template_options, $this->input->post('action')), array($object_data));
           }
           success_flashdata("<p>¡Opción actualizada!</p>");
           $this->redirect_home();
       } else {
           error_flashdata(validation_errors("<p>", "</p>"));
           if ($this->input->post('action') == 'insert') { redirect("admin/{$this->_data['module']}/add"); }
           if ($this->input->post('action') == 'update') { redirect("admin/{$this->_data['module']}/edit/{$this->input->post('key')}"); }
       }  
    }
    
    /* PRIVATE FUNCTIONS */
    /* SHOULD TO BE MODIFIED */
    private function validate() {
        
        $this->load->library('form_validation');
     
        if ($this->input->post("action") == "insert") {
            $field = "key";
            $table = $this->mdl_template_options->get_table();
            $this->form_validation->set_rules('key', 'Key', "required|min_length[3]|max_length[50]|is_unique[{$table}.{$field}]");
        } else {
            $this->form_validation->set_rules('key', 'Key', 'required|min_length[3]|max_length[50]');
        }    
        $this->form_validation->set_rules('value', 'Value', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('id', 'Id', 'required|numeric');
        $this->form_validation->set_rules('action', 'Action', 'required');
        
        if ($this->form_validation->run()) {
            return true;
        } else {
            return false;
        }
    }
    
    private function post_populate() {
        $this->session->set_flashdata('post', $this->input->post());
        return $array = array(
               'id' => $this->input->post('id'),
               'key' => $this->input->post('key'),
               'value' => $this->input->post('value')
        );
    }
    
    public function config() {
       $this->_data['default_config'] = $this->_data;
       $this->load->view('admin', $this->_data);
    }
    
    public function admin($data = array()) {
        $this->_data = array_merge($this->_data, $data);
        $this->load->view('admin', $this->_data);
    }
    
    public function main($data = array()) {
        $this->_data = array_merge($this->_data, $data);
        $this->load->view('main', $this->_data);
    }
    
    public function front($data = array()) {
        $this->_data = array_merge($this->_data, $data);
        $this->load->view('front', $this->_data);
    }
    
    public function login($data = array()) {
        $this->_data = array_merge($this->_data, $data);
        $this->load->view('login', $this->_data);
    }
    
    private function redirect_home() {
        redirect("{$this->_home}", "refresh");
    }
    
    private function init_config() {
        

        
        $this->load->model("mdl_template_options");
        $this->_data = $this->config->item('template');
        
        /* Set Template options  */
        $options = $this->mdl_template_options->get_all();
        foreach($options->result() as $option) {
            $this->_data[$option->key] = $option->value;
        }
        $this->lang->load('common');
        $this->_data['languages'] = $this->lang->get_languages();
        $this->_data['module'] = strtolower(get_class($this));
        $this->_data['view'] = 'admin/default';
        $this->_home = "admin/template/all";
    }
    
    private $_data;
    private $_home;
}