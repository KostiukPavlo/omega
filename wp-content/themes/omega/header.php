<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omega
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">


  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<?php $backgroundimage = get_field('background');

$custom_logo_id = get_theme_mod('custom_logo');

?>

<body class="">
  <header class="header" style="background-image: url(<?php bloginfo('template_directory'); ?>/app/img/bgheader.jpg">

    <div class="container">
      <nav class="nav">
        <a class="logo" href="/"> <img src="  <?php echo $custom_logo_id; ?>" alt="logo"></a>
        <button id="button" class="burger" aria-label="open" aria-expanded="false" data-burger>
          <span class="burger__line"></span>
        </button>
        <div class="menu" data-menu>

          <?php wp_nav_menu(); ?>

        </div>
      </nav>