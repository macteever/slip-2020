<?php /* Template Name: Home */
   get_header(''); ?>
    <!-- VIDEO INTRO -->
   <main role="main">
    <section id="home_part1">

      <?php if ( have_rows( 'home_slider' ) ) : ?>
        <?php while ( have_rows('home_slider' ) ) : the_row(); ?>
        
          <?php if ( get_row_layout() == 'slide_image' ) : ?>
            
            <?php if ( have_rows('home_content') ) : ?>              
              <?php while( have_rows('home_content') ) : the_row(); ?>
                <?php if ( get_sub_field('link') ) : $file = get_sub_field('link'); ?>
                  <a href="<?php echo $file['url']; ?>">
                    <div class="container-fluid home-main home-bkg-img" style="background: url(<?php the_sub_field('bkg_img'); ?>);">
                      <div class="container-slip h-100">
  
                        <div class="row h-100">
                          <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 home-main-legend">
                            <div class="ubuntu fs-24 text-black text-right">
                              <?php the_sub_field('media_legend'); ?>
                            </div>
                          </div>
                          <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 home-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
                            <div>
                              <h1 class="fs-36 text-black"><?php the_sub_field('title'); ?></h1>
                              <div class="ubuntu-condensed fs-20 text-black">
                                <?php the_sub_field('content'); ?>
                              </div>
                            </div>
                            <div class="mt-15">
                              <p class="text-left fs-18 text-black"><?php the_sub_field('product_price'); ?></p>
                            </div>
                              <button class="btn-black mt-30"><?php echo $file['title']; ?></button>
                          </div>
                        </div>
  
                      </div>
                    </div>
                  </a>
                <?php endif; ?>
  
              <?php endwhile; ?>
            <?php endif; ?>
              
  
          <?php elseif( get_row_layout() == 'slide_video' ): ?>
  
            <?php if ( have_rows('home_content') ) : ?>              
              <?php while( have_rows('home_content') ) : the_row(); ?>
  
                <?php if ( get_sub_field('link') ) : $file = get_sub_field('link'); ?>
                  <a class="home-video-link" href="<?php echo $file['url']; ?>">
  
                    <div class="container-fluid home-main home-bkg-video">
                      <div class="video-container">
                        <video id="home_video" muted playsinline webkit-playsinline poster="<?php the_sub_field('poster_video'); ?>">
                          <?php
                          if ( have_rows('format_video') ) : ?>
                            <?php while( have_rows('format_video') ) : the_row(); ?>
                              <source src="<?php the_sub_field('file_video'); ?>">
                            <?php endwhile; ?>
                          <?php endif; ?>
                        </video>
                      </div>
                      <!-- home content -->
                      <div class="home-content-video w-100 h-100">
                        <div class="container-slip w-100 h-100 p-relative">
                          <div class="row h-100">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 home-main-legend">
                              <div class="ubuntu fs-24 text-black text-right">
                                <?php the_sub_field('media_legend'); ?>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 home-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
                              <div>
                                <h1 class="fs-36 text-black"><?php the_sub_field('title'); ?></h1>
                                <div class="ubuntu-condensed fs-20 text-black">
                                  <?php the_sub_field('content'); ?>
                                </div>
                              </div>
                              <div class="mt-15">
                                <p class="text-left fs-18 text-black"><?php the_sub_field('product_price'); ?></p>
                              </div>
                                <button class="btn-black mt-30"><?php echo $file['title']; ?></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end home content -->
                    </div>
                  </a>
                  <div class="container-fluid">
                    <div class="container-slip p-relative">
                      <div class="home-repeat-video anim-300">
                        <span class="material-icons text-white fs-24">replay</span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <!-- endif lien -->
  
              <?php endwhile; ?>
            <?php endif; ?>
            <!-- endif repeater home content -->
  
          <?php endif; ?>
          <!-- endif row flexible content -->
  
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- end flexible content -->
    </section>
    <section class="home-part2 mt-150 mb-100">
      <div class="container-fluid">
        <div class="container-slip">
          <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 d-flex flex-column home-forward-while-products">
              <?php if ( have_rows('boucles_produits') ) : ?>
                <?php while( have_rows('boucles_produits') ) : the_row(); ?>
              
                  <?php // set up post object
                  $post_object = get_sub_field('produit');

                  // Get id of post object
                  $post_id = $post_object->ID;
                  // Get product by id
                  $product = wc_get_product( $post_id );
                  // Get price
                  $price = $product->get_price();

                  if( $post_object ) :
                    $post = $post_object;
                    setup_postdata($post);
                  ?>
                    <div class="p-relative anim-300 mb-20" id="home-while-product">
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
                      <a href="<?php the_permalink(); ?>">
                        <img class="product-hover-img1 anim-300" src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
                        <img class="product-hover-img2 anim-300" src="<?php the_field('img_survol'); ?>" alt="slip bordeaux"/>

                        <?php
                        // get the current taxonomy term
                          $terms =  get_the_terms( $post->ID, 'product_cat' );
                          if ( $terms && ! is_wp_error( $terms ) ) {
                          // vars
                          $color = get_field('color_category', $terms[1]);
                        ?>
                        <div class="product-hover-isnew">
                          <?php
                          /* post is older than 7 days - display new */
                          if( strtotime( $post->post_date ) < strtotime('-7 days') ) {
                              echo '<span class="text-black ubuntu-condensed fs-18">Nouveau</span>';
                            }
                          ?>
                        </div>
                        <div class="d-flex justify-content-between fs-20 product-hover-banner" style="background-color: <?php echo $color; ?>;"> 
                            <div class="d-flex align-items-end">
                              <span class="text-white ubuntu mr-10 fs-16 fw-600"><?php echo $terms[1]->name; ?></span>
                              <p class="text-white fs-16 ubuntu"><?php the_title(); ?></p>
                            </div>
                            <p class="text-white"><?php echo $price; ?>€</p>
                        </div>
                        <?php 
                        }
                        ?>
                      </a>
                    </div>

                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php endif; ?>

                <?php endwhile; ?>
              <?php endif; ?>

              <div class="d-flex flex-column mt-30 home-smart-product-content">
                <?php if ( have_rows('smart_products') ) : ?>
                  <?php while( have_rows('smart_products') ) : the_row(); ?>
                  
                    <h3 class="ubuntu fs-24"><?php the_sub_field('title'); ?></h3>
                    <div class="fs-24">
                      <?php the_sub_field('content'); ?>
                    </div>
                    <div>
                      <?php if ( get_sub_field('lien') ) : $file = get_sub_field('lien'); ?>
                        <button class="btn-black w-100"><a class="text-white" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a></button>
                      <?php endif; ?>
                      
                    </div>
                    
                
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
              
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 pr-0 home-forward-product h-100 anim-300">
              <?php
              $post_object = get_field('home_forward_product');
              
              // Get id of post object
              $post_id = $post_object->ID;
              // Get product by id
              $product = wc_get_product( $post_id );
              // print_r($product);
              
              // Get price
              $price = $product->get_price();

              if( $post_object ): 
                // override $post
                $post = $post_object;
                setup_postdata( $post ); 

                ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
                  <div class="p-relative">
                    <a href="<?php the_permalink(); ?>">
                      <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
                      <div class="d-flex flex-column home-forward-product-content justify-content-between h-100 pl-15 pb-10">
                        <div>
                          <h3 class="ubuntu fs-36 text-black mb-40 mt-40"><?php the_title(); ?></h3>
                          <div class="ubuntu-condensed fs-24 text-black"><?php the_content(); ?></div>
                        </div>
                        <span class="fs-20 fw-300 text-black ubuntu-condensed">à partir de : <?php echo $price; ?>€</span>
                      </div>
                    </a>
                  </div>
                  <button class="btn-black w-50 pl-15 anim-300"><a class="text-white fs-20" href="#">Tous nos slips</a></button>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="home-part3">
      <div class="container-fluid">
        <div class="row">
          <div class="ml-auto home-engagements pb-40">
            <div>
              <?php if ( have_rows('home_engagement') ) : ?>
                <?php while( have_rows('home_engagement') ) : the_row(); ?>
  
                  <?php if ( get_sub_field('lien') ) : $file = get_sub_field('lien'); ?>
                    <a href="<?php echo $file['url']; ?>">
                      <div class="d-flex flex-wrap align-items-center <?php the_sub_field('classe'); ?> mb-40">
                        <?php if ( get_sub_field('icon') ) : $image = get_sub_field('icon'); ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>
                        <div class="text-black fs-18 ubuntu-condensed ml-50">
                          <?php the_sub_field('content'); ?>
                        </div>
                      </div>
                    </a>
                  <?php endif; ?>
                
                <?php endwhile; ?>
              <?php endif; ?>
              <div class="home-scroll-h uppercase fs-60 fw-100">
                <?php the_field('home_text_scroll'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if ( have_rows( 'media_recommandation' ) ) : ?>
        <?php while ( have_rows('media_recommandation' ) ) : the_row(); ?>
        
          <?php if ( get_row_layout() == 'slide_image' ) : ?>
            
            <?php if ( have_rows('home_content') ) : ?>              
              <?php while( have_rows('home_content') ) : the_row(); ?>
                <?php if ( get_sub_field('link') ) : $file = get_sub_field('link'); ?>
                  <a href="<?php echo $file['url']; ?>">
                    <div class="container-fluid home-main home-bkg-img" style="background: url(<?php the_sub_field('bkg_img'); ?>);">
                      <div class="container-slip h-100">
  
                        <div class="row h-100">
                          <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 home-main-legend">
                            <div class="ubuntu fs-24 text-black text-right">
                              <?php the_sub_field('media_legend'); ?>
                            </div>
                          </div>
                          <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 home-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
                            <div>
                              <h1 class="fs-36 text-black"><?php the_sub_field('title'); ?></h1>
                              <div class="ubuntu-condensed fs-20 text-black">
                                <?php the_sub_field('content'); ?>
                              </div>
                            </div>
                            <div class="mt-15">
                              <p class="text-left fs-18 text-black"><?php the_sub_field('product_price'); ?></p>
                            </div>
                              <button class="btn-black mt-30"><?php echo $file['title']; ?></button>
                          </div>
                        </div>
  
                      </div>
                    </div>
                  </a>
                <?php endif; ?>
  
              <?php endwhile; ?>
            <?php endif; ?>
              
  
          <?php elseif( get_row_layout() == 'slide_video' ): ?>
  
            <?php if ( have_rows('home_content') ) : ?>              
              <?php while( have_rows('home_content') ) : the_row(); ?>
  
                <?php if ( get_sub_field('link') ) : $file = get_sub_field('link'); ?>
                  <a class="home-video-link" href="<?php echo $file['url']; ?>">
  
                    <div class="container-fluid home-main home-recommandation-bkg-video pl-0 pr-0">
                      <div class="video-container">
                        <video class="home-video-recommandation" muted playsinline webkit-playsinline poster="<?php the_sub_field('poster_video'); ?>">
                          <?php
                          if ( have_rows('format_video') ) : ?>
                            <?php while( have_rows('format_video') ) : the_row(); ?>
                              <source src="<?php the_sub_field('file_video'); ?>">
                            <?php endwhile; ?>
                          <?php endif; ?>
                        </video>
                      </div>
                      <!-- home content -->
                      <div class="home-content-video w-100 h-100">
                        <div class="container-slip w-100 h-100 p-relative">
                          <div class="row h-100">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 home-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
                              <div>
                                <h1 class="fs-36 text-black"><?php the_sub_field('title'); ?></h1>
                                <div class="ubuntu-condensed fs-20 text-black">
                                  <?php the_sub_field('content'); ?>
                                </div>
                              </div>
                              <div class="mt-15">
                                <p class="text-left fs-18 text-black"><?php the_sub_field('product_price'); ?></p>
                              </div>
                                <button class="btn-black"><?php echo $file['title']; ?></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end home content -->
                    </div>
                  </a>
                  <div class="container-fluid">
                    <div class="container-slip p-relative">
                      <div class="home-repeat-video2 anim-300 text-right">
                        <span class="material-icons text-white fs-24">replay</span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <!-- endif lien -->
  
              <?php endwhile; ?>
            <?php endif; ?>
            <!-- endif repeater home content -->
  
          <?php endif; ?>
          <!-- endif row flexible content -->
  
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- end flexible content -->
      <div class="container-fluid">
         <div class="container-slip">
           <div class="row mt-100 mb-30">
             <div class="col-xl-6 col-lg-6 col-12 mr-auto">
               <div class="d-flex">
                 <h2 class="fs-36 text-left ml-auto home-before-subtitle">Nous vous<br> recommandons :</h2>         
               </div>
             </div>
           </div>
         </div>                   
      </div>
      <div class="container-fluid">
        <div class="row home-slider-products mb-100">
          <?php if ( have_rows('products_recommandation') ) : ?>
            <?php while( have_rows('products_recommandation') ) : the_row(); ?>
          
              <?php // SET UP POST OBJECT FIELD
                $post_object = get_sub_field('produit');
                // Get id of post object
                $post_id = $post_object->ID;
                // Get product by id
                $product = wc_get_product( $post_id );
                // Get price
                $price = $product->get_price();
                // Get product tag by id
                $product_tag = get_the_terms( $post_id, 'product_tag' );


                if( $post_object ) :
                  $post = $post_object;
                  setup_postdata($post);
              ?>
              <div class="d-flex flex-column">
                <div class="home-slider-product p-relative anim-300">
                  <a href="<?php the_permalink(); ?>">
                    <div class="img-product-1stplan anim-300">
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
                      <img class="anim-300" src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
                     
                      <!--  -->
                      <div class="hover-1st-img p-absolute">
                        <div class="product-hover-isnew">
                          <?php
                          /* post is older than 7 days - display new */
                          if( strtotime( $post->post_date ) < strtotime('-7 days') ) {
                              echo '<span class="text-black ubuntu-condensed fs-18">Nouveau</span>';
                            }
                          ?>
                        </div>
                        <div class="d-flex justify-content-between hover-1st-img-infos">
                            <p class="text-black fs-20 ubuntu mb-0"><?php the_title(); ?></p>
                            <p class="text-black fs-20 mb-0"><?php echo $price; ?>€</p>
                        </div>
                      </div>
                      <!-- -->
                    </div>
                    <div class="img-product-2ndplan d-block p-relative" style="background: url(<?php the_field('img_survol'); ?>);">
                      <?php
                      // get the current taxonomy term
                        $terms =  get_the_terms( $post->ID, 'product_cat' );
                        if ( $terms && ! is_wp_error( $terms ) ) {
                        // vars
                        $color = get_field('color_category', $terms[1]);
                      ?>
                      <div class="product-hover-isnew">
                        <?php
                        /* post is older than 7 days - display new */
                        if( strtotime( $post->post_date ) < strtotime('-7 days') ) {
                            echo '<span class="text-black ubuntu-condensed fs-18">Nouveau</span>';
                          }
                        ?>
                      </div>
                      <div class="d-flex justify-content-between fs-20 product-hover-banner" style="background-color: <?php echo $color; ?>;"> 
                          <div class="d-flex align-items-end">
                            <span class="text-white ubuntu mr-10 fs-16 fw-600"><?php echo $terms[1]->name; ?></span>
                            <p class="text-white fs-16 ubuntu"><?php the_title(); ?></p>
                          </div>
                          <p class="text-white"><?php echo $price; ?>€</p>
                      </div>
                      <?php 
                      }
                      ?>
                    </div>
                  </a>
                </div>
                <div class="ubuntu-condensed fs-15 uppercase mb-20">
                  REF: <?php echo $product_tag[0]->name; ?>
                </div>
              </div>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              <?php endif; ?>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
   </main>


<?php get_footer(); ?>