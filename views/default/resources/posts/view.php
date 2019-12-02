<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$header = elgg_view('page/elements/header', $vars);
$page_type = elgg_extract('page_type', $vars);
$guid = elgg_extract('guid', $vars);

elgg_entity_gatekeeper($guid, 'object', 'posts');
elgg_group_gatekeeper();

$blog = get_entity($guid);

elgg_set_page_owner_guid($blog->container_guid);
$container = $blog->getContainerEntity();
$site_url = elgg_get_site_url();
//$site = elgg_get_site_entity();


$featured = elgg_get_entities(array(
	'type' => 'object',
	'subtype' => 'file',
        'category' => 'featured',
        'owner_guid' => $blog->guid,
	//'full_view' => false,
	'no_results' => elgg_echo("file:none"),
	'preload_owners' => true,
	'preload_containers' => true,
	'distinct' => false,
));
$user = elgg_get_logged_in_user_entity();
?>

<html lang="en">
<head>
     <title><?php echo $blog->title;?></title>
 <?php
 echo elgg_view('page/softland-elements/softland-header');
 echo elgg_view('page/elements/head');
 ?>
   
</head>


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
                <div class="col-md-10 text-center hero-text">
                  <h1 data-aos="fade-up" data-aos-delay="">
                      <?php 
                            echo $blog->title; 
                      ?>
                  </h1>
                  <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">
                     <?php echo date('d/m/Y', $blog->time_created); ?> &bullet; By 
                      <a href="#" class="text-white">
                          
                          <?php 
                            echo $container->name; 
                            ?>
                      </a>
                  </p>  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      

      <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">

            <div class="row mb-5">
              <div class="col-md-12">
                
                <?php

//echo     print_r($featured);
                 foreach ($featured as $f) {
                 $file = get_entity($f->guid);

                  $image_url = $file->getIconURL('large');
                  $image_url = elgg_format_url($image_url);
                  $download_url = elgg_get_download_url($file);
                  ?>
                  <figure>
                    <img src="<?php echo $download_url;?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
                 </figure>
                 <?php
//echo $download_url;
                 }
                 ?>
                    
                    
                   
              </div>
               
            </div>
            
             
             
                <?php 
                            echo $blog->description; 
                            
                            echo elgg_view('output/tags', array('tags' => $vars['entity']->tags));

                      ?>
                
             

            

            <div class="pt-5">
              <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
            </div>


          

          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Dog <span>(12)</span></a></li>
                <li><a href="#">Dog Food <span>(22)</span></a></li>
                <li><a href="#">Vetenirarian <span>(37)</span></a></li>
                <li><a href="#">Events<span>(42)</span></a></li>
              </div>
            </div>
            <div class="sidebar-box">
              <img src="img/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              <h3>About The Author</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
            </div>

            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
      

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