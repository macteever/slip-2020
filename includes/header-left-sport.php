
<div class="row align-items-end justify-content-between menu-section anim-300 p-relative">
    <div class="col-xl-5 col-lg-5 col-12 anim-300 d-flex align-items-center large-menu pb-20">
        <div class="d-flex justify-content-between w-100">
          <div>
          <?php
            // if ( function_exists('yoast_breadcrumb') ) {
            //   yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            // }
            ?>
          </div>
          <nav class="header-left-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
          </nav>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-12 anim-300 container-logo-menu p-relative">
      <div class="anim-300 p-relative w-100 h-100">
        <a class="anim-300 d-flex flex-column justify-content-center align-items-center" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sport.png" alt="logo slip homme paris">
        </a>
      </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-12 d-flex flex-column ml-auto justify-content-end large-menu pl-0">
      <div class="large-menu-rotate anim-500">
        <!-- SEARCH BAR -->
        <div class="search-bar col-auto ml-auto d-flex justify-content-end align-items-end pr-0 mb-15">
          <?php echo do_shortcode('[wcas-search-form]'); ?>
          <button class="btn-search d-flex btn-search h-100 mb-auto mt-auto"><i class="material-icons text-black">close</i></button>
        </div>
        <!-- END SEARCH BAR -->
        <div class="d-flex justify-content-between col-auto ml-auto <anim-300 anim-300 large-menu-nav pl-0 pr-0">
          <nav class="d-flex">
             <?php  customTheme_nav(); ?>
             <div id="menu-btn">
                <!-- <button>
                   <span></span>
                   <span></span>
                   <span></span>
                </button> -->
                <span class="ml-10 fs-15 text-black">MENU</span>
             </div>
          </nav>
          <!-- /nav -->
          <div class="col-auto d-flex align-items-end justify-content-center menu-section-add pr-0">
            <!-- <button><a href="#"><i class="material-icons text-black fs-18">favorite</i></a></button> -->
            <button class="btn-search lh-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/loupe.svg" alt="logo slip homme paris"></button>
            <?php
            if ( is_user_logged_in() ) { ?>
                <button><a href="<?php echo home_url() . '/mon-compte'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/signed.svg" alt="logo slip homme paris"></a></button>
            <?php } else { ?>
                <button><a href="<?php echo home_url() . '/mon-compte'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sign-in.svg" alt="logo slip homme paris"></a></button>
            <?php }
            ?>
            <?php if ( WC()->cart->get_cart_contents_count() == 0 ) { ?>
                <button><a href="<?php echo home_url() . '/panier'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-empty.svg" alt="logo slip homme paris"></a></button>
              <?php } else { ?>
                <button><a href="<?php echo home_url() . '/panier'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-full.svg" alt="logo slip homme paris"></a></button>
            <?php }
            ?>
          </div>
        </div>
      </div>

    </div>
</div>
