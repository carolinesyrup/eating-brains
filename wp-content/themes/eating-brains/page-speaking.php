<?php
/**
* Template Name: Speaker
* Description: Page template for speaking page
*
* @package Eating_Brains
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of loop
			?>

			<?php if( get_field('upc_talk_title_1') ): ?>
				<h2 class="speaker-title">Upcoming Talks</h2>
			<?php endif; ?>

			<?php if( get_field('upc_talk_title_1') ): ?>
					<div class="past-talk">
						<?php
							$upc_talk_title_1 = get_field('upc_talk_title_1');
							$upc_talk_meta_1 = get_field('upc_talk_meta_1');
							$upc_talk_description_1 = get_field('upc_talk_description_1')
						?>
						<h3 class="talk-title"><?php echo $upc_talk_title_1; ?></h3>
						<p class="talk-meta"><?php echo $upc_talk_meta_1; ?></p>
						<p><?php echo $upc_talk_description_1; ?></p>
					</div>
				<?php endif; ?>

				<?php if( get_field('upc_talk_title_2') ): ?>
					<div class="past-talk">
						<?php
							$upc_talk_title_2 = get_field('upc_talk_title_2');
							$upc_talk_meta_2 = get_field('upc_talk_meta_2');
							$upc_talk_description_2 = get_field('upc_talk_description_2')
						?>
						<h3 class="talk-title"><?php echo $upc_talk_title_2; ?></h3>
						<p class="talk-meta"><?php echo $upc_talk_meta_2; ?></p>
						<p><?php echo $upc_talk_description_2; ?></p>
					</div>
				<?php endif; ?>

				<?php if( get_field('upc_talk_title_3') ): ?>
					<div class="past-talk">
						<?php
							$upc_talk_title_3 = get_field('upc_talk_title_3');
							$upc_talk_meta_3 = get_field('upc_talk_meta_3');
							$upc_talk_description_3 = get_field('upc_talk_description_3')
						?>
						<h3 class="talk-title"><?php echo $upc_talk_title_3; ?></h3>
						<p class="talk-meta"><?php echo $upc_talk_meta_3; ?></p>
						<p><?php echo $upc_talk_description_3; ?></p>
					</div>
				<?php endif; ?>

				<?php if( get_field('prev_talk_title_1') ): ?>
					<h2 class="speaker-title">Previous Talks</h2>
				<?php endif; ?>

				<?php if( get_field('prev_talk_title_3') ): ?>
					<div class="past-talk">
						<?php
							$prev_talk_title_3 = get_field('prev_talk_title_3');
							$prev_talk_meta_3 = get_field('prev_talk_meta_3');
							$prev_talk_description_3 = get_field('prev_talk_description_3')
						?>
						<h3 class="talk-title"><?php echo $prev_talk_title_3; ?></h3>
						<p class="talk-meta"><?php echo $prev_talk_meta_3; ?></p>
						<p><?php echo $prev_talk_description_3; ?></p>
					</div>
				<?php endif; ?>

				<?php if( get_field('prev_talk_title_2') ): ?>
					<div class="past-talk">
						<?php
							$prev_talk_title_2 = get_field('prev_talk_title_2');
							$prev_talk_meta_2 = get_field('prev_talk_meta_2');
							$prev_talk_description_2 = get_field('prev_talk_description_2')
						?>
						<h3 class="talk-title"><?php echo $prev_talk_title_2; ?></h3>
						<p class="talk-meta"><?php echo $prev_talk_meta_2; ?></p>
						<p><?php echo $prev_talk_description_2; ?></p>
					</div>
				<?php endif; ?>

				<?php if( get_field('prev_talk_title_1') ): ?>
					<div class="past-talk">
						<?php
							$prev_talk_title_1 = get_field('prev_talk_title_1');
							$prev_talk_meta_1 = get_field('prev_talk_meta_1');
							$prev_talk_description_1 = get_field('prev_talk_description_1')
						?>
						<h3 class="talk-title"><?php echo $prev_talk_title_1; ?></h3>
						<p class="talk-meta"><?php echo $prev_talk_meta_1; ?></p>
						<p><?php echo $prev_talk_description_1; ?></p>
					</div>
				<?php endif; ?>

				<?php
				while ( have_posts() ) : the_post();
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
