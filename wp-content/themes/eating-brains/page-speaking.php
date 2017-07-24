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

			<!-- Speaker intro and photo -->

			<?php if( get_field('speaker_photo') ): ?>
						<?php
							$speaker_photo = get_field('speaker_photo');
							$speaker_intro = get_field('speaker_intro');
						?>
						<img class="speaker-photo" src="<?php echo $speaker_photo; ?>" />
						<div class="speaker-intro">
							<?php echo $speaker_intro; ?>
						</div>
				<?php endif; ?>

				<!-- Upcoming talks -->

				<h2 class="speaker-subheading">Upcoming Talks</h2>

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

				<!-- Previous talks -->

				<?php if( get_field('prev_talk_title_1') ): ?>
					<h2 class="speaker-subheading">Previous Talks</h2>
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
						<p class="talk-description"><?php echo $prev_talk_description_1; ?></p>
					</div>
				<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
