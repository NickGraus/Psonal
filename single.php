<?php get_header();?>

<div class="titlebar fixed-top" id="titlebar">
        <div class="container">
            <h1 id="titlename"><?php the_title()?></h1>
        </div> <!-- end container -->
    </div> <!-- end title -->

<div class="container">

    <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>

    <div class="spacer">
    
    </div>

</div> <!-- end container -->

<?php get_footer();?>