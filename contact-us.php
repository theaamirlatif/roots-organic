<?php 
/*
 * Template Name: Contact Us
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="sfyn-contact-page">
<div class="sfyn-contact-page sfyn-same-padding">
    <div class="sfyn-custom-container">
        <h2 class="sfyn-text-align-center">Contact Us</h2>
        <div class="">
            <div class="sfyn-contact-page-form">
                <?php echo do_shortcode('[contact-form-7 id="3cce0d6" title="Contact Us"]'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>