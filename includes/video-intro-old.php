<div class="splash-logo">
   <div class="w-100 h-100 p-absolute splash-logo-bkg"></div>
   <?php include get_template_directory().'/includes/logo-baseline.php'; ?>
</div>
<div class="video-container-parent">
   <div class="video-top-content">
      <div class="d-flex justify-content-between">
         <div class="text-white fs-24 fw-600 slogan-video">
            <?php the_field('video_slogan','option'); ?>
         </div>
         <div class="adress-video text-white fs-16 lh-1-25 text-right adress-video">
            <?php the_field('video_adress','option'); ?>
         </div>
      </div>
   </div>
   <div class="video-container">
      <video autoplay="autoplay" loop="loop" muted>
         <?php
         $video_mp4 = get_field('video_mp4', 'option');
         $video_webm = get_field('video_webm', 'option');
         $video_ogv = get_field('video_ogv', 'option');
         ?> 
         <source src="<?php echo home_url() . $video_mp4; ?>">
         <source src="<?php echo home_url() . $video_webm; ?>">
         <source src="<?php echo home_url() . $video_ogv; ?>">
      </video>
   </div>
</div>