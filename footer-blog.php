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


  <footer id="footer" class="footer-blog">
    <div class="footer-logo-wrap">
      <div class="footer-logo-text">
        <p>
          このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy">プライバシーポリシー</a>と<a href="https://policies.google.com/terms">利用規約</a>が適用されます。
        </p>
        <p>
          京都・嵐山着物レンタル｜レトロな着物で京都観光 | じゅぱん 2019 | All Rights Reserved.
        </p>
      </div>
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
