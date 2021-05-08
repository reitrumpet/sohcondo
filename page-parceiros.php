<?php
  get_header();
  $template_directory = get_template_directory_uri();
?>
<section class="container top80">
  <div class="row bottom15">
    <div class="col-12 font1 font-blue text-center title">
      Parceiros
    </div>
  </div>
  <div class="row">
    <?php
    	if(have_posts()):
        query_posts( array('category_name'  => 'parceiros', 'posts_per_page' => 6 ) );
    		while(have_posts()):the_post();
    ?>

    <div class="row bottom30">
      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
        <div class="font1 font-blue title-service bottom10">
          <?php the_title(); ?>
        </div>
        <div class="row font2 font-blue description-service bottom15">
          <?php echo get_field('resumo'); ?>
        </div>
        <div class="row">
          <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-green">SAIBA MAIS</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
        &nbsp;
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 d-flex align-items-center">
        <?php
        $image = get_field('imagem');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="436" height="204"/>
        <?php endif; ?>
      </div>


    </div>

    <?php
        endwhile;
    	else:
    ?>
    <p>Nenhum serviço cadastrado !</p>
    <?php endif; ?>


  </div>
</section>
<?php get_footer(); ?>
