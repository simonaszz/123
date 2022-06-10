<!DOCTYPE html>
<html lang="lt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="geodezija, geodezinės nuotraukos, topografinės nuotraukos, topo nuotraukos, išpildomosios nuotraukos, nužymėjimo darbai, geodezijos darbai, statinių geodezines nuotraukos, namų pridavimai, namų projektavimas, žemės sklypų formavimo rengimas, kaimo plėtros žemėtvarkos projektų rengimas, geodezija, žemėtvarka, inžinerinių tinklų projektavimas, kadastriniai matavimai, kadastrinės bylos" name="keywords">

  <meta content="Artikada LT geodeziniai kadastriniai matavimai, topografinės nuotraukos, projektavimas" name="description">


  <?php wp_head(); ?>
  
</head>

<body>
  



  <!--Navbar-->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark header-area sticky-top">
    <div class="container">

    <!--Custom logo-->

      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
      }
      ?>
      <a href="#" class="navbar-brand fw-bold ">Artikada <span class="lt">LT</span></a>
      <!--Custom logo end-->


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navmenu">




        <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="" class="navbar-nav ms-auto">%3$s</ul>'
          )
        );

        ?>

        <!--End-->
      </div>

    </div>
  </nav>
  
