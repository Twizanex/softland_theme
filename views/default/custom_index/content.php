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
<?php
echo elgg_view('page/softland-elements/softland-features');
?>

<?php
echo elgg_view('page/softland-elements/softland-services');
?>
      <!-- .site-section -->
<?php
echo elgg_view('page/softland-elements/softland-subfooter');
?>

    </main>
<?php
echo elgg_view('page/softland-elements/softland-footer');
?>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php
echo elgg_view('page/softland-elements/softland-scripts');
?>
  
 <?php 
 echo elgg_view('page/elements/foot');
 ?>

</body>
</html>