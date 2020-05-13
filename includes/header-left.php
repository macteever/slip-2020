<div class="row justify-content-end align-items-center top-header-wpml">
  <div class="col-12 d-flex justify-content-end fw-400 fs-15 anim-300">
    <?php // do_action( 'wpml_footer_language_selector' ); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
  </div>
</div>
<div class="row align-items-center justify-content-between menu-section anim-300 p-relative">
    <div class="col-auto anim-300 container-logo-menu p-relative bkg-color-logo">
      <div class="anim-300 p-relative w-100 h-100">
        <a class="anim-300 d-flex flex-column justify-content-center align-items-center" href="<?php echo home_url(); ?>">
            <?php include get_template_directory().'/includes/logo-baseline-noanim.php'; ?>
        </a>
      </div>
    </div>
    <div class="col-auto d-flex flex-column ml-auto justify-content-center large-menu p-relative">
      
      <div class="large-menu-rotate anim-500">
        <!-- SEARCH BAR -->
        <div class="search-bar col-auto ml-auto d-flex justify-content-end align-items-end pr-0">
          <?php echo get_search_form(); ?>
          <button class="btn-search"><i class="material-icons text-white">close</i></button>
        </div>
        <!-- END SEARCH BAR -->
        <div class="d-flex col-auto ml-auto <anim-300 anim-300 large-menu-nav pr-0">
          <nav class="d-flex">
             <?php  customTheme_nav(); ?>
             <div id="menu-btn">
                <!-- <button>
                   <span></span>
                   <span></span>
                   <span></span>
                </button> -->
                <span class="ml-10 fs-15 text-white">MENU</span>
             </div>
          </nav>
          <!-- /nav -->
          <div class="col-auto d-flex align-items-center justify-content-center menu-section-add pr-0">
            <!-- <button><a href="#"><i class="material-icons text-white fs-18">favorite</i></a></button> -->
            <button class="btn-search lh-1"><i class="material-icons text-white fs-20">search</i></button>
          </div>
        </div>
      </div>

    </div>
</div>
