<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage THEM ISHIICPA
 * @since 1.0
 * @version 1.0
 */

?>


  <footer id="footer" class="footer-under">
    <div class="container">
      <div class="content-box visa">
        <p class="content-title">来店からお出かけまで2～3名様で平均1時間から1時間30分程かかります</p>
        <p>お会計時には各種カードが使用可能です。</p>
        <div class="content-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/visa.png" alt="visa"/>
        </div>
        <p>
          着物、ヘアセット、アクセサリーの組み合わせが終わりましたらあなただけのオリジナル着物の完成です。<br>
          それでは、京都の街を存分に楽しんできてください。
        </p>
      </div>
    </div>
    <dl class="other-info">
      <dt>その他</dt>
      <dd>
        <p>
          京都市内に限りお泊り先へのお荷物配達も行っております。<br>
          (お一人様につき＋1,000円)<br>
          翌日返却について<br>
          (お一人様につき＋1,000円)<br>
          ※翌日返却の場合は保証金10,000円をお預かりし、<br>
          お荷物返却時にお返し致します。
        </p>
      </dd>
    </dl>
    <div class="container footer-contact-wrap">
      <div class="row">
        <div class="col-12 col-lg-6 mb-3 mb-lg-0">
          <div class="contact-item">
            <a href="tel:09039457449">
              <dl class="contact-item-body tel">
                <dt>お電話での<br class="d-block d-md-none">ご予約はこちら</dt>
                <dd>
                  <p>
                    <span>TEL</span>
                    <span>090-3945-7449</span>
                  </p>
                </dd>
              </dl>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="contact-item">
            <a href="<?php echo home_url('/reservation') ?>">
              <dl class="contact-item-body mail">
                <dt>インターネットからの<br class="d-block d-md-none">ご予約はこちら</dt>
                <dd>
                  <p>※ 翌日中に返信のない場合はお電話にてご予約下さいませ。</p>
                  <p>※ 翌日の予約は、WEBではできません。お電話にてお問い合わせ下さいませ。</p>
                </dd>
              </dl>
            </a>
          </div>
        </div>
      </div>
      <p class="footer-contact-text mt-3">※当日のご予約はできませんので、前日までにご予約をお願い致します。</p>
      <p class="footer-contact-text mb-3">※京都市内のお客様に限り、翌日返却、お泊り先のお荷物の配送も行っております。</p>
    </div>

    <div class="sns-wrap">
      <div class="sns-btn tweet"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?=(empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]?>" data-text="京都・嵐山 レンタル着物じゅぱん" data-via="zyupan7">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
      <div class="sns-btn fb-like" data-href="http://zyupan.com" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
      <a class="sns-btn ig" href="https://www.instagram.com/explore/locations/248957537/?ref=badge"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/icon-ig.png" alt="Instagram" width="32px"/></a>
    </div>
    <div class="copyright-wrap">
      <p>
        <a class="policy" href="<?php echo home_url('/privacy') ?>">Site Policy...</a>
      </p>
      <p>
        このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy">プライバシーポリシー</a>と<a href="https://policies.google.com/terms">利用規約</a>が適用されます。
      </p>
      <p>Copyright(c)Rental Kimono Zyupan. All Rights Reserved.</p>
    </div>
  </footer>

  <a class="footer-link" id="pagetop" href="#top">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/pagetop.png" alt="">
  </a>

  <div class="footer-link-top d-block d-md-none" id="footerbtn">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="tel:09039457449">
          <span><i class="fas fa-phone fa-fw"></i></span>
          <span>Tel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo home_url('/reservation') ?>">
          <span><i class="far fa-calendar-alt fa-fw"></i></span>
          <span>Reservation</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo home_url('/kimono') ?>">
          <span><i class="fas fa-book-open fa-fw"></i></span>
          <span>Plan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/explore/locations/248957537/?ref=badge">
          <span><i class="fab fa-instagram fa-fw"></i></span>
          <span>Instagram</span>
        </a>
      </li>
    </ul>
  </div>

  <?php wp_footer(); ?>

  </body>
</html>
