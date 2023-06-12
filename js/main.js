// ajax working on single proudct page  

jQuery(document).ready(function($) {
  $('#add-to-cart-form').on('submit', function(e) {
      e.preventDefault();
      var product_id = $('#product_id').val();
      
      // var variation_id = $('#var').val();
      var quantity = $('#quantity').val();
      var url = $('#url').val();
      alert(url);
      $.ajax({
          type: 'POST',
          // dataType: 'json',
          url: url,
          data: {
              'action': 'add_to_cart_single_page',
              'product_id': product_id,
              'quantity': quantity,
            
          },
          success: function(response) {
            $('.cart-items-count').text(response.cart_count);
            $('.widget_shopping_cart_content').html(response.mini_cart);
            location.reload();
        },
        error: function(xhr, status, error) {
       
            console.log(error);
        }
      });
  });


  $('.variation-select').change(function() {
      var variation_id = $(this).val();
      $('#variation-id').val(variation_id);
  });
});



jQuery(document).ready(function($) {
    $('.variation-link').on('click', function(event) {
        event.preventDefault();
        var variationId = $(this).data('variation-id');
        var price = $(this).data('price');
        $('.variation-link').removeClass('active');
        
        // Add the active class to the clicked variation link
        $(this).addClass('active');

        $('#product-price').text(price);
        $('#product_id').val(variationId);
    });
});


// ajax working on home page proudct 

jQuery(document).ready(function($) {
  
  $('.add-to-cart').on('click', function(e) {
      e.preventDefault();
      var productId = $(this).data('product-id');
      var url = $('#url').val();
      $.ajax({
      
          url: url,
          type: 'POST',
          data: {
              action: 'add_to_cart_home',
              product_id: productId,
            
          },
          success: function(response) {
              $('.cart-items-count').text(response.cart_count);
              $('.widget_shopping_cart_content').html(response.mini_cart);
              location.reload();
          },
          error: function(xhr, status, error) {
         
              console.log(error);
          }
      });
  });
});

var swiper = new Swiper(".recommended-swiper", {
  slidesPerView: 3,
  spaceBetween: 71.52,
  loop: true,
  navigation: {
    nextEl: ".recommended-next",
    prevEl: ".recommended-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    520: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 60
    },
    1050: {
      slidesPerView: 3,
      spaceBetween: 71.52
    }
  }
});



var bannerSlider = new Swiper(".banner-main-3d", {
    effect: "fade",
    navigation: {
        nextEl: ".banner-next",
        prevEl: ".banner-prev",
    },
    on: {
        slideChangeTransitionStart: function () {
            jQuery('.block-image-first , .animate-image').hide(0);
            jQuery('.block-image-first , .animate-image').removeClass('aos-init').removeClass(
                'aos-animate');
        },
        slideChangeTransitionEnd: function () {
          jQuery('.block-image-first , .animate-image').show(0);
            AOS.init();
        },
    }
});
document.addEventListener('DOMContentLoaded', function () {
  jQuery('.block-image-first , .animate-image').show(0);
    AOS.init();
    jQuery(".btn-wrapper-3d").click(function () {
      jQuery(".image-banner-main.have-model model-viewer").removeAttr("auto-rotate-delay");
        let slideIndex = jQuery(this).attr("data-index");
        setTimeout(function () {
            bannerSlider.slideTo(slideIndex);
        }, 500)
        setTimeout(function () {
          jQuery(".image-banner-main.have-model model-viewer").attr(
                "auto-rotate-delay", "10000000000000000000000000000000");
        }, 1000)
    })
})



var swiper = new Swiper(".product-recommended-swiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: ".recommended-next",
    prevEl: ".recommended-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    520: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    1050: {
      slidesPerView: 1,
      spaceBetween: 20
    }
  }
});


