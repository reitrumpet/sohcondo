<?php
  get_header();
  $template_directory = get_template_directory_uri();
?>
<section class="container top80">
  <div class="row">
    <div class="col-12 font1 font-blue text-center title">
      Seguros
    </div>
  </div>

  <div class="row">
    <?php
    	if(have_posts()):
        query_posts( array('category_name'  => 'seguros', 'posts_per_page' => 6 ) );
    		while(have_posts()):the_post();
    ?>

    <div class="row bottom30">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
        <div class="font3 font-blue title-service bottom10">
          <?php the_title(); ?>
        </div>
        <div class="row font2 font-blue description-service bottom15">
          <?php the_content(); ?>
        </div>

      </div>
    </div>

    <?php
        endwhile;
    	else:
    ?>
    <p>Nenhum seguro cadastrado !</p>
    <?php endif; ?>


  </div>

  <div class="form-security">
    <?php echo do_shortcode('[contact-form-7 id="132" title="Contato Seguros"]'); ?>
  </div>

  <div class="row text-center">
    <h4>OU</h4>
  </div>
  <div class="row text-center font4 bottom30">
    <a href="https://api.whatsapp.com/send?phone=5582991844222&text=Tenho%20interesse%20em%20um%20seguro%20para%20meu%20im%C3%B3vel." target="_blank" class="btn btn-primary btn-blue"><i class="fab fa-whatsapp font-white"> Fale Conosco</i></a>
  </div>

</section>
<?php get_footer(); ?>
