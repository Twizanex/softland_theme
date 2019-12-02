<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$site_name = $site->name;
 
$user = elgg_get_logged_in_user_entity();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <?php
 echo elgg_view('page/softland-elements/softland-header');
 echo elgg_view('page/elements/head', $vars['head']);
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

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <?php
      
      echo elgg_view('page/softland-elements/softland-navigation');
      
      ?>
      
    </header>


    <main id="main">
      
    <?php
      
      echo elgg_view('page/softland-elements/softland-hero');
      
      ?>
      

      <section class="site-section_1">
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-content">

            <p class="lead mb-5">
                <?php echo $content ?>
                
            </p>
            
 


            <div class="pt-5">
             
            </div>

          </div>
          
        </div>
      </div>
    </section>
      

      <?php
      
      echo elgg_view('page/softland-elements/softland-subfooter');
      
      ?>


    </main>
    <?php
      
      echo elgg_view('page/softland-elements/softland-footer');
      
      ?>
  </div> <!-- .site-wrap -->
  <?php
      
      echo elgg_view('page/softland-elements/softland-scripts');
      
      ?>
  
 <?php echo elgg_view('page/elements/foot');?>
  </body>
</html>
