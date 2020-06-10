<?php /* Template Name: La marque */
   get_header(); ?>
   <main role="main">
      <section id="about_part1" class="mb-100">

         <?php if ( have_rows( 'about_top_page' ) ) : ?>
         <?php while ( have_rows('about_top_page' ) ) : the_row(); ?>
         
            <?php if ( get_row_layout() == 'slide_image' ) : ?>
               
               <?php if ( have_rows('top_page_content') ) : ?>              
               <?php while( have_rows('top_page_content') ) : the_row(); ?>

                     <div class="container-fluid about-main about-bkg-img" style="background: url(<?php the_sub_field('bkg_img'); ?>);">
                        <div class="container-slip h-100">

                           <div class="row h-100">
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 about-main-legend">
                              <div class="ubuntu fs-24 text-black text-right">
                                 <?php the_sub_field('media_legend'); ?>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 about-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
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

               <?php endwhile; ?>
               <?php endif; ?>
               

            <?php elseif( get_row_layout() == 'slide_video' ): ?>

               <?php if ( have_rows('top_page_content') ) : ?>              
               <?php while( have_rows('top_page_content') ) : the_row(); ?>

                  <div class="container-fluid about-main about-bkg-video">
                     <div class="video-container">
                        <video id="about_video" muted playsinline webkit-playsinline poster="<?php the_sub_field('poster_video'); ?>">
                        <?php
                        if ( have_rows('format_video') ) : ?>
                           <?php while( have_rows('format_video') ) : the_row(); ?>
                              <source src="<?php the_sub_field('file_video'); ?>">
                           <?php endwhile; ?>
                        <?php endif; ?>
                        </video>
                     </div>
                     <!-- about content -->
                     <div class="about-content-video w-100 h-100">
                        <div class="container-slip w-100 h-100 p-relative">
                        <div class="row h-100">
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 about-main-legend">
                              <div class="ubuntu fs-24 text-black text-right">
                              <?php the_sub_field('media_legend'); ?>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 about-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
                              <div>
                                 <h1 class="fs-36 text-black"><?php the_sub_field('title'); ?></h1>
                                 <div class="ubuntu-condensed fs-20 text-black mb-80">
                                    <?php the_sub_field('content'); ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                     </div>
                     <!-- end about content -->
                  </div>

                  <div class="container-fluid">
                  <div class="container-slip p-relative">
                     <div class="about-repeat-video anim-300">
                        <span class="material-icons text-white fs-24">replay</span>
                     </div>
                  </div>
                  </div>
                  <!-- endif lien -->

               <?php endwhile; ?>
               <?php endif; ?>
               <!-- endif repeater about content -->

            <?php endif; ?>
            <!-- endif row flexible content -->

         <?php endwhile; ?>
         <?php endif; ?>
         <!-- end flexible content -->
      </section>
      <section id="about_part2">
         <div class="container-fluid">
            <div class="container-slip">
               <?php if ( have_rows( 'about_flexible_content' ) ) : ?>
                  <?php while ( have_rows('about_flexible_content' ) ) : the_row(); ?>

                     <?php if ( get_row_layout() == 'about_content_left' ) : ?>

                        <?php if ( have_rows('about_content') ) : ?>
                           <?php while( have_rows('about_content') ) : the_row(); ?>
                        
                              <div class="row about-content-row mb-150">
                                 <div class="col-xl-6 col-lg-6 col-12 p-relative">
                                    <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                                    
                                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                    
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-xl-6 col-lg-6 col-12 d-flex flex-column justify-content-between pt-40">
                                    <div>
                                       <h3 class="fs-36 mb-30"><?php the_sub_field('subtitle'); ?></h3>
                                       <div class="fs-20 lh-1-4">
                                          <?php the_sub_field('content'); ?>
                                       </div>
                                    </div>
                                    <div>
                                       <?php if ( get_sub_field('link') ) : $file = get_sub_field('link'); ?>
                                          <a class="btn-black" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mb-100 about-citation">
                                 <div class="col-12 text-center fs-36 fw-400 lh-1-4 ubuntu">
                                    <?php the_field('about_citation'); ?>
                                 </div>
                              </div>
                        
                           <?php endwhile; ?>
                        
                        <?php endif; ?>

                     <?php elseif( get_row_layout() == 'about_content_right' ): ?>  

                        <?php if ( have_rows('about_content') ) : ?>
                           <?php while( have_rows('about_content') ) : the_row(); ?>
                        
                              <div class="row about-content-row mb-150">
                                 <div class="col-xl-6 col-lg-6 col-12 d-flex flex-column justify-content-between pt-40">
                                    <div>
                                       <h3 class="fs-36 mb-30"><?php the_sub_field('subtitle'); ?></h3>
                                       <div class="fs-20 lh-1-4">
                                          <?php the_sub_field('content'); ?>
                                       </div>
                                    </div>
                                    <div>
                                       <?php if ( get_sub_field('link') ) : $file = get_sub_field('link'); ?>
                                          <a class="btn-black" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-6 col-12 p-relative">
                                    <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                                    
                                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                    
                                    <?php endif; ?>
                                 </div>
                              </div>
                              <div class="row mb-100 about-citation">
                                 <div class="col-12 text-center fs-36 fw-400 lh-1-4 ubuntu">
                                    <?php the_field('about_citation'); ?>
                                 </div>
                              </div>
                        
                           <?php endwhile; ?>
                        
                        <?php endif; ?>

                     <?php endif; ?>
                  
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>
      </section>
      <section id="about_part3" class="mb-150 o-hidden">
         <?php if ( have_rows( 'about_bottom_page' ) ) : ?>
         <?php while ( have_rows('about_bottom_page' ) ) : the_row(); ?>
         
            <?php if ( get_row_layout() == 'slide_image' ) : ?>
               
               <?php if ( have_rows('bottom_page_content') ) : ?>              
               <?php while( have_rows('bottom_page_content') ) : the_row(); ?>
                  <?php if ( get_sub_field('link') ) : $file = get_sub_field('link'); ?>
                     <a href="<?php echo $file['url']; ?>">
                     <div class="container-fluid about-main about-bkg-img" style="background: url(<?php the_sub_field('bkg_img'); ?>);">
                        <div class="container-slip h-100">
   
                           <div class="row h-100">
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 about-main-legend">
                              <div class="ubuntu fs-24 text-black text-right">
                                 <?php the_sub_field('media_legend'); ?>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 about-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
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
   
               <?php if ( have_rows('bottom_page_content') ) : ?>              
               <?php while( have_rows('bottom_page_content') ) : the_row(); ?>
   
                  <?php if ( get_sub_field('link') ) : $file = get_sub_field('link'); ?>
                     <a class="about-video-link" href="<?php echo $file['url']; ?>">
   
                     <div class="container-fluid about-main about-bkg-video pl-0 pr-0">
                        <div class="video-container">
                           <video class="about-video-recommandation" muted playsinline webkit-playsinline poster="<?php the_sub_field('poster_video'); ?>">
                           <?php
                           if ( have_rows('format_video') ) : ?>
                              <?php while( have_rows('format_video') ) : the_row(); ?>
                                 <source src="<?php the_sub_field('file_video'); ?>">
                              <?php endwhile; ?>
                           <?php endif; ?>
                           </video>
                        </div>
                        <!-- about content -->
                        <div class="about-content-video w-100 h-100">
                           <div class="container-slip w-100 h-100 p-relative">
                           <div class="row h-100">
                              <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 about-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
                                 <div>
                                 <h1 class="fs-36 text-black"><?php the_sub_field('title'); ?></h1>
                                 <div class="ubuntu-condensed fs-20 text-black">
                                    <?php the_sub_field('content'); ?>
                                 </div>
                                 </div>
                                 <div class="mt-15">
                                 <p class="text-left fs-18 text-black">à partir de <?php the_sub_field('product_price'); ?>€</p>
                                 </div>
                                 <button class="btn-black"><?php echo $file['title']; ?></button>
                              </div>
                           </div>
                           </div>
                        </div>
                        <!-- end about content -->
                     </div>
                     </a>
                     <div class="container-fluid">
                     <div class="container-slip p-relative">
                        <div class="about-repeat-video2 anim-300 text-right">
                           <span class="material-icons text-white fs-24">replay</span>
                        </div>
                     </div>
                     </div>
                  <?php endif; ?>
                  <!-- endif lien -->
   
               <?php endwhile; ?>
               <?php endif; ?>
               <!-- endif repeater about content -->
   
            <?php endif; ?>
            <!-- endif row flexible content -->
   
         <?php endwhile; ?>
         <?php endif; ?>
         <!-- end flexible content -->     
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-9 col-lg-9 col-12 ml-auto">
                  <h3 class="uppercase fs-60 fw-100 ubuntu-condensed about-scroll-h">
                     <?php the_field('about_scroll_text'); ?>
                  </h3>
               </div>
            </div>
         </div>     
      </section>
   </main>
<?php get_footer(); ?>