<?php 
/*
 * Template Name: Categories
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="sfyn-shop-page">
<!-- Categories section start -->
<div class="sfyn-prd-layout sfyn-same-padding">
    <div class="sfyn-custom-container">
        <div class="sfyn-prd-wrapper">
            <div class="sfyn-prd-cards">
                <h2 style="text-align: center; font-size: 45px; font-weight: 600; color: #232424; font-family: 'League Spartan', sans-serif;">Categories</h2>
                <div class="mycats">
                    <div class="cat-item" style="background-image: url('https://rootsorganic.com.au/wp-content/uploads/2024/04/Front-Green-3.png');">
                        <div class="cat-overlay">
                            <a href="https://rootsorganic.com.au/spices/"><h2>Spices Stock</h2></a>
                        </div>
                    </div>
                    <div class="cat-item" style="background-image: url('https://rootsorganic.com.au/wp-content/uploads/2024/07/chana-dal-Front-Green.png');">
                        <div class="cat-overlay">
                            <a href="https://rootsorganic.com.au/lentils/"><h2>Lentils Stock</h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--reviews-->
<div class="sfyn-prd-layout sfyn-same-padding sfyn-rev" style="margin-top: -40px;">
    <div class="sfyn-custom-container">
        <div class="sfyn-prd-wrapper">
            <div class="sfyn-prd-cards">
                <h2 style="text-align: center; font-size: 45px; font-weight: 600; color: #232424; font-family: "League Spartan", sans-serif; line-height: 1.2;">Recent Feedbacks Our Clients!</h2>
                <?php echo do_shortcode("[cusrev_reviews_slider]"); ?>
            </div>
        </div>
    </div>
</div>
<!--reviews-->
</div>
<!-- sfyn-frienly-store section end -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>