<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'understrap-styles' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function custom_product() {
    
    $products = wc_get_products(array(
        'status' => 'publish',
    ));
    
    if ($products) {
        foreach ($products as $product) {
            $image = wp_get_attachment_image_url($product->get_image_id(), 'full');
            $product_id = $product->get_ID();
            $link = get_permalink($product_id);
            
            echo '<div class="swiper-slide">';
            echo '<div class="recommended-slide-sigle-product">';
            echo '<div class="image-container-slide">';
            echo '<img class="product-image" src="' . $image . '" alt="' . esc_attr($product->get_name()) . '" width="300" height="500">';
            echo '</div>';
            echo '<div class="product-information-container">';
            echo '<div class="product-information-mini-container">';
            echo '<div class="product-title-and-price">';
            echo '<h5 class="product-title-md">'. $product->get_name() .'</h5>';
            echo '<p class="on-product-text-and-price">'. $product->get_price() .'</p>';
            echo '</div>';
            echo '<div class="redirect-button-and-add-to-cart">';
            echo '<a href="'. $link .'">';
            echo '<button class="btn-label-product">Discover this product</button>';
            echo '</a>';
    
            echo '<form id="add-to-cart-form">
            <input type="hidden" id="url" value="'.  admin_url('admin-ajax.php') .'">';
           
           
          
            echo '<button class="add-to-cart" data-product-id="'. $product_id .'">';
            echo '<img src="http://cane13.com/wp-content/uploads/2023/05/cart-plus.png" alt="" width="300" width="500">';
         echo '</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    

}





// mini cart short code 

add_shortcode('custom_product', 'custom_product');
function custom_mini_cart() {
    echo '<a href="'.wc_get_cart_url().'" class="dropdown-back" data-toggle="dropdown">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 36 36" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.20715 0.207489C1.28104 0.207489 0.530273 0.990999 0.530273 1.95749C0.530273 2.92398 1.28104 3.70749 2.20715 3.70749H2.99932C3.75551 3.70749 4.41814 4.23567 4.6171 4.99703L5.3151 7.66795L8.91465 21.4418V24.7075C8.91465 25.9211 9.30926 27.0387 9.97188 27.9278C9.31414 28.7003 8.91465 29.7177 8.91465 30.8325C8.91465 33.2487 10.7916 35.2075 13.1068 35.2075C15.4221 35.2075 17.299 33.2487 17.299 30.8325C17.299 30.5329 17.2702 30.2403 17.2152 29.9575H22.4135C22.3585 30.2403 22.3296 30.5329 22.3296 30.8325C22.3296 33.2487 24.2066 35.2075 26.5218 35.2075C28.8371 35.2075 30.714 33.2487 30.714 30.8325C30.714 30.2576 30.6077 29.7086 30.4147 29.2057C30.6033 28.9225 30.714 28.5785 30.714 28.2075C30.714 27.241 29.9633 26.4575 29.0371 26.4575H26.5218H13.9453C13.0192 26.4575 12.2684 25.674 12.2684 24.7075V22.9575H29.4329C30.9456 22.9575 32.271 21.9008 32.6687 20.3776L35.4104 9.87769C35.9916 7.65136 34.3857 5.45749 32.1746 5.45749H8.21368L7.85268 4.07613C7.25578 1.79206 5.26788 0.207489 2.99932 0.207489H2.20715ZM26.5218 29.9575C26.0588 29.9575 25.6834 30.3493 25.6834 30.8325C25.6834 31.3157 26.0588 31.7075 26.5218 31.7075C26.9848 31.7075 27.3603 31.3157 27.3603 30.8325C27.3603 30.3493 26.9848 29.9575 26.5218 29.9575ZM29.4329 19.4575H11.8723L9.12833 8.95749H32.1746L29.4329 19.4575ZM13.1068 29.9575C12.6438 29.9575 12.2684 30.3493 12.2684 30.8325C12.2684 31.3157 12.6438 31.7075 13.1068 31.7075C13.5699 31.7075 13.9453 31.3157 13.9453 30.8325C13.9453 30.3493 13.5699 29.9575 13.1068 29.9575Z" fill="#FEF7E6"/>
    </svg>';
    echo '<div class="basket-item-count" style="display: inline;">';
    if(WC()->cart->get_cart_contents_count()>0){
    echo '<span class="cart-items-count count">' . WC()->cart->get_cart_contents_count() . '</span>';
    }
    echo '</div>';
    echo '</a>';
    echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
    echo '<li> <div class="widget_shopping_cart_content">';
    echo woocommerce_mini_cart();
    echo '</div></li></ul>';
}
add_shortcode('custom_mini_cart', 'custom_mini_cart');



function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'header' => __( 'Header Menu' ),
        'footer_1' => __( 'footer Menu 1' ),
        'footer_2' => __( 'footer Menu 2' ),
        'footer_3' => __( 'footer Menu 3' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

    // home page product add to cart


    
    function add_to_cart_home() {
        $product_id = isset($_POST['product_id']) ? absint($_POST['product_id']) : 0;
        $quantity = isset($_POST['quantity']) ? absint($_POST['quantity']) : 1;
    
        if ($product_id > 0 && WC()->cart->add_to_cart($product_id, $quantity)) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => false));
        }
        die();
    }
    add_action('wp_ajax_add_to_cart_home', 'add_to_cart_home');
    add_action('wp_ajax_nopriv_add_to_cart_home', 'add_to_cart_home');
    
        // single product page add to cart product

    function add_to_cart_single_page() {
        $product_id = isset($_POST['product_id']) ? absint($_POST['product_id']) : 0;
        $variation_id = isset($_POST['variation_id']) ? absint($_POST['variation_id']) : 0;
        $quantity = isset($_POST['quantity']) ? absint($_POST['quantity']) : 1;

        if ($product_id > 0 && WC()->cart->add_to_cart($product_id, $quantity, $variation_id)) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => false));
        }
        die();
    }
    add_action('wp_ajax_add_to_cart_single_page', 'add_to_cart_single_page');
    add_action('wp_ajax_nopriv_add_to_cart_single_page', 'add_to_cart_single_page');
