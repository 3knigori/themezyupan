<?php
/*
Template Name: 予約状況
*/
get_header("under"); ?>

<div id="wrap"></div>
<main class="page-under article">
  <div class="container">
    <div class="caption-wrap">
      <h2 class="caption-title">What’s new.</h2>
      <h3 class="caption-subtitle">レンタル着物 じゅぱんは<span>年中無休</span>です。</h3>
      <p class="caption-text">ご予約時間に遅れられますと待ち時間が発生いたします。特に繁忙期は※時間厳守でお願い致します。</p>
    </div>

    <section>
      <div class="reservation-wrap">
        <p class="reservation-text">
          予約の取りにくくなっている日時を掲載しております。<br class="d-none d-md-block">
          その他の日は何時でもご予約可能です♪
        </p>
        <p class="reservation-kome">※1組は約2、3名様となっております。</p>
      </div>
    </section>

    <section id="article-list">
      <div class="container">
        <div class="row">
          <?php
            $paged = get_query_var('paged')? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'article',
              'posts_per_page' => 10,
              'paged' => $paged,
            );
            $myposts = new WP_Query($args);
            if($myposts->have_posts()): while($myposts->have_posts()): $myposts->the_post();
          ?>
          <div class="col-12 col-md-6">
            <div class="article-item">
              <h3 class="article-item-date"><?php the_title_attribute(); ?></h3>
              <div class="article-item-body">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <?php endwhile; else: ?>
          <div class="col-12">
            <p class="text-center">※現在予約情報はありません。</p>
          </div>
          <?php endif; ?>
        </div>
        <div class="btn-wrap">
          <a class="btn btn-lg btn__contact" href="#">ご予約はこちらから</a>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer("under"); ?>
