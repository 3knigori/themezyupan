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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css">
    <script src='<?php echo get_template_directory_uri(); ?>/script.js' type='text/javascript'></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class("cafe"); ?>>
    <h1 class="description">cafeのh1が入ります。cafeのh1が入ります。</h1>
    <header id="header" class="cafe">
      <a href="<?php echo home_url('/') ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo-under.png" alt="京都レンタル着物じゅぱん"/>
      </a>
    </header>
