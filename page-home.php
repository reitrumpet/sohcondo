<?php
  get_header();
  $template_directory = get_template_directory_uri();
?>

<section class="img-top z-1" style="background-image: url(<?php echo $template_directory;?>/images/top.jpg);">
  <div class="container">
    <div class="row phrase-top ">
        <div class="col-1 align-self-start">
        &nbsp;
        </div>
        <div class="col align-self-center text-center font1 bgBlack">
          <div class="font-white typing-animation phrase" id="phrase">O MARKETPLACE PARA SEU CONDOMÍNIO E SUA RESIDÊNCIA.</div>
        </div>
        <div class="col-1 align-self-end">
          &nbsp;
        </div>
      <!-- <div class="col align-self-center">
        O MarketPlace para seu condomínio e sua residência.
      </div> -->
    </div>
  </div>
  <script type="text/javascript">
    function typeWriter(element){
      const textArray = element.innerHTML.split('');
      element.innerHTML = '';
      textArray.forEach((letter, i) => {
        setTimeout(() => element.innerHTML += letter, 45 * i)
      });

    }

    const title = document.querySelector(".phrase");
    typeWriter(title);
  </script>

</section>
<section class="container top-160">
  <div class="row bottom30">
    <div class="title-section text-center font1 font-blue">
      ALGUNS SERVIÇOS
    </div>
  </div>
  <div class="row bottom30">
    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 text-center">
      <img src="<?php echo $template_directory;?>/images/service-1.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
      &nbsp;
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
      <div class="font1 font-blue title-service bottom10">
        Lorem Ipsum
      </div>
      <div class="row font2 font-blue description-service bottom15">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
      </div>
      <div class="row">
        <button type="button" class="btn btn-primary btn-green">SAIBA MAIS</button>
      </div>
    </div>
  </div>
  <div class="row bottom30">
    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 text-center">
      <img src="<?php echo $template_directory;?>/images/service-2.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
      &nbsp;
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
      <div class="font1 font-blue title-service bottom10">
        Lorem Ipsum
      </div>
      <div class="row font2 font-blue description-service bottom15">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
      </div>
      <div class="row">
        <button type="button" class="btn btn-primary btn-green">SAIBA MAIS</button>
      </div>
    </div>
  </div>
  <div class="row bottom30">
    <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 text-center">
      <img src="<?php echo $template_directory;?>/images/service-3.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
      &nbsp;
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
      <div class="font1 font-blue title-service bottom10">
        Lorem Ipsum
      </div>
      <div class="row font2 font-blue description-service bottom15">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
      </div>
      <div class="row">
        <button type="button" class="btn btn-primary btn-green">SAIBA MAIS</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
      &nbsp;
    </div>
    <div class="col-4 text-center">
      <button type="button" class="btn btn-primary btn-blue z1">MAIS SERVIÇOS</button>
    </div>
    <div class="col-4">
      &nbsp;
    </div>
  </div>
</section>
<section class="img-middle bottom30" style="background-image: url(<?php echo $template_directory;?>/images/security.jpg);">
  <div class="container">
    <div class="row phrase-middle ">

          <div class="col-2 align-self-start">
          &nbsp;
          </div>

          <div class="col align-self-center text-center font1 bgWhite">
            <div class="font-blue">
              SEGURO RESIDÊNCIAL
              <div class="font3">
                FAÇA SUA COTAÇÃO OU TRAGA OUTRAS COTAÇÕES
              </div>
            </div>
          </div>

          <div class="col-2 align-self-end">
            &nbsp;
          </div>
    </div>

    <div class="row top-160">
      <div class="col-2 align-self-start">
        &nbsp;
      </div>
      <div class="col align-self-center text-center">
        <div class="row">
          <div class="top10 col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <button type="button" class="btn btn-primary btn-blue">TRAGA A SUA COTAÇÃO</button>
          </div>
          <div class="top10 col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <button type="button" class="btn btn-primary btn-blue">FAÇA A SUA COTAÇÃO</button>
          </div>
        </div>
      </div>
      <div class="col-2 align-self-end">
        &nbsp;
      </div>
    </div>
  </div>
</section>
<section class="container bottom30">
    <div class="row bottom30">
      <div class="title-section text-center font1 font-blue">
        Parceiros
      </div>
    </div>
    <div class="row bottom30">
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center">
          <img src="<?php echo $template_directory;?>/images/wtech.png" alt="" class="img-fluid img-partner">
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center">
          <img src="<?php echo $template_directory;?>/images/wtech.png" alt="" class="img-fluid img-partner">
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center">
          <img src="<?php echo $template_directory;?>/images/wtech.png" alt="" class="img-fluid img-partner">
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        &nbsp;
      </div>
      <div class="col-4 text-center">
        <button type="button" class="btn btn-primary btn-blue z1">MAIS PARCEIROS</button>
      </div>
      <div class="col-4">
        &nbsp;
      </div>
    </div>
</section>
<section class="container bottom30">
  <div class="row bottom30">
    <div class="title-section text-center font1 font-blue">
      Blog
    </div>
  </div>
  <div class="row bottom30">
      <!-- Início card -->
      <div class="card col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <img src="<?php echo $template_directory;?>/images/news.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center font-blue">
          <h5 class="card-title font3">Card title</h5>
          <p class="card-text font2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary btn-blue">LEIA MAIS</a>
        </div>
      </div>
      <!-- Fim card -->
      <!-- Início card -->
      <div class="card col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <img src="<?php echo $template_directory;?>/images/news.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center font-blue">
          <h5 class="card-title font3">Card title</h5>
          <p class="card-text font2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary btn-blue">LEIA MAIS</a>
        </div>
      </div>
      <!-- Fim card -->
      <!-- Início card -->
      <div class="card col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <img src="<?php echo $template_directory;?>/images/news.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center font-blue">
          <h5 class="card-title font3">Card title</h5>
          <p class="card-text font2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary btn-blue">LEIA MAIS</a>
        </div>
      </div>
      <!-- Fim card -->
  </div>
  <div class="row">
    <div class="col-4">
      &nbsp;
    </div>
    <div class="col-4 text-center">
      <button type="button" class="btn btn-primary btn-blue z1">MAIS POSTS</button>
    </div>
    <div class="col-4">
      &nbsp;
    </div>
  </div>
</section>
<section class="white bottom30">
  <div class="container">
    <div class="row bottom30">
      <div class="title-section text-center font1 font-blue">
        Depoimentos
      </div>
    </div>
    <div class="row card-testimony bottom30">
      <div class="col-12 text-center">
        <img src="<?php echo $template_directory;?>/images/img.jpg" class="img-thumbnail rounded img-testimony" alt="...">
      </div>
      <div class="col-12 text-center font2 font-blue testimony-description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
      </div>
      <div class="col-12 text-center font2 font-blue testimony-author">
        Rei Medeiros
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        &nbsp;
      </div>
      <div class="col-4 text-center">
        <button type="button" class="btn btn-primary btn-blue z1">MAIS DEPOIMENTOS</button>
      </div>
      <div class="col-4">
        &nbsp;
      </div>
    </div>
  </div>
</section>
<section class="blue">
  <div class="container">
    <div class="row pad-top30 pad-bot10">
      <div class="col-4">
        &nbsp;
      </div>
      <div class="col-4 text-center">
        &nbsp;
      </div>
      <div class="col-4">
        <button type="button" class="btn btn-primary btn-blue z1">VOLTAR AO TOPO</button>
      </div>
    </div>
    <div class="row bottom10">
      <div class="col-2">
        &nbsp;
      </div>
      <div class="col-8 text-center">
        Menu
      </div>
      <div class="col-2">
        &nbsp;
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        &nbsp;
      </div>
      <div class="col-4 text-center font4 social font-white">
        Redes Sociais
      </div>
      <div class="col-4">
        &nbsp;
      </div>
      <div class="row bottom30">
        <div class="col-4">
          &nbsp;
        </div>
          <div class="col-1 text-center font4 social font-white">
            <a href="#"><i class="fab fa-facebook-f font-white"></i></a>
          </div>
          <div class="col-1 text-center font4 social font-white">
            <a href="#"><i class="fab fa-instagram font-white"></i></a>
          </div>
          <div class="col-1 text-center font4 social font-white">
            <a href="#"><i class="fab fa-linkedin-in font-white"></i></a>
          </div>
          <div class="col-1 text-center font4 social font-white">
            <a href="#"><i class="fab fa-whatsapp font-white"></i></a>
          </div>
        <div class="col-4">
          &nbsp;
        </div>
      </div>
    </div>
  </div>
</section>
<section class="light-blue">
  <div class="container">
    <div class="row pad-top15">
      <div class="col-2">
        &nbsp;
      </div>
      <div class="col-8 text-center copyright font5 font-white">
        DIREITOS RESERVADOS SOHCONDO 2021 ©
      </div>
      <div class="col-2">
        &nbsp;
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
