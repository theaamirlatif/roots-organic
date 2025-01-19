<?php 
/*
 * Template Name: Lentils Items
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="sfyn-shop-page">
    <!-- sfyn-products-layout section start -->
<div class="sfyn-prd-layout sfyn-same-padding">
    <div class="sfyn-custom-container">
        <h2 class="sfyn-text-align-center">Lentils Stock</h2>
        <div class="sfyn-prd-wrapper sfyn-mt-24px">
            <div class="sfyn-prd-cards">
                <?php echo do_shortcode("[wpte_product_layout id=3]"); ?>
            </div>
        </div>
    </div>
</div>
<!-- sfyn-products-layout section end -->
<!--reviews-->
<div class="sfyn-prd-layout sfyn-same-padding sfyn-rev">
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