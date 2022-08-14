<?php get_header("blog"); ?>

<main class="page blog">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <p class="search-result">
          <?php
            if (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_tax()) {
                single_term_title();
            } elseif (is_day()) {
                echo "日別アーカイブ：" . get_the_time('Y年m月d日');
            } elseif (is_month()) {
                echo "月別アーカイブ：" . get_the_time('Y年m月');
            } elseif (is_year()) {
                echo "年別アーカイブ：" . get_the_time('Y年');
            } elseif (is_author()) {
                echo "投稿者アーカイブ：" . esc_html(get_queried_object()->display_name);
            } else {
                echo "ブログアーカイブ";
            }
          ?>
        </p>
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
