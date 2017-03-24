<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

// fw_theme_ext_events_after_content - adding some html after the content
/** @internal */
function _action_theme_render_html($post) {
    if (!empty($post) and $post === fw()->extensions->get( 'events' )->get_post_type_name() ) {
        echo '<div>'. __('Hello world', 'fw') .'</div>';
    }
}
add_action('fw_theme_ext_events_after_content', '_action_theme_render_html');


// fw_ext_events_post_slug - event custom post slug
/** @internal */
function _filter_custom_events_post_slug($slug) {
    return 'event';
}
add_filter('fw_ext_events_post_slug', '_filter_custom_events_post_slug');


// fw_ext_events_taxonomy_slug - event taxonomy slug
/** @internal */
function _filter_custom_events_taxonomy_slug($slug) {
    return 'events';
}
add_filter('fw_ext_events_taxonomy_slug', '_filter_custom_events_taxonomy_slug');

// changes the increments of the Events time picker.
/*add_filter('fw_option_type_event_datetime_pickers', function($data){
    $data['from']['step'] = 30;
    $data['to']['step'] = 30;
    return $data;
});*/