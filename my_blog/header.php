<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Crologis Blog</title>

	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/imagenes/globo.ico" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,100' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	
	<script>
		$(function(){
			$("#slideshow").slidesjs({
				height: 300,
				navigation:false
			});
		});

	</script>
	<?php wp_head();?>
</head>
<body>
<div class="cuerpo">
	

	<header id="header">
		<div id="logo"><p><strong>CROLOGIS</strong></p></div>
		<nav>
			<?php wp_nav_menu(array(
			'container' => false,
			'items_wrap' => '<ul id="menu-top">%3$s</ul>',
			'theme_location' => 'menu'
			));

			?>
		</nav>
	</header><!-- /header -->