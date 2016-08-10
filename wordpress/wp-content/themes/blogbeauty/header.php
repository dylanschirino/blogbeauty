<!DOCTYPE html>
<html>
<head>
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta charset="utf-8">
  <meta name="description" content="Blog Beauté de ShowYourGlitters">
  <meta name="author" content="ShowYourGlitters">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/styles.css';?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'img/favicon.png';?>">
  <title><?php bloginfo();?>-<?php the_title();?></title>
</head>
<body id="haut">
  <header class="header">
    <div class="header__banner">
      <h1 aria-level="1" class="header__title">
        <?php echo bloginfo('name');?>
      </h1>
      <p class="header__subtitle">
        <?php echo bloginfo('description');?>
      </p>
    </div>
