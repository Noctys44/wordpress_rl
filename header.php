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
<?php
  if ( is_user_logged_in() ):
	$current_user = wp_get_current_user(); 
?>
	<p>
        <?php echo $current_user->user_firstname; ?>
        <a href="<?php echo wp_logout_url(); ?>"> Déconnexion </a>
	</p>
<?php else: ?>
    <p>
        <a href="<?php echo wp_login_url(); ?>"> Connexion </a>
	</p>
<?php endif; ?>
    <ul>
      <li><a href="http://localhost/wordpress/blog/">Blog</a></li>
    <a href="<?php echo home_url( '/' ); ?>">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="Logo">
    </a>  
      <li><a href="http://localhost/wordpress/contact/">Contact</a></li>
    </ul>
  </header>