<?php
//Template Name: shop page
get_header();
?>

<!-- <link href="<?php echo get_stylesheet_directory_uri()?>/Style/shop.css" rel="stylesheet"> -->





<!------------------------- Heading section Html start ----------------------->


<div class="heading-section">
  <div class="custom-container">
    <div class="heading-container-sec">
      <h3 class="heading-main-sec">SUNSHINE IN YOUR POCKET</h3>
    </div>
  </div>
</div>


<!------------------------- Heading section Html End ----------------------->



<!-------------------- shop slider html start---------------- -->

<section id="recommended-products shop">
<div class="recommended-products shop" style="background: #fef7e6">
  <div class="custom-container">
    
    <div class="recommended-products-slider-container shop-slider">
      <div class="nav-recommended-products-slider">
        <div class="nav-recommended-products-slider-container">
          <div class="nav-recommended-container">
                <button class="recommended-prev">
                  <img class="next-btn-img" src="http://cane13.com/wp-content/uploads/2023/05/prev-button.png" alt="" width="84" width="78">
                </button>
                
                  <div class="btn-with-link">
                    <a href="#">
                      <button class="btn-label-collection">
                        See all our product
                      </button>
                    </a>
                  </div>
                
                <button class="recommended-next">
                  <img class="prev-btn-img" src="http://cane13.com/wp-content/uploads/2023/05/next-button.png" alt="" width="84" width="78">
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


<!------------------------- shop slider html end ----------------------->


<!------------------------- Image section start  ----------------------->

<section id="shopify-section-template--18963768049983__a3bbcec1-e249-436f-8b6c-b691e5de28a8" class="shopify-section section">
<div class="animated-gif section-template--18963768049983__a3bbcec1-e249-436f-8b6c-b691e5de28a8-padding">
  <div class="fullwidth--container">
    
    <div class="gif-container">
      <img class="gif-image" src="//cdn.shopify.com/s/files/1/0759/9466/1183/files/Rectangle_25.png?v=1684514619" alt="loading.." width="1440" width="700">
    </div>
    
  </div>
</div>
</section>


<!------------------------- Image section End  ----------------------->










<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<?php

get_footer();
?>

