<?php
/*
Template Name: 予約
*/
get_header("under"); ?>

<div id="wrap"></div>
<main class="page-under contact">
  <div class="container">
    <div class="caption-wrap">
      <h2 class="caption-title">Reservation</h2>
      <h3 class="caption-subtitle">レンタル着物 じゅぱんは<span>年中無休</span>です。</h3>
      <p class="caption-text">ご予約時間に遅れられますと待ち時間が発生いたします。特に繁忙期は※時間厳守でお願い致します。</p>
    </div>

    <div class="text-box">
      <p class="important-text text1">※完全予約制※</p>
      <p class="important-text text2">※当日の予約はできません。</p>
      <p class="important-text text2">※カレンダーからの予約は前々日の19時までです。</p>
      <p>※前日の予約は電話のみ対応しております。</p>
      <p>2日前or無断キャンセルはキャンセル料金が発生いたします。</p>
      <p>1日10組20名様までのご予約とさせていただきます。</p>
      <p>ご来店の際は必ずマスクを着用下さい。</p>
      <p>コロナウイルスの影響により営業状況を変更する可能性がございます。</p>
      <p class="important-text text2">※1組は約2、3名様となっております。</p>
      <p class="important-text text2">※4名様以上の場合は前後の予約状況により対応させて頂きます。</p>
      <p class="important-text text2">※ドメイン設定（受信拒否設定）をされているお客様へお願い</p>
      <p>
        迷惑メールの対策など（特にsoftbank/icloudをご利用のお客様）でドメイン指定を行っている場合、メールが受信できない場合がございます。<br>
        当サイトからお送りしたメール『zyupan.com』を受信リストに加えていただきますようお願い申し上げます。
      </p>
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
