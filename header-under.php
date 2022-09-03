<?php
/**
 * The header for THEM ISHIICPA theme
 *
 * @package WordPress
 * @subpackage THEM ISHIICPA
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
  <head>
    <title><?php wp_title(' | ',true,'right'); ?><?php bloginfo('name'); ?></title>
    <meta content='<?php bloginfo('description'); ?>' name='Description'>
    <meta content='' name='Keywords'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <meta content='telephone=no' name='format-detection'>
    <meta content='SKYPE_TOOLBAR_PARSER_COMPATIBLE' name='SKYPE_TOOLBAR'>
    <meta content='<?php wp_title(' | ',true,'right'); ?><?php bloginfo('name'); ?>' property='og:title'>
    <meta content='https://' property='og:url'>
    <meta content='<?php bloginfo('description'); ?>' property='og:description'>
    <meta content='<?php bloginfo('name'); ?>' property='og:site_name'>
    <meta content='<?php echo get_template_directory_uri(); ?>/assets/images/ogp.png' property='og:image'>
    <meta content='width=device-width,user-scalable=0' name='viewport'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src='<?php echo get_template_directory_uri(); ?>/script.js' type='text/javascript'></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script>
     (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <h1 class="description">レンタル着物じゅぱんの最新情報をお届けいたします。是非ご覧ください。</h1>
    <header id="header" class="under">
      <div class="header-inner">
        <div class="head_exp clearfix">
          <h2>
            <a href="<?php echo home_url('/') ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo-under.png" alt="京都レンタル着物じゅぱん"/>
            </a>
          </h2>
          <p>ほんとの京都をしってはる？</p>
          <p>着物がメイン？ いえ、あなたが主役です。</p>
        </div>

        <!--PCnav-->
        <nav class="d-none d-lg-block">
          <ul>
            <li><a href="<?php echo home_url('/') ?>">Home</a></li>
            <li class="about_list"><a href="<?php echo home_url('/about') ?>">About</a>
              <ul>
                <li><a href="<?php echo home_url('/english') ?>">English</a></li>
              </ul>
            </li>
            <li><a href="<?php echo home_url('/tpo') ?>">TPO</a></li>
            <li class="plan_list"><a>Plan</a>
              <ul>
                <li><a href="<?php echo home_url('/kimono') ?>">Kimono</a></li>
                <li><a href="<?php echo home_url('/yukata') ?>">Yukata</a></li>
                <li><a href="<?php echo home_url('/hairset') ?>">Hairset</a></li>
                <li><a href="<?php echo home_url('/oishiosue') ?>">Oishiosue</a></li>
                <li><a href="<?php echo home_url('/oitea') ?>">Oi Tea</a></li>
                <li><a href="<?php echo home_url('/photo') ?>">Photo</a></li>
              </ul>
            </li>
            <li><a href="<?php echo home_url('/blogs') ?>">Blog</a></li>
            <li class="gallery_list"><a>Photo Gallery</a>
              <ul>
                <li><a href="<?php echo home_url('/gallery-ss') ?>">Spring/Summer</a></li>
                <li><a href="<?php echo home_url('/gallery-aw') ?>">Autumn/Winter</a></li>
              </ul>
            </li>
          </ul>
          <ul id="nav_2nd_raw">
            <li><a href="<?php echo home_url('/reservation') ?>">Reservation</a></li>
            <li><a href="<?php echo home_url('/qa') ?>">Q<span class="and">&</span>A</a></li>
            <li><a href="<?php echo home_url('/access') ?>">Access</a></li>
            <li><a href="<?php echo home_url('/spot') ?>">Tourist Spot</a></li>
            <li><a href="<?php echo home_url('/contact') ?>">Contact</a></li>
          </ul>
        </nav>

        <!--SPnav-->
        <div class="main_overlay"></div>
        <a href="#" id="panel-btn"><span class="burger-btn"></span></a>
        <nav class="drawer d-block d-lg-none">
          <ul>
            <li>
              <a href="<?php echo home_url('/reservation') ?>">
                <span><i class="far fa-calendar-alt fa-fw"></i></span>
                <span>予約はこちら</span>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/explore/locations/248957537/?ref=badge">
                <span><i class="fab fa-instagram fa-fw"></i></span>
                <span>Instagram</span>
              </a>
            </li>
          </ul>
          <h3 class="pink">メニュー</h3>
          <ul>
            <li><a href="<?php echo home_url('/') ?>"><p>ホーム</p></a></li>
            <li><a href="<?php echo home_url('/about') ?>"><p>じゅぱんについて</p></a></li>
            <li><a href="<?php echo home_url('/tpo') ?>">TPO</a></li>
            <li><a href="<?php echo home_url('/kimono') ?>"><p>着物プラン</p></a></li>
            <li><a href="<?php echo home_url('/yukata') ?>"><p>浴衣プラン</p></a></li>
            <li><a href="<?php echo home_url('/oishiosue') ?>"><p>お食事付きプラン</p></a></li>
            <li><a href="<?php echo home_url('/oitea') ?>">茶道体験プラン</a></li>
            <li><a href="<?php echo home_url('/photo') ?>"><p>フォトプラン</p></a></li>
            <li><a href="<?php echo home_url('/hairset') ?>"><p>ヘアセット</p></a></li>
            <li><a href="<?php echo home_url('/gallery-ss') ?>"><p>ギャラリー春・夏</p></a></li>
            <li><a href="<?php echo home_url('/gallery-aw') ?>"><p>ギャラリー秋・冬</p></a></li>
            <li><a href="<?php echo home_url('/blogs') ?>"><p>ブログ</p></a></li>
            <li><a href="<?php echo home_url('/english') ?>"><p>English</p></a></li>
            <li><a href="<?php echo home_url('/access') ?>"><p>アクセス</p></a></li>
            <li><a href="<?php echo home_url('/qa') ?>">Q&A</a></li>
            <li><a href="<?php echo home_url('/spot') ?>"><p>観光案内</p></a></li>
            <li><a href="<?php echo home_url('/contact') ?>"><p>お問い合わせ</p></a></li>
            <li><a href="<?php echo home_url('/privacy') ?>"><p>プライバシーポリシー</p></a></li>
          </ul>
        </nav>
      </div>
    </header>
