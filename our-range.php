<!-- 
Template Name: Custom Shop
-->
<?php echo get_header() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Tabs</title>
<style>
.qa-container {
    max-width: 1160px;
    margin: 0 auto;
    padding: 0 15px;
}
.qa-tab-main {
    padding-bottom: 30px;
}
.qa-tab {
    width: 18%;
    text-align: center;
    border: 1px solid #ccc;
    padding: 10px;
    box-sizing: border-box;
    position: relative;
    box-shadow: 0px 0px 5px 3px rgba(115, 110, 110, 0.17);
    border-radius: 12px 12px 12px 12px;
    text-align: center;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #62a403;
}
.qa-tab:hover{
    border-width: 1px 1px 1px 1px;
    border-color: #d13636;
}
.qa-tab img {
    width: 100%;
    height: 169px;
    transition: opacity 0.3s ease-in-out;
}
.qa-button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
}
h1 {
    text-align: center;
}
.gallery-image {
    display: none;
}
.qa-tab:hover .main-image{
    display:none;
}
.qa-tab:hover picture.gallery-image{
    display:block;
}
.qa-tab-main {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.qa-tab-main h2 {
    color: #232424;
    padding: 0;
    margin: 0;
    font-family: Arial;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.33;
}
.qa-tab-main .woocommerce-Price-amount.amount, .woocommerce-Price-amount.amount span{
    margin: 0;
    color: #62a403;
    font-size: 16px;
    font-weight: 600;
    font-family: "League Spartan", sans-serif;
    padding: 5px 2px 6px 2px;
}
.qa-tab-main a{
    text-decoration:none;
}
.qa-page-title{
    padding: 40px 0 24px 0;
    font-weight: 600;
    font-size: 45px;
    line-height: 1.2;
    color: #232424;
    font-family: "League Spartan", sans-serif;
    text-transform: capitalize;
    margin-top: 0;
    margin-bottom: 0;
}
@media (max-width:992px){
    .qa-tab {
    width: 31%;
    }
}
@media (max-width:640px){
    .qa-tab {
    width: 48%;
    }
    .qa-tab img {
    width: 100%;
    height: auto;
}
}
@media (max-width:575px){
    .qa-tab {
    width: 100%;
    height: auto;
    }
    .qa-tab img {
    width: 100%;
    height: auto;
}
}
</style>
</head>
<body>
<h1 class="qa-page-title"><?php echo get_the_title(); ?></h1>
<div class="qa-container">
<div class="qa-tab-main">
<?php
// WP_Query arguments
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,  // Show all products
);
// The Query
$query = new WP_Query($args);
// The Loop
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        global $product;
        $featured_image_id = $product->get_image_id();  // Get the ID of the product's featured image
        $featured_image_url = wp_get_attachment_image_url($featured_image_id, 'full');
        $gallery_images_ids = $product->get_gallery_image_ids();  // Get all gallery images
        
        $permalink = get_the_permalink();
        ?>
        <div class="qa-tab">
        <a href="<?php echo $permalink ?>">
            <?php if ($featured_image_url) : ?>
                <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php the_title(); ?>" class="main-image">
            <?php endif; ?>
            <?php if (!empty($gallery_images_ids)) : ?>
                <img src="<?php echo esc_url(wp_get_attachment_image_url($gallery_images_ids[0], 'full')); ?>" alt="<?php the_title(); ?>" class="gallery-image">
            <?php endif; ?>
        </a>
        <a href="<?php echo $permalink ?>"><h2><?php the_title(); ?></h2></a>
        <p><?php echo wc_price($product->get_price()); ?></p>
        <a href="<?php echo $permalink ?>"><button class="qa-button">Add to Cart</button></a>
        </div>
        <?php
    }
}
// Restore original Post Data
wp_reset_postdata();
?>
</div>
</div>
</body>
</html>
<?php echo get_footer() ?>