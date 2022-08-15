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


  <footer id="footer" class="cafe">
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

  <?php wp_footer(); ?>

  </body>
</html>
