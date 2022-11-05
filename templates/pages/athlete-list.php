<section class="page-section">
	<inner-column>
		<h1 class="loud-voice">Athlete List Page</h1>

		<ul class="athlete-list">
			<?php 
				$parameters = [
					"post_type" => 'athletes',
				];
			
				$query = new WP_Query( $parameters );

				while ( $query->have_posts() ) : $query->the_post();
					echo "<li class='athlete'>";
					include( getFile("templates/components/athlete-card.php") );
					echo "</li>";
				endwhile;
			
				wp_reset_postdata();
			?>
		</ul>

	</inner-column>
</section>