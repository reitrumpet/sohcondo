<article <?php post_class(); ?>>
	<div class="font1 font-blue text-center title"><?php the_title(); ?></div>
<div class="row text-center">
  <div class="col-3">
    &nbsp;
  </div>
  <div class="col-6 img-fluid">
  	<?php
  	$image = get_field('imagem');
  	if( !empty( $image ) ): ?>

  		<img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

  	<?php endif; ?>
  </div>
  <div class="col-3">
    &nbsp;
  </div>
</div>
	<div class="top30">
		<?php the_content(); ?>
	</div>
</article>
