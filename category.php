<?php get_header(); ?>
<main role="main" class="main-content main-archive">
  <section class="container-fluid archive-content">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="fs-44">Portfolio</h1>
        </div>
      </div>
      <div class="row justify-content-center archive-row-cat mb-50">
        <?php
        $taxonomy = 'taxonomy-realisations';
        $terms = get_terms($taxonomy);
        if ( $terms && !is_wp_error( $terms ) ) :
        ?>
          <ul class="d-flex col-auto">
              <li><a href="/realisations"><b>Tout</b></a></li>
              <?php foreach ( $terms as $term ) { ?>
                  <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
              <?php } ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="container-fluid archive-masonry-part">
    <div class="container">
      <div id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
          <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
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