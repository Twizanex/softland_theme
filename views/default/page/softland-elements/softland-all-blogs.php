<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$content = elgg_get_entities([
	'type' => 'object',
	'subtype' => 'posts',
	//'container_guid' => $widget->owner_guid,
	//'limit' => $widget->num_display,
    
	//'pagination' => true,
	'distinct' => false,
        
]);
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

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

     <?php
      
      echo elgg_view('page/softland-elements/softland-navigation');
      
      ?>
    </header>


    <main id="main">
      <div class="hero-section inner-page">
        <div class="wave">
          
          <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                      <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                  </g>
              </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <h1 data-aos="fade-up" data-aos-delay="">
                    <?php 
                        echo elgg_echo('softland:header:blogs:all');
                     ?>
                  </h1>
                  <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">
                      <?php 
                        echo elgg_echo('softland:header:blogs:description');
                     ?>
                  </p>  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      

      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
               <?php 
                  //echo print_r($content);
                  foreach ($content as $b) {
                      
                      
                      $featured = elgg_get_entities(array(
                                'type' => 'object',
                                'subtype' => 'file',
                                'category' => 'featured',
                                'owner_guid' => $b->guid,
                                //'full_view' => false,
                                'no_results' => elgg_echo("file:none"),
                                'preload_owners' => true,
                                'preload_containers' => true,
                                'distinct' => false,
                        ));
                   ?>
            <div class="col-md-4">
                
              <div class="post-entry">
                  
                  <a href="<?php echo $site_url;?>posts/view/<?php echo $b->guid;?>/<?php echo str_replace(' ', '-', $b->title);?>" class="d-block mb-4">
                    <?php  
                   $limit = 0;
                    //  
                   foreach ($featured as $f) {
                       if($limit == 0)
                       {
                 $file = get_entity($f->guid);

                  $image_url = $file->getIconURL('large');
                  $image_url = elgg_format_url($image_url);
                  $download_url = elgg_get_download_url($file);
                  ?>
                  <figure>
                    <img src="<?php echo $download_url;?>" alt="Image" class="img-fluid">
                 </figure>
                 <?php
//echo $download_url;
                       }
                       $limit++;
                 }
                 ?>
                  
                </a>
                 
                
                <div class="post-text">
                  <span class="post-meta"><?php echo date('d/m/Y', $b->time_created); ?> &bullet; By 
                      <a href="#">
                          <?php 
                            $u = get_entity($b->owner_guid); 
                            echo $u->name;
                            ?>
                      </a>
                  </span>  
                  <h3>
                      <a href="<?php echo $site_url;?>posts/view/<?php echo $b->guid;?>/<?php echo str_replace(' ', '-', $b->title);?>">
                          <?php echo $b->title?>
                      </a>
                  </h3>
                  <p>
                      <?php echo $b->excerpt;?>
                  </p>
                  <p><a href="<?php echo $site_url;?>posts/view/<?php echo $b->guid;?>/<?php echo str_replace(' ', '-', $b->title);?>" class="readmore">Read more</a></p>
                </div>
              </div>
                 
            </div>
              <?php
                  }
                  
                  ?>
         
          </div>

         <!-- <div class="row">
            <div class="col-12 text-center">
              <span class="p-3 active text-primary">1</span>
              <a href="#" class="p-3">2</a>
              <a href="#" class="p-3">3</a>
              <a href="#" class="p-3">4</a>
            </div>
          </div>-->
        </div>
      </div>
      

      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Starts Publishing Your Apps</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>


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
