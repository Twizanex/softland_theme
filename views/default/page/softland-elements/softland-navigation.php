<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$site_name = $site->name;

$user = elgg_get_logged_in_user_entity();
?>
<?php 
              if (!elgg_is_logged_in())
                    {
             ?>
<div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-lg-4">
            <h1 class="mb-0 site-logo"><a href="<?php echo $site_url;?>" class="mb-0"><?php echo $site_name;?></a></h1>
          </div>

          <div class="col-8 col-md-8 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?php echo $site_url;?>" class="nav-link">Home</a></li>
                <li><a href="features.html" class="nav-link">Services</a></li>
                
                
                <li>
                  <a href="<?php echo $site_url;?>posts" class="nav-link">Blog</a>
                   
                </li>
                
                <li><a href="pricing.html" class="nav-link">About</a></li>
                
                <li><a href="contact.html" class="nav-link">Contact us</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>
      <?php
                    }
                    
                    if (elgg_is_logged_in())
                    {
                    ?>
<div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-lg-4">
            <h1 class="mb-0 site-logo"><a href="<?php echo $site_url;?>" class="mb-0"><?php echo $site_name;?></a></h1>
          </div>

          <div class="col-8 col-md-8 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
                 <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                 <?php echo elgg_view_menu('site'); ?><!--
             
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="features.html" class="nav-link">Features</a></li>
                <li><a href="pricing.html" class="nav-link">Pricing</a></li>
                
                <li class="has-children active">
                  <a href="blog.html" class="nav-link">Blog</a>
                  <ul class="dropdown">
                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                    <li><a href="blog-single.html" class="active nav-link">Blog Sigle</a></li>
                  </ul>
                </li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
              --> 
               <li class="has-children active">
                  <a href="blog.html" class="nav-link">Options</a>
                  <ul class="dropdown">
                <?php
                    if (elgg_is_admin_logged_in()){   
                ?>
                    <li>
                        <a href="<?php echo $site_url ?>admin/" class="nav-link">
                            Administration
                        </a>
                    </li>
                <?php
                    }
                ?>
                    <li>
                        <a href="<?php echo $site_url ?>profile/<?php echo $user->username;?>/edit/" class="nav-link">
                            Edit profile
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $site_url ?>action/logout/" class="nav-link">
                            Logout
                        </a>
                    </li>
                  </ul>
                </li>
              
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>
<?php
                    }
      ?>