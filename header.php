<!DOCTYPE HTML>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wordpress Fun</title>
		<meta property="og:image" content="https://peprojects.dev/alpha-4/john/"/>
		<title><?php echo wp_get_document_title(); ?></title>

		<?php wp_head(); ?>
	</head>	

	<body <?php body_class(); ?>>
		<header class="site-header">
			<inner-column>
				<h1 class="loud-voice">Header</h1>
				
				<?php include("templates/components/site-menu.php"); ?>
			</inner-column>
		</header>

		<main class="page-content">

