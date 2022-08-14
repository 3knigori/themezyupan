<?php
/*
Template Name: お問い合わせ
*/
get_header("under"); ?>

<div id="wrap"></div>
<main class="page-under contact">
  <div class="container">
    <div class="caption-wrap">
      <h2 class="caption-title">Contact</h2>
      <h3 class="caption-subtitle">お問い合わせ</h3>
    </div>

    <div class="text-box">
      <p>お問い合わせはメールでも承っています。
      お気軽にお問い合わせください。</p>
      <p>内容によっては回答をさしあげるのにお時間をいただくこともございます。
      以下の内容を入力して【確認】ボタンをクリックしてください。
      翌日中に返信の無い場合はお電話にてお問合せ下さい。</p>
      <p>※メールアドレスの間違いや電話番号の間違いでご返信できない事例が多数出ております。アドレスはもう一度ご確認ください。</p>
    </div>

    <div class="form-wrap">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php remove_filter('the_content', 'wpautop'); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>

  </div>
</main>

<?php get_footer("under"); ?>
