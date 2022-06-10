<?php /*Template Name: Sklypų formavimas*/ ?>

<!--  skypų formavimas-->
<div class="container-fluid">
    <h3 class="h3 text-center py-1">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'facetwp' => true,
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <?php echo get_the_title(); ?></h3>
    <p class="text-center">Žemės sklypų formavimo ir pertvarkymo būdai:</p>
    <div class="container">
        <div class="row p-4">
            <div class="col-sm-12 col-md-12">
                <div class="card card border-success mb-3">



                    <div class="col">


                        <div class=" card-body text-center">
                            <ul class="list-group list-group-flush h-100">
                                <li class="list-group-item"><?php echo the_content(); ?></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata();   ?>