<?php get_header(); ?>
<div class="container top80">
	<div class="row">
		<?php
		while( have_posts() ): the_post();

		$category = get_the_category();
		$nameCategory = $category[0]->cat_name;

			if($nameCategory == "Classificados"){
				get_template_part( 'template-parts/content-classificados', 'single' );
			}else{
				get_template_part( 'template-parts/content', 'single' );
			}
			// echo $category;


			?>
    <?php

		endwhile;

		?>
	</div>
</div>


<?php get_footer(); ?>
