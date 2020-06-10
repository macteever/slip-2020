<?php /* Template Name: Environnement */
   get_header(); ?>
   <main role="main">
      <section id="environement_part1" class="mb-100">

         <?php if ( have_rows( 'environement_top_page' ) ) : ?>
         <?php while ( have_rows('environement_top_page' ) ) : the_row(); ?>

            <?php if ( get_row_layout() == 'slide_image' ) : ?>
               
               <?php if ( have_rows('top_page_content') ) : ?>              
               <?php while( have_rows('top_page_content') ) : the_row(); ?>

                     <div class="container-fluid environement-main environement-bkg-img" style="background: url(<?php the_sub_field('bkg_img'); ?>);">
                        <div class="container-slip h-100">

                           <div class="row h-100">
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 environement-main-legend">
                              <div class="ubuntu fs-24 text-black text-right">
                                 <?php the_sub_field('media_legend'); ?>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 environement-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
                              <div>
                                 <h1 class="fs-36 text-black"><?php the_sub_field('title'); ?></h1>
                                 <div class="ubuntu-condensed fs-20 text-black">
                                 <?php the_sub_field('content'); ?>
                                 </div>
                              </div>
                              <div class="mt-15">
                                 <p class="text-left fs-18 text-black"><?php the_sub_field('product_price'); ?></p>
                              </div>
                           </div>
                           </div>

                        </div>
                     </div>

               <?php endwhile; ?>
               <?php endif; ?>
               

            <?php elseif( get_row_layout() == 'slide_video' ): ?>

               <?php if ( have_rows('top_page_content') ) : ?>              
               <?php while( have_rows('top_page_content') ) : the_row(); ?>

                  <div class="container-fluid environement-main environement-bkg-video">
                     <div class="video-container">
                        <video id="environement_video" muted playsinline webkit-playsinline poster="<?php the_sub_field('poster_video'); ?>">
                        <?php
                        if ( have_rows('format_video') ) : ?>
                           <?php while( have_rows('format_video') ) : the_row(); ?>
                              <source src="<?php the_sub_field('file_video'); ?>">
                           <?php endwhile; ?>
                        <?php endif; ?>
                        </video>
                     </div>
                     <!-- environement content -->
                     <div class="environement-content-video w-100 h-100">
                        <div class="container-slip w-100 h-100 p-relative">
                        <div class="row h-100">
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 environement-main-legend">
                              <div class="ubuntu fs-24 text-black text-right">
                              <?php the_sub_field('media_legend'); ?>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 environement-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
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
                     <!-- end environement content -->
                  </div>

                  <div class="container-fluid">
                  <div class="container-slip p-relative">
                     <div class="environement-repeat-video anim-300">
                        <span class="material-icons text-white fs-24">replay</span>
                     </div>
                  </div>
                  </div>
                  <!-- endif lien -->

               <?php endwhile; ?>
               <?php endif; ?>
               <!-- endif repeater environement content -->

            <?php endif; ?>
            <!-- endif row flexible content -->

         <?php endwhile; ?>
         <?php endif; ?>
         <!-- end flexible content -->
      </section>
      <section id="environement_part2" class="mb-100">
         <div class="container-fluid">
            <div class="container-slip">
               <?php if ( have_rows('environement_content_slider') ) : ?>
                  <?php while( have_rows('environement_content_slider') ) : the_row(); ?>
               
                     <div class="row justify-content-end p-relative">
                        <div class="col-xl-5 col-lg-5 col-12 environement-slider-content">
                           <?php the_sub_field('content'); ?>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 pr-0">
                           <div class="environement-slider mb-30">
                              <?php if ( have_rows('slider_img') ) : ?>
                                 <?php while( have_rows('slider_img') ) : the_row(); ?>
                              
                                       <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                                       
                                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                       
                                       <?php endif; ?>
                              
                                 <?php endwhile; ?>
                              <?php endif; ?>
                           </div>
                           <div class="environement-slider-nav">
                              <?php if ( have_rows('slider_img') ) : ?>
                                 <?php while( have_rows('slider_img') ) : the_row(); ?>
                              
                                       <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                                       
                                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                       
                                       <?php endif; ?>
                              
                                 <?php endwhile; ?>
                              <?php endif; ?>
                           </div>
                           
                        </div>
                     </div>

                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>
      </section>
      <section id="environement_part3">
         <div class="container-fluid">
            <div class="container-slip">
               <div class="row">
                  <div class="col-10 mx-auto fs-36 fw-500 text-center ubuntu lh-1-4">
                     <?php the_field('environement_citation'); ?>
                  </div>
               </div>
               <div class="row mt-100">
                  <?php if ( have_rows('environement_engagements') ) : ?>
                     <?php while( have_rows('environement_engagements') ) : the_row(); ?>
                  
                        <div class="col-xl-3 col-lg-3 col-12 d-flex flex-column justify-content-center">
                           <h3 class="fs-28 mb-30 "><?php the_sub_field('title'); ?></h3>
                           <div class="text-center">
                              <?php if ( get_sub_field('icon') ) : $image = get_sub_field('icon'); ?>
                              
                                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                              
                              <?php endif; ?>
                           </div>
                           <p class="mt-30">
                              <?php the_sub_field('content'); ?>
                           </p>
                        </div>
                  
                     <?php endwhile; ?>
                  <?php endif; ?>
                  
               </div>
            </div>
         </div>
      </section>
      <section id="environement_part4" class="mb-100">
         <div class="container-fluid pl-0 pr-0">
            <?php if ( have_rows( 'environement_middle_banner' ) ) : ?>
               <?php while ( have_rows('environement_middle_banner' ) ) : the_row(); ?>
               
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
                                    </div>
                                 </div>
         
                              </div>
                           </div>
                           </a>
                        <?php endif; ?>
         
                     <?php endwhile; ?>
                     <?php endif; ?>
                     
         
                  <?php elseif( get_row_layout() == 'slide_video' ): ?>
         
                     <?php if ( have_rows('top_page_content') ) : ?>              
                        <?php while( have_rows('top_page_content') ) : the_row(); ?>
            
                           <div class="container-fluid home-main environement-bkg-video p-relative pl-0 pr-0">
                              <div class="video-container">
                                 <video class="environement-video-recommandation" muted playsinline webkit-playsinline poster="<?php the_sub_field('poster_video'); ?>">
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
                                    </div>
                                 </div>
                                 </div>
                              </div>
                              <!-- end home content -->
                           </div>

                           <div class="container-fluid">
                              <div class="container-slip p-relative">
                                 <div class="environement-repeat-video2 anim-300 text-right">
                                    <span class="material-icons text-white fs-24">replay</span>
                                 </div>
                              </div>
                           </div>
            
                        <?php endwhile; ?>
                     <?php endif; ?>
                     <!-- endif repeater home content -->
         
                  <?php endif; ?>
                  <!-- endif row flexible content -->
         
               <?php endwhile; ?>
            <?php endif; ?>
            <!-- end flexible content -->
         </div>
      </section>
      <section id="environement_part5" class="mb-100">
         <div class="container-fluid">
            <div class="container-slip">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-12 pl-0">
                     <?php the_field('environement_birds_content'); ?>
                  </div>
                  <div class="col-xl-9 col-lg-9 d-flex flex-wrap pl-0 pr-0 col-12">
                     <?php if ( have_rows('environement_thumbnails') ) : ?>
                        <?php while( have_rows('environement_thumbnails') ) : the_row(); ?>
                        
                           <div class="col-xl-4 col-lg-4 col-12 pl-0 pr-0 p-relative environement-thumbnail anim-300">
                              <?php if ( get_sub_field('lien') ) : $file = get_sub_field('lien'); ?>
                              <a href="<?php echo $file['url']; ?>">
                                 <div class="p-relative environement-thumbnail-1stplan anim-300">
                                    <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                                    
                                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                    
                                    <?php endif; ?>
                                 </div>
                                 <div class="d-flex flex-column environement-thumbnails-hover h-100 justify-content-end anim-300">
                                    <h3 class="mb-0 pl-20 text-black">
                                       <?php the_sub_field('title'); ?>
                                    </h3>
                                    <p class="mb-30 pl-20 text-black"><?php the_sub_field('subtitle'); ?></p>
                                    <p class="pl-20 text-black"><?php the_sub_field('content'); ?></p>
                                    <button class="btn-black ubuntu text-white mt-30"><?php echo $file['title']; ?></button>
                                       
                                 </div>
                              </a>
                              <?php endif; ?>
   
                           </div>
                     
                        <?php endwhile; ?>
                     <?php endif; ?>
                  </div>
               </div>
               <div class="row">
                  <?php if ( have_rows('environement_thumbnails2') ) : ?>
                     <?php while( have_rows('environement_thumbnails2') ) : the_row(); ?>
                     
                        <div class="col-xl-3 col-lg-3 col-12 pl-0 pr-0 p-relative environement-thumbnail anim-300">
                           <?php if ( get_sub_field('lien') ) : $file = get_sub_field('lien'); ?>
                           <a href="<?php echo $file['url']; ?>">
                              <div class="p-relative environement-thumbnail-1stplan anim-300">
                                 <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                                 
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                 
                                 <?php endif; ?>
                              </div>
                              <div class="d-flex flex-column environement-thumbnails-hover h-100 justify-content-end anim-300">
                                 <h3 class="mb-0 pl-20 text-black">
                                    <?php the_sub_field('title'); ?>
                                 </h3>
                                 <p class="mb-30 pl-20 text-black"><?php the_sub_field('subtitle'); ?></p>
                                 <p class="pl-20 text-black"><?php the_sub_field('content'); ?></p>
                                 
                                 
                                    <button class="btn-black mt-30 ubuntu text-white">
                                       <?php echo $file['title']; ?>
                                    </button>
                              </div>
                           </a>
                           <?php endif; ?>
                        </div>
                  
                     <?php endwhile; ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php get_footer(); ?>