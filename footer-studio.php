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


  <footer id="footer" class="studio">
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.5769872699425!2d135.67676342124278!3d35.01729282671757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001a9fe782e7b97%3A0x35d59e52373dd085!2z44CSNjE2LTgzNzMg5Lqs6YO95bqc5Lqs6YO95biC5Y-z5Lqs5Yy65bWv5bOo5aSp6b6N5a-66LuK6YGT55S677yU4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1662388044206!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container">
      <dl class="information">
        <dt>STUDIO ZYUPAN</dt>
        <dd>
          <p class="tel">TEL&#058;090-3945-7449</p>
          <p class="day">営業時間&#058;00:00 ~ 00:00</p>
        </dd>
      </dl>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url('/studio') ?>">TOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url('/studioa') ?>">STUDIO A</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url('/studiob') ?>">STUDIO B</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url('/studioc') ?>">STUDIO C</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url('/cafe') ?>">Ci Cafe Osporon</a>
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
