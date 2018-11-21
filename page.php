<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php setPostViews(get_the_ID()); ?>
			<div id="content">
				<h1><?php the_title(); ?></h1>
				<div id="post-info">
					<ul class="list-inline">
						<?php the_tags('<li>标签：',',','</li>'); ?>
						<li>浏览： <a href="<?php the_permalink(); ?>" rel="nofollow"><?php echo getPostViews(get_the_ID()); ?></a></li>
						<li>评论： <a href="<?php the_permalink(); ?>#comment" rel="nofollow"><?php comments_number('0', '1', '%' );?></a></li>
					</ul>
				</div>
				<?php the_content(); ?>
			</div>
			<div id="comment">
				<?php comments_template(); ?>
			</div>
			<?php endwhile; ?><?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>