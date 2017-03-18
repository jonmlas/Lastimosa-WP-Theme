<?php
// Based from https://www.sitepoint.com/adding-custom-meta-boxes-to-wordpress/

function page_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
    	<div class="block">
        	<strong>Header settings</strong><br/>
            Options for the header on this page.
            <select id="header-options" name="header-options">
                <?php 
                    $option_values = array(
						'' => 'Default',
					   	'transparent' => 'Transparent Header',
					   	'onscroll' => 'Header is visible on scroll (TBA)',
					   	'hidden' => 'Hide Header on this page',
					);

                    foreach($option_values as $key => $value) 
                    {
                        if($key == get_post_meta($object->ID, 'header-options', true))
                        {
                            ?>
                                <option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>

        </div>
        <br>
        <div class="block">
            <label for="hide-page-title">
            <?php
                $hide_page_title = get_post_meta($object->ID, 'hide-page-title', true);

                if($hide_page_title == '')
                {
                    ?>
                        <input name="hide-page-title" type="checkbox" value="true">
                    <?php
                }
                else if($hide_page_title == 'true')
                {
                    ?>  
                        <input name="hide-page-title" type="checkbox" value="true" checked>
                    <?php
                }
				
            ?>
            Hide Page Title</label>
        </div>
        <div class="block">
            <label for="hide-footer-widgets">
            <?php
                $hide_footer_widgets = get_post_meta($object->ID, 'hide-footer-widgets', true);

                if($hide_footer_widgets == '')
                {
                    ?>
                        <input name="hide-footer-widgets" type="checkbox" value="true">
                    <?php
                }
                else if($hide_footer_widgets == 'true')
                {
                    ?>  
                        <input name="hide-footer-widgets" type="checkbox" value="true" checked>
                    <?php
                }
				
            ?>            
            Hide Footer Widgets</label>
        </div>
    <?php  
}

function add_page_meta_box()
{
    add_meta_box('page-meta-box', 'Page Options', 'page_meta_box_markup', 'page', 'side', 'low', null);
}

add_action('add_meta_boxes', 'add_page_meta_box');

function save_page_meta_box($post_id, $post, $update)
{
    if (!isset($_POST['meta-box-nonce']) || !wp_verify_nonce($_POST['meta-box-nonce'], basename(__FILE__)))
        return $post_id;

    if(!current_user_can('edit_post', $post_id))
        return $post_id;

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

    $slug = 'page';
    if($slug != $post->post_type)
        return $post_id;
	
	/* Header Options */
	$header_options = '';
	if(isset($_POST['header-options']))
    {
        $header_options = $_POST['header-options'];
    }   
    update_post_meta($post_id, 'header-options', $header_options);
	
	/* Hide Page Title */
    $hide_page_title = '';
    if(isset($_POST['hide-page-title']))
    {
        $hide_page_title = $_POST['hide-page-title'];
    }   
    update_post_meta($post_id, 'hide-page-title', $hide_page_title);
	
	/* Footer Widgets */
    $hide_footer_widgets = '';
    if(isset($_POST['hide-footer-widgets']))
    {
        $hide_footer_widgets = $_POST['hide-footer-widgets'];
    }   
    update_post_meta($post_id, 'hide-footer-widgets', $hide_footer_widgets);
}

add_action('save_post', 'save_page_meta_box', 10, 3);