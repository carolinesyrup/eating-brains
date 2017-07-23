<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Eating_Brains
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();
	if(has_post_thumbnail()) {
	$image_src = wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>

	<section class="single-blog-hero" style="background: url(<?php echo $image_src; ?>) no-repeat center center/cover;">
		<div class="overlay single-title">

				<h1 class="overlay_title"><?php the_title(); ?></h1>
				<p class="overlay_date"><?php the_date();?></p>

		</div>
	</section>

	<?php } else { ?>
		<div class="single-title">
			<h1><?php the_title(); ?></h1>
			<p><?php the_date(); ?></p>
		</div>
	<?php } ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			the_content();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
