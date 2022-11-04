<?php get_header(); ?>

<?php 
	if ( is_page('home') ) {
		include('templates/pages/home.php');
	}

	if ( is_page('athlete-list') ) {
		include('templates/pages/athlete-list.php');
	}

	if ( is_singular('athletes') ) {
		include('templates/pages/athlete-detail.php');
	}

	if ( is_404() ) {
		include('templates/pages/404.php');
	}
?>
<?php get_footer(); ?>