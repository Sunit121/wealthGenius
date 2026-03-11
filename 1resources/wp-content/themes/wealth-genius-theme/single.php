<?php get_header(); ?>

<div class="row justify-content-center">
    <div class="col-lg-10">
        <?php
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-single mb-5'); ?>>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-banner text-center">
                        <?php the_post_thumbnail('full', ['class' => 'img-fluid w-100', 'style' => 'max-height: 500px; object-fit: cover;']); ?>
                    </div>
                <?php endif; ?>

                <header class="entry-header mb-0 text-center">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta text-muted">
                        <span><?php echo get_the_date(); ?></span> | 
                        <span>Wealth Genius Retirement Planning Team</span>
                    </div>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="author-bio mt-5 p-4 bg-light rounded">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 90, '', '', ['class' => 'rounded-circle'] ); ?>
                        </div>
                        <div class="col-md-10">
                            <h4>About Wealth Genius Retirement Planning Team</h4>
                            <p><?php the_author_meta( 'description' ); ?></p>
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">View all posts by Wealth Genius Retirement Planning Team</a>
                        </div>
                    </div>
                </div>

                <footer class="entry-footer mt-5">
                    <div class="post-categories">
                        <strong>Categories:</strong> <?php the_category(', '); ?>
                    </div>
                    <?php the_tags('<div class="post-tags mt-2"><strong>Tags:</strong> ', ', ', '</div>'); ?>
                </footer>

            </article>

            <nav class="blog-navigation d-flex justify-content-between">
                <div class="nav-previous">
                    <?php 
                    $guides_cat = get_category_by_slug('guides');
                    $excluded = $guides_cat ? $guides_cat->term_id : '';
                    previous_post_link( '&laquo; %link', '%title', false, $excluded ); 
                    ?>
                </div>
                <div class="nav-next">
                    <?php 
                    $guides_cat = get_category_by_slug('guides');
                    $excluded = $guides_cat ? $guides_cat->term_id : '';
                    next_post_link( '%link &raquo;', '%title', false, $excluded ); 
                    ?>
                </div>
            </nav>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </div>
</div>

<?php get_footer(); ?>
