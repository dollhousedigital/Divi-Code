/*--Add to functions.php--*/

add_filter('woocommerce_product_description_heading',
'isa_product_description_heading');

function isa_product_description_heading() {
    return __('Course Description', 'woocommerce');
}
