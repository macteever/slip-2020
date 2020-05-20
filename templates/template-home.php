<?php /* Template Name: Home */
   get_header('sport'); ?>
    <!-- VIDEO INTRO -->
   <main role="main">
    <?php if ( have_rows( 'home_repeater' ) ) : ?>
      <?php while ( have_rows('home_repeater' ) ) : the_row(); ?>
      
      <?php if ( get_row_layout() == 'repeater_a' ) : ?>
            <section class="container-fluid home-main">
              <div class="container h-100">
              
              <?php if ( have_rows('home_part1') ) : ?>              
                <?php while( have_rows('home_part1') ) : the_row(); ?>

                  <div class="row home-repeaterA align-items-center mt-80">
                    <div class="col-xl-6 col-lg-6 col-12 p-relative d-flex flex-column home-repeater-img">
                      <div>
                        <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>                   
                        <?php endif; ?>
                      </div>
                      <div class="text-right home-img-text">
                        <?php the_sub_field('text_ss_img'); ?>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 p-relative h-100 home-repeater-content-parent" >
                      <?php if ( get_sub_field('title') ) : ?>
                        <h2 class="fs-16 fw-300 uppercase home-repeater-title-after">
                          <?php echo get_sub_field('title'); ?>
                        </h2>
                      <?php endif; ?>
                      <div class="home-repeater-content" style="background-color: <?php the_sub_field('bkg_color_content'); ?>">
                        <?php the_sub_field('content'); ?>
                        <?php 
                        if( have_rows('chiffres_cles') ):
                          while ( have_rows('chiffres_cles') ) : the_row();
                            
                            if( get_row_layout() == 'manuel' ): ?>
                              <div class="list-chiffre-manuelle mt-80">
                                <?php 
                                  if ( have_rows('liste_chiffres_manuelle') ) : ?>
                                  <ul class="home-liste-chiffres">
                                    <?php while( have_rows('liste_chiffres_manuelle') ) : the_row(); ?>
                                      
                                      <li class="d-flex flex-column">
                                          <h3 class="text-grey fs-42"><?php the_sub_field('nombre'); ?></h3>
                                          <span class="fw-300 text-grey fs-24"><?php the_sub_field('texte'); ?></span>
                                      </li>
                                  
                                    <?php endwhile; ?>
                                  </ul>
                                  <?php endif; 
                                ?>
                              </div>
                            <?php 

                            elseif( get_row_layout() == 'automatique' ): ?>
                              <?php
                                // test count products
                                $presentoirs_posts = wp_count_posts( 'presentoirs' )->publish;
                                $mannequins_posts = wp_count_posts( 'mannequins' )->publish;
                                $nb_couleurs = get_sub_field('nb_couleurs'); 
                                $nb_collections = get_sub_field('nb_collections');
                                $produits = $mannequins_posts + $presentoirs_posts;
                                $combinaisons = ($nb_collections * $produits * 6 + $nb_couleurs);
                              ?>
                              <div class="list-chiffre-manuelle mt-80">
                                <ul class="home-liste-chiffres">
                                  <li class="d-flex flex-column">
                                      <h3 class="text-grey fs-42"><?php the_sub_field('nb_pays'); ?></h3>
                                      <span class="fw-300 text-grey fs-24"><?php the_sub_field('text_pays'); ?></span>
                                  </li>
                                  <li class="d-flex flex-column">
                                      <h3 class="text-grey fs-42"><?php the_sub_field('nb_collections'); ?></h3>
                                      <span class="fw-300 text-grey fs-24"><?php the_sub_field('text_collections'); ?></span>
                                  </li>
                                  <li class="d-flex flex-column">
                                      <h3 class="text-grey fs-42"><?php echo $produits; ?></h3>
                                      <span class="fw-300 text-grey fs-24"><?php the_sub_field('text_presentoirs'); ?></span>
                                  </li>
                                  <li class="d-flex flex-column">
                                      <h3 class="text-grey fs-42"><?php echo $nb_couleurs; ?></h3>
                                      <span class="fw-300 text-grey fs-24"><?php the_sub_field('text_couleurs'); ?></span>
                                  </li>
                                  <li class="d-flex flex-column">
                                      <h3 class="text-grey fs-42"><?php echo $combinaisons; ?></h3>
                                      <span class="fw-300 text-grey fs-24"><?php the_sub_field('text_combinaisons'); ?></span>
                                  </li>
                                </ul>
                              </div>
                            <?php endif;
                          
                          endwhile;
                          else :
                        endif;
                        ?>
                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
              <?php endif; ?>
              
              </div>
            </section>

            <?php elseif( get_row_layout() == 'repeater_b' ): ?>
            <section class="container-fluid home-main">
              <div class="container h-100">

              <?php if ( have_rows('home_part_bis') ) : ?>              
                <?php while( have_rows('home_part_bis') ) : the_row(); ?>
                
                  <div id="scrollTo" class="row home-repeaterB mt-80 align-items-center">
                    <div class="col-xl-6 col-lg-6 col-12 p-relative home-repeater-content-parent text-right h-100">
                      <?php if ( get_sub_field('title') ) : ?>
                        <h2 class="fs-16 fw-300 uppercase home-repeater-title-after">
                          <?php echo get_sub_field('title'); ?>
                        </h2>
                      <?php endif; ?>
                      <div class="home-repeater-content" style="background-color: <?php the_sub_field('bkg_color_content'); ?>">
                        <?php the_sub_field('content'); ?>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 p-relative d-flex flex-column home-repeater-img">
                      <div>
                        <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>                   
                        <?php endif; ?>
                      </div>
                      <div class=" home-img-text">
                        <?php the_sub_field('text_ss_img'); ?>
                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
              <?php endif; ?>
              </div>
            </section>
            <?php elseif( get_row_layout() == 'repeater_sprite' ): ?>
            <section class="container-fluid home-main">
              <div class="container h-100">
                <div id="home-sprite" class="row align-items-center mt-80">
                  <div class="d-flex flex-wrap w-100">
                    <?php if ( get_sub_field('subtitle') ) : ?>
                      <div class="col-6 ml-auto pl-0">
                        <h2 class="fs-16 fw-300 mb-40 uppercase pl-0 home-repeater-title-after">
                          <?php echo get_sub_field('subtitle'); ?>
                        </h2>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="d-flex flex-wrap w-100">
                    <div class="col-6 mr-auto text-right pr-0">
                      <h3 class="fs-32 fw-600 text-right">
                        <?php the_sub_field('title_part_animation'); ?>
                      </h3>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <video id="video-scroll">
                        <?php
                        $home_video_mp4 = get_sub_field('home_video_mp4');
                        $home_video_webm = get_sub_field('home_video_webm');
                        $home_video_ogv = get_sub_field('home_video_ogv');
                        ?> 
                        <source src="<?php echo home_url() . $home_video_webm; ?>">
                        <source src="<?php echo home_url() . $home_video_mp4; ?>">
                        <source src="<?php echo home_url() . $home_video_ogv; ?>">
                    </video>
                    <div id="video-length"></div>
                  </div>
                </div>
              </div>
            </section>
            <?php elseif( get_row_layout() == 'repeater_img' ): ?>  
            <section class="container-fluid home-main">
              <div class="container h-100">
                <div class="row align-items-center">
                  <div class="d-flex flex-wrap w-100">
                    <?php if ( get_sub_field('subtitle') ) : ?>
                      <div class="col-6 ml-auto pl-0">
                        <h2 class="fs-16 fw-300 mb-40 uppercase pl-0 home-repeater-title-after">
                          <?php echo get_sub_field('subtitle'); ?>
                        </h2>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="d-flex flex-wrap w-100">
                    <div class="col-6 mr-auto text-right pr-0">
                      <h3 class="fs-32 fw-600 text-right">
                        <?php the_sub_field('title_part_animation'); ?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div id="home-img-sprite" class="row p-relative" style="background-image: url(<?php the_sub_field('img'); ?>);">
                  <?php if ( get_sub_field('lien_img') ) : $link = get_sub_field('lien_img'); ?>
                    <a class="home-sprite-link-img" href="<?php echo $link['url']; ?>"></a>
                  <?php endif; ?>
                  <div class="container">
                    <div class="home-img-sprite-link">
                        <span class="btn-white anim-300"><?php _e('Découvrir','slip-2020'); ?></span>
                    </div>
                  </div>
              </div>
            </section>

      <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>
   </main>
<?php get_footer(); ?>