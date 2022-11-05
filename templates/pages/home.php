<section class="page-section">
	<inner-column>
		
		<h1 class="loud-voice">Home Page</h1>

		<?php
get_header();
?>

<div id="content">
<ul>
<?php
// we add this, to show all posts in our
// Glossary sorted alphabetically
if (is_category('Athletes')) 
{
$args = array( 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
$athletesposts = get_posts( $args ); 
}
foreach( $athletesposts as $post ) :	setup_postdata($post); 
 ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
	</inner-column>
</section>