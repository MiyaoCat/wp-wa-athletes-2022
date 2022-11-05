<athlete-card>
	<h2 class="name"><?php echo get_the_title(); ?></h2>

	<picture>
		<img src="<?php the_field('headshot'); ?>" alt="">
	</picture>

	<hometown>
		<h3 class="alert-voice">Hometown:</h3>
		<p class="normal-voice"><?php the_field("hometown"); ?></p>
	</hometown>

	<high-school>
		<h3 class="high-school alert-voice">High School:</h3>
		<p class="normal-voice"><?php the_field('high_school'); ?></p>
	</high-school>

	<a href="<?php the_permalink(); ?>">More Info</a>
	
</athlete-card>