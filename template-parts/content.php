<article <?php post_class(); ?>>
	<div class="font1 font-blue text-center title"><?php the_title(); ?></div>

	<div class="meta-info text-center">
		<p><?php //_e( 'Publicado em', 'sohcondo' ); ?> <?php //echo get_the_date(); ?> </p>
		<p class="card-text"><?php the_field('referencia'); ?></p>

	</div>

	<?php
	$image = get_field('imagem');
	if( !empty( $image ) ): ?>

		<img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

	<?php endif; ?>

	<div class="top30">
		<?php the_content(); ?>
	</div>
</article>
