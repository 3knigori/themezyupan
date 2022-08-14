<?php
/**
 * 記事のレイアウトファイル
 *
 * 記事ページ
 *
 * @package WordPress
 * @subpackage THEM ISHIICPA
 * @since 1.0
 * @version 1.0
 */
$postid = get_the_ID();
$parent_id = $post->post_parent;
?>

<?php get_header("blog"); ?>

<main class="page blog">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="blog-inner">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="blog-title"><?php the_title_attribute(); ?></h2>
            <?php if ( 'post' == get_post_type() ) : ?>
              <div class="postmeta">
                <div class="post-date author"><i class="fa fa-user fa-fw"></i><?php _e('By','terminal-lite'); ?> <?php echo get_the_author(); ?></div>
                <div class="post-date date"><i class="fa fa-calendar fa-fw"></i><?php echo get_the_date(); ?></div>
                <div class="post-date comment"><i class="fas fa-comments fa-fw"></i><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
                <div class="post-date categories"><i class="fas fa-folder fa-fw"></i><?php the_category( __( ', ', 'terminal-lite' ));?></div>
              </div>
            <?php endif; ?>
            <div class="blog-body"><?php the_content(); ?></div>
            <div class="blog-sns">
              <!-- <div class="sns-btn tweet">
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?=(empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]?>" data-text="<?=get_the_title()?>" data-via="zyupan7">Tweet</a>
              </div> -->
              <div class="sns-btn fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
              <div class="sns-btn line">
                <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">
                  <img src="//zyupan.com/img/top/linebutton.png" width="82" height="20" alt="LINEで送る" />
                </a>
              </div>
              <a class="sns-btn ig" href="https://www.instagram.com/explore/locations/248957537/?ref=badge">
                <img src="//zyupan.com/img/top/ig-badge-32.png" alt="Instagram" width="32px" target="_blank"/>
              </a>
            </div>
            <div class="blog-subcontents">
              <a class="btn back" href="<?php echo home_url('/blogs') ?>" role="button">BLOG TOPへ戻る »</a>
            </div>
          <?php endwhile; ?>
          <?php else : ?>
            <p>お探しの記事は見つかりませんでした。</p>
          <?php endif; ?>
        </div>

      </div>
      <div class="col-12 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
