<div class="row bottom30">
  <div class="title-section text-center font1 font-blue">
    ALGUNS SERVIÇOS
  </div>
</div>
<?php
	if(have_posts()):
    query_posts( array('category_name'  => 'servicos', 'posts_per_page' => 3 ) );
		while(have_posts()):the_post();
?>

<div class="row bottom30">
  <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 text-center">
    <?php
    $image = get_field('imagem');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="451" height="254"/>
    <?php endif; ?>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
    &nbsp;
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
    <div class="font1 font-blue title-service bottom10">
      <?php the_title(); ?>
    </div>
    <div class="row font2 font-blue description-service bottom15">
      <?php the_content(); ?>
    </div>
    <div class="row">
      <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-green">SAIBA MAIS</a>
    </div>
  </div>
</div>

<?php
    endwhile;
	else:
?>
<p>Nenhum serviço cadastrado !</p>
<?php endif; ?>

<div class="row">
  <div class="col-4">
    &nbsp;
  </div>
  <div class="col-4 text-center">
    <a href="servicos" class="btn btn-primary btn-blue">MAIS SERVIÇOS</a>
  </div>
  <div class="col-4">
    &nbsp;
  </div>
</div>
