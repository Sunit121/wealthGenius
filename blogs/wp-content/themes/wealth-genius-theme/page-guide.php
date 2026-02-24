<?php
/*
Template Name: Guide Page
*/

get_header(); ?>

<div class="row justify-content-center">
    <div class="col-lg-10">
        <?php
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('page-guide mb-5'); ?>>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-banner text-center">
                        <?php the_post_thumbnail('full', ['class' => 'img-fluid w-100', 'style' => 'max-height: 500px; object-fit: cover;']); ?>
                    </div>
                <?php endif; ?>

                <header class="entry-header mb-4 text-center">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            </article>
            <?php
        endwhile; // End of the loop.
        ?>
    </div>
</div>

<?php get_footer(); ?>
