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
	<?php
		$contato = get_field('contato');

		// var_dump(isset($contato));

		if($contato == true){
			?>
			<div class="row text-center font4 top15 bottom15">
				<a href="https://api.whatsapp.com/send?phone=55<?php echo $contato; ?>&text=Estou%20vindo%20atrav%C3%A9s%20da%20postagem%20no%20Blog%20da%20SohCondo.<?php the_title(); ?>" target="_blank" class="btn btn-primary btn-blue"><i class="fab fa-whatsapp font-white"> Fale Conosco</i></a>
			</div>
			<?php
		}
?>




</article>
