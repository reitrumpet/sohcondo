<?php
  get_header();
  $template_directory = get_template_directory_uri();
?>
<section class="container top80">
  <div class="row">
    <div class="col-12 font1 font-blue text-center title">
      Blog
    </div>
  </div>

  <div class="row bottom30">
      <!-- Início card -->
      <?php
      	if(have_posts()):
          query_posts( array('category_name'  => 'blog', 'posts_per_page' => 9 ) );
      		while(have_posts()):the_post();
      ?>
      <div class="card col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <?php
        $image = get_field('imagem');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
        <?php endif; ?>
        <div class="card-body text-center font-blue">
          <h5 class="card-title font3"><?php the_title(); ?></h5>
          <p class="card-text font2"><?php echo get_field('subtitulo'); ?></p>

        </div>
        <div class="text-center bottom10">
          <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-blue">LEIA MAIS</a>
        </div>
      </div>
      <?php
          endwhile;
      	else:
      ?>
      <p>Nenhum post cadastrado !</p>
      <?php endif; ?>
      <!-- Fim card -->
  </div>

  <!-- Mais lidos -->

  <div class="row bottom30">
    <div class="row">
      <div class="col-12 font1 font-blue text-center title">
        Mais lidas
      </div>
    </div>
    <?php

    ?>
      <!-- Início card -->
      <?php
        if(have_posts()):
          $query = query_posts(
            array(
              'meta_key' => 'views',
              'orderby' => 'meta_value_num',
              'order' => 'DESC',
              'category_name'  => 'blog',
              'posts_per_page' => 3
            )
          );
          while(have_posts()):the_post();
      ?>
      <div class="card col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <?php
        $image = get_field('imagem');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
        <?php endif; ?>
        <div class="card-body text-center font-blue">
          <h5 class="card-title font3"><?php the_title(); ?></h5>
          <p class="card-text font2"><?php echo get_field('subtitulo'); ?></p>

        </div>
        <div class="text-center bottom10">
          <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-blue">LEIA MAIS</a>
        </div>
      </div>
      <?php
          endwhile;
        else:
      ?>
      <p>Nenhum post cadastrado !</p>
      <?php endif; ?>
      <!-- Fim card -->
  </div>

</section>
<?php get_footer(); ?>
