<?php 
/*
 * Template Name: Help & Faq's
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="sfyn-faq">
    <div class="sfyn-custom-container">
        <?php the_content(); ?>
        <div class="sfyn-mt-24px">
            <h2 class="sfyn-section-heading sfyn-text-align-center"><?php echo get_field('heading'); ?></h2>
            <?php $rootsorganic = get_field('faqs'); 
					if($rootsorganic) {
					foreach($rootsorganic as $organic) { ?>
            <div class="nws-ac-item">
                <h3 class="nws-ac-title"><?php echo $organic['question']; ?></h3>
                <div class="nws-ac-body">
                    <p><?php echo $organic['answer']; ?></p>
                </div>
            </div>
            <?php }}?>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>