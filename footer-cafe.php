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
    <div class="container">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="#">CAFE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">STUDIO A</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">STUDIO B</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">STUDIO C</a>
        </li>
      </ul>
      <div class="logo-nav">
        <a href="<?php echo home_url('/') ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo-under.png" alt="京都レンタル着物じゅぱん"/>
        </a>
        <p>ほんとの京都をしってはる？</p>
        <p>着物がメイン？ いえ、あなたが主役です。</p>
      </div>
    </div>
    <div class="copyright-wrap">
      <p>Copyright(c)Rental Kimono Zyupan. All Rights Reserved.</p>
    </div>
  </footer>

  <?php wp_footer(); ?>

  </body>
</html>
