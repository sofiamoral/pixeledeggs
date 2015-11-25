<?php
/**
** module, which adds a computed values to be displayed in the resulting message:
** [pagelink name] -> permalink of that post/page is available via [name]
**/

/* Shortcode handler */

function wpcf7_pagelink_shortcode_handler( $tag ) {
global $wpcf7_contact_form;

if ( ! is_array( $tag ) )
return '';

$type = $tag['type'];
$name = $tag['name'];

$html = '<input type="hidden" name="'. $name .'" value="'.get_the_ID().'" />';

return $html;
}

wpcf7_add_shortcode( 'pagelink', 'wpcf7_pagelink_shortcode_handler', true );

function wpcf7_pagelink_validation_filter( $result, $tag ) {
global $wpcf7_contact_form;

$type = $tag['type'];
$name = $tag['name'];

$thePageID = (int) $_POST[$name] ;

if ( $thePageID == 0 ) {
$result['valid'] = false;
$result['reason'][$name] = 'Someone tampered with the form! Bad guy!';
return $result;
}

$_POST[$name] = get_permalink($thePageID);

return $result;
}

add_filter( 'wpcf7_validate_pagelink', 'wpcf7_pagelink_validation_filter', 10, 2 );

?>