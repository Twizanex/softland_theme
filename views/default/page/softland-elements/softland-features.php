<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$site_url = elgg_get_site_url();

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
?>

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
      </div> 
