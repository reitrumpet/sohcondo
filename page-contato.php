<?php
  get_header();
  $template_directory = get_template_directory_uri();
?>
<section class="container top80">
  <div class="row">
    <div class="col-12 font1 font-blue text-center title">
      Contato
    </div>
  </div>
  <div class="row justify">


    <?php

			if( have_posts() ):

				while( have_posts() ): the_post();

					?>

					<article>
					<!-- <div class="row col-12 col-md-12 ftTamanho45 negrito padBot15 fontAzulVibe">
						<?php the_title(); ?>
					</div> -->
					<?php the_content(); ?>
				</article>

				<?php
			endwhile;
		else:
			?>

			<p><?php _e( 'There&rsquo;s nothing yet to be displayed...', 'sohcondo' ); ?></p>

		<?php endif; ?>


  </div>
</section>
<?php get_footer(); ?>
