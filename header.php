<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title></title>
	
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php 
		wp_deregister_script( 'jquery' );
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
		wp_register_script( 'jquery ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js' );
		wp_enqueue_script('xacThemeMain', get_bloginfo('stylesheet_directory') . '/js/xacThemeMain.js', array('jquery', 'jquery ui'), '18012012' );

		wp_register_script('modernizr', 'http://www.modernizr.com/downloads/modernizr-2.0.6.js');
		wp_enqueue_script('modernizr');	
		
		if( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		wp_head();
	?>

</head>

<body <?php body_class(); ?>>
<div id="container">
	<header>
			<nav>
				<?php xac_nav_menu(); //wp_nav_menu( );?>
			</nav>
			
			<div class="breadcrumbs">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>


			<div id="notification"><?php
				switch ($_SESSION['mssg-status']) {
					case 'error':
						echo '<span class="error">' . $_SESSION['mssg-content'] . '</span>';
						break;
					case 'success':
						echo '<span class="success">' . $_SESSION['mssg-content'] . '</span>';
					default:
						break;
				}
				
				$_SESSION['mssg-status'] = '';
				$_SESSION['mssg-content'] = '';

				?>
			</div>
	</header><!-- #branding -->

	<div id="main">
