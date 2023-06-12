




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo get_stylesheet_directory_uri()?>/style.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri()?>/my.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri()?>/Style/header.css" rel="stylesheet">  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<sticky-header data-sticky-type="reduce-logo-size" class="header-wrapper color-transparent-bg gradient">
  <header class="header header--middle-left header--mobile-center page-width header--has-menu"><header-drawer data-breakpoint="tablet">
        <details id="Details-menu-drawer-container" class="menu-drawer-container">
          <summary class="header__icon header__icon--menu header__icon--summary link focus-inset" aria-label="Menu">
            <span>
              <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
  viewBox="0 0 18 16"
>
  <path d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z" fill="currentColor">
</svg>

              <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

            </span>
          </summary>
          <div id="menu-drawer" class="gradient menu-drawer motion-reduce" tabindex="-1">
            <div class="menu-drawer__inner-container">
              <div class="menu-drawer__navigation-container">
                <nav class="menu-drawer__navigation">
               <?php
                wp_nav_menu( array(
                  // 'fallback_cb' => 'custom_primary_menu_fallback',
                  'menu' => 'header Menu',
                  //  'menu_class' => "menu-drawer__menu has-submenu list-menu", 
                  //  'link_before'     => '<span class="menu-drawer__menu-item list-menu__item link link--text focus-inset">',
                  //  'link_after'      => '</span>',
                  'container' => false
              ) );
              ?>
              <?php
                wp_nav_menu( array(
                   'fallback_cb' => 'custom_primary_menu_fallback',
                   'menu_class' => "footer-block__details-content list-unstyled", 
                  'container' => false,
                  'theme_location' => "footer_2",
                  'link_before'     => '<span class="link link--text list-menu__item list-menu__item--link">',
                  'link_after'      => '</span>'
              ) );
              ?>
                </nav>
                <div class="menu-drawer__utility-links"><a href="/account/login" class="menu-drawer__account link focus-inset h5 medium-hide large-up-hide">
                      
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 37 37" fill="none">
                    <path d="M18.2101 8.22681C17.0256 8.22681 15.8677 8.57805 14.8829 9.23613C13.898 9.8942 13.1304 10.8295 12.6771 11.9239C12.2238 13.0182 12.1052 14.2224 12.3363 15.3841C12.5674 16.5459 13.1377 17.613 13.9753 18.4506C14.8129 19.2882 15.88 19.8586 17.0418 20.0896C18.2035 20.3207 19.4077 20.2021 20.502 19.7488C21.5964 19.2955 22.5317 18.5279 23.1898 17.543C23.8479 16.5582 24.1991 15.4003 24.1991 14.2158C24.1991 12.6274 23.5681 11.1041 22.445 9.98093C21.3218 8.85778 19.7985 8.22681 18.2101 8.22681ZM18.2101 17.2102C17.6179 17.2102 17.0389 17.0346 16.5465 16.7056C16.0541 16.3765 15.6703 15.9089 15.4436 15.3617C15.217 14.8145 15.1577 14.2124 15.2732 13.6316C15.3888 13.0507 15.6739 12.5171 16.0927 12.0983C16.5115 11.6796 17.0451 11.3944 17.626 11.2788C18.2068 11.1633 18.8089 11.2226 19.3561 11.4492C19.9033 11.6759 20.3709 12.0597 20.7 12.5521C21.029 13.0446 21.2046 13.6235 21.2046 14.2158C21.2046 15.0099 20.8891 15.7716 20.3276 16.3332C19.766 16.8947 19.0043 17.2102 18.2101 17.2102Z" fill="#FEF7E6"/>
                    <path d="M18.2102 2.23787C14.9528 2.23787 11.7686 3.2038 9.06014 5.0135C6.35172 6.82321 4.24077 9.39541 2.99422 12.4048C1.74768 15.4143 1.42152 18.7258 2.05701 21.9206C2.69249 25.1154 4.26107 28.05 6.56439 30.3533C8.8677 32.6566 11.8023 34.2252 14.9971 34.8607C18.1919 35.4961 21.5034 35.17 24.5128 33.9234C27.5222 32.6769 30.0945 30.5659 31.9042 27.8575C33.7139 25.1491 34.6798 21.9649 34.6798 18.7075C34.6897 16.5419 34.2705 14.3958 33.4463 12.3931C32.6221 10.3905 31.4094 8.57094 29.878 7.03962C28.3467 5.50829 26.5272 4.29553 24.5245 3.47136C22.5219 2.6472 20.3758 2.22796 18.2102 2.23787ZM9.07701 28.5893C11.8831 27.0646 15.0169 26.2426 18.2102 26.1937C21.4034 26.2426 24.5372 27.0646 27.3433 28.5893C24.8631 30.8994 21.5996 32.1838 18.2102 32.1838C14.8207 32.1838 11.5572 30.8994 9.07701 28.5893ZM29.3646 26.2685C25.969 24.311 22.1292 23.2545 18.2102 23.1992C14.2911 23.2545 10.4513 24.311 7.05574 26.2685C5.53048 24.0432 4.72083 21.4053 4.73502 18.7075C4.73502 15.1337 6.15472 11.7062 8.6818 9.17913C11.2089 6.65205 14.6363 5.23235 18.2102 5.23235C21.784 5.23235 25.2115 6.65205 27.7385 9.17913C30.2656 11.7062 31.6853 15.1337 31.6853 18.7075C31.6995 21.4053 30.8899 24.0432 29.3646 26.2685Z" fill="#FEF7E6"/>
                    </svg>
                    Log in</a><ul class="list list-social list-unstyled" role="list"><li class="list-social__item">
                                            <a href="/" class="list-social__link link"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                    <path d="M14.4284 0.629883C6.6225 0.629883 0.296082 6.9563 0.296082 14.7622C0.296082 22.5681 6.6225 28.8945 14.4284 28.8945C22.2343 28.8945 28.5607 22.5681 28.5607 14.7622C28.5607 6.9563 22.2343 0.629883 14.4284 0.629883ZM20.0703 12.5651C20.0758 12.6865 20.0758 12.8135 20.0758 12.9404C20.0758 16.7771 17.1555 21.2045 11.8117 21.2045C10.1721 21.2045 8.64297 20.7243 7.36223 19.9017C7.58857 19.9293 7.82043 19.9403 8.05781 19.9403C9.41583 19.9403 10.669 19.4766 11.6626 18.6983C10.393 18.6762 9.31647 17.8371 8.95212 16.6833C9.12877 16.7164 9.31095 16.733 9.49864 16.733C9.76362 16.733 10.0231 16.6999 10.266 16.6281C8.93556 16.3631 7.93636 15.1873 7.93636 13.7796V13.7464C8.32831 13.9617 8.77546 14.0942 9.25022 14.1108C8.47184 13.5919 7.95844 12.6975 7.95844 11.6928C7.95844 11.1629 8.10197 10.6605 8.35039 10.2299C9.7857 11.9909 11.9221 13.1447 14.3345 13.2661C14.2849 13.0564 14.2573 12.8356 14.2573 12.6037C14.2573 11.0028 15.5601 9.69995 17.161 9.69995C17.9946 9.69995 18.7509 10.0533 19.2808 10.6163C19.9433 10.4839 20.5616 10.2465 21.1247 9.90973C20.9094 10.5887 20.4457 11.1573 19.8494 11.5162C20.4346 11.4444 20.9977 11.2898 21.5166 11.058C21.1302 11.6431 20.6389 12.151 20.0703 12.5651Z" fill="black"/>
                    </svg><span class="visually-hidden">Twitter</span>
                                            </a>
                                          </li><li class="list-social__item">
                                            <a href="/" class="list-social__link link"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                    <path d="M14.3915 0.629883C6.61874 0.629883 0.259216 7.00076 0.259216 14.8473C0.259216 21.9419 5.43163 27.8303 12.1869 28.8945V18.9622H8.59726V14.8473H12.1869V11.7115C12.1869 8.15008 14.2926 6.19199 17.5289 6.19199C19.0693 6.19199 20.6804 6.46158 20.6804 6.46158V9.96627H18.8997C17.1473 9.96627 16.5961 11.0588 16.5961 12.1798V14.8473H20.5249L19.889 18.9622H16.5961V28.8945C19.9263 28.3664 22.9588 26.6604 25.146 24.0844C27.3333 21.5085 28.5314 18.2323 28.5238 14.8473C28.5238 7.00076 22.1643 0.629883 14.3915 0.629883Z" fill="black"/>
                    </svg><span class="visually-hidden">Facebook</span>
                        </a>
                      </li><li class="list-social__item">
                        <a href="/" class="list-social__link link"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                        <path d="M14.7122 17.2674C16.0932 17.2674 17.2236 16.1425 17.2236 14.756C17.2236 14.2103 17.0454 13.7036 16.7503 13.2915C16.2937 12.6623 15.5531 12.2446 14.7178 12.2446C13.8825 12.2446 13.1419 12.6567 12.6853 13.2915C12.3902 13.7036 12.212 14.2103 12.212 14.756C12.2064 16.1425 13.3313 17.2674 14.7122 17.2674Z" fill="black"/>
                        <path d="M20.1916 11.6936V9.58869V9.27686H19.8798L17.7749 9.28242L17.786 11.6991L20.1916 11.6936Z" fill="black"/>
                        <path d="M18.6101 14.7619C18.6101 16.9113 16.8616 18.6598 14.7122 18.6598C12.5628 18.6598 10.8143 16.9113 10.8143 14.7619C10.8143 14.244 10.9201 13.7484 11.1038 13.2974H8.97668V19.1331C8.97668 19.8848 9.58921 20.4974 10.341 20.4974H19.0834C19.8351 20.4974 20.4477 19.8848 20.4477 19.1331V13.2974H18.3205C18.5099 13.7484 18.6101 14.244 18.6101 14.7619Z" fill="black"/>
                        <path d="M14.7122 0.506836C6.8384 0.506836 0.45697 6.88827 0.45697 14.762C0.45697 22.6358 6.8384 29.0172 14.7122 29.0172C22.5859 29.0172 28.9674 22.6358 28.9674 14.762C28.9674 6.88827 22.5859 0.506836 14.7122 0.506836ZM21.8398 13.2975V19.1333C21.8398 20.6535 20.6036 21.8896 19.0834 21.8896H10.341C8.82077 21.8896 7.58457 20.6535 7.58457 19.1333V13.2975V10.3852C7.58457 8.86506 8.82077 7.62887 10.341 7.62887H19.0834C20.6036 7.62887 21.8398 8.86506 21.8398 10.3852V13.2975Z" fill="black"/>
                        </svg><span class="visually-hidden">Instagram</span>
                        </a>
                      </li><li class="list-social__item">
                        <a href="/" class="list-social__link link"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                      <circle cx="14.2306" cy="14.7622" r="14.1323" fill="black"/>
                      <path d="M14.54 7.70758C15.3114 7.6958 16.0769 7.70169 16.8423 7.6958C16.8895 8.59672 17.2133 9.51531 17.8728 10.1513C18.5323 10.8049 19.4627 11.1052 20.3695 11.2053V13.5783C19.5216 13.5489 18.6677 13.3722 17.8964 13.0071C17.5607 12.854 17.2486 12.6597 16.9424 12.4595C16.9366 14.1789 16.9483 15.8983 16.9307 17.6118C16.8836 18.4362 16.6127 19.2547 16.1357 19.9319C15.3644 21.0624 14.0277 21.7985 12.6557 21.822C11.8137 21.8691 10.9716 21.6395 10.2532 21.2155C9.06379 20.5148 8.22764 19.2311 8.10398 17.8533C8.09221 17.5588 8.08632 17.2644 8.09809 16.9759C8.20409 15.8571 8.75759 14.7854 9.6173 14.0553C10.5948 13.2073 11.9609 12.801 13.2387 13.0425C13.2504 13.9139 13.2151 14.7854 13.2151 15.6569C12.6322 15.4685 11.9491 15.5215 11.4368 15.8748C11.0658 16.1162 10.7832 16.4872 10.636 16.9052C10.5123 17.2055 10.5477 17.5353 10.5536 17.8533C10.6949 18.819 11.6252 19.6316 12.6145 19.5432C13.274 19.5373 13.904 19.1546 14.2456 18.5952C14.3574 18.4009 14.4811 18.2007 14.487 17.971C14.5459 16.917 14.5223 15.8689 14.5282 14.8149C14.5341 12.4418 14.5223 10.0747 14.54 7.70758Z" fill="white"/>
                      </svg><span class="visually-hidden">TikTok</span>
                        </a>
                      </li></ul>
                </div>
              </div>
            </div>
          </div>
        </details>
      </header-drawer><h1 class="header__heading"><a href="/" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                
                <img src="//cdn.shopify.com/s/files/1/0759/9466/1183/files/Group.png?v=1683820537&amp;width=600" alt="manayerbamate" srcset="//cdn.shopify.com/s/files/1/0759/9466/1183/files/Group.png?v=1683820537&amp;width=60 60w, //cdn.shopify.com/s/files/1/0759/9466/1183/files/Group.png?v=1683820537&amp;width=90 90w, //cdn.shopify.com/s/files/1/0759/9466/1183/files/Group.png?v=1683820537&amp;width=120 120w" width="60" height="57.096774193548384" loading="eager" class="header__heading-logo motion-reduce" sizes="(max-width: 120px) 50vw, 60px">
              </div></a></h1><nav class="header__inline-menu">
              <?php
                wp_nav_menu( array(
                  'fallback_cb' => 'custom_primary_menu_fallback',
                  'menu' => 'header Menu',
                   'menu_class' => "list-menu list-menu--inline", 
                   'link_before'     => '<span class="header__menu-item list-menu__item link link--text focus-inset">',
                  'link_after'      => '</span>',
                  'container' => false
              ) );
              ?>
        
        </nav><div class="header__icons">
      <div class="desktop-localization-wrapper">
</div>
      <details-modal class="header__search">
        <details>
          <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search">
            <span>
              <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
                <use href="#icon-search">
              </svg>
              <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
                <use href="#icon-close">
              </svg>
            </span>
          </summary>
          <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
            <div class="modal-overlay"></div>
            <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><search-form class="search-modal__form"><form action="/search" method="get" role="search" class="search search-modal__form">
                    <div class="field">
                      <input class="search__input field__input"
                        id="Search-In-Modal"
                        type="search"
                        name="q"
                        value=""
                        placeholder="Search">
                      <label class="field__label" for="Search-In-Modal">Search</label>
                      <input type="hidden" name="options[prefix]" value="last">
                      <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                        <svg class="icon icon-close" aria-hidden="true" focusable="false">
                          <use xlink:href="#icon-reset">
                        </svg>
                      </button>
                      <button class="search__button field__button" aria-label="Search">
                        <svg class="icon icon-search" aria-hidden="true" focusable="false">
                          <use href="#icon-search">
                        </svg>
                      </button>
                    </div></form></search-form><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                <svg class="icon icon-close" aria-hidden="true" focusable="false">
                  <use href="#icon-close">
                </svg>
              </button>
            </div>
          </div>
        </details>
      </details-modal><a href="/account/login" class="header__icon header__icon--account link focus-inset small-hide">
          
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 37 37" fill="none">
    <path d="M18.2101 8.22681C17.0256 8.22681 15.8677 8.57805 14.8829 9.23613C13.898 9.8942 13.1304 10.8295 12.6771 11.9239C12.2238 13.0182 12.1052 14.2224 12.3363 15.3841C12.5674 16.5459 13.1377 17.613 13.9753 18.4506C14.8129 19.2882 15.88 19.8586 17.0418 20.0896C18.2035 20.3207 19.4077 20.2021 20.502 19.7488C21.5964 19.2955 22.5317 18.5279 23.1898 17.543C23.8479 16.5582 24.1991 15.4003 24.1991 14.2158C24.1991 12.6274 23.5681 11.1041 22.445 9.98093C21.3218 8.85778 19.7985 8.22681 18.2101 8.22681ZM18.2101 17.2102C17.6179 17.2102 17.0389 17.0346 16.5465 16.7056C16.0541 16.3765 15.6703 15.9089 15.4436 15.3617C15.217 14.8145 15.1577 14.2124 15.2732 13.6316C15.3888 13.0507 15.6739 12.5171 16.0927 12.0983C16.5115 11.6796 17.0451 11.3944 17.626 11.2788C18.2068 11.1633 18.8089 11.2226 19.3561 11.4492C19.9033 11.6759 20.3709 12.0597 20.7 12.5521C21.029 13.0446 21.2046 13.6235 21.2046 14.2158C21.2046 15.0099 20.8891 15.7716 20.3276 16.3332C19.766 16.8947 19.0043 17.2102 18.2101 17.2102Z" fill="#FEF7E6"/>
    <path d="M18.2102 2.23787C14.9528 2.23787 11.7686 3.2038 9.06014 5.0135C6.35172 6.82321 4.24077 9.39541 2.99422 12.4048C1.74768 15.4143 1.42152 18.7258 2.05701 21.9206C2.69249 25.1154 4.26107 28.05 6.56439 30.3533C8.8677 32.6566 11.8023 34.2252 14.9971 34.8607C18.1919 35.4961 21.5034 35.17 24.5128 33.9234C27.5222 32.6769 30.0945 30.5659 31.9042 27.8575C33.7139 25.1491 34.6798 21.9649 34.6798 18.7075C34.6897 16.5419 34.2705 14.3958 33.4463 12.3931C32.6221 10.3905 31.4094 8.57094 29.878 7.03962C28.3467 5.50829 26.5272 4.29553 24.5245 3.47136C22.5219 2.6472 20.3758 2.22796 18.2102 2.23787ZM9.07701 28.5893C11.8831 27.0646 15.0169 26.2426 18.2102 26.1937C21.4034 26.2426 24.5372 27.0646 27.3433 28.5893C24.8631 30.8994 21.5996 32.1838 18.2102 32.1838C14.8207 32.1838 11.5572 30.8994 9.07701 28.5893ZM29.3646 26.2685C25.969 24.311 22.1292 23.2545 18.2102 23.1992C14.2911 23.2545 10.4513 24.311 7.05574 26.2685C5.53048 24.0432 4.72083 21.4053 4.73502 18.7075C4.73502 15.1337 6.15472 11.7062 8.6818 9.17913C11.2089 6.65205 14.6363 5.23235 18.2102 5.23235C21.784 5.23235 25.2115 6.65205 27.7385 9.17913C30.2656 11.7062 31.6853 15.1337 31.6853 18.7075C31.6995 21.4053 30.8899 24.0432 29.3646 26.2685Z" fill="#FEF7E6"/>
    </svg>
              <span class="visually-hidden">Log in</span>
            </a>
    <?php 
 echo do_shortcode('[custom_mini_cart]'); 
?>
    </div>
  </header>
</sticky-header>







 
