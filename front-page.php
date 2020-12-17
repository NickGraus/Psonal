<?php get_header();?>



    <div class="title fixed-top">
        <div class="container">
            <h1><?php the_title()?></h1>
        </div> <!-- end container -->
    </div> <!-- end title -->




    <div class="content"> 
        <div class="container">
            <div class="section">
                <h4>Begin met zoeken</h4>

                <form action="" method="post">
                    <input class="inputTxt" type="text">
                    <input class="inputTxt" type="text">
                    <input class="inputTxt" type="text">
                    <input class="btn" type="button" value="Zoeken">
                </form>
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