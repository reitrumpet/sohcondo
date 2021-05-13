<div class="row bottom30">
  <div class="title-section text-center font1 font-blue">
    Blog
  </div>
</div>
<div class="row bottom30">
    <!-- Início card -->
    <?php
    	if(have_posts()):
        query_posts( array('category_name'  => 'blog', 'posts_per_page' => 3 ) );
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
<div class="row">
  <div class="col-4">
    &nbsp;
  </div>
  <div class="col-4 text-center">
    <a href="blog" class="btn btn-primary btn-blue">MAIS POSTS</a>
  </div>
  <div class="col-4">
    &nbsp;
  </div>
</div>
