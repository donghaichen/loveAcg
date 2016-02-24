<!DOCTYPE HTML>
<html>
	<head>
		<link rel="logo" href="favicon.ico">
		<title><?php
			global $page, $paged;
			$site_description = get_bloginfo( 'description', 'display' );
			if ($site_description && ( is_home() || is_front_page() )) {
				bloginfo('name');
				echo " - $site_description";
			} else {
				echo trim(wp_title('',0));
				if ( $paged >= 2 || $page >= 2 )
					echo ' - ' . sprintf( __( '第%s页' ), max( $paged, $page ) );
				echo ' | ' ;
				bloginfo('name');
			}
			?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel='stylesheet' id='gg-raleway-css'  href='//fonts.googleapis.com/css?family=Raleway%3A300%2C400%2C500%2C600%2C700%2C800%2C900%26subset%3Dlatin%2Clatin-ext' type='text/css' media='all' />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
	<!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

		<!-- Container-->
			<div id="container" class="container">

				<!-- Nav -->
					<nav id="nav">
							<?php
							$menu = array(
								'theme_location' => 'header-menu',
								'container'	=> false,
								'echo'	=> false,
								'items_wrap' => '%3$s',
								'depth'	=> 0,
							);
							echo strip_tags(wp_nav_menu( $menu ), '<a>' );
							?>
                </nav>
    
    
