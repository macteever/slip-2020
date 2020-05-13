<?php /* Template Name: Contact */
   get_header(); ?>
   <main role="main">
      <section class="container-fluid contact-main">
         
      </section>
   </main>
   <div id="modal-container-form">
      <div class="modal-background">
         <div class="modal">
            <div class="modal-child">
               <h2 class="mb-15 text-left lh-1-4"><?php _e('Envoyez nous un message<br>rapide','slip-2020'); ?></h2>
               <div>
                  <?php echo do_shortcode('[contact-form-7 id="19" title="Formulaire de contact 1"]'); ?>
               </div>
            </div>
            <!-- <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
               <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="1"></rect>
            </svg> -->
         </div>
      </div>
   </div>
   <div id="modal-container-phone">
      <div class="modal-background">
         <div class="modal">
            <div class="modal-child">
               <h2 class="mb-15"><?php _e('Demander un rappel immédiat','slip-2020'); ?></h2>
               <div>
                  <?php echo do_shortcode('[contact-form-7 id="127" title="Form-phone"]'); ?>
               </div>
            </div>
            <!-- <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
               <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="1"></rect>
            </svg> -->
         </div>
      </div>
   </div>
   
<?php get_footer(); ?>