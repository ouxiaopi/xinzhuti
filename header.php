<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php if (is_single() || is_page() || is_archive() || is_search()) { ?><?php wp_title('',true); ?> - <?php } bloginfo('name'); ?><?php if ( is_home() ){ ?> - <?php bloginfo('description'); ?><?php } ?><?php if ( is_paged() ){ ?> - <?php printf( __('Page %1$s of %2$s', ''), intval( get_query_var('paged')), $wp_query->max_num_pages); ?><?php } ?></title>
<?php 
if (is_home()){ 
	$description     = get_option('mao10_description');
	$keywords = get_option('mao10_keywords');
} elseif (is_single() || is_page()){    
	$description1 =  $post->post_excerpt ;
	$description2 = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200, "…");
	$description = $description1 ? $description1 : $description2;
	$keywords = get_post_meta($post->ID, "keywords_value", true);        
} elseif(is_category()){
	$description     = category_description();
	$current_category = single_cat_title("", false);
	$keywords =  $current_category;
}
?>
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $description ?>" />
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href="<?php bloginfo('template_directory'); ?>/css/media.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>
<![endif]-->
<?php wp_deregister_script('jquery');//wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
</head>
<body>
<div class="container">
	<nav id="topnav" class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">
					导航
				</span>
				<span class="icon-bar">
				</span>
				<span class="icon-bar">
				</span>
				<span class="icon-bar">
				</span>
			</button>
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
				<i class="glyphicon glyphicon-headphones"></i> <?php bloginfo('name'); ?>
			</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<li>
					<a href="<?php bloginfo('url'); ?>">
						首页
					</a>
				</li>
				<li>
					<a href="#">
						你的分类
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						其他页面
						<b class="caret">
						</b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">
								其他页面 1
							</a>
						</li>
						<li>
							<a href="#">
								其他页面 2
							</a>
						</li>
						<li>
							<a href="#">
								其他页面 3
							</a>
						</li>
						<li>
							<a href="#">
								其他页面 4
							</a>
						</li>
						<li>
							<a href="#">
								其他页面 5
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="http://www.mao01.com/">
						猫猫工作室
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						关注我们
						<b class="caret">
						</b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">
								新浪微博
							</a>
						</li>
						<li>
							<a href="#">
								腾讯微博
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>
</div>