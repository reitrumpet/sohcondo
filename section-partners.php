<div class="row bottom30">
  <div class="title-section text-center font1 font-blue">
    Parceiros
  </div>
</div>
<div class="row bottom30">
  <?php
  	if(have_posts()):
      query_posts( array('category_name'  => 'parceiros', 'posts_per_page' => 3 ) );
  		while(have_posts()):the_post();
  ?>

  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center">

    <?php
    $image = get_field('imagem');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="440" height="187.81" class="img-fluid img-partner"/>
    <?php endif; ?>
  </div>

  <?php
      endwhile;
  	else:
  ?>
  <p>Nenhum parceiro cadastrado !</p>
  <?php endif; ?>
</div>
<div class="row">
  <div class="col-4">
    &nbsp;
  </div>
  <div class="col-4 text-center">
    <a href="parceiros" class="btn btn-primary btn-blue">MAIS PARCEIROS</a>
  </div>
  <div class="col-4">
    &nbsp;
  </div>
</div>
