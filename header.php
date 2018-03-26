<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	
	<?php wp_head(); ?>
	
	<link rel="stylesheets" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

</head>
	
<body>
	<header>
		<div class="wrapper">
			<h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
		</div>	
	</header>
</body>
