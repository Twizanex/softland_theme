<?php
/**
 * Softland Settings
 *
 * @package Softland
 */
$site_url = elgg_get_site_url();
$banner_title = $vars['entity']->banner_title;
 
$banner_subtitle = $vars['entity']->banner_subtitle;

$learn_more_link = $vars['entity']->learn_more_link;

$features_title = $vars['entity']->features_title;

$f_item_1_title = $vars['entity']->f_item_1_title;
$f_item_1_desc = $vars['entity']->f_item_1_desc;
$f_item_1_link = $vars['entity']->f_item_1_link;


$f_item_2_title = $vars['entity']->f_item_2_title;
$f_item_2_desc = $vars['entity']->f_item_2_desc;
$f_item_2_link = $vars['entity']->f_item_2_link;


$f_item_3_title = $vars['entity']->f_item_3_title;
$f_item_3_desc = $vars['entity']->f_item_3_desc;
$f_item_3_link = $vars['entity']->f_item_3_link;
$ad_widget = $vars['entity']->ad_widget;


$service_info_1_title = $vars['entity']->service_info_1_title;
$service_info_1_desc = $vars['entity']->service_info_1_desc;
$service_info_1_link = $vars['entity']->service_info_1_link;

$service_info_2_title = $vars['entity']->service_info_2_title;
$service_info_2_desc = $vars['entity']->service_info_2_desc;
$service_info_2_link = $vars['entity']->service_info_2_link;

$navigation_services_url = $vars['entity']->navigation_services_url;
$navigation_about_url = $vars['entity']->navigation_about_url;
$navigation_contact_url = $vars['entity']->navigation_contact_url;

?>
 <link href="<?php echo $site_url?>mod/softland_theme/views/default/elements/softland/settings.css" rel="stylesheet">
 <div class="cards-row">
     <div class="card" style="width: 97%;">
	<img src='<?php echo $site_url?>mod/softland_theme/graphics/material-card-long.jpg' class="card-image" />
	<div class="card-title">
		<?php echo elgg_echo('softland:settings:banner'); ?>
	</div>
	<div class="card-desc">
		
            <p>
                <?php
	
echo elgg_view_input('text', [
    'name' => 'params[banner_title]',
    'label' => elgg_echo('softland:banner:title'),
    'value' => $banner_title,
]);
?>
            </p>
            
            <p>
                	
<?php
	
echo elgg_view_input('text', [
    'name' => 'params[banner_subtitle]',
    'label' => elgg_echo('softland:banner:subtitle'),
    'value' => $banner_subtitle,
]);
?>
            </p>
            
            <p>
                <?php
	
echo elgg_view_input('text', [
    'name' => 'params[learn_more_link]',
    'label' => elgg_echo('softland:banner:learn_more_link'),
    'value' => $learn_more_link,
]);
?>
            </p>
            
             <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[features_title]',
                    'label' => elgg_echo('softland:features:title'),
                    'value' => $features_title,
                ]);
                ?>
            </p>
	</div>
	<div class="card-actions">
		
	</div>
</div>
     
    
</div>
 
 <div class="cards-row">
   <div class="card">
	<img src='<?php echo $site_url?>mod/softland_theme/graphics/material-card-small.jpg' class="card-image" />
	<div class="card-title">
		<?php echo elgg_echo('softland:settings:first:features'); ?>
	</div>
	<div class="card-desc">
		
           
            
            <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_1_title]',
                    'label' => elgg_echo('softland:features:item1:title'),
                    'value' => $f_item_1_title,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_1_desc]',
                    'label' => elgg_echo('softland:features:item1:desc'),
                    'value' => $f_item_1_desc,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_1_link]',
                    'label' => elgg_echo('softland:features:item1:link'),
                    'value' => $f_item_1_link,
                ]);
                ?>
                
            </p>
            
     
     
	</div>
	<div class="card-actions">
		
	</div>
</div>
     
     <div class="card">
	<img src='<?php echo $site_url?>mod/softland_theme/graphics/material-card-small.jpg' class="card-image" />
	<div class="card-title">
		 <?php echo elgg_echo('softland:settings:second:features'); ?>
	</div>
	<div class="card-desc">
		
             <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_2_title]',
                    'label' => elgg_echo('softland:features:item2:title'),
                    'value' => $f_item_2_title,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_2_desc]',
                    'label' => elgg_echo('softland:features:item2:desc'),
                    'value' => $f_item_2_desc,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_2_link]',
                    'label' => elgg_echo('softland:features:item2:link'),
                    'value' => $f_item_2_link,
                ]);
                ?>
                
            </p>
	</div>
	<div class="card-actions">
		
	</div>
</div>

     <div class="card">
	<img src='<?php echo $site_url?>mod/softland_theme/graphics/material-card-small.jpg' class="card-image" />
	<div class="card-title">
		 <?php echo elgg_echo('softland:settings:third:features'); ?>
	</div>
	<div class="card-desc">
		
             <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_3_title]',
                    'label' => elgg_echo('softland:features:item3:title'),
                    'value' => $f_item_3_title,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_3_desc]',
                    'label' => elgg_echo('softland:features:item3:desc'),
                    'value' => $f_item_3_desc,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[f_item_3_link]',
                    'label' => elgg_echo('softland:features:item3:link'),
                    'value' => $f_item_3_link,
                ]);
                ?>
                
            </p>
	</div>
	<div class="card-actions">
		
	</div>
</div>

     <div class="card">
	<img src='<?php echo $site_url?>mod/softland_theme/graphics/material-card-small.jpg' class="card-image" />
	<div class="card-title">
		 <?php echo elgg_echo('softland:settings:third:features'); ?>
	</div>
	<div class="card-desc">
		
             <p>
                
                
                 <?php
	
                echo elgg_view_input('plaintext', [
                    'name' => 'params[ad_widget]',
                    'label' => elgg_echo('softland:ad:widget'),
                    'value' => $ad_widget,
                ]);
                ?>
                
                
                
            </p>
	</div>
	<div class="card-actions">
		
	</div>
</div>

</div>
 
 
 
 <div class="cards-row">
     <div class="card" style="width: 97%;">
	<img src='<?php echo $site_url?>mod/softland_theme/graphics/material-card-long.jpg' class="card-image" />
	<div class="card-title">
		<?php echo elgg_echo('softland:settings:services'); ?>
	</div>
	<div class="card-desc">
		
           
            
            <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[service_info_1_title]',
                    'label' => elgg_echo('softland:services:item1:title'),
                    'value' => $service_info_1_title,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('plaintext', [
                    'name' => 'params[service_info_1_desc]',
                    'label' => elgg_echo('softland:services:item1:desc'),
                    'value' => $service_info_1_desc,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[service_info_1_link]',
                    'label' => elgg_echo('softland:services:item1:link'),
                    'value' => $service_info_1_link,
                ]);
                ?>
                
            </p>
            
     
     
	</div>
	<div class="card-actions">
		
	</div>
</div>
     
     <div class="card" style="width: 97%;">
	<img src='<?php echo $site_url?>mod/softland_theme/graphics/material-card-long.jpg' class="card-image" />
	<div class="card-title">
		 <?php echo elgg_echo('softland:settings:services'); ?>
	</div>
	<div class="card-desc">
		
             <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[service_info_2_title]',
                    'label' => elgg_echo('softland:services:item2:title'),
                    'value' => $service_info_2_title,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('plaintext', [
                    'name' => 'params[service_info_2_desc]',
                    'label' => elgg_echo('softland:services:item2:desc'),
                    'value' => $service_info_2_desc,
                ]);
                ?>
                
                 <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[service_info_2_link]',
                    'label' => elgg_echo('softland:services:item2:link'),
                    'value' => $service_info_2_link,
                ]);
                ?>
                
            </p>
	</div>
	<div class="card-actions">
		
	</div>
</div>
     
      <div class="card" style="width: 97%;">
	<img src='<?php echo $site_url?>mod/softland_theme/graphics/material-card-long.jpg' class="card-image" />
	<div class="card-title">
		 <?php echo elgg_echo('softland:settings:menu'); ?>
	</div>
	<div class="card-desc">
		
             <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[navigation_services_url]',
                    'label' => elgg_echo('softland:home:navigation:services'),
                    'value' => $navigation_services_url,
                ]);
                ?>
               
            </p>
            
            <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[navigation_about_url]',
                    'label' => elgg_echo('softland:home:navigation:about'),
                    'value' => $navigation_about_url,
                ]);
                ?>
               
            </p>
            
            <p>
                <?php
	
                echo elgg_view_input('text', [
                    'name' => 'params[navigation_contact_url]',
                    'label' => elgg_echo('softland:home:navigation:contact'),
                    'value' => $navigation_contact_url,
                ]);
                ?>
               
            </p>
            
            
	</div>
	<div class="card-actions">
		
	</div>
</div>

     

</div>
 
 </br>