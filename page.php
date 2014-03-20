<?php get_header(); ?>

	<main>
	<section class="row content">
		<div class="col-sm-12 col-md-8">
		    <?php if (have_posts()) : while (have_posts()) : the_post();?>
		    <div class="post">
		        <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
		        <div class="entrytext">
		            <?php the_content('<p class="serif">Read the rest of page this »</p>'); ?>
		        </div>
		    </div>
		    <?php endwhile; endif; ?>
		</div>
		<div class="col-sm-12 col-md-4">
			<div id="sticky" class="signup center-block">
				<?php get_sidebar('signup'); ?>
			</div>
		</div>
	</section>
	</main>

<?php get_footer(); ?>