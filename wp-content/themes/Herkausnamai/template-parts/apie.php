

<section class="pt-4 p-3 text-center text-sm-start" id="apiemus">
    <div class="container">
        <div class="d-sm-flex ">
            <div>

                <h1 class="pt-5">Apie Artikada <span class="lt">LT</span></h1>
                <p class="lead my-4"><?php
/*Template Name: News*/
get_header();
query_posts(array(
   'post_type' => 'about'
)); ?>
<?php
while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p><?php the_excerpt(); ?></p>
<?php endwhile;
get_footer();
?></p>

            </div>
            <img class="img-fluid w-50" src="<?php echo  get_theme_file_uri(); ?>/assets/images/apie.jpg" alt="Apie">
        </div>
    </div>
</section>
