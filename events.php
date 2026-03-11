<?php
// Load WordPress environment
define('WP_USE_THEMES', false);
require_once('blogs/wp-load.php');

// Optional: Basic Auth if required as per index.php
/*
$user = "admin";
$pass = "WG-0226";
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] !== $user || $_SERVER['PHP_AUTH_PW'] !== $pass) {
    header('WWW-Authenticate: Basic realm="Private Page"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Access Denied";
    exit;
}
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Events - Wealth Genius</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php include 'style_css.php' ?>
    <link rel='stylesheet' href='<?= $base_url ?>blogs/wp-content/themes/wealth-genius-theme/style.css'>
</head>
<body>
    <!--Header-->
    <?php include 'header.php' ?>
    <!--Header-->

    <section>
        <div class="container-sm">
            <div class="service_main">
                <div class="serviceHd">
                    <h1>Events</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-sm container-events blog-content-wrapper">
        <!-- Latest Events Section -->
        <section class="latest-events mb-5">
            <h2 class="section-title mb-4">Latest Events</h2>
            <div class="row">
                <?php
                $today = date('Y-m-d');
                $latest_args = array(
                    'category_name' => 'events',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'date_query' => array(
                        array(
                            'after'     => $today,
                            'inclusive' => true,
                        ),
                    ),
                );
                $latest_query = new WP_Query($latest_args);

                if ($latest_query->have_posts()) :
                    while ($latest_query->have_posts()) : $latest_query->the_post();
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="event-card latest-event h-100 shadow-sm border-0 bg-white" style="border-radius: 20px; overflow: hidden;">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="event-thumbnail" style="overflow: hidden;">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top', 'style' => 'height: 250px; object-fit: cover; transition: transform 0.5s ease;']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="event-date text-muted small mb-2">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <h3 class="event-title h5 mb-3">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark" style="font-family: 'Playfair Display', serif;">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="mt-auto">
                                    <a href="<?php the_permalink(); ?>" class="btn-view-more">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<div class="col-12"><p>No upcoming events found. Stay tuned!</p></div>';
                endif;
                ?>
            </div>
        </section>

        <hr class="my-5">

        <!-- Past Events Section -->
        <section class="past-events">
            <h2 class="section-title mb-4">Past Events</h2>
            <div class="row past-events-grid">
                <?php
                $past_args = array(
                    'category_name' => 'events',
                    'posts_per_page' => 12, // Increased as it's a grid now
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'date_query' => array(
                        array(
                            'before'    => $today,
                            'inclusive' => false,
                        ),
                    ),
                );
                $past_query = new WP_Query($past_args);

                if ($past_query->have_posts()) :
                    while ($past_query->have_posts()) : $past_query->the_post();
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="event-card past-event h-100 shadow-sm border-0 bg-white" style="border-radius: 20px; overflow: hidden; opacity: 0.9;">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="event-thumbnail" style="overflow: hidden;">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top', 'style' => 'height: 250px; object-fit: cover; filter: grayscale(20%);']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="event-date text-muted small mb-2">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <h3 class="event-title h5 mb-3" style="font-family: 'Playfair Display', serif; color: #333;">
                                    <?php the_title(); ?>
                                </h3>
                                <!-- No View More button here as requested -->
                            </div>
                        </div>
                    </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<div class="col-12"><p>No past events found.</p></div>';
                endif;
                ?>
            </div>
        </section>


    </div>

    <!--Footer-->
    <?php include 'footer.php' ?>
    <!--Footer-->

    <?php include 'style_js.php' ?>
</body>
</html>
