<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

    <!--FAVICON--> 
    <link href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/logo.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
    <!-- this is for google fonts - Roboto font -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
    <div class="container">

<!-- HAMBURGER NAVIGATION -->
        <nav class="mobile-nav js-mobile-nav ">
            <div class="mobile-nav__close">
                <a href="#" class="js-mobile-nav-close"> &times;</a>
            </div>
            <ul>
                <li class="home"><a href="<?php bloginfo('url'); ?>"><img class= "hvr-wobble-to-top-right" src="<?php bloginfo('template_url'); ?>/assets/dist/img/logo_small.png" alt="45 Degrees logo" title="Go to 45 Degrees Home Page"></a></li>

                <?php html5blank_nav(); ?>
            </ul>
        </nav>

        <div class="hamburger_stick">
            <h2>45 Degrees</h2>
            <div class="hamburger">
                <a href="#" class="js-mobile-trigger">
                    <svg class="icon icon-menu"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-menu"></use></svg>
                </a>
            </div> <!-- closes hamburger menu -->
        </div> <!--close hamburger stick -->

    <!-- NAVIGATION -->
        <nav class="nav">
            <h2 class="hide">navigation</h2>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>"><img class="home hvr-wobble-to-top-right" src="<?php bloginfo('template_url'); ?>/assets/dist/img/logo_small.png" alt="45 Degrees logo" title="Go to 45 Degrees Home Page"></a></li>

                    <?php html5blank_nav(); ?>
                </ul>
        </nav>

        <main>
