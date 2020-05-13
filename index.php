<?php get_header(); ?>
<main role="main" class="main-content main-archive">
  <section class="container-fluid archive-content">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="fs-44">Posts récents</h1>
        </div>
      </div>
      <div class="row justify-content-center mb-50">
        <div class="col-12 text-center">
          <span>Erreur index</span>
        </div>
        <div class="col-12 d-flex journal-rs mt-40 justify-content-center">
        <?php if ( have_rows('social_network', 'option') ) : ?>
          <?php while( have_rows('social_network', 'option') ) : the_row(); ?>

              <?php if ( get_sub_field('lien', 'option') ) : ?>
                <a target="_blank" href="<?php echo get_sub_field('lien', 'option'); ?>">
                    <?php if ( get_sub_field('icon', 'option') ) : ?>
                      <img src="<?php the_sub_field('icon', 'option'); ?>" alt="<?php the_field(''); ?>">
                    <?php endif; ?>
                </a>
              <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid archive-masonry-part">
    <div class="container">
      <div id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
          <article id="post-<?php the_ID(); ?>" <?php post_class('post apparition-3'); ?>>
            <a href="<?php echo esc_url( get_permalink()); ?>">
              <?php echo get_the_post_thumbnail(); ?>
            </a>
          </article>
    
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="load-more-manual">
        <nav id="page-nav" role="navigation"><?php next_posts_link( __( '<span class="more btn-green">Load more posts</span>', 'wpc' ) ); ?></nav>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>