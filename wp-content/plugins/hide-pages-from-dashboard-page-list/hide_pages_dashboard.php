<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly
/**
 * Plugin Name: Hide Specific Pages from Dashboard
 * Plugin URI: https://venugopalphp.wordpress.com
 * Description: Hide pages from dashboard page list, you can hide one page or multiple pages by using this plugin settings..
 * Version: 1.0
 * Author: Venugopal.
 * Author URI: https://venugopalphp.wordpress.com
 * License: GPL2
 */

Class WP_hide_pages_dashboard {
    /* Define construct */

    public function __construct() {

        add_action('admin_init', array($this, 'hide_pages_d_styles'));
        add_action('admin_menu', array($this, 'hide_pages_d_plugin_menu'));
    }

    /* Including page list styles */

    public function hide_pages_d_styles() {

        wp_enqueue_style('hide_page', plugins_url('/css/hide_page.css', __FILE__));
    }

    /* Adding plugin setting to setting option in dashboard */

    public function hide_pages_d_plugin_menu() {

        add_options_page(__('Hide Pages', 'hide_pages_d'), __('Hide Pages', 'hide_pages_d'), 'manage_options', 'hide-pages-dashboard', array($this, 'hide_pages_d_plugin_implement'));
    }

    /* Implementing Pugin functionality */

    public function hide_pages_d_plugin_implement() {

        /* Based on drop-down selection data storing into post meat table */
        $this->hide_page_id_to_database();

        /* Delete data from post meta table */
        $this->hide_page_id_delete();

        /* Including admin setting here */
        require(dirname(__FILE__) . '/hide-page-admin-changes.php');
    }

    /* Based on drop-down selection data storing into post meat table */

    public function hide_page_id_to_database() {

        /* Checking admin clicked save button  link or not */
        if (isset($_REQUEST['check_hide_page_submit'])) {

            /* Getting post id value from select drop-down */
            $hide_page_id = intval($_REQUEST['hide_page_selection']);

            /* Insert into post meta table */
            add_post_meta($hide_page_id, 'hide_page_id_', $hide_page_id, true);
        }
    }

    /* Delete data from post meta table */

    public function hide_page_id_delete() {

        /* Checking admin clicked delete link or not */
        if (isset($_REQUEST['del_hide_page'])) {

            if (isset($_REQUEST['del_hide_page']) && wp_verify_nonce($_REQUEST['_wpnonce'], 'delete_rec')) {

                /* Getting post id from url */
                $delet_post_id = intval($_REQUEST['del_hide_page']);

                /* Delete Post meta based on admin clicking on list */
                delete_post_meta($delet_post_id, 'hide_page_id_');
            } else {
                // WP nonce could not valid
                wp_die(__('Invalid URL this record cannot delete', 'hide-pages-dashboard'), __('Error', 'hide-pages-dashboard'), array(
                    'response' => 403,
                    'back_link' => 'admin.php?page=hide-pages-dashboard',
                ));
            }
        }
    }

}

$WP_hid_d_g = new WP_hide_pages_dashboard();


/* Hiding Account page from dashboard pages list */
add_filter('parse_query', 'hide_page_id_from_admin');

function hide_page_id_from_admin($query) {
    global $pagenow, $post_type;
    if (is_admin() && $pagenow == 'edit.php' && $post_type == 'page') {

        /* Hiding pages from page list based on post meta key = 'hide_page_id_' */
        global $wpdb;
        $get_hide_page = $wpdb->get_results("select * from " . $wpdb->prefix . "postmeta where meta_key='hide_page_id_'");

        /* storing all ids in to array */
        $ids_post = array();

        foreach ($get_hide_page as $get_hide_page_id) {

            /* storing all ids in to array */
            $ids_post[] = $get_hide_page_id->meta_value;
        }
        $query->query_vars['post__not_in'] = $ids_post;
    }
}
