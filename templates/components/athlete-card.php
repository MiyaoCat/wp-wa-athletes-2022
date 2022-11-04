<athlete-card>
	<h2 class="name"><?php echo get_the_title(); ?></h2>
	<h3 class="high-school">High School:</h3>
	<p class="normal-voice"><?php the_field('high_school'); ?></p>

	<?php  
		$nba_teams = get_field('nba_teams');

		if ($nba_teams):
	?>
	<a href="<?php the_permalink(); ?>">More Info</a>
	<ul>
		<?php foreach ($nba_teams as $post):
			setup_postdata($post);
		?>
		
		<li>
			<h4 class="alert-voice"><?php the_title(); ?></h4>

		<?php endforeach; ?>
		</li>

		<?php wp_reset_postdata(); endif; ?>

	</ul>


</athlete-card>