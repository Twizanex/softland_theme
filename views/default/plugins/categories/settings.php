<?php
/**
 * Softland Settings
 *
 * @package Softland
 */

// Get site categories

$banner_title = $vars['entity']->banner_title;



?>
<div>
	<p><?php echo elgg_echo('elggpress:explanation'); ?></p>
<?php
	echo elgg_view('input/tags', array('value' => $categories, 'name' => 'categories'));
?>
</div>