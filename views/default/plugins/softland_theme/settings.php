<?php
/**
 * Softland Settings
 *
 * @package Softland
 */

// Get site categories

$banner_title = $vars['entity']->banner_title;
 
$banner_subtitle = $vars['entity']->banner_subtitle;

$learn_more_link = $vars['entity']->learn_more_link;
  

?>
<div>
	<p><?php echo elgg_echo('elggpress:explanation'); ?></p>
<?php
	
echo elgg_view_input('text', [
    'name' => 'params[banner_title]',
    'label' => elgg_echo('softland:banner:title'),
    'value' => $banner_title,
]);
?>
</div>

<div>
	 
<?php
	
echo elgg_view_input('text', [
    'name' => 'params[banner_subtitle]',
    'label' => elgg_echo('softland:banner:subtitle'),
    'value' => $banner_subtitle,
]);
?>
</div>

<div>
	 
<?php
	
echo elgg_view_input('text', [
    'name' => 'params[learn_more_link]',
    'label' => elgg_echo('softland:banner:learn_more_link'),
    'value' => $learn_more_link,
]);
?>
</div>