<?php /* Template Name: Mentions légales */
   get_header(); ?>
   <main role="main">
      <section id="legal_part1">

         <?php if ( have_rows( 'legal_top_page' ) ) : ?>
         <?php while ( have_rows('legal_top_page' ) ) : the_row(); ?>

         <?php if ( get_row_layout() == 'slide_image' ) : ?>
               
               <?php if ( have_rows('top_page_content') ) : ?>              
               <?php while( have_rows('top_page_content') ) : the_row(); ?>

                     <div class="container-fluid legal-main legal-bkg-img" style="background: url(<?php the_sub_field('bkg_img'); ?>);">
                     <div class="container-slip h-100">

                           <div class="row h-100">
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 legal-main-legend">
                           <div class="ubuntu fs-24 text-black text-right">
                                 <?php the_sub_field('media_legend'); ?>
                           </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 legal-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
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

               <div class="container-fluid legal-main legal-bkg-video">
                     <div class="video-container">
                     <video id="legal_video" muted playsinline webkit-playsinline poster="<?php the_sub_field('poster_video'); ?>">
                     <?php
                     if ( have_rows('format_video') ) : ?>
                           <?php while( have_rows('format_video') ) : the_row(); ?>
                           <source src="<?php the_sub_field('file_video'); ?>">
                           <?php endwhile; ?>
                     <?php endif; ?>
                     </video>
                     </div>
                     <!-- legal content -->
                     <div class="legal-content-video w-100 h-100">
                        <div class="container-slip w-100 h-100 p-relative">
                           <div class="row h-100">
                              <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 legal-main-legend">
                                 <div class="ubuntu fs-24 text-black text-right">
                                 <?php the_sub_field('media_legend'); ?>
                                 </div>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 legal-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
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
                     <!-- end legal content -->
               </div>

               <div class="container-fluid">
               <div class="container-slip p-relative">
                     <div class="legal-repeat-video anim-300">
                     <span class="material-icons text-white fs-24">replay</span>
                     </div>
               </div>
               </div>
               <!-- endif lien -->

               <?php endwhile; ?>
               <?php endif; ?>
               <!-- endif repeater legal content -->

         <?php endif; ?>
         <!-- endif row flexible content -->

         <?php endwhile; ?>
         <?php endif; ?>
         <!-- end flexible content -->
      </section>
      <section id="legal_part2">
         <div class="container-fluid">
            <div class="container-slip">
               <div class="content mt-30 mb-40">
                  <div class="tabWrapper">
                     <div class="tabs">
                        <div class="d-flex justify-content-around legal-tabs mb-40 p-relative" role="tablist" aria-label="tabs">
                           <?php if ( have_rows('legal_tabs') ) : ?>
                              <?php while( have_rows('legal_tabs') ) : the_row(); ?>
                           
                                 <button class="ubuntu-condensed p-relative" role="tab" aria-selected="true" id="<?php the_sub_field('id'); ?>"><span class="text-black"> <?php the_sub_field('title'); ?></span></button>
                           
                              <?php endwhile; ?>
                           <?php endif; ?>
                        </div>
                        <?php if ( have_rows('legal_tabs') ) : ?>
                           <?php while( have_rows('legal_tabs') ) : the_row(); ?>
                              
                           <div role="tabpanel" aria-labelledby="<?php the_sub_field('id'); ?>">
                              <div class="row justify-content-center">
                                 <div class="col-xl-10 col-lg-10 col-12">
                                    <?php the_sub_field('content'); ?>
                                 </div>
                              </div>
                           </div>
                        
                           <?php endwhile; ?>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>  
            </div>
         </div>
      </section>
      <section id="legal_part3">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div class="fs-52 legal-scroll-h">
                     <?php the_field('legal_scroll_h'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
     
   </main>
   <script type="text/javascript">

      // DISABLE JUMP ANCHOR
      

            
      // TABS INTERACTION
      const tabs = document.querySelector('.tabs');
      const tabButtons = tabs.querySelectorAll('[role="tab"]');
      const tabPanels = tabs.querySelectorAll('[role="tabpanel"]');

      function handleTabClick(event) {
         tabPanels.forEach(function(panel) {
            panel.hidden = true;
      });

      tabButtons.forEach(function(tab) {
         tab.setAttribute('aria-selected', false);
      });

      event.currentTarget.setAttribute('aria-selected', true);

      const {id} = event.currentTarget;

      const tabPanel = tabs.querySelector(`[aria-labelledby="${id}"]`);
      tabPanel.hidden = false;
      }

      tabButtons.forEach(button => button.addEventListener('click', handleTabClick));
   </script>
<?php get_footer(); ?>