<article <?php post_class(); ?>>
	<div class="font1 font-blue text-center title"><?php the_title(); ?></div>
  <div class="row top30 bottom30">
  	<?php
  	$image = get_field('capa');
  	if( !empty( $image ) ): ?>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
  		    <img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  />
      </div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
        <div class="">
          <?php the_content(); ?>
        </div>
        <div class="">
          <h6>Endereço</h6>
          <div class="bold">
            <?php echo get_field('rua').", ".get_field('numero').", ".get_field('bairro').", ".get_field('cidade').", ".get_field('estado').", ".get_field('cep') ; ?>
          </div>
        </div>
      <div class="row">
        <div class="col-6">
          <h6>Tipo do negócio</h6>
          <div class="bold">
            <?php echo get_field('tipo_de_negocio'); ?>
          </div>
        </div>
        <div class="col-6">
          <h6>Fase do imóvel</h6>
          <div class="bold">
            <?php echo get_field('fase_do_imovel'); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <h6>Nº de Quartos</h6>
          <div class="bold">
            <?php echo get_field('quartos'); ?>
          </div>
        </div>
        <div class="col-3">
          <h6>Nº de Suítes</h6>
          <div class="bold">
            <?php echo get_field('suites'); ?>
          </div>
        </div>
        <div class="col-3">
          <h6>Nº de Banheiro</h6>
          <div class="bold">
            <?php echo get_field('banheiros'); ?>
          </div>
        </div>
        <div class="col-3">
          <h6>Nº de Vagas na garagem</h6>
          <div class="bold">
            <?php echo get_field('vagas_na_garagem'); ?>
          </div>
        </div>
      </div>
        <div class="">
          <h6>Observações</h6>
          <div class="bold">
            <?php
              $observacoes = get_field('observacoes');
              if( $observacoes ): ?>
              <ul>
                  <?php foreach( $observacoes as $observacao ): ?>
                      <li><?php echo $observacao; ?></li>
                  <?php endforeach; ?>
              </ul>
              <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <h6>Área útil</h6>
            <div class="bold">
              <?php echo get_field('area_util'). "m²"; ?>
            </div>
          </div>
          <div class="col-6">
            <h6>Área total</h6>
            <div class="bold">
              <?php echo get_field('area_total'). "m²"; ?>
            </div>
          </div>
        </div>
				<div class="row">
					<div class="col-6">
	          <h6>Valor do condomínio</h6>
	          <div class="bold">
	            <?php echo "R$ ".get_field('valor_do_condominio'); ?>
	          </div>
	        </div>
					<div class="col-6">
	          <h6>Valor do imóvel</h6>
	          <h5 class="price font3">
	            <?php echo "R$ ".get_field('valor_do_imovel'); ?>
	          </h5>
	        </div>
				</div>
				<div class="row text-center font4 ">
	        <a href="https://api.whatsapp.com/send?phone=55<?php echo get_field('contato');?>&text=Tenho%20interesse%20no%20<?php the_title(); ?>" target="_blank" class="btn btn-primary btn-blue"><i class="fab fa-whatsapp font-white"> Fale Conosco</i></a>
	      </div>
      </div>

  	<?php endif; ?>
  </div>
	<div class="row">
			<h6>Fotos</h6>
			<!-- Início da Galeria -->
			<?php
			$images = get_field('galeria');

			if($images): ?>
			<div class="gallery">
				<div class="row bottom30">

					<?php foreach($images as $image): ?>

						<div class="col-lg-3">
							<a href="<?php echo $image['sizes']['large'];?>" title="<?php echo $image['caption']; ?>">
								<img src="<?php echo $image['sizes']['thumbnail'];?>" title="<?php echo $image['caption']; ?>" class="img-fluid"/>
							</a>
						</div>

					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
			<!-- Fim da Galeria -->
	</div>
</article>
