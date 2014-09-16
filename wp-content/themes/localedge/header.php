<?php
/**
 * The template for displaying the header.
 *
 * Contains the opening tag for the page structure
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(''); ?></title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/wp-content/themes/localedge/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"><![endif]-->
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/wp-content/themes/localedge/images/win8-tile-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--[if lt IE 9]>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.min.js"></script>
<![endif]-->

<?php wp_head(); ?>

<link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Forum' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Forum' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,400' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>

	
<div class="topline"></div>
		<header id="masthead" class="header" role="banner">

			<div id="inner-header" class="wrap clearfix">
            <div class="container-fluid">
    			<div class="row-fluid">
        			<div class="col-lg-5 col-md-4 col-xs-12">
            
				<?php // to use a image just replace the bloginfo('name') with <img> ?>
				<div id="logo" class="h1"><a href="#"><img src="/wp-content/themes/localedge/images/logo.png"></a></div>
             </div>
             <div class="col-md-2"></div>
			 <div class="col-lg-5 col-md-6 col-xs-12">
				<div class="call">Call us today for an appointment!</div>
              <div class="tel"><a href="tel:585-371-8734">585-371-8734</a></div>
			</div>
			</div>

		</header>

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'test' ); ?></a>

		<nav id="main-navigation" class="clearfix" role="navigation">

			<?php localedge_main_nav(); ?>

		</nav>

		<?php // Interior Header Image ?>
        <div class="banner-wrap">
            <div id="banner">
                
            </div>
        </div>

		<div id="content">

			<div id="inner-content" class="wrap clearfix">

				<?php // Test for active sidebars to set the main content width
					if(is_active_sidebar( 'left-sidebar' ) && is_active_sidebar( 'right-sidebar' )) { //both sidebars
						$main_class = 'col-sm-6 col-sm-push-3';
					}
					elseif(is_active_sidebar( 'left-sidebar' ) && !is_active_sidebar( 'right-sidebar' )) { //left sidebar
						$main_class = 'col-sm-9 col-sm-push-3';
					}
					elseif(!is_active_sidebar( 'left-sidebar' ) && is_active_sidebar( 'right-sidebar' )) { //right sidebar
						$main_class = 'col-sm-9';
					}
					else { //no sidebar
						$main_class = 'col-sm-12';
					}
				?>

				<div id="main" class="<?php echo $main_class;?> clearfix" role="main">
