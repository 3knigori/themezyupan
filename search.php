<?php get_header("blog"); ?>

<main class="page blog">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
            $search_query = get_search_query();
        ?>

        <p class="search-result"><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></p>

        <?php
          if( $total_results >0 ):
          if(have_posts()):
          while(have_posts()): the_post();
        ?>
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
        <?php endwhile; endif; else: ?>
          <h2 class="blog-title"><?php echo $search_query; ?> に一致する情報は見つかりませんでした。</h2>
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
