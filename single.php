<?php get_header();?>

<div class="title fixed-top">
        <div class="container">
            <h1><?php the_title()?></h1>
        </div> <!-- end container -->
    </div> <!-- end title -->

<div class="container">

    <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>


</div> <!-- end container -->

<?php get_footer();?>