<?php get_header();?>



<div class="titlebar fixed-top" id="titlebar">
    <div class="container">
        <h1 id="titlename"><?php the_title()?></h1>
    </div> <!-- end container -->
</div> <!-- end titlebar -->





    <div class="content"> 
        <div class="container">
            <div class="section">
                <h4>Begin met zoeken</h4>
                <?php echo do_shortcode( '[searchandfilter fields="search,category"]' ); ?>


                <!-- <form action="" method="post">
                    <input class="inputTxt" type="text" id="function" placeholder="functie">
                    <input class="inputTxt" type="text" id="location" placeholder="locatie of postcode">
                    <input class="btn" type="button" value="Zoeken">
                </form> -->
            </div> <!-- end section -->

            <div class="section negative">
                <h4>Populair</h4>

                <form action="" method="post">
                <input class="btn negative" type="button" value="ICT">
                <input class="btn negative" type="button" value="Roermond">
                <input class="btn negative" type="button" value="Fulltime">
                </form>
            </div> <!-- end section -->

            <div class="section">
                <h4>Upload je CV</h4>

                <form action="" method="post">
                    <input class="inputTxt" type="file" name="cv" id="cv">
                    <input class="btn" type="button" value="Upload">
                </form>
            </div> <!-- end section -->
        </div> <!-- end container -->
    </div> <!-- end content -->


    


<?php get_footer();?>