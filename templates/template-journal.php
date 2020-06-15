<?php /* Template Name: Journal */
  get_header(); ?>
  <main role="main">
    <section id="journal_part1" class="mb-100">

      <?php if ( have_rows( 'journal_top_page' ) ) : ?>
      <?php while ( have_rows('journal_top_page' ) ) : the_row(); ?>

        <?php if ( get_row_layout() == 'slide_image' ) : ?>
            
            <?php if ( have_rows('top_page_content') ) : ?>              
            <?php while( have_rows('top_page_content') ) : the_row(); ?>

                  <div class="container-fluid journal-main journal-bkg-img" style="background: url(<?php the_sub_field('bkg_img'); ?>);">
                    <div class="container-slip h-100">

                        <div class="row h-100">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 journal-main-legend">
                          <div class="ubuntu fs-24 text-black text-right">
                              <?php the_sub_field('media_legend'); ?>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 journal-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
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

              <div class="container-fluid journal-main journal-bkg-video">
                  <div class="video-container">
                    <video id="journal_video" muted playsinline webkit-playsinline poster="<?php the_sub_field('poster_video'); ?>">
                    <?php
                    if ( have_rows('format_video') ) : ?>
                        <?php while( have_rows('format_video') ) : the_row(); ?>
                          <source src="<?php the_sub_field('file_video'); ?>">
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </video>
                  </div>
                  <!-- journal content -->
                  <div class="journal-content-video w-100 h-100">
                    <div class="container-slip w-100 h-100 p-relative">
                    <div class="row h-100">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12 ml-auto h-100 journal-main-legend">
                          <div class="ubuntu fs-24 text-black text-right">
                          <?php the_sub_field('media_legend'); ?>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-end h-100 journal-main-content" style="background-color: <?php the_sub_field('cube_color'); ?>">
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
                  <!-- end journal content -->
              </div>

              <div class="container-fluid">
              <div class="container-slip p-relative">
                  <div class="journal-repeat-video anim-300">
                    <span class="material-icons text-white fs-24">replay</span>
                  </div>
              </div>
              </div>
              <!-- endif lien -->

            <?php endwhile; ?>
            <?php endif; ?>
            <!-- endif repeater journal content -->

        <?php endif; ?>
        <!-- endif row flexible content -->

      <?php endwhile; ?>
      <?php endif; ?>
      <!-- end flexible content -->
    </section>
    <section id="journal_part2">
        <div class="container-fluid">
          <div class="container">
            <?php if ( have_rows( 'journal_module' ) ) : ?>
              <?php while ( have_rows('journal_module' ) ) : the_row(); ?>  
      
                <?php if ( get_row_layout() == 'module_1' ) : ?>
                  <div class="row journal-module1 mb-100">
                    <div class="col-xl-6 col-lg-6 col-12">
                      <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                      
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

                      <?php endif; ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-12 d-flex flex-column justify-content-between">
                      <?php the_sub_field('content'); ?>
                      <div>
                        <?php if ( get_sub_field('lien') ) : $file = get_sub_field('lien'); ?>
                        <button class="btn-black">
                          <a class="text-white" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
                        </button>
                        <?php endif; ?>
                        
                      </div>
                    </div>
                  </div>

                <?php elseif( get_row_layout() == 'module_2' ): ?>
                  <div class="row journal-module2-banner mt-100">
                    <div class="col-12">
                      <?php if ( get_sub_field('banner_img') ) : $image = get_sub_field('banner_img'); ?>
                        
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="row journal-module2 justify-content-end mb-100">
                    <div class="col-xl-4 col-lg-4 col-12">
                      <?php the_sub_field('content'); ?>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12">
                      <?php if ( get_sub_field('img') ) : $image = get_sub_field('img'); ?>
                      
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>
                <!-- endif row flexible content -->
      
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
    </section>
  </main>
<?php get_footer(); ?>