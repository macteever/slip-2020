<?php get_header(); ?>
<div class="page-loader">
   <?php //  include get_template_directory().'/includes/logo-baseline.php'; ?>
</div>
<div class="splash-logo">
   <div class="w-100 h-100 p-absolute splash-logo-bkg"></div>
   <?php include get_template_directory().'/includes/logo-baseline.php'; ?>
</div> 
<div class="video-container-parent">
   <?php $term = get_queried_object(); ?>
   <div class="video-top-content">
         <div class="d-flex video-top-container">
            <div style="color: <?php the_field('title_color', $term); ?>" class="fs-24 fw-600 slogan-video">
               <?php the_field('title', $term); ?>
            </div>
         </div>
   </div>
   <?php if ( have_rows( 'media_intro', $term ) ) : ?>
      <?php while ( have_rows('media_intro', $term ) ) : the_row(); ?>

         <?php if ( get_row_layout() == 'video' ) : ?>
            <div class="video-container">
               <video autoplay="autoplay" muted playsinline webkit-playsinline>
                  <?php
                  $video_webm = get_sub_field('video_webm', $term);
                  $video_mp4 = get_sub_field('video_mp4', $term);
                  $video_ogv = get_sub_field('video_ogv', $term);
                  ?> 
                  <source src="<?php echo site_url() . $video_mp4; ?>">
                  <source src="<?php echo site_url() . $video_webm; ?>">
                  <source src="<?php echo site_url() . $video_ogv; ?>">
               </video>
            </div>
         <?php elseif ( get_row_layout() == 'image' ) : ?>
            <div class="archive-img-container" >
               <div class="archive-top-img" style="background-image: url(<?php the_sub_field('img'); ?>); background-size: cover;">
               </div>
            </div>
         <?php endif; ?>

      <?php endwhile; ?>
   <?php endif; ?>
</div>
<main role="main" class="archive-tax-container">
   <?php $term = get_queried_object(); ?>
   <?php if ( have_rows('repeater_archive', $term) ) : ?>
      <?php while( have_rows('repeater_archive', $term) ) : the_row(); ?>
         <section class="container-fluid archive-tax-main" style="background-image: url(<?php the_sub_field('bkg_img', $term); ?> ); background-size: cover;">
            <div class="container h-100">
               <div class="row archive-repeater-row">
                  <div class="col-xl-6 col-lg-6 col-12 p-0 d-flex flex-column archive-repeater-content">
                        <div style="background-color: <?php the_sub_field('bkg_color_content', $term); ?>">
                        <?php the_sub_field('content', $term); ?>
                        </div>           
                  </div>
               </div>
            </div>
         </section>
      <?php endwhile; ?>
   <?php endif; ?>
   <section id="collection" class="wrapper-scroll p-relative">
   
      <div class="wrapper-scroll-section p-relative h-100">
         <div class="row p-absolute wrapper-scroll-title w-100">
            <div class="col-xl-6 col-lg-6 col-12 archive-title-after-parent">
               <?php  
                  $term = get_queried_object();
               ?>
               <?php
               if (ICL_LANGUAGE_CODE == "fr") { ?>
                  <h2 class="fs-16 fw-300 uppercase archive-title-after text-right">
                     Collection <?php echo $term->name; ?>
                  </h2>
               <?php
               } elseif (ICL_LANGUAGE_CODE == "en") { ?>
                  <h2 class="fs-16 fw-300 uppercase archive-title-after text-right">
                     <?php echo $term->name; ?> collection
                  </h2>
               <?php 
               }
               ?>
               
            </div>
         </div>
         <?php 
            $term = get_queried_object();
            $term_id = $term->term_id;
            $taxonomy_name = $term->taxonomy;
            
            $termchildren = get_term_children( $term_id, $taxonomy_name );
            
            echo '<ul class="">';
            foreach ( $termchildren as $child ) {
               $term = get_term_by( 'id', $child, $taxonomy_name );
               $thumbnailUrl = get_field('thumbnail_subcat', $term);
               $cubeColor = get_field('cube_color', $term);

               echo '<a class="wrapper-scroll-bloc p-relative" href="' . get_term_link( $term, $taxonomy_name ) . '">';
               echo '<li class="col-xl-auto col-lg-6 col-12 d-flex align-items-center"><div class="d-flex flex-column scroll-section-content anim-300">';
               echo '<div style="background-color: ' . $cubeColor . ';"><h3 class="fs-28 mb-40">' . $term->name . ' </h3>';
               echo '<p class="mb-40">' . $term->description . ' </p></div>';
               echo '<div class="scroll-section-content-link"><button class="btn-black">' . __('Explorer','slip-2020') . '</button></div></div>';
               echo '<img class="scroll-section-img anim-300" src="' . $thumbnailUrl . '" >';
               echo '</li>';
               echo '<div class="targetscroll-H"></div>';
               echo '</a>';
            }
            echo '</ul>';
         ?>
         <div class="collection-arrow">
            <?php // include get_template_directory().'/includes/arrow-scroll.php'; ?>
         </div>
      </div>
   </section>
</main>
              

    
<?php get_footer(); ?>