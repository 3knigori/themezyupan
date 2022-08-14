<?php get_header("blog"); ?>

<main class="page blog">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <p class="search-result">カテゴリー：<?php single_cat_title(); ?></p>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article>
            <div class="blog-inner">
              <h2 class="blog-title"><?php the_title(); ?></h2>
              <div class="blog-body">
                <?php if ( has_post_thumbnail()): ?>
                  <?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'ileft' ) ); ?>
                <?php endif; ?>
                <p class="text"><?php the_excerpt(); ?></p>
                <div class="blog-subcontents">
                  <a class="btn more" href="<?php the_permalink(); ?>">Read More »</a>
                </div>
              </div>
            </div>
          </article>
          <?php
          endwhile; else:
          ?>
          <div class="text-border text-center">
            <p>お探しの記事は見つかりませんでした。</p>
          </div>
          <?php endif; ?>

          <?php wp_pagenavi(); ?>
      </div>
      <div class="col-12 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
