<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();

$service_info_1_title = elgg_get_plugin_setting('service_info_1_title', 'softland_theme');
$service_info_1_desc = elgg_get_plugin_setting('service_info_1_desc', 'softland_theme');
$service_info_1_link = elgg_get_plugin_setting('service_info_1_link', 'softland_theme');

$service_info_2_title = elgg_get_plugin_setting('service_info_2_title', 'softland_theme');
$service_info_2_desc = elgg_get_plugin_setting('service_info_2_desc', 'softland_theme');
$service_info_2_link = elgg_get_plugin_setting('service_info_2_link', 'softland_theme');
?>
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
      </div> 
