<?php
/**
 * Template Name: Custom Guides Page Wrapper
 * Description: Loads the 'guides' page from WordPress explicitly.
 */

// Define WP_USE_THEMES false so we can control headers if needed, 
// but here we want get_header() to work from the theme, so we might need it true 
// OR just load wp-load.php and manually call headers.
// However, standard external page pattern:

define('WP_USE_THEMES', false); // We will call get_header/get_footer manually
require_once( dirname(__FILE__) . '/blogs/wp-load.php' );

// Setup query for posts in the 'Guides' category
$paged = (isset($_GET['paged'])) ? intval($_GET['paged']) : ((get_query_var('paged')) ? get_query_var('paged') : 1);
$query = new WP_Query(array(
    'category_name' => 'guides', // Fetch posts from 'Guides' category
    'post_type'     => 'post',
    'posts_per_page' => 5,
    'paged'          => $paged
));

// Get header from active theme
get_header(); 
?>

<div class="row guidesMain">
    <div class="col-12 blogsHd">
        <h1>Guides</h1>
    </div>
</div>


<div class="container my-5">
    <div class="row">
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php 
                $pdf_link = get_post_meta(get_the_ID(), '_guide_pdf_link', true);
                ?>
                <div class="col-md-4 mb-4">
                    <div class="guide-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="guideImg">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid', 'style' => 'height: 100%; object-fit: cover;']); ?>
                            </div>
                        <?php endif; ?>
                        
                        <h4 class="guide-title">
                            <?php the_title(); ?>
                        </h4>

                        <div class="guideList-btn">
                            <?php 
                            $resolved_pdf_link = wg_get_dynamic_pdf_url($pdf_link);
                            ?>
                            <a href="<?php echo $resolved_pdf_link ? esc_url($resolved_pdf_link) : get_permalink(); ?>" 
                               class="btn" 
                               <?php echo $resolved_pdf_link ? 'target="_blank"' : ''; ?>>
                                DOWNLOAD NOW
                            </a>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
            
            <div class="col-12 mt-4">
                <?php
                echo paginate_links( array(
                    'base'    => add_query_arg( 'paged', '%#%' ),
                    'format'  => '',
                    'current' => max( 1, $paged ),
                    'total'   => $query->max_num_pages,
                    'prev_text' => __('&laquo; Previous'),
                    'next_text' => __('Next &raquo;'),
                    'type'      => 'list',
                    'class'     => 'pagination justify-content-center'
                ) );
                ?>
            </div>
            
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div class="col-12 text-center py-5">
                <h3>No Guides Found</h3>
                <p>Please ensure you have created a category named "Guides" and assigned posts to it.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php 
// Get footer from active theme
get_footer();
?>

