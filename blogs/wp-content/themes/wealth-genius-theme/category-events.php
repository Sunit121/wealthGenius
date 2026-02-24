<?php
/**
 * Template Name: Events Page
 */
get_header(); ?>

<div class="row guidesMain">
    <div class="col-12 blogsHd">
        <h1>Events</h1>
    </div>
</div>

<div class="container-events">
    <!-- Latest Events Section -->
    <section class="latest-events mb-5">
        <h2 class="section-title mb-4">Latest Events</h2>
        <div class="row">
            <?php
            // Get the current category slug if we are on a category page
            $current_cat_slug = 'events'; 
            if (is_category()) {
                $current_cat_slug = get_queried_object()->slug;
            }

            $latest_args = array(
                'category_name' => $current_cat_slug,
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $latest_query = new WP_Query($latest_args);

            if ($latest_query->have_posts()) :
                while ($latest_query->have_posts()) : $latest_query->the_post();
            ?>
                <div class="col-md-4 mb-4">
                    <div class="event-card latest-event h-100 shadow-sm border-0">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="event-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top', 'style' => 'height: 250px; object-fit: cover;']); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="event-date text-muted small mb-2">
                                <?php echo get_the_date(); ?>
                            </div>
                            <h3 class="event-title h5 mb-3">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
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
                echo '<div class="col-12"><p>No latest events found. Please add posts to the "Events" category.</p></div>';
            endif;
            ?>
        </div>
    </section>

    <hr class="my-5">

    <!-- Past Events Section -->
    <section class="past-events">
        <h2 class="section-title mb-4">Past Events</h2>
        <div class="past-events-list">
            <?php
            $past_args = array(
                'category_name' => $current_cat_slug,
                'posts_per_page' => 10,
                'offset' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $past_query = new WP_Query($past_args);

            if ($past_query->have_posts()) :
                while ($past_query->have_posts()) : $past_query->the_post();
            ?>
                <div class="past-event-item py-3 border-bottom d-flex justify-content-between align-items-center">
                    <h4 class="past-event-title h6 mb-0">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                    <span class="past-event-date text-muted small">
                        <?php echo get_the_date(); ?>
                    </span>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No past events found.</p>';
            endif;
            ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
