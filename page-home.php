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
  <?php include("section-service.php"); ?>
</section>
<section class="img-middle bottom30" style="background-image: url(<?php echo $template_directory;?>/images/security.jpg);">
  <div class="container">
    <div class="row phrase-middle ">

          <div class="col-2 align-self-start">
          &nbsp;
          </div>

          <div class="col align-self-center text-center font1 bgWhite">
            <div class="font-blue">
              SEGURO RESIDENCIAL
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
          <div class="top10">
            <a href="seguros" class="btn btn-primary btn-blue">FAÇA OU TRAGA A SUA COTAÇÃO</a>
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
    <?php include("section-partners.php"); ?>
</section>
<section class="container bottom30">
  <?php include("section-blog.php"); ?>
</section>
<section class="white bottom30">
  <?php include("section-testimony.php"); ?>
</section>

<?php get_footer(); ?>
