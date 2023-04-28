/**
 Need to add the codes inside the child theme functions.php file.
 */
function move_dokan_dashboard_menu_item($urls) {
    $urls['products']['pos'] = 10;
    $urls['auction']['pos'] = 15;
    return $urls;
}
add_filter( 'dokan_get_dashboard_nav', 'move_dokan_dashboard_menu_item' , 500 );
