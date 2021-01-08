<?php get_header();?>

<div class="titlebar fixed-top" id="titlebar">
    <div class="container">
        <h1 id="titlename"><?php the_title()?></h1>
    </div> <!-- end container -->
</div> <!-- end titlebar -->

<div class="container">
    
    <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>

    <form action="../sollicitatie" method="post">
        <input type="submit" class="btn sticky btn-primary" value="Solliciteer nu!">
    </form>

    <div class="spacer">
    
    </div>

</div> <!-- end container -->

<?php get_footer();?>