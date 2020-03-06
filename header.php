<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="icon" type="image/png" href="<?=get_template_directory_URI()?>/img/favicon.png" />
  <link rel="stylesheet" href="<?=get_template_directory_URI()?>/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400&display=swap" rel="stylesheet" />

  <?php wp_head(); ?>

  <script>
  var base_URL = '<?=site_url()?>/';
  var template_URL = '<?=get_template_directory_URI()?>';
  </script>
</head>

<body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <header class="header">
    <div class="header-wrapper">
      <div class="header-buttons">
        <button type="button" class="menu-hamb" data-menu="button"><span></span></button>

        <a href="<?=site_url()?>">
          <img class="header-logo" src="<?=get_template_directory_URI()?>/img/src/salt_header.svg" alt="Agência Salt" type="image/svg" />
        </a>

        <button type="button" class="search-button">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#search"></use>
          </svg>
        </button>
      </div>

      <div class="menu-wrapper" data-menu="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

        <button type="button" class="search-button">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#search"></use>
          </svg>
        </button>

        <div class="social-header">
          <a href="https://instagram.com/agenciasalt" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#instagram"></use>
            </svg>
          </a>

          <a href="https://facebook.com/agenciasalt" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#facebook"></use>
            </svg>
          </a>

          <a href="https://youtube.com/agenciasalt" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#youtube"></use>
            </svg>
          </a>
        </div>

        <a href="<?=site_url()?>/orcamento" class="call-to-action">Orçamento</a>
      </div>      
    </div>
  </header>