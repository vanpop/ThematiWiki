<?php

// This file exists to ensure that base classes are preloaded before
// MonoBook.php is compiled, working around a bug in the APC opcode
// cache on PHP 5, where cached code can break if the include order
// changed on a subsequent page view.
// see http://lists.wikimedia.org/pipermail/wikitech-l/2006-January/021311.html


if ( ! defined( 'MEDIAWIKI' ) )
	die( 1 );

require_once( dirname( dirname( __FILE__ ) ) . '/includes/SkinTemplate.php');

define('WP_USE_THEMES', FALSE);
global $allowedentitynames, $options, $wp_locale, $wp_registered_widgets, $wp_registered_widget_controls, $wp_registered_widget_updates, $_wp_deprecated_widgets_callbacks, $wp_registered_sidebars, $wp_registered_widgets, $wp_registered_widget_controls, $wp_registered_widget_updates, $register_widget, $wp_widget_factory, $widget_class, $domain, $path, $base, $admin_page_hooks, $ajax_results, $all_links, $allowedposttags, $allowedtags, $authordata, $bgcolor, $cache_categories, $cache_lastcommentmodified, $cache_lastpostdate, $cache_lastpostmodified, $cache_userdata, $category_cache, $class, $comment, $comment_cache, $comment_count_cache, $commentdata, $current_user, $day, $debug, $descriptions, $error, $feeds, $id, $is_apache, $is_IIS, $is_macIE, $is_winIE, $l10n, $locale, $link, $m, $map, $max_num_pages, $menu, $mode, $month, $month_abbrev, $monthnum, $more, $multipage, $names, $newday, $numpages, $page, $page_cache, $paged, $pagenow, $pages, $parent_file, $preview, $previousday, $previousweekday, $plugin_page, $post, $post_cache, $post_default_category, $post_default_title, $post_meta_cache, $postc, $postdata, $posts, $posts_per_page, $previousday, $request, $result, $richedit, $single, $submenu, $table_prefix, $targets, $timedifference, $timestart, $timeend, $updated_timestamp, $urls, $user_ID, $user_email, $user_identity, $user_level, $user_login, $user_pass_md5, $user_url, $weekday, $weekday_abbrev, $weekday_initial, $withcomments, $wp, $wp_broken_themes, $wp_db_version, $wp_did_header, $wp_did_template_redirect, $wp_file_description, $wp_filter, $wp_importers, $wp_plugins, $wp_taxonomies, $wp_the_query, $wp_themes, $wp_object_cache, $wp_query, $wp_queries, $wp_rewrite, $wp_roles, $wp_similiesreplace, $wp_smiliessearch, $wp_version, $wpcommentspopupfile, $wpcommentsjavascript, $wpdb, $wp_embed;
require_once( '../wp-blog-header.php' );


// No longer Needed
// MODIFY WP-SETTINGS.PHP -- In wp-settings.php, replace all occurences of '=&' with '='. and remove do_action('init'); at bottom
