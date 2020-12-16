<?php get_header();?>



    <div class="title fixed-top">
        <div class="container">
            <h1><?php the_title()?></h1>
        </div> <!-- end container -->
    </div> <!-- end title -->




    <div class="content"> 
        <div class="container">
            <div class="section">

            </div>
        <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

        <?php endwhile; endif;?>

        </div> <!-- end container -->
    
    </div> <!-- end content -->


    


<?php get_footer();?>