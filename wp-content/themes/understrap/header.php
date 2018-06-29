<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="bg-header" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" id="head-container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                             title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                               title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>


					<?php } ?>

                <h1><a href="<?php echo site_url(); ?>"><?= wp_get_attachment_image(get_theme_mod( 'custom_logo' ));?></a></h1>

                <button id="nav-btn" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse header-menu',
						'container_id'    => 'navbarSupportedContent',
						'menu_class'      => 'nav text-center',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

                <div class="header-btn">
                    <button >Get in touch</button>            <!--Button in header-->
                </div>

			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

        <?php if ( 'container' == $container ) : ?>
        <div class="container" >
            <?php endif; ?>

        <div class="row banner">
            <div class="col-lg-6">
                <h2>Make your name</h2>
                <p>There is no staying in any one place. For at one and the same time everything has to be done everywhere.</p>
            </div>
            <div class="col-lg-4">
                <img src="<?php bloginfo("template_url"); ?>/img/man-01.png" alt="Man">
            </div>
        </div>

            <?php if ( 'container' == $container ) : ?>
        </div><!-- .container -->
    <?php endif; ?>

            <div class="row clients-label">                         <!--Header Label of Clients-->
                <div class="col-3">
                    <span class="trust">Trusted by leading brands</span>
                </div><!--col-3-->
                <div class="col-9">
                    <ul>
                        <li><img src="<?php bloginfo("template_url"); ?>/img/transferwise.png" alt=""></li>
                        <li><img src="<?php bloginfo("template_url"); ?>/img/spotify.png" alt=""></li>
                        <li><img src="<?php bloginfo("template_url"); ?>/img/yuriapharm.png" alt=""></li>
                        <li><img src="<?php bloginfo("template_url"); ?>/img/usaid.png" alt=""></li>
                        <li><img src="<?php bloginfo("template_url"); ?>/img/ustream.png" alt=""></li>
                    </ul>
                </div>
            </div>    <!-- End Header Label of Clients-->


	</div><!-- #wrapper-navbar end -->
