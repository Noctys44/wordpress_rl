<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="css/style.css" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
  <header class="header">
    <ul>
      <li><a href="">Blog</a></li>
    <a href="<?php echo home_url( '/' ); ?>">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
    </a>  
      <li><a href="">Contact</a></li>
    </ul>
  </header>