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
  

?>
 <link href="<?php echo $site_url?>mod/softland_theme/views/default/elements/softland/settings.css" rel="stylesheet">
    <div id="aspect-content" style="padding-left:20px;">
  <div class="aspect-tab ">
    <input id="item-18" type="checkbox" class="aspect-input" name="aspect">
    <label for="item-18" class="aspect-label"></label>
    <div class="aspect-content">
        <div class="aspect-info">
            <div class="chart-pie positive over50">
                <span class="chart-pie-count">100</span>
                <div>
                    <div class="first-fill"></div>
                    <div class="second-fill" style="transform: rotate(249deg)"></div>
                </div>
            </div>
            <span class="aspect-name"><?php echo elgg_echo('softland:settings:banner'); ?></span>
        </div>
        <div class="aspect-stat">
             
              
        </div>
    </div>
    <div class="aspect-tab-content">
        <div class="sentiment-wrapper">
            <div>
                <div>
                     <div class="positive-count opinion-header">
                         
                    </div>
                    <div>
                        <span>
                             
<?php
	
echo elgg_view_input('text', [
    'name' => 'params[banner_title]',
    'label' => elgg_echo('softland:banner:title'),
    'value' => $banner_title,
]);
?>
                        </span>
                    </div>
                </div>
            </div>
             
        </div>
        <div class="sentiment-wrapper">
            <div>
                <div>
                    <div class="positive-count opinion-header">
                         
                    </div>
                    <div>
                        <span>
                             
 
	
<?php
	
echo elgg_view_input('text', [
    'name' => 'params[banner_subtitle]',
    'label' => elgg_echo('softland:banner:subtitle'),
    'value' => $banner_subtitle,
]);
?>
 
                        </span>
                    </div>
                </div>
            </div>
             
        </div>
    <div class="sentiment-wrapper">
            <div>
                <div>
                    <div class="positive-count opinion-header">
                         
                    </div>
                    <div>
                        <span>
                             
 
	
<?php
	
echo elgg_view_input('text', [
    'name' => 'params[learn_more_link]',
    'label' => elgg_echo('softland:banner:learn_more_link'),
    'value' => $learn_more_link,
]);
?>
 
                        </span>
                    </div>
                </div>
            </div>
             
        </div>
    
    
    </div>
  </div>
  <div class="aspect-tab ">
    <input id="item-14" type="checkbox" class="aspect-input" name="aspect">
    <label for="item-14" class="aspect-label"></label>
    <div class="aspect-content">
        <div class="aspect-info">
            <div class="chart-pie positive over50">
                <span class="chart-pie-count">58</span>
                <div>
                    <div class="first-fill"></div>
                    <div class="second-fill" style="transform: rotate(209deg)"></div>
                </div>
            </div>
            <span class="aspect-name">Lorem ipsum dolor sit amet</span>
        </div>
        <div class="aspect-stat">
            <div class="all-opinions">
                <span class="all-opinions-count">22</span>
                <span>opinion</span>
            </div>
            <div>
                <span class="positive-count">12</span>
                <span class="neutral-count">5</span>
                <span class="negative-count">5</span>
            </div>
        </div>
    </div>
    <div class="aspect-tab-content">
        <div class="sentiment-wrapper">
            <div>
                <div>
                    <div class="positive-count opinion-header">
                        <span>positive</span>
                        <span>12</span>
                    </div>
                    <div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.</span>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="neutral-count opinion-header">
                        <span>neutral</span>
                        <span>5</span>
                    </div>
                    <div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.</span>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="negative-count opinion-header">
                        <span>negative</span>
                        <span>5</span>
                    </div>
                    <div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="aspect-tab ">
    <input id="item-2" type="checkbox" class="aspect-input" name="aspect">
    <label for="item-2" class="aspect-label"></label>
    <div class="aspect-content">
        <div class="aspect-info">
            <div class="chart-pie positive">
                <span class="chart-pie-count">33</span>
                <div>
                    <div class="first-fill"></div>
                    <div class="second-fill" style="transform: rotate(119deg)"></div>
                </div>
            </div>
            <span class="aspect-name">Lorem</span>
        </div>
        <div class="aspect-stat">
            <div class="all-opinions">
                <span class="all-opinions-count">7</span>
                <span>opinion</span>
            </div>
            <div>
                <span class="positive-count">3</span>
                <span class="neutral-count">2</span>
                <span class="negative-count">2</span>
            </div>
        </div>
    </div>
    <div class="aspect-tab-content">
        <div class="sentiment-wrapper">
            <div>
                <div>
                    <div class="positive-count opinion-header">
                        <span>positive</span>
                        <span>3</span>
                    </div>
                    <div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="neutral-count opinion-header">
                        <span>neutral</span>
                        <span>2</span>
                    </div>
                    <div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.</span>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="negative-count opinion-header">
                        <span>negative</span>
                        <span>2</span>
                    </div>
                    <div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id congue dolor. Vivamus eleifend vitae nunc sed tincidunt.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<div>
	
</div>

<div>
	 

</div>

<div>
	 

</div>