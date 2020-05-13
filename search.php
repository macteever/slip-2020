<?php get_header(); ?>

	<main role="main" class="tmplt-search">
		<!-- section -->
      <section class="container-fluid banner-search-archive">
         <div class="container h-100">
            <div class="row search-top-title">
               <div class="col-xl-6 col-lg-6 col-12">
                  <h3 class="uppercase fs-16 fw-300 text-right archive-subcat-title-after mb-40">
                     <?php _e('Recherche','slip-2020'); ?>
                  </h3>
               </div>
            </div>
            <div class="row h-100 align-items-end">
               <div class="col-xl-6 col-lg-6 col-md-8 col-12 search-top-cube" style="background-color: <?php the_field('cube_color', 'option'); ?>;">
                  <h1 class="text-white fs-32 fw-400 text-right mb-15"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); ?><span class="fw-300"><?php echo get_search_query(); ?></span></h1>
                  <div class="fs-18 text-right">
                     <?php _e('Description du contenu','slip-2020'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
		<section class="container-fluid">
         <div class="container">
            <div class="row searching-row">
               <?php 
               $compt = 0;
               if (have_posts()) : while (have_posts()) : the_post(); ?>

                  <?php if (($compt < 4)) { ?>
                     <div id="<?php the_ID(); ?> one" class="col-xl-4 col-lg-4 col-md-6 col-12 collection-product-col"> 
                        <?php $single_permalink = get_permalink(); ?>                  
                        <a href="<?php echo $single_permalink . '#slip-2020'; ?>">   
                           <article <?php post_class('post d-flex flex-column h-100'); ?>>
                              <?php echo get_the_post_thumbnail(); ?>
                              <div class="d-flex flex-column collection-product-content h-100">   
                                 <h3 class="fs-20 fw-600"><?php the_title(); ?></h3>
                                 <div>
                                    <h4 class="text-grey fs-20 uppercase mb-0">
                                       <?php
                                       $post_tags = get_the_tags();
                                       if ( $post_tags ) {
                                          echo $post_tags[0]->name; 
                                       }
                                       ?>
                                    </h4>
                                    <?php
                                    $terms = get_the_terms( get_the_ID(), 'taxonomy-presentoirs' );
                                    foreach ( $terms as $term ){
                                       if ( $term->parent == 0 ) { ?>
                                       <div class="d-flex align-items-end mt-10">
                                          <img class="logo-collection" src="<?php the_field('logo_collection', $term); ?>" alt="logo collection saint-honoré paris"> 
                                          <h4 class="text-grey ml-10 mb-0 fs-15 d-flex">
                                          <?php
                                          if (ICL_LANGUAGE_CODE == "fr") { ?>
                                             <?php echo 'Collection ' . $term->name; ?>
                                          <?php
                                          } elseif (ICL_LANGUAGE_CODE == "en") { ?>
                                             <?php echo $term->name . ' ' . ' collection'; ?>
                                          <?php 
                                          }
                                          ?>
                                          </h4>
                                       </div>
                                       <?php
                                       }
                                    }
                                    ?>
                                 </div>  
                                 <div class="text-grey fs-15 mt-20 lh-1-4 collection-product-description d-flex flex-column h-100 justify-content-end">
                                    <?php the_content(); ?>
                                 </div>
                              </div>
                           </article>
                        </a>
                     </div>
                  <?php } elseif (($compt > 3 && $compt < 5)) { ?>
                     <div class="col-xl-4 col-lg-4 col-md-6 col-12 col-search-infos">
                        <article class="d-flex flex-column justify-content-between">
                           <h3 class="text-white fs-32"><?php _e('Vous ne trouvez pas ? Ou n’avez pas le temps ?','slip-2020'); ?></h3>
                           <div>
                              <p class="fs-17 text-white"><?php _e('Nos spécialistes répondent à vos questions et sont là pour vous aider.','slip-2020'); ?></p>
                              <div class="mt-40">
                              <?php
                              if (ICL_LANGUAGE_CODE == "fr") { ?>
                                 <a class="btn-white" href="<?php echo home_url() . '/contact'; ?>"><?php _e('C\'est parti','slip-2020'); ?> !</a>
                              <?php
                              } elseif (ICL_LANGUAGE_CODE == "en") { ?>
                                 <a class="btn-white" href="<?php echo site_url() . '/en/contact'; ?>"><?php _e('Let\'s go','slip-2020'); ?> !</a>
                              <?php 
                              }
                              ?>
                              </div>
                           </div>
                        </article>
                     </div>
                  <?php } elseif (($compt > 4 )) { ?>
                     <div id="<?php the_ID(); ?> one"  class="col-xl-4 col-lg-4 col-md-6 col-12 collection-product-col">                   
                        <?php $single_permalink = get_permalink(); ?>
                        <a href="<?php echo $single_permalink . '#slip-2020'; ?>">
                           <article <?php post_class('post d-flex flex-column h-100'); ?>>
                              <?php echo get_the_post_thumbnail(); ?>
                              <div class="d-flex flex-column collection-product-content h-100">   
                                 <h3 class="fs-20 fw-600"><?php the_title(); ?></h3>
                                 <div>
                                    <h4 class="text-grey fs-20 uppercase mb-0">
                                       <?php
                                       $post_tags = get_the_tags();
                                       if ( $post_tags ) {
                                          echo $post_tags[0]->name; 
                                       }
                                       ?>
                                    </h4>
                                    <?php
                                    $terms = get_the_terms( get_the_ID(), 'taxonomy-presentoirs' );
                                    foreach ( $terms as $term ){
                                       if ( $term->parent == 0 ) { ?>
                                       <div class="d-flex align-items-end mt-10">
                                          <img class="logo-collection" src="<?php the_field('logo_collection', $term); ?>" alt="logo collection saint-honoré paris"> 
                                          <h4 class="text-grey ml-10 mb-0 fs-15 d-flex">
                                          <?php
                                          if (ICL_LANGUAGE_CODE == "fr") { ?>
                                             <?php echo 'Collection ' . $term->name; ?>
                                          <?php
                                          } elseif (ICL_LANGUAGE_CODE == "en") { ?>
                                             <?php echo $term->name . ' ' . ' collection'; ?>
                                          <?php 
                                          }
                                          ?>
                                          </h4>
                                       </div>
                                       <?php
                                       }
                                    }
                                    ?>
                                 </div>  
                                 <div class="text-grey fs-15 mt-20 lh-1-4 collection-product-description d-flex flex-column h-100 justify-content-end">
                                    <?php the_content(); ?>
                                 </div>
                              </div>
                           </article>
                        </a>
                     </div>
                  <?php } ?>
                  <?php $compt++; ?>
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
            <div class="load-more-manual">
               <nav id="page-nav" role="navigation"><?php next_posts_link( __( '<span class="more btn-green">Load more posts</span>', 'wpc' ) ); ?></nav>
            </div>
         </div>
      </section>
		<!-- /section -->
	</main>
   <div id="modal-container-product">
      <div class="modal-background container-fluid">
         <div class="modal container p-relative">
            <button class="close-modal btn-black fs-15 anim-300"><?php _e('Fermer','slip-2020'); ?></button>
            <div class="modal-child row p-relative">
               
            </div>
            <!-- <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
               <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
            </svg> -->
         </div>
      </div>
   </div>

<?php //  get_sidebar(); ?>

<?php get_footer(); ?>
