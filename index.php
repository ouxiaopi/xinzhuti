<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-7 col-md-6 fp-one">
			<?php $cat00=get_option( 'mao10_cat00'); ?>
			<div class="fp-one">
			<div id="carousel-one" class="carousel slide">
				<div class="carousel-inner">
					<?php query_posts('showposts=5&cat='.$cat00.''); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $num++; ?>
					<div class="item <?php if($num==1) echo 'active'; ?>">
						<a href="<?php the_permalink(); ?>">
							<img class="fp-one-imagen" src="<?php echo img(); ?>" alt="<?php the_title(); ?>">
						</a>
						<div class="fp-one-imagen-footer">
							<?php the_title(); ?>
						</div>
						<div class="fp-one-cita-wrapper">
							<div class="fp-one-titulo-pubdate">
								<p class="titulo">
									VOL.<?php the_ID(); ?>
								</p>
								<p class="dom">
									<?php the_time('d'); ?>
								</p>
								<p class="may">
									<?php the_time('m'); ?> <?php the_time('Y'); ?>
								</p>
							</div>
							<div class="fp-one-cita">
								<a href="<?php the_permalink(); ?>">
									<?php echo get_the_excerpt(); ?>
								</a>
							</div>
							<div class="clearfix">
							</div>
						</div>
					</div>
					<?php endwhile; endif; wp_reset_query(); ?>
				</div>
				<a class="left carousel-control" href="#carousel-one" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left">
					</span>
				</a>
				<a class="right carousel-control" href="#carousel-one" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right">
					</span>
				</a>
				<ol class="carousel-indicators">
					<li data-target="#carousel-one" data-slide-to="0" class="">
					</li>
					<li data-target="#carousel-one" data-slide-to="1" class="">
					</li>
					<li data-target="#carousel-one" data-slide-to="2" class="active">
					</li>
					<li data-target="#carousel-one" data-slide-to="3">
					</li>
					<li data-target="#carousel-one" data-slide-to="4">
					</li>
				</ol>
			</div>
			</div>
			<div class="row">
				<?php $cat01=get_option( 'mao10_cat01'); ?>
				<div class="col-md-6">
					<div class="fp-one-cuestion">
						<h4>
							<a href="<?php echo get_category_link(''. $cat01 .''); ?>">
								<?php echo get_cat_name(''. $cat01 .'') ?>
							</a>
						</h4>
						<?php query_posts('showposts=1&cat='.$cat01.''); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="corriente">
							<p class="one-titulo">
								VOL.<?php the_ID(); ?>
							</p>
							<p class="one-cuestion-titulo">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</p>
						</div>
						<?php endwhile; endif; wp_reset_query(); ?>
						<ul class="list-unstyled pasado">
							<?php query_posts('showposts=4&offset=1&cat='.$cat01.''); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<li>
								<span class="text-muted">
									VOL.<?php the_ID(); ?>
								</span>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</li>
							<?php endwhile; endif; wp_reset_query(); ?>
						</ul>
					</div>
				</div>
				<?php $cat02=get_option( 'mao10_cat02'); ?>
				<div class="col-md-6">
					<div class="fp-one-cuestion">
						<h4>
							<a href="<?php echo get_category_link(''. $cat02 .''); ?>">
								<?php echo get_cat_name(''. $cat02 .'') ?>
							</a>
						</h4>
						<?php query_posts('showposts=1&cat='.$cat02.''); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="corriente">
							<p class="one-titulo">
								VOL.<?php the_ID(); ?>
							</p>
							<p class="one-cuestion-titulo">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</p>
						</div>
						<?php endwhile; endif; wp_reset_query(); ?>
						<ul class="list-unstyled pasado">
							<?php query_posts('showposts=4&offset=1&cat='.$cat02.''); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<li>
								<span class="text-muted">
									VOL.<?php the_ID(); ?>
								</span>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</li>
							<?php endwhile; endif; wp_reset_query(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-5 col-md-6" id="sidebar">
			<div class="row">
				<div class="col-md-7">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('side') ) : ?><?php endif; ?>
				</div>
				<div class="col-md-5">
					<div class="panel panel-default">
						<div class="panel-heading">ONE 产品</div>
						<!-- 广告幻灯开始 复制以下幻灯代码 即可实现多组幻灯 -->
						<div class="fp-one-producto">
							<div id="carousel-one-producto-1" class="carousel slide">
								<div class="carousel-inner">
									<div class="item active">
										<a target="_blank" href="http://www.mao01.com/">
											<img class="fp-one-producto-imagen" src="<?php bloginfo('template_directory'); ?>/img/ad1.jpg" alt="">
										</a>
									</div>
									<div class="item">
										<a target="_blank" href="http://www.mao01.com/">
											<img class="fp-one-producto-imagen" src="<?php bloginfo('template_directory'); ?>/img/ad2.jpg" alt="">
										</a>
									</div>
									<div class="item">
										<a target="_blank" href="http://www.mao01.com/">
											<img class="fp-one-producto-imagen" src="<?php bloginfo('template_directory'); ?>/img/ad3.jpg" alt="">
										</a>
									</div>
								</div>
								<a class="left carousel-control" href="#carousel-one-producto-1" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left">
									</span>
								</a>
								<a class="right carousel-control" href="#carousel-one-producto-1" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right">
									</span>
								</a>
								<ol class="carousel-indicators">
									<li data-target="#carousel-one-producto-1" data-slide-to="0" class="active">
									</li>
									<li data-target="#carousel-one-producto-1" data-slide-to="1" class="">
									</li>
									<li data-target="#carousel-one-producto-1" data-slide-to="2" class="">
								</ol>
							</div>
						</div>
						<!-- 广告幻灯结束 -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>