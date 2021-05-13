<article <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="meta-info">
		<p><?php _e( 'Publicado em', 'sohcondo' ); ?> <?php echo get_the_date(); ?></p>
		<?php if( has_category() ):  ?>
			<p><?php _e( 'Categories:', 'sohcondo' ); ?> <?php the_category( ' ' ); ?></p>
		<?php endif; ?>
		<p><?php the_tags( __( 'Tags: ', 'sohcondo' ), ', ' ); ?></p>
	</div>
	<?php the_excerpt(); ?>
</article>
