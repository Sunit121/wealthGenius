<?php
// Load WordPress environment
if (!defined('ABSPATH')) {
    include_once dirname(__FILE__) . '/resources/wp-load.php';
}

// Check if a category is set for filtering
$args = array(
    'post_type'      => 'testimonial',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
);

if (isset($testi_category) && !empty($testi_category)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'testimonial_category',
            'field'    => 'slug',
            'terms'    => $testi_category,
        ),
    );
}

$testi_query = new WP_Query($args);
?>

<section>
    <div class="service-client-testi-main nhs-service-client-testi">
        <div class="client-testiHd">
            <h3 data-aos="fade-up" data-aos-delay="100">Client Testimonials</h3>
            <p data-aos="fade-up" data-aos-delay="200">Featured below are the ones our clients ask for most frequently.</p>
        </div>
        <div class="client-testi-slider">
            <?php if ($testi_query->have_posts()) : ?>
                <?php while ($testi_query->have_posts()) : $testi_query->the_post(); ?>
                    <div class="item">
                        <div class="testi-text">
                            <img src="<?= $base_url ?>assets/images/quote.png">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <!-- Fallback static content if no testimonials in WP -->
                <div class="item">
                    <div class="testi-text">
                        <img src="<?= $base_url ?>assets/images/quote.png">
                        <p>Excellent, swift, open and honest advice provided to help me plan for my retirement in 10 years time</p>
                    </div>
                </div>
                <div class="item">
                    <div class="testi-text">
                        <img src="<?= $base_url ?>assets/images/quote.png">
                        <p>Dinesh has been an invaluable source of knowledge and support in all aspects of our financial planning.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>