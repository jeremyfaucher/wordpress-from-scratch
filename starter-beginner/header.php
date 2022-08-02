<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<header class="container--full">
<div class="header--content">
<div class="logo">
<h1><a href="/" rel="home">Starter</a></h1>
</div>
<nav class="primary-nav">
<?php wp_nav_menu(array(
'theme_location' => 'main', 
'container' => false, 
'menu_class' => 'menu-items', 
)); 
?>
</nav>
</div>
</header>