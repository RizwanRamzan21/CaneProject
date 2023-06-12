<?php
//Template Name: product Page
get_header();
?>
<!-- single product detail section HTML start----------------------------- -->
<div class="single-product-detail-section">
  <div class="single-product-detail-wraper">
    <div class="product-media-slider">
      <!------------------- Recmended Slider Html start-------------------- -->
      <section class=" section">
        <div class="recommended-products-product" style="background: #e9e9e9">
          <div class="custom-container-product">
            <div class="recommended-products-slider-container-product ">
              <div class="nav-recommended-products-slider-product">
                <div class="nav-recommended-products-slider-container-product">
                  <div class=" home-page">
                    <button class="recommended-prev">
                      <img class="next-btn-img" src="http://cane13.com/wp-content/uploads/2023/05/next-button.png" alt="" width="84" width="78">
                    </button>
                    <button class="recommended-next">
                      <img class="prev-btn-img" src="http://cane13.com/wp-content/uploads/2023/05/prev-button.png" alt="" width="84" width="78">
                    </button>
                  </div>
                </div>
              </div>
              <div class="slider-initiazed-container">
                <div class="swiper product-recommended-swiper">
                  <div class="swiper-wrapper">
                  
                  <?php    
                        $product_id = get_the_ID();
                        $products = wc_get_product($product_id);
                        $gallery_images = $products->get_gallery_image_ids();
                        $add_to_cart =  esc_url($products->add_to_cart_url( $product_id ));
                        // print_r($add_to_cart);
                        // die();
                       if ($gallery_images) {
                        foreach ( $gallery_images as $image ) {
                          

              echo '<div class="swiper-slide">
                      <div class="recommended-slide-sigle-product">
                        <div class="image-container-slide">';
                        echo '<img class="product-image" src="'. wp_get_attachment_url($image) .'" alt="" width="300" width="500">';
                 echo ' </div>
                      </div>
                    </div>';
                  }
                }
                
             ?> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!------------------- Recmended slider Html End ------------------ -->
    </div>
    <?php
    $product_id = get_the_ID();
    $product = wc_get_product($product_id);
    $image = wp_get_attachment_image_url($product->get_image_id(), 'full');
    // $add_to_cart =  WC()->cart->add_to_cart($product_id );
    
    // $add_to_cart = 'http://localhost/cane/product/?add-to-cart='.$product_id.'&quantity=1';
    //  echo $add_to_cart;
    if ($product) ;
    ?>
    <div class="product-info-column">
      <div class="product-tital">
        <h2>
          <span><?php echo $product->get_name(); ?></span> Rum Punch
        </h2>
      </div>
      <div class="product-category">
        <h3>CANE 13 CARIBBEAN RUM PUNCH</h3>
      </div>
      <div class="product-review-part">
        <div class="review-star">
          <img src="<?php echo $product->get_average_rating(); ?>" alt="">
        </div>
        <div class="review-content">
          <p>Reviews</p>
        </div>
      </div>
      <div class="product-price">
        <input type="hidden" value="">
        <p>PRICE £<span id="product-price"><?php echo $product->get_price(); ?></span></p>
    </div>

      <div class="product-tex-calculate">
        <p>Tax included. Shipping is calculated at checkout.</p>
      </div>
      <div class="product-Ingredients-part">
        <h2>Ingredients</h2>
        <p><?php echo $product->get_description(); ?></p>
      </div>
      <div class="product-detail-part">
        <h2>Details</h2>
        <p><?php echo get_post_meta($product_id, 'product_details', true); ?></p>
      </div>
      <div class="product-pack-size-part">
        <h2>Pack Size</h2>
        <div class="product-pack-size-variation">
        <?php
           if ($product->is_type('variable')) {
            $variations = $product->get_available_variations();
            foreach ($variations as $variation) {
                $variation_id = $variation['variation_id'];
                $price = $variation['display_price'];
                $attributes = implode(', ', $variation['attributes']);
                echo '<a href="#" id="var" class="variation-link" data-variation-id="' . $variation_id . '" data-price="' . $price . '"><p>' . $attributes . '</p></a>';
            }
        }
            ?>

        

              
        </div>
      </div>
      <div class="product-cart-button">
      <form id="add-to-cart-form">
        <input type="hidden" id="url" value="<?php echo admin_url('admin-ajax.php') ?>">
        <input type="hidden" id="quantity" name="quantity" value="1" min="1" required>
        <input type="hidden" id="product_id" name="product_id" value="<?php echo $product->get_id(); ?>">
        <input type="submit" class="border_none" value="Add to Cart">
      </form>
       <?php

      //  echo '<button type="button"><a href="'.$add_to_cart .'">Add to Cart</a></button>';
        ?>
      </div>
      <?php
     $amazon_link = get_field('amazon_link');
     if ($amazon_link) {
         echo '<div class="product-amazon-button">
             <button type="button">
                 <a href="' . esc_url($amazon_link) . '">Buy it on Amazon</a>
             </button>
         </div>';
        }
       ?>
      <div class="product-svg-section">
        <div class=" svg-section-wraper">
        <?php
   

      $tags = get_terms([
        'taxonomy' => 'product_tag',
        'hide_empty' => false,
        ]);
       
        foreach ($tags as $tag){


          // echo $tag->term_id;
          $value = get_field( 'icon', "product_tag_".$tag->term_id );

        echo '<div class="svg-column1">
            <div class="icon--container aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">  
              <span class="svg_icon">';
              echo '  <img  src="'. $value.'" alt="">';
              
              
              echo ' </span>
            </div>
              <p>'.$tag->name.'</p>
          </div>';
        
      }
        ?>
         <?php if( is_category() ) { ?> 
<div class="taxonomy-image">
<img class="taxonomy-img" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>"  alt="" / >
</div>
<?php 
} else {  
//do nothing
} 
?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- single product detail section HTML End----------------------------- -->
<!------------------------ ACCORDION section Html start --------------------->
<div class="accordion-wraper">
  <div class="accordion-container">
    <div class="fist-wrap">

    <?php
   $drinks = get_field('drinks');

   if ($drinks) {
       $counter = 1;
       
       foreach ($drinks as $drink) {
           $drawer_id = 'faq-drawer-' . $counter;
           $title = $drink['title'];
           $description = $drink['description'];
           
           if ($title && $description) { // Check if title and description exist
               ?>
               <div class="faq-drawer">
                   <input class="faq-drawer__trigger" id="<?php echo $drawer_id; ?>" type="checkbox" />
                   <label class="faq-drawer__title" for="<?php echo $drawer_id; ?>"><?php echo $title; ?></label>
                   <div class="faq-drawer__content-wrapper">
                       <div class="faq-drawer__content">
                           <p><?php echo $description; ?></p>
                       </div>
                   </div>
               </div>
               <?php
           }
           
           $counter++;
       }
   }
   

?>

      
    </div>
  </div>
</div>
<!------------------------ ACCORDION section Html End --------------------->
<!----------------------------------- media section html ---------------------------->
<div class="pro-top-outer">
  <section class="pro-top">
    <div class="left">
      <img src="<?php echo $image ?>" alt="">
    </div>
    <div class="right">
      <img src="http://cane13.com/wp-content/uploads/2023/06/Group-113-2.png" alt="">
    </div>
  </section>
</div>
<!----------------------------------- media section html ---------------------------->
<!------------------- Cane section Html start -------------------------------------->
<div class="main-product-spec product-page-slider">
  <div class="custom-container">
    <div class="header--section-custom-wrapper">
      <h3 class="heading--section-lg">ONLY THE BEST</h3>
    </div>
    <div class="main-container-content-section">
      <div class="main-row-content">
        <!--         left-side -->

        <div class="left-side content-container-spec">

          

          <div class="icon-with--text">
            <div class="icon--container aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <span class="svg_icon">
               <img src=" <?php echo get_field('crash_logo'); ?>" alt="">
              </span>
            </div>
            <button class="label--point"> <?php echo get_field('crash_title'); ?> </button>
            <div class="point--description">
              <p> <?php echo get_field('crash_description'); ?></p>
            </div>
          </div>
          
          <div class="icon-with--text">
            <div class="icon--container aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <span class="svg_icon">
                <img src=" <?php echo get_field('caffeine_logo'); ?>" alt="">
              </span>
            </div>
            <button class="label--point"> <?php echo get_field('caffeine_title'); ?> </button>
            <div class="point--description">
              <p><?php echo get_field('caffeine_description'); ?></p>
            </div>
          </div>
        </div>
        <!--         main-image-section -->
        <div class="main-sections-point-image-container">
          <img class="" src="<?php echo get_field('best_image'); ?>" width="1000" height="800">
        </div>
        <!--         right-side -->
        <div class="right-side content-container-spec">
          <div class="icon-with--text">
            <div class="icon--container aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <span class="svg_icon">
                <img src="<?php echo get_field('antioxidant_logo')?>" alt="">
              </span>
            </div>
            <button class="label--point"> <?php echo get_field('antioxidant_title')?> </button>
            <div class="point--description">
              <p><?php echo get_field('antioxidant_description')?></p>
            </div>
          </div>
          <div class="icon-with--text">
            <div class="icon--container aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <span class="svg_icon">
                <img src="<?php echo get_field('vegan_logo')?>" alt="">
              </span>
            </div>
            <button class="label--point"> <?php echo get_field('vegan_title')?> </button>
            <div class="point--description">
              <p><?php echo get_field('vegan_description')?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!------------------- Cane section Html End -------------------------------------->
<!------------------- Recmended Slider Html start-------------------- -->
<section class="shopify-section section">
  <div class="recommended-products" style="background: #e9e9e9">
    <div class="custom-container">
      <div class="header-section-wrapper">
        <h3 class="heading-section-md">Recommended products</h3>
      </div>
      <div class="recommended-products-slider-container-home ">
        <div class="nav-recommended-products-slider">
          <div class="nav-recommended-products-slider-container">
            <div class=" home-page">
              <button class="recommended-prev">
                <img class="next-btn-img" src="http://cane13.com/wp-content/uploads/2023/05/next-button.png" alt="" width="84" width="78">
              </button>
              <div class="btn-with-link">
                <a href="#">
                  <button class="btn-label-collection"> See all our product </button>
                </a>
              </div>
              <button class="recommended-next">
                <img class="prev-btn-img" src="http://cane13.com/wp-content/uploads/2023/05/prev-button.png" alt="" width="84" width="78">
              </button>
            </div>
          </div>
        </div>
        <div class="slider-initiazed-container">
          <div class="swiper recommended-swiper">
            <div class="swiper-wrapper">
            <?php
                echo do_shortcode( '[custom_product]' );
            ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------------- Recmended slider Html End ------------------ --> <?php

get_footer();
?>