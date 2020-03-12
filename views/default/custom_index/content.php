<?php
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));
if (elgg_is_logged_in()){
    forward ('activity');
}

$banner_title = elgg_get_plugin_setting('banner_title','softland_theme');
$banner_subtitle = elgg_get_plugin_setting('banner_subtitle', 'softland_theme');
$learn_more_link = elgg_get_plugin_setting('learn_more_link', 'softland_theme');

$features_title = elgg_get_plugin_setting('features_title', 'softland_theme');

$f_item_1_title = elgg_get_plugin_setting('f_item_1_title', 'softland_theme');
$f_item_1_desc = elgg_get_plugin_setting('f_item_1_desc', 'softland_theme');
$f_item_1_link = elgg_get_plugin_setting('f_item_1_link', 'softland_theme');

$f_item_2_title = elgg_get_plugin_setting('f_item_2_title', 'softland_theme');
$f_item_2_desc = elgg_get_plugin_setting('f_item_2_desc', 'softland_theme');
$f_item_2_link = elgg_get_plugin_setting('f_item_2_link', 'softland_theme');

$f_item_3_title = elgg_get_plugin_setting('f_item_3_title', 'softland_theme');
$f_item_3_desc = elgg_get_plugin_setting('f_item_3_desc', 'softland_theme');
$f_item_3_link = elgg_get_plugin_setting('f_item_3_link', 'softland_theme');



$service_info_1_title = elgg_get_plugin_setting('service_info_1_title', 'softland_theme');
$service_info_1_desc = elgg_get_plugin_setting('service_info_1_desc', 'softland_theme');
$service_info_1_link = elgg_get_plugin_setting('service_info_1_link', 'softland_theme');

$service_info_2_title = elgg_get_plugin_setting('service_info_2_title', 'softland_theme');
$service_info_2_desc = elgg_get_plugin_setting('service_info_2_desc', 'softland_theme');
$service_info_2_link = elgg_get_plugin_setting('service_info_2_link', 'softland_theme');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
 echo elgg_view('page/softland-elements/softland-header');
 echo elgg_view('page/elements/head');
 ?>
</head>
<div class="elgg-page-messages">
		<?php
                echo $messages;
                ?>
	</div>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <?php
      
      echo elgg_view('page/softland-elements/softland-navigation');
      
      ?>
    </header>


    <main id="main">
      <div class="hero-section">
        <?php echo elgg_view('page/softland-elements/softland_wave');?>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                  <h1 data-aos="fade-right">
                      <?php
                      echo $banner_title;
                      ?>
                  </h1>
                  <p class="mb-5" data-aos="fade-right" data-aos-delay="100">
                  <?php
                  echo $banner_subtitle;
                  ?>
                  </p>
                  <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                      <a href="<?php echo $learn_more_link;?>"
                      class="btn btn-outline-white">Learn more</a></p>
                </div>
                <div class="col-lg-5 iphone-wrap">
                  <img src="<?php echo $site_url;?>mod/softland_theme/vendor/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right">
                  <img src="<?php echo $site_url;?>mod/softland_theme/vendor/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section">
        <div class="container">

          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">
                  <?php echo $features_title; ?>
              </h2>
            </div>
          </div>

          <div class="row">
             
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-users"></span>
                </div>
                 <a href="<?php echo $f_item_1_link;?>">
                     <h3 class="mb-3">
                    <?php echo $f_item_1_title;?>
                     </h3>
                <p>
                    <?php echo $f_item_1_desc;?>
                </p> 
                 </a>
              </div>
            </div>
                 
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-toggle-off"></span>
                </div>
                  <a href="<?php echo $f_item_2_link;?>">
                <h3 class="mb-3">
                    <?php echo $f_item_2_title;?>
                </h3>
                <p>
                    <?php echo $f_item_2_desc;?>
                </p>
                </a>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-umbrella"></span>
                </div>
                  <a href="<?php echo $f_item_3_link;?>">
                <h3 class="mb-3">
                    <?php echo $f_item_3_title;?>
                </h3>
                <p>
                    <?php echo $f_item_3_desc;?>
                </p>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .site-section -->
<!---
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="col-md-6 mb-5">
              <img src="<?php //echo $site_url;?>mod/softland_theme/vendor/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
            </div>
          </div>

         
        </div>
      </div> 
-->
<!-- .site-section -->



      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
              <h2 class="mb-4">
              <?php
                echo $service_info_1_title;
              ?>
              </h2>
              <p class="mb-4">
              <?php
                echo $service_info_1_desc;
              ?>
              </p>
              <p><a href="<?php echo $service_info_1_link;?>">Read more</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="<?php echo $site_url;?>mod/softland_theme/vendor/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
              <h2 class="mb-4">
              <?php
                echo $service_info_2_title;
              ?>
              </h2>
              <p class="mb-4">
              <?php
                echo $service_info_2_desc;
              ?>
              </p>
              <p><a href="<?php echo $service_info_1_link;?>">Read more</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="<?php echo $site_url;?>mod/softland_theme/vendor/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->


       


      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Starts Publishing Your Apps</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#"
                  class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>


    </main>
     <?php
      
      echo elgg_view('page/softland-elements/softland-footer');
      
      ?>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php
      
      echo elgg_view('page/softland-elements/softland-scripts');
      
      ?>
  
 <?php echo elgg_view('page/elements/foot');?>


</body>

</html>
