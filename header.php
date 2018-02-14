<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/assets/fonts/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/foundation.css">
	<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon.png">
	<scrip src="<?php bloginfo( 'template_directory' ); ?>/assets/js/foundation.min.js"></scrip>

	<?php wp_enqueue_script("jquery"); ?>

	<?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<div class="row">
			<div class="medium-12 columns">
				<a href="<?php echo site_url();?>">
					<h1>
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png" alt="" />
						Procompi
					</h1>
				</a>
			</div>
		</div>
	</div>
