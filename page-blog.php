<?php
/*
Template Name: ブログ一覧
*/
get_header("blog"); ?>

<main class="page blog">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <?php
          $paged = get_query_var('paged')? get_query_var('paged') : 1;
          $args = array(
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => $paged,
          );

          $myposts = new WP_Query($args);

          if($myposts->have_posts()): while($myposts->have_posts()): $myposts->the_post();
        ?>
          <article>
            <div class="blog-inner">
              <h2 class="blog-title"><?php the_title_attribute(); ?></h2>
              <?php if ( 'post' == get_post_type() ) : ?>
                <div class="postmeta">
                	<div class="post-date author"><i class="fa fa-user fa-fw"></i><?php _e('By','terminal-lite'); ?> <?php echo get_the_author(); ?></div>
                  <div class="post-date date"><i class="fa fa-calendar fa-fw"></i><?php echo get_the_date(); ?></div>
                  <div class="post-date comment"><i class="fas fa-comments fa-fw"></i><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
                  <div class="post-date categories"><i class="fas fa-folder fa-fw"></i><?php the_category( __( ', ', 'terminal-lite' ));?></div>
                </div>
              <?php endif; ?>
              <div class="blog-body">
                <?php if ( has_post_thumbnail()): ?>
                  <?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'ileft' ) ); ?>
                <?php endif; ?>
                <p class="text"><?php echo wp_trim_words( get_the_content(), 80, '...' ); ?></p>
                <div class="blog-subcontents">
                  <a class="btn more" href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>">Read More »</a>
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
          <?php
          endif;
          wp_reset_postdata();
          ?>

          <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $myposts)); ?>
      </div>
      <div class="col-12 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer("blog"); ?>
