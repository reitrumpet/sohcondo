<article <?php post_class(); ?>>
	<div class="font1 font-blue text-center title"><?php the_title(); ?></div>

	<div class="meta-info text-center">
		<p class="card-text"><?php the_field('parceiro'); ?></p>
	</div>

<div class="row bottom30">
  <div class="col-5 img-fluid">
    <?php
  	$image = get_field('imagem');
  	if( !empty( $image ) ): ?>

  		<img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

  	<?php endif; ?>
  </div>
  <div class="col-7">
    <div class="">
      <?php the_content(); ?>
      <div class="text-center font4 ">

        <a href="https://api.whatsapp.com/send?phone=55<?php echo get_field('contato');?>&text=Tenho%20interesse%20no%20servi%C3%A7o%20%3A%20<?php the_title(); ?>%20da%20empresa%20<?php echo get_field('parceiro');?>" target="_blank" class="btn btn-primary btn-blue"><i class="fab fa-whatsapp font-white"> Fale Conosco</i></a>
      </div>
    </div>
  </div>



  </div>
</article>
