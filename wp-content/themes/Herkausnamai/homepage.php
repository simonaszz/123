<?php /*Template Name: Home page*/ ?>

<?php get_header();  // headeris //
?>

<!--slider  -->
<?php get_template_part('template-parts/slider'); ?>





<!--Apie mus  -->

<?php get_template_part('template-parts/apie'); ?>




<!--musu paslaugos cards-->
<?php get_template_part('template-parts/paslaugos'); ?>



<!--  skypų formavimas-->
<?php get_template_part('template-parts/sklypu', 'formavimas'); ?>



<!-- Contact & Map -->

<?php get_template_part('template-parts/kontaktai', 'map'); ?>

<!-- JavaScript Bundle with Popper -->
<?php
get_footer();
?>