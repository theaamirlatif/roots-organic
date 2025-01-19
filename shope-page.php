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
.qa-tab:hover img.main-image{
    display:none;
}
.qa-tab:hover picture.gallery-image{
    display:block;
}
.qa-tab-main {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding-bottom:40px;
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
    'posts_per_page' => -1,  // Set to -1 to show all products
);
// The Query
$query = new WP_Query($args);
// The Loop
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        global $product;  // Ensure the $product global is available
        $gallery_ids = $product->get_gallery_image_ids();
        $first_gallery_img = !empty($gallery_ids) ? wp_get_attachment_url($gallery_ids[0]) : '';
        $permalink = get_the_permalink();
        ?>
        <div class="qa-tab">
        <a href="<?php echo $permalink ?>">
            <img src="<?php echo get_the_post_thumbnail_url($product->get_id(), 'woocommerce_thumbnail'); ?>" alt="<?php echo esc_attr($product->get_name()); ?>" class="main-image">
            <?php if ($first_gallery_img) : ?>
                <img src="<?php echo esc_url($first_gallery_img); ?>" alt="<?php the_title(); ?>" class="gallery-image">
            <?php endif; ?>
            </a>
            <?php
            // Assuming you're within the WordPress loop
            $post_categories = get_the_category('product_cat');

            // Check if there are categories associated with the post
            if ($post_categories) {
                foreach ($post_categories as $category) {
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                }
            }
            ?>
            <a href="<?php echo $permalink ?>"><h2><?php the_title(); ?></h2></a>
            <p><?php echo wc_price($product->get_price()); ?></p>
           <a href="<?php echo $permalink ?>"> <button class="qa-button">Add to Cart</button></a>
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