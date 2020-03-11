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
$site = elgg_get_site_entity();
$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$featured = elgg_get_entities(array(
	'type' => 'object',
	'subtype' => 'file',
        'category' => 'featured',
        'owner_guid' => $blog->guid,
	//'full_view' => false,
        'limit' => 1,
	'no_results' => elgg_echo("file:none"),
	'preload_owners' => true,
	'preload_containers' => true,
	'distinct' => false,
));
$user = elgg_get_page_owner_entity();

$logged_user = elgg_get_logged_in_user_entity();
?>

<html lang="en">
<head>
     <title><?php echo $blog->title;?></title>
 <?php
 echo elgg_view('page/softland-elements/softland-header');
 echo elgg_view('page/elements/head');
 ?>
<link href="<?php echo $site_url?>mod/softland_theme/views/default/elements/softland/blog.css" rel="stylesheet">
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
                
                 foreach ($featured as $f) {
                 $file = get_entity($f->guid);

                  $image_url = $file->getIconURL('large');
                  $image_url = elgg_format_url($image_url);
                  $download_url = elgg_get_download_url($file);
                  ?>
                  <figure>
                      <a href="<?php echo $download_url;?>" class="elgg-lightbox-photo">
                    <img src="<?php echo $download_url;?>" alt="<?php echo $file;?>" class="img-fluid">
                        </a>
                 </figure>
                 <?php

                 }
                 
                 if($logged_user->guid == $user->guid)
                 {
                 ?>
                     <div style="float:right;">
                    <p>
                        <a href="<?php echo $site_url;?>posts/edit/<?php echo $blog->guid?>" class="btn" >
                            <span class="icofont-edit-alt mr-3" >
                                
                            </span>
                            <?php 
                                echo elgg_echo('elggpress:edit:post');
                            ?>
                        </a>
                    </p>
                </div>
                    <?php
                 }
                    ?>
                   
              </div>
               
            </div>
                                     
                <?php 
                
                    echo $blog_description = preg_replace('/<span[^>]+\>/i', '', $blog->description);
                          
                ?>                                         

            <div class="pt-5">
              <p>Categories:  
                  
                  <?php 
                  $categories = $blog->universal_categories;
                  if($categories != null)
                  {
                      foreach ($categories as $c) {
                          ?>
                  <a href="<?php echo $site_url;?>categories/list?category=<?php echo str_replace(' ', '+', $c);?>">
                      <?php 
                      echo $c;
                      ?></a>,
                  <?php
                                                   
                      }
                      
                      if(is_array($categories) == false)
                      {
                       ?> 
                      <a href="<?php echo $site_url;?>categories/list?category=<?php echo str_replace(' ', '+', $categories);?>">
                               <?php 
                      echo $categories;
                      ?></a>,
                               <?php  
                      }
                  }
                  ?>
                  </p>
                <p>
                  Tags: 
              <?php 
                  $tags = $blog->tags;
                  
                  if($tags!= null)
                  {
                      foreach ($tags as $t) {
                       ?>
                  <a href="<?php echo $site_url;?>search?q=<?php echo str_replace(' ', '+', $t);?>&search_type=tags">
                      <?php 
                      echo $t;
                      ?></a>,
                  <?php
                      }
                      
                      if(is_array($tags) == false)
                      {
                          ?>
                  <a href="<?php echo $site_url;?>search?q=<?php echo str_replace(' ', '+', $tags);?>&search_type=tags">
                      <?php 
                      echo $tags;
                      ?></a>,
                  <?php
                          
                      }
                      
                  }
                  ?>
              </p>
            </div>
              

          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="<?php echo $site_url?>search" class="search-form" method="get">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" name="q"  class="form-control" placeholder="<?php echo elgg_echo('softland:search'); ?>Type a keyword and hit enter">
                      <input type="hidden" name="search_type" value="all">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <?php
                $site_categories = $site->categories;
                
                if($site_categories){
                    
                    foreach ($site_categories as $s) {
                        ?>
                 <li>
                     <a href="<?php echo $site_url;?>categories/list?category=<?php echo str_replace(' ', '+', $s);?>">
                     <?php echo $s;?>
                     </a>
                 </li>
                <?php
                    }
                }
                
                
                ?>
                 
              </div>
            </div>
            <div class="sidebar-box">
                 <center>
              <img src="<?php echo $user->getIconURL('medium');?>" alt="Image placeholder" class="img-fluid mb-4">
                 
              <h3>About The Author</h3>
              <p>
                  
                  <div href="#" class="btn btn-primary btn-sm">
                      <?php
                  echo $user->name;
                  ?>
                  </div>
                      </center>
              </p>
              <p>
                  <?php
                  echo $user->description;
                  ?>
              </p>
              
            </div>

            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
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
  
 <?php 
    echo elgg_view('page/elements/foot');
 ?>

  </body>
</html>