<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">

<?php wp_head(); ?>
</head>

<body>

<div class="wrapper"><!-- wrapper start -->

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="<?php echo get_theme_file_uri('/assets/images/pre-loader/loader-01.svg')?>">
</div>

<!--=================================
 preloader -->
<?php get_template_part('/template-parts/header-nav'); ?>
 <?php if( is_front_page() || is_home() ) : ?>
	<?php get_template_part('/template-parts/header-slider'); ?>
<?php endif;?>

 
<!--=================================
 header -->