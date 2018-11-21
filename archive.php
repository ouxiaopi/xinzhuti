<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-8 col-md-offset-2" id="post-list">
			<div class="row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $num++; ?>
			<?php if($num==1) { ?>
			<div class="col-sm-12">
				<a href="<?php the_permalink(); ?>">
					<img class="one-imagen" id="one-imagen-big" src="<?php echo img(); ?>" alt="<?php the_title(); ?>">
				</a>
				<p>
					<a href="<?php the_permalink(); ?>">
						<span class="pull-right"><?php the_time('Y-m-d'); ?></span>
						VOL.<?php the_ID(); ?>
					</a>
				</p>
			</div>
			<?php } else { ?>
			<div class="col-sm-6 col-md-4">
				<hr>
				<a href="<?php the_permalink(); ?>">
					<img class="one-imagen" src="<?php echo img(); ?>" alt="<?php the_title(); ?>">
				</a>
				<p>
					<a href="<?php the_permalink(); ?>">
						<span class="pull-right"><?php the_time('Y-m-d'); ?></span>
						VOL.<?php the_ID(); ?>
					</a>
				</p>
			</div>
			<?php } ?>
			<?php endwhile; ?><?php endif; ?>
			</div>
			<ul id="pager" class="pagination">
				<?php par_pagenavi(9); ?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>