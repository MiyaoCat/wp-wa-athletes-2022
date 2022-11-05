<section class="page-section">
	<inner-column>
		<h1 class="loud-voice">Athlete Details</h1>

		<h2 class="name"><?php the_field("name"); ?></h2>

		<picture>
			<img src="<?php the_field('headshot'); ?>" alt="">
		</picture>

		<h3 class="attention-voice">Hometown:</h3>
		<p class="normal-voice"><?php the_field("hometown"); ?></p>
		<h3 class="attention-voice">NBA Teams Played for:</h3>
		<ul>
			<?php  
				$nba_teams = get_field('nba_teams');

				if ($nba_teams):
					foreach ($nba_teams as $post):
					setup_postdata($post);
			?>
			
			<li>
				<h4 class="alert-voice"><?php the_title(); ?></h4>

			<?php endforeach; ?>
			</li>

			<?php wp_reset_postdata(); endif; ?>

		</ul>
	</inner-column>
</section>