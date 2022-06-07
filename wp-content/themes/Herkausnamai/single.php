<?php get_header();  // headeris //
?>



<?php
if (have_posts()) {

    while (have_posts()) {
        the_post(); //Parodo postus
       get_template_part('template-parts/content', 'article');
}
}
?>