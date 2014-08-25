    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
        <div class="collapse navbar-collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <?php foreach($admin_menu as $anchor => $link) { ?>
                <li><a href="<?php echo site_url("admin/$link"); ?>"><?php echo $anchor; ?></a></li>
            <?php } ?>
          </ul>
            
          <a href="<?php echo site_url("admin/user/sign_out"); ?>" title="Sing Out" class="btn btn-default navbar-btn pull-right">Sign Out</a>
            
          <ul class="nav navbar-nav pull-right">
                        <li><a class="active" class="dropdown-toggle" href="#" data-toggle="dropdown"><?php _e("Idioma"); ?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php foreach($languages as $key => $value) { ?>
                                <li><a href="<?php echo site_url("{$this->lang->switch_uri($key)}"); ?>"><?php echo _e($key); ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
          </ul>
            
        </div><!--/.nav-collapse -->
      </div>
    </div>