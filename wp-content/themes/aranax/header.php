<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Denning College for Teachers' Education, Tezu, Arunachal Pradesh, is promotion of education, while maintaining traditional values and rich cultural heritage." />
	<meta name="keywords" content="Denning College,Teachers' Education,Arunachal Pradesh,North East India,Rajib Gandhi University,B.Ed.,BEd,Bachelor of Education,Management,Students">
	<meta name="author" content="Aranax Technologies Pvt Ltd">

	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

	<!-- CSS -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	<!-- Custom CSS -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_directory');?>/images/ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_bloginfo('template_directory');?>/images/ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo('template_directory');?>/images/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_bloginfo('template_directory');?>/images/ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo('template_directory');?>/images/ico/favicon-16x16.png">
    
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	
</head>

<body>

	


<div class="main-image">
	<div class="container">
		<div class="row no-gutter">
			<div class="col-sm-3 logo">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/logo.png" alt="Denning College" class="img-responsive">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#aranax-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
		                
			</div>
			<div class="col-sm-3 home-top-menu">
				
				<nav class="navbar" role="navigation">
					<div class="collapse navbar-collapse" id="aranax-navbar-collapse">
	        
						<?php
						/* Primary navigation */
						wp_nav_menu( array(
								'menu'       => 'primary',
								'depth'      => 2,
								'container'  => false,
								'menu_class' => 'nav navbar-nav',
								'walker'     => new wp_bootstrap_navwalker())
						);
						?>
	        
					</div>

				</nav>
				 
			</div>
			<div class="col-sm-6 home-top-contact hidden-xs">
				<div class="phone">
					Call us:<br/>
					<span>+91 3804 224692</span>
				</div>
				<div class="email">
					Email us:<br/>
					<a href="">denning2013.college@gmail.com</a>
				</div>	
			</div>	
		</div><!-- /.row -->

		<?php
		if( is_front_page() ){
			?>		
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-2">
					<h1 class="tagline">Education for Excellence</h1>
				</div>	
			</div><!-- /.row -->
		
		
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="big-gap hidden-xs"></div>
					<div class="home-join-btn">
						<a href="javascript:void(0)">Join Now</a>
					</div>
				</div>	
			</div><!-- /.row -->
			<?php
		}else{
		?>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="big-gap hidden-xs"></div>
			</div>
		</div>
	</div>
	<?php		
	}
	?>		
		
		
</div><!-- /.container -->			
</div>

<!--/header-->