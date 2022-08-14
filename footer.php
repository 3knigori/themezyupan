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

  <a class="footer-link" id="pagetop" href="#top">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/components/pagetop.png" alt="">
  </a>

  <?php wp_footer(); ?>

  </body>
</html>
