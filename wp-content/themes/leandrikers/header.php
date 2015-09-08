<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<?php global $tpb_options; ?>
		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/manifest.json">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#222222">
		<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri();?>/library/images/favicons/browserconfig.xml">
		<meta name="theme-color" content="#222222">

        <!-- Typekit -->
        <script src="//use.typekit.net/chb1ynt.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        
        <!-- Google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400italic' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<header class="header">

			<nav role="navigation">
		        <div class="navbar navbar-default">
		          	<div class="container">
		            
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<i class="fa fa-bars"></i>
								Menu
							</button>

							<?php if ( ( '' != $tpb_options['site_logo']['url'] ) ) {
								$logo_url = $tpb_options['site_logo']['url'];
								$site_url = get_bloginfo('url');
								$site_name = get_bloginfo('name');
								$site_description = get_bloginfo('description');
							}// End IF Statement */


							if ( is_ssl() ) $logo_url = str_replace( 'http://', 'https://', $logo_url );
							echo '<a class="navbar-brand" href="' . esc_url( $site_url ) . '" title="' . esc_attr( $site_description ) . '"><img class="img-responsive" src="'.$logo_url.'" alt="'.esc_attr($site_name).'"/></a>' . "\n";
							
							?>
						</div>


						<div class="navbar-collapse collapse navbar-responsive-collapse">
							<ul class="social_menu pull-right hidden-xs hidden-sm">
								<li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['twitter_url'];?>"><span class="fa fa-fw fa-twitter"></span></a></li>
								<li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['facebook_url'];?>"><span class="fa fa-fw fa-facebook"></span></a></li>
								<li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['instagram_url'];?>"><span class="fa fa-fw fa-instagram"></span></a></li>
								<li class="social_menu--item"><a target="_blank" href="<?php echo $tpb_options['pinterest_url'];?>"><span class="fa fa-fw fa-pinterest"></span></a></li>
							</ul>
							<?php bones_main_nav(); ?>
							<ul class="social_menu text-center visible-xs visible-sm">
								<li class="social_menu--item"><a href="<?php echo $tpb_options['twitter_url'];?>"><span class="fa fa-fw fa-twitter"></span></a></li>
								<li class="social_menu--item"><a href="<?php echo $tpb_options['facebook_url'];?>"><span class="fa fa-fw fa-facebook"></span></a></li>
								<li class="social_menu--item"><a href="<?php echo $tpb_options['instagram_url'];?>"><span class="fa fa-fw fa-instagram"></span></a></li>
								<li class="social_menu--item"><a href="<?php echo $tpb_options['pinterest_url'];?>"><span class="fa fa-fw fa-pinterest"></span></a></li>
							</ul>
							
						</div>
					</div>
				</div> 

		    </nav>

		</header> <?php // end header ?>

		<?php if (is_archive() || is_search() || is_page_template('template-portfolio.php')) : ?>
			<nav role="navigation">
		        <div class="navbar navbar-secondary">
		          	<div class="container">
		            
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-secondary-collapse">
								<i class="fa fa-bars"></i>
								Categories
							</button>
						</div>


						<div class="navbar-collapse collapse navbar-secondary-collapse">
							
							<?php secondary_nav('secondary-nav','nav navbar-nav'); ?>

							<form action="<?php echo home_url( '/' ); ?>" method="get" class="navbar-form navbar-right">
							    <fieldset>
							    <div class="input-group">
							      <input type="text" name="s" id="search" placeholder="<?php _e("Search","bonestheme"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
							      <span class="input-group-btn">
							        <button type="submit" class="btn btn-search"><span class="fa fa-search"></span></button>
							      </span>
							    </div>
							    </fieldset>
							</form>

							
							
						</div>
					</div>
				</div> 

		    </nav>
		<?php endif; ?>	

	    