<?php get_header(); ?>


<div class="row guidesMain">
    <div class="col-12 blogsHd">
        <h1>
            <?php 
            if (is_category()) {
                single_cat_title();
            } elseif (is_page()) {
                the_title();
            } else {
                echo 'Resources';
            }
            ?>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <ul class="nav nav-tabs resource-tabs mb-4 border-0" id="resourceTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="blogs-tab" data-bs-toggle="tab" data-bs-target="#blogs" type="button" role="tab" aria-controls="blogs" aria-selected="true">Blogs</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">Gallery</button>
            </li>
        </ul>
    </div>
</div>

<div class="tab-content" id="resourceTabsContent">
    <!-- Blogs Tab -->
    <div class="tab-pane fade show active" id="blogs" role="tabpanel" aria-labelledby="blogs-tab">
        <div class="row blogList">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <div class="col-md-4 mb-4">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card h-100'); ?>>
                            <div class="card h-100 border-0 shadow-sm">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top', 'style' => 'height: 250px; object-fit: cover;']); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="card-body d-flex flex-column">
                                    <header class="entry-header mb-2">
                                        <div class="entry-meta text-muted small mb-1">
                                            <?php echo get_the_date(); ?>
                                        </div>
                                        <h4 class="card-title h5">
                                            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                                <?php the_title(); ?>
                                            </a>
                                        </h4>
                                    </header>

                                    <div class="card-text flex-grow-1 text-muted">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <div class="blogs-read-more">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm"> 
                                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9H17" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M10 1L18 9L10 17" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                endwhile;
                ?>
                
                <div class="col-12">
                    <?php
                    // Pagination
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( 'Previous', 'textdomain' ),
                        'next_text' => __( 'Next', 'textdomain' ),
                        'class'     => 'pagination justify-content-center'
                    ) );
                    ?>
                </div>

            <?php else : ?>
                <div class="col-12">
                    <div class="alert alert-warning">No posts found.</div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Gallery Tab -->
    <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
        <div class="row galleryList">
            <?php
            $gallery_query = new WP_Query(array(
                'post_type' => 'wg_video',
                'posts_per_page' => -1,
            ));

            if ($gallery_query->have_posts()) :
                while ($gallery_query->have_posts()) : $gallery_query->the_post();
                    $video_type = get_post_meta(get_the_ID(), '_wg_video_type', true);
                    $youtube_url = get_post_meta(get_the_ID(), '_wg_youtube_url', true);
                    $local_video_url = get_post_meta(get_the_ID(), '_wg_local_video_url', true);
                    
                    $media_link = '';
                    if ($video_type === 'youtube') {
                        $media_link = $youtube_url;
                    } elseif ($video_type === 'local') {
                        $media_link = $local_video_url;
                    } else {
                        // Default to thumbnail or image if no video
                        $media_link = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    }
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="gallery-item-wrapper h-100">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden">
                                <a href="<?php echo esc_url($media_link); ?>" data-fancybox="resource-gallery" data-caption="<?php the_title(); ?>" class="d-block h-100 text-decoration-none">
                                    <div class="gallery-thumbnail position-relative">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top', 'style' => 'height: 250px; object-fit: cover;']); ?>
                                        <?php else : ?>
                                            <div style="height: 250px; background: #f8f9fa; display: flex; align-items: center; justify-content: center;" class="text-muted">
                                                No Thumbnail
                                            </div>
                                        <?php endif; ?>
                                        
                                        <?php if ($video_type !== 'none' && $video_type !== '') : ?>
                                            <div class="play-icon-overlay position-absolute top-50 start-50 translate-middle">
                                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="30" cy="30" r="30" fill="black" fill-opacity="0.5"/>
                                                    <path d="M40 30L25 40V20L40 30Z" fill="white"/>
                                                </svg>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-dark mb-0 h6 text-center"><?php the_title(); ?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else : ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No gallery items found. Please add videos or images from the WordPress backend.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
