<div class="container">
  <div class="row bottom30">
    <div class="title-section text-center font1 font-blue">
      Depoimentos
    </div>
  </div>

  <?php
    if(have_posts()):
      query_posts( array('category_name'  => 'depoimentos', 'posts_per_page' => 3 ) );
      while(have_posts()):the_post();
  ?>

  <div class="row card-testimony bottom30">
    <div class="col-12 text-center">
      <?php
      $image = get_field('imagem');
      if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-thumbnail rounded img-testimony"/>
      <?php endif; ?>
    </div>
    <div class="col-12 text-center font2 font-blue testimony-description">
      <?php the_content(); ?>
    </div>
    <div class="col-12 text-center font2 font-blue testimony-author">
      <?php the_title(); ?>
    </div>
  </div>


  <?php
      endwhile;
    else:
  ?>
  <p>Nenhum depoimento cadastrado !</p>
  <?php endif; ?>


  <!-- <div class="row">
    <div class="col-4">
      &nbsp;
    </div>
    <div class="col-4 text-center">
      <a href="depoimentos" class="btn btn-primary btn-blue">MAIS DEPOIMENTOS</a>
    </div>
    <div class="col-4">
      &nbsp;
    </div>
  </div> -->

</div>
