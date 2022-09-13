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
    <title><?php wp_title(' | ',true,'right'); ?>お洒落な人は見逃せない！モノじゃなく自分を映えるならスタジオzyupan</title>
    <meta content='京都で写真映えするならスタジオzyupanで！セルフスタジオなので誰の目も気にせず思いっきり可愛く写真を撮ろう！今度はモノじゃなく自分映えを目指しませんか？着物でも洋服も自撮りをするならココに集まれ♪' name='Description'>
    <meta content='京都,嵐山,セルフスタジオ,写真館,スタジオ,zyupan,cafe,プリクラ' name='Keywords'>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src='<?php echo get_template_directory_uri(); ?>/script.js' type='text/javascript'></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class("studio"); ?>>
    <h1 class="studio__description">着付師監修　嵐山「初」映えスタジオで自撮りしちゃおう！</h1>
    <header id="header" class="studio">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo home_url('/studio') ?>">STUDIO ZYUPAN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
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
          </div>
        </div>
      </nav>
    </header>
