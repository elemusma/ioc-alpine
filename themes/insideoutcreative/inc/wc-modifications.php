<?php
add_action('woocommerce_before_main_content','add_container_class',9);
function add_container_class(){
echo '<div class="container pt-5 pb-5">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-12">';
}

add_action('woocommerce_after_main_content','close_container_class',9);
function close_container_class(){
echo '</div>';
echo '</div>';
echo '</div>';
}

// removes sidebar
remove_action('woocommerce_sidebar','woocommerce_get_sidebar');

remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 31);