<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">
			<div class="site-branding-container">
			<div id="nav-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .site-branding-container -->
			<div class="content-header">
						<div class="content-header-left">
						<h2>Download Our app and enjoy!</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque tempore, unde qui rerum modi, incidunt est iusto dicta nesciunt labore, non fuga! At a pariatur excepturi labore, tempore ipsa?</p>
						<form method="get" action="file.doc">
   						<button type="submit">Download App</button>
						</form>
						<a href="http://www.youtube.com/">
						<img src="http://test.piotrsom.beep.pl/wp-content/uploads/2022/02/Icon-ionic-ios-2.png">
    					<button class="video">Watch Video</button>
						</a>
						</div>
						<div class="content-header-right">
							<img src="http://test.piotrsom.beep.pl/wp-content/uploads/2022/02/Saly-19.png">
						</div>
					</div>
			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
