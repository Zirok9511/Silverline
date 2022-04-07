<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		
		<!-- ESTILO PERSONALIZADO -->
<style>
		/* Ocultando iconos de los titulos*/
.elementor-icon-box-title{
	display:none;
}

/* Reduciendo el margen superior para alinear con logo en footer*/
.elementor-2 .elementor-element.elementor-element-9a084b8 .elementor-heading-title {

	    margin-top: 20px !important;
}

/** Ocultando el footer **/
#site-footer{
	display: none !important;
}

div.footer-nav-widgets-wrapper.header-footer-group{
	display: none !important;
}

/** Ocultando el header **/
#site-header{
	display:none !important;
}

/** Quitando el padding del logo para ajusar con la siguiente seccion **/
.singular .entry-header {
    padding: 0rem 0;
}

.post-inner {
    padding-top: 0rem;
}

/* Ajustando el padding del logo como header */
.elementor-section.elementor-top-section.elementor-element.elementor-element-27bdefa.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default{
	padding: 20px 0px 15px 0px !important;
}

/* Ajustando el margen de los widget que mostraban las redes sociales */
.elementor-widget:not(:last-child) {
    margin-bottom: 0px;
}

/* El padding de los banner*/
.elementor-section.elementor-top-section.elementor-element.elementor-element-b4bb744.elementor-section-content-middle.elementor-section-stretched.elementor-section-full_width.elementor-section-height-default.elementor-section-height-default{
	    /**width: 1925px !important;
    left: -673.5px !important;
**/}


/* Padding de imagen de web developer */
.elementor-section.elementor-inner-section.elementor-element.elementor-element-bd3ee04.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default{
	    padding: 0px;
}
/*para laptops peque;as*/
	@media only screen and (max-width: 1370px) and (max-height: 770px){
		.elementor-2 .elementor-element.elementor-element-ab755c0.elementor-view-framed .elementor-icon, .elementor-2 .elementor-element.elementor-element-ab755c0.elementor-view-default .elementor-icon{
	padding-right:10px;
	}
		.elementor-949 .elementor-element.elementor-element-9a084b8 .elementor-heading-title {
    color: #FFFFFF;
    font-family: "Roboto", Sans-serif;
    font-size: 45px;
    font-weight: 600;
}
		
.elementor-949 .elementor-element.elementor-element-86a5c1e img {
    width: 85%;
    max-width: 100%;
}
		.elementor-949 .elementor-element.elementor-element-1044cdb img {
    width: 75%;
    max-width: 100%;
    padding-top: 32px;
}
		
		.elementor-949 .elementor-element.elementor-element-* > .elementor-widget-container{
			padding: 0px 60px 15px 0px;
		}
		.elementor-949 .elementor-element.elementor-element-d7280b2 > .elementor-widget-container {
    padding: 0px 50px 0px 50px !important;
}
	
	.elementor-2 .elementor-element.elementor-element-839e403 .elementor-heading-title{
		letter-spacing: 0.8px;
	}
	
	.elementor-949 .elementor-element.elementor-element-* > .elementor-widget-container {
    padding: 0px 60px 15px 0px;
}
		.elementor-949 .elementor-element.elementor-element-* .elementor-icon-box-description  {
    color: #000000;
    font-family: "Roboto", Sans-serif;
    font-size: 20px;
    font-weight: 400;
}
	
}

	
/*responsive para tablet*/
@media only screen and (max-width: 915px){
	
.elementor-2 .elementor-element.elementor-element-ab755c0.elementor-view-framed .elementor-icon, .elementor-2 .elementor-element.elementor-element-ab755c0.elementor-view-default .elementor-icon{
	padding-right:10px;
	}
	
	.elementor-2 .elementor-element.elementor-element-839e403 .elementor-heading-title{
		letter-spacing: 0.8px;
	}
	
	.elementor-2 .elementor-element.elementor-element-80c6bc9 .elementor-button{
		font-size: 30px;
		padding: 12px 50px 12px 50px;
	}
	
	.elementor-button-link.elementor-button.elementor-size-sm:hover{
		background-color:#0071BF !important;
	}
	
	.elementor-2 .elementor-element.elementor-element-be7f57d .elementor-button{
		font-size: 30px;
	}
	.elementor-2 .elementor-element.elementor-element-1dfa46d .elementor-heading-title {
    font-size: 60px;
}
	
	.elementor-2 .elementor-element.elementor-element-1f69895 .elementor-heading-title{
		    font-size: 30px;
	}
	
	.elementor-2 .elementor-element.elementor-element-c73463b img{
		width:70%;
	}
	.elementor-element.elementor-element-47eb294.elementor-widget.elementor-widget-image{
	    padding: 50px !important;
}	
	
	.elementor-element-fecf722{
		padding-top:50px;
	}
	
	.entry-content p, .entry-content li {
    line-height: 1.476;
    font-size: 25px;
}
	.elementor-2 .elementor-element.elementor-element-1f69895 .elementor-heading-title{
		font-size: 33px;
	}
	.elementor-element-65a0a03>.elementor-widget-container{
		   padding: 0px 90px 0px 90px !important
	}
	
	.elementor-2 .elementor-element.elementor-element-ab755c0 > .elementor-widget-container{
		    padding: 0px 20px 15px 0px;
	}
	
	.col-md-6{
		padding: 0px 20px 40px 20px;
	}
	
	p.elementor-2 .elementor-element.elementor-element-e2c698b .elementor-icon-box-description{
		font-size: 20px;
	}
	
	.elementor-container.elementor-column-gap-default{
		padding: 0px 40px 0px 20px;
	}
	
	.elementor-column.elementor-col-50.elementor-top-column.elementor-element.elementor-element-24b5f97{
		padding: 0px 49px 0px 0px;
	}
	
	
	.elementor-section.elementor-top-section.elementor-element.elementor-element-b0170ec.elementor-section-full_width.elementor-section-stretched.elementor-section-height-default.elementor-section-height-default{
		margin-bottom: 0px !important;
    padding-bottom: 0px;
	}
	
	.elementor-element-b2666e9 {
		    padding-top: 0px;
	}
}



/*responsive para telefono*/
@media only screen and (max-width: 415px){
	
	/*Encabezado de segundo segmento*/
.elementor-2 .elementor-element.elementor-element-839e403 .elementor-heading-title {
    font-size: 55px;
}

	/*iconos centrados*/
	.elementor-icon i, .elementor-icon svg {
    width: 1em;
    height: 1em;
    position: static;
    display: block;
}
	
	/*botones de primer banner*/
		.elementor-2 .elementor-element.elementor-element-80c6bc9 .elementor-button{
		font-size: 15px;
		padding: 12px 50px 12px 50px;
	}
	
	.elementor-button-link.elementor-button.elementor-size-sm:hover{
		background-color:#0071BF !important;
	}
	
	.elementor-2 .elementor-element.elementor-element-be7f57d .elementor-button{
		font-size: 15px;
	}
	.elementor-2 .elementor-element.elementor-element-1dfa46d .elementor-heading-title {
    font-size: 40px;
}
	
	.elementor-2 .elementor-element.elementor-element-1f69895 .elementor-heading-title{
		    font-size: 20px;
	}
	
	.elementor-2 .elementor-element.elementor-element-c73463b img{
		width:100%;
	}
	.elementor-element.elementor-element-47eb294.elementor-widget.elementor-widget-image{
	    padding: 50px !important;
}	
	
	.elementor-2 .elementor-element.elementor-element-47eb294 img {
    width: 100%;
    max-width: 100%;
}
	
	.elementor-element-fecf722{
		padding-top:50px;
	}
	
	.entry-content p, .entry-content li {
    line-height: 1.476;
    font-size: 25px;
}
	.elementor-2 .elementor-element.elementor-element-1f69895 .elementor-heading-title{
		padding-top: 20px;
		font-size: 24px;
	}
	.elementor-element-65a0a03>.elementor-widget-container{
		   padding: 20px 0px 0px 0px !important
	}
	
	.elementor-2 .elementor-element.elementor-element-ab755c0 > .elementor-widget-container{
		    padding: 0px 20px 15px 0px;
	}
	
	.col-md-6{
		padding: 0px 20px 40px 20px;
	}
	
	p.elementor-2 .elementor-element.elementor-element-e2c698b .elementor-icon-box-description{
		font-size: 20px;
	}
	
	.elementor-container.elementor-column-gap-default{
		padding: 0px 40px 0px 20px;
	}
	
	.elementor-column.elementor-col-50.elementor-top-column.elementor-element.elementor-element-24b5f97{
		padding: 0px 49px 0px 0px;
	}
	
	
	.elementor-section.elementor-top-section.elementor-element.elementor-element-b0170ec.elementor-section-full_width.elementor-section-stretched.elementor-section-height-default.elementor-section-height-default{
		margin-bottom: 0px !important;
    padding-bottom: 0px;
	}
	
	.elementor-element-b2666e9 {
		    padding-top: 0px;
	}
/*	.elementor-element.elementor-element-47eb294.elementor-widget.elementor-widget-image{
	    padding: 20px !important;
}	
	
	.elementor-2 .elementor-element.elementor-element-65a0a03 > .elementor-widget-container{
		    padding: 20px 20px 0px 20px !important;
	}*/
}

		</style>
		
		<!-- FIN DE ESTILO PERSONALIZADO -->
	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>

					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Site description.
							twentytwenty_site_description();
						?>

					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

						if ( true === $enable_header_search ) {
							?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<?php twentytwenty_the_theme_svg( 'search' ); ?>
										<span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

							<?php
						}
						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
