	<?php get_header(); ?>

	<main>
	<section class="row content">
		<div class="col-sm-12 col-md-8">
		<p class="lead"><a href="/blog">&#8592 Blog</a></p>
		<?php
			$args = array( 'posts_per_page' => 1 );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="post">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p class="lead">Posted on <?php the_time('F jS, Y') ?> by <?php the_author() ?></p>
					<div class="text-center">
					<?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
					</div>
					<?php the_content('Read the rest of this entry &raquo;', true); ?>
				</div>
		<?php endforeach; wp_reset_postdata();?>
		</div>
		<div class="col-sm-12 col-md-4 ">
			<div id="sticky" class="signup center-block">
				<?php get_sidebar('signup'); ?>
			</div>
		</div>
	</section>
	</main>

<?php get_footer(); ?>