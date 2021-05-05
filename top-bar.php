<?php $url = add_query_arg(array(), $wp->request); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light white opacity z1">
  <div class="container">
    <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex">
      &nbsp;
    </div>
    <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
      <ul class="navbar-nav d-flex white">
        <?php wp_nav_menu(
							array(
							'theme_location'=>'top_menu'
							)
							); ?>
      </ul>
    </div>
  </div>
</nav>
