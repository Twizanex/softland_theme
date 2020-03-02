<?php
/**
 * softland theme plugin
 *
 * @package softlandTheme
 */

elgg_register_event_handler('init','system','softland_theme_init');

function softland_theme_init() {

	elgg_register_event_handler('pagesetup', 'system', 'softland_theme_pagesetup', 1000);

	// theme specific CSS
	elgg_extend_view('elgg.css', 'softland_theme/css');

	elgg_unextend_view('page/elements/header', 'search/header');
	elgg_extend_view('page/elements/sidebar', 'search/header', 0);
	
	elgg_register_plugin_hook_handler('head', 'page', 'softland_theme_setup_head');

	// non-members do not get visible links to RSS feeds
	if (!elgg_is_logged_in()) {
		elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');
                elgg_unregister_page_handler('activity');	
                elgg_unregister_page_handler('file');
                elgg_unregister_page_handler('members');
                elgg_unregister_page_handler('profile');


	}
        
     //   elgg_register_plugin_hook_handler('public_pages', 'walled_garden', 'your_public_pages');

}

/**
 * Rearrange menu items
 */
function softland_theme_pagesetup() {

	if (elgg_is_logged_in()) {

		elgg_register_menu_item('topbar', array(
			'name' => 'account',
			'text' => elgg_echo('account'),
			'href' => "#",
			'priority' => 100,
			'section' => 'alt',
			'link_class' => 'elgg-topbar-dropdown',
		));

		if (elgg_is_active_plugin('dashboard')) {
			$item = elgg_unregister_menu_item('topbar', 'dashboard');
			if ($item) {
				$item->setText(elgg_echo('dashboard'));
				$item->setSection('default');
				elgg_register_menu_item('site', $item);
			}
		}
		
		$item = elgg_get_menu_item('topbar', 'usersettings');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('settings'));
			$item->setPriority(103);
		}

		$item = elgg_get_menu_item('topbar', 'logout');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('logout'));
			$item->setPriority(104);
		}

		$item = elgg_get_menu_item('topbar', 'administration');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('admin'));
			$item->setPriority(101);
		}

		if (elgg_is_active_plugin('site_notifications')) {
			$item = elgg_get_menu_item('topbar', 'site_notifications');
			if ($item) {
				$item->setParentName('account');
				$item->setText(elgg_echo('site_notifications:topbar'));
				$item->setPriority(102);
			}
		}

		if (elgg_is_active_plugin('reportedcontent')) {
			$item = elgg_unregister_menu_item('footer', 'report_this');
			if ($item) {
				$item->setText(elgg_view_icon('report-this'));
				$item->setPriority(500);
				$item->setSection('default');
				elgg_register_menu_item('extras', $item);
			}
		}
	}
}

/**
 * Register items for the html head
 *
 * @param string $hook Hook name ('head')
 * @param string $type Hook type ('page')
 * @param array  $data Array of items for head
 * @return array
 */
function softland_theme_setup_head($hook, $type, $data) {
	$data['metas']['viewport'] = array(
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0',
	);

	$data['links']['apple-touch-icon'] = array(
		'rel' => 'apple-touch-icon',
		'href' => elgg_get_simplecache_url('softland_theme/homescreen.png'),
	);

	return $data;
}
/*
function your_public_pages($hook, $type, $pages) {
    $pages[] = 'posts/view/.*';  // wildcard .* can be used to make all pages public that match in the URL part
    $pages[] = 'posts/.*';
    $pages[] = '/.*';
   // $pages[] = 'pages/.*';
   // $pages[] = 'thewire/.*';
   // $pages[] = 'other_pagehandler/other_segment';
   
    return $pages;
}*/