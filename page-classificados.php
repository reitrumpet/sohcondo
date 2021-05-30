<?php
  get_header();
  $template_directory = get_template_directory_uri();
?>
<section class="container top80">
  <div class="row">
    <div class="col-12 font1 font-blue text-center title">
      Classificados
    </div>
  </div>
</section>
<section class="container bottom30">
  <div class="row">
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-4 col-sm-12 col-xs-12">

      <!-- Início card -->
      <?php
        if(have_posts()):
          query_posts( array('category_name'  => 'classificados', 'posts_per_page' => 12 ) );
          while(have_posts()):the_post();
      ?>
      <!-- Card -->

      <div class="card col-xl-4 col-lg-4 col-md-4 col-sm-12 floatLeft">
        <?php
        $image = get_field('capa');
        if( !empty( $image ) ): ?>
          <div class="text-center">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="300" height="400"/>
          </div>
        <?php endif; ?>
        <div class="card-body text-center font-blue">
          <h5 class="card-title font3"><?php the_title(); ?></h5>
          <p class="card-text font2"><?php //the_content(); ?></p>
          <h5 class="price font3"><?php echo "R$ ". get_field('valor_do_imovel'); ?></h5>
        </div>
        <div class="text-center bottom10">
          <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-blue">SAIBA MAIS</a>
        </div>
      </div>

      <!-- Card -->

      <!-- <div class="card col-xl-4 col-lg-4 col-md-4 col-sm-12 floatLeft">
        <?php
        // $image = get_field('capa');
        // if( !empty( $image ) ): ?>
        <div class="text-center">
            <img src="<?php //echo esc_url($image['url']); ?>" alt="<?php //echo esc_attr($image['alt']); ?>" width="300" height="400"/>
          </div>
        <?php //endif; ?>
        <div class="card-body text-center font-blue">
          <h5 class="card-title font3"><?php //the_title(); ?></h5>
          <p class="card-text font2"><?php //the_content(); ?></p>
          <h5 class="price font3"><?php //echo "R$ ". get_field('valor_do_imovel'); ?></h5>
        </div>
        <div class="text-center bottom10">
          <a href="<?php //the_permalink(); ?>" class="btn btn-primary btn-blue">SAIBA MAIS</a>
        </div>
      </div> -->

      <?php
          endwhile;
        else:
      ?>
      <p>Nenhum anúncio cadastrado !</p>
      <?php endif; ?>
      <!-- Fim card -->

    </div>
  </div>
</section>
<?php get_footer(); ?>
