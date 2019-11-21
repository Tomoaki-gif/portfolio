<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<?php wp_head(); ?>
	
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<title>十時や｜Jujiya</title>
</head>
<body>
	<!-- header start -->
	<header id="header">
		<div class="header-wrap">
			<div class="container">

<!-- 				<button class="hiraku-open-btn" id="offcanvas-btn-right" data-toggle-offcanvas="#js-hiraku-offcanvas-1">
					<span class="hiraku-open-btn-line"></span>
				</button>
 -->
				<!-- navbar for desktop -->
				<nav class="navbar">	
					<?php
					wp_nav_menu(
						//.header-listを置き換えて、PC用メニューを動的に表示する
						array(
							'depth' => 1,
							'theme_location' => 'global', //グローバルメニューをここに表示すると指定
							'menu_class' => 'g-nav',
						)
					);
					?>
				</nav>

				<h1 class="header-image">
					<div class="jujiya-image"><img src="<?php echo get_template_directory_uri() ?>/img/layout/jujiya_top.png" alt="jujiya-bento"></div>
					<div class="jujiya-caption"><img src="<?php echo get_template_directory_uri() ?>/img/layout/jujiya.png" alt="JUJI-YA"></div>
				</h1>

			</div>
		</div>
	</header>
	<!-- header end -->

	<!-- navbar for mobile -->
	<!-- <div class="offcanvas-right"> -->
	<!-- <?php
	//.drawer-navを置き換えて、スマホ用メニューを動的に表示する
	// wp_nav_menu(
	// 	array(
	// 		'depth' => 1,
	// 		'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
	// 		'menu_class' => 'g-nav',
	// 	)
	// );
	?> -->
	<!-- </div> -->