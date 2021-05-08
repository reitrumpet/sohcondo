<?php get_header(); ?>
<div class="container top80">
	<div class="row">
		<?php
		while( have_posts() ): the_post();


			get_template_part( 'template-parts/content', 'single' );

			?>
    <?php

		endwhile;

		?>
	</div>
</div>


<?php get_footer(); ?>
