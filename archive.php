<?php get_header();?>

<div class="title fixed-top">
        <div class="container">
            <h1><?php single_cat_title()?></h1>
        </div> <!-- end container -->
    </div> <!-- end title -->


<div class="container pb-5">

    <?php if(have_posts()) : while(have_posts()) : the_post();?>

    <div class="card mb-4">
    <h5><?php the_title()?></h5>
        <div class="card-body">
        <ul class="info">
            <?php if(get_post_meta($post->ID, 'worktype', true)) {?>
                <li><?php echo get_post_meta($post->ID, 'worktype', true); ?></li>
            <?php }?>
            <?php if(get_post_meta($post->ID, 'salary', true)) {?>
                <li><?php echo get_post_meta($post->ID, 'salary', true); ?></li>
            <?php }?>
            <?php if(get_post_meta($post->ID, 'location', true)) {?>
                <li><?php echo get_post_meta($post->ID, 'location', true); ?></li>
            <?php }?>
            </ul> <!-- end info -->
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class="btn btn-success">Lees meer</a>
            
        </div> <!-- end card-body -->
    </div> <!-- end card -->

        

    <?php endwhile; endif;?>


</div> <!-- end container -->

<?php get_footer();?>