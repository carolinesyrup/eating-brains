<?php
/**
 * The custom template for the one-page style front page. Kicks in automatically. Booya!
 */
get_header(); ?>

	<div id="primary" class="content-area lander-page">
		<main id="main" class="site-main" role="main">

			<section id="headline">
				<div class="description">
					<?php
						$greeting = get_field('greeting');
						$short_description = get_field('short_description');
					?>
					<p class="site-description"><span class="greeting"><?php echo $greeting; ?></span> <?php echo $short_description; ?></p>
				</div>
			</section>

			<section id="about">
				<div class="container about-text">
					<?php
						$query = new WP_Query( 'pagename=about' );
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								echo '<h2 class="about-title">' . get_the_title() . '</h2>';
								echo '<div class="entry-content">';
								the_content();
								echo '</div>';
							}
						}
						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
			</section>

			<section id="skills">
				<div class="container">
					<?php
						$icon_1 = get_field('icon_1');
						$icon_2 = get_field('icon_2');
						$icon_3 = get_field('icon_3');
						$skill_title_1 = get_field('skill_title_1');
						$skill_title_2 = get_field('skill_title_2');
						$skill_title_3 = get_field('skill_title_3');
						$skill_description_1 = get_field('skill_description_1');
						$skill_description_2 = get_field('skill_description_2');
						$skill_description_3 = get_field('skill_description_3');
					?>
					<ul class="skills-front">
						<li class="individual-skill">
							<figure class="skills-image"><i class="fa <?php echo $icon_1; ?> fa-5x"></i></figure>
							<aside class="skills-text">
									<h3 class="skills-title"><?php echo $skill_title_1; ?></h3>
  								<div class="skills-text"><?php echo $skill_description_1; ?></div>
							</aside>
						</li>
						<li class="individual-skill">
							<figure class="skills-image"><i class="fa <?php echo $icon_2; ?> fa-5x"></i></figure>
							<aside class="skills-text">
									<h3 class="skills-title"><?php echo $skill_title_2; ?></h3>
  								<div class="skills-text"><?php echo $skill_description_2; ?></div>
							</aside>
						</li>
						<li class="individual-skill">
							<figure class="skills-image"><i class="fa <?php echo $icon_3; ?> fa-5x"></i></figure>
							<aside class="skills-text">
									<h3 class="skills-title"><?php echo $skill_title_3; ?></h3>
  								<div class="skills-text"><?php echo $skill_description_3; ?></div>
							</aside>
						</li>
					</ul>
				</div>
			</section>

			<section id="contact">
				<div class="container">
					<?php
						$cta_image = get_field('cta_image');
						$cta_title = get_field('cta_title');
						$cta_subtitle = get_field('cta_subtitle');
						$email_address = get_field('email_address');
						$social_icons_title = get_field('social_icons_title');
					?>
          <div class="one-half contact-form alignleft">
						<div class="contact-image"><img src="<?php echo $cta_image; ?>"></div>
          </div>
          <div class="one-half alignright">
							<div class="entry-content">
								<h1 class="cta"><?php echo $cta_title; ?></h1>
								<p class="cta-sub"><?php echo $cta_subtitle; ?></p>
								<p class="cta-email"><span class="underline"><?php echo $email_address; ?></span></p>
								<p class="social-title"><?php echo $social_icons_title; ?></p>
              <ul class="social-icons">
                  <li><a href="http://twitter.com/carolinesyrup"><i class="fa fa-twitter fa-2x"></i></a></li>
                  <li><a href="http://instagram.com/carolinesyrup"><i class="fa fa-instagram fa-2x"></i></a></li>
                  <li><a href="http://linkedin.com/in/carogriffin"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  <li><a href="http://github.com/carolinesyrup"><i class="fa fa-github fa-2x"></i></a></li>
              </ul>
							</div>
          </div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
