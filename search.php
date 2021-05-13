<?php get_header(); ?>
	<div>
		<div>
			<div class="container top80">

				<h2><?php _e( 'Search results for:', 'sohcondo' ); ?> <?php echo get_search_query(); ?></h2>

				<?php

				get_search_form();

				while( have_posts() ): the_post();

					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
