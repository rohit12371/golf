<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly
    /*
     * File Name Hide Page admin setting page
     * This page contain Page drop down and list of page added from drop-down
     * 	
     *
     */
?>
<!--  Pages List Drop down display here -->
<form action="" method="post">
    <h4><?php echo _e("Select pages from downdown and click on save button "); ?></h4>
    <select name="hide_page_selection" class="hide_page_seletion_id">
        <option value=""><?php echo esc_attr(__('Select page')); ?></option>
        <?php
        $pages = get_pages();
        foreach ($pages as $page) {
            $option = '<option value="' . $page->ID . '">';
            $option .= $page->post_title;
            $option .= '</option>';
            echo _e($option);
        }
        ?>
    </select>
    <input type="submit" value="<?php _e('Save'); ?>" class="hide_page_id_submit" name="check_hide_page_submit">

</form>
<!--  Pages List Drop down End here -->


<!-- List of hide pages from dashboard page list -->
<table border="1" class="list_hide_page_table">
    <th><?php echo esc_attr(__('Page Id')); ?></th>
    <th><?php echo esc_attr(__('Page Title')); ?></th>
    <th><?php echo esc_attr(__('Action')); ?></th>
    <?php
    global $wpdb;
    /* Getting details from post meta table */
    $get_hide_page = $wpdb->get_results("select * from " . $wpdb->prefix . "postmeta where meta_key='hide_page_id_'");

    foreach ($get_hide_page as $get_hide_page_id) {
            $ids_post = $get_hide_page_id->meta_value;
        ?>
        <tr>
            <td>
                <?php echo _e($ids_post); ?>
            </td>
            <td>
                <?php echo _e(get_the_title($ids_post)); ?>	
            </td>
            <td>
                <?php $del_nonce = wp_create_nonce('delete_rec'); ?>
                <a onclick="return confirm('Are you sure want to delete this record?');" href="<?php echo admin_url('admin.php?page=hide-pages-dashboard') . '&del_hide_page=' . $ids_post . '&_wpnonce=' . $del_nonce; ?>">
                    <?php echo esc_attr(__('Delete')); ?>
                </a>
            </td>

        </tr>

    <?php } ?>
</table>
<!-- list of page list end here -->