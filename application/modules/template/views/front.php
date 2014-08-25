<!DOCTYPE html>
<html lang="<?php echo $this->lang->lang(); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anton Zekeriev Rodin">
    <title><?php _e($meta_title); ?></title>
    <meta name="description" content="<?php _e($meta_description); ?>" >

    <!-- Bootstrap core CSS -->
    <?php foreach($main_css as $href) { ?>
            <link href="<?php echo base_url("public/css/$href"); ?>" rel="stylesheet" >
    <?php } ?>
    
  </head>
<body>

    <!-- Header -->
    <?php $this->load->view("{$main_header}") ?>
      
    <div class="container">

        <!-- Content -->
        <?php $this->load->view("{$module}/{$view}") ?>
        <?php $this->load->view("{$social_media}") ?>    
      
    </div> <!-- /container -->
    
    <!-- Footer -->
    <?php $this->load->view("{$main_footer}") ?>  

    <!-- Javascript in the bottom for faster loading -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url("public/js/jquery.min.js"); ?>"><\/script>')</script>
    <?php foreach($admin_js as $src) { ?>
        <script src="<?php echo $src; ?>" ></script>
    <?php } ?>
</body>
</html>