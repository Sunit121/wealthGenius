<?php
// Custom theme functions

function wealth_genius_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wealth_genius_setup' );

function wealth_genius_scripts() {
    wp_enqueue_style( 'wealth-genius-style', get_stylesheet_uri(), array(), '1.0.2' );
}
add_action( 'wp_enqueue_scripts', 'wealth_genius_scripts' );

// Custom Meta Box for Guide PDF
function add_guide_pdf_meta_box() {
    add_meta_box(
        'guide_pdf_meta_box',           // ID
        'Guide PDF Link',               // Title
        'display_guide_pdf_meta_box',   // Callback
        'post',                         // Screen (Post type)
        'normal',                       // Context
        'high'                          // Priority
    );
}
add_action('add_meta_boxes', 'add_guide_pdf_meta_box');

// Helper to get PDF URL relative to current server
function wg_get_dynamic_pdf_url($url) {
    if (empty($url)) return '';
    
    // If it's already a relative path or doesn't look like an upload URL, return as is
    if (strpos($url, 'wp-content/uploads/') === false) {
        return $url;
    }

    $upload_dir = wp_upload_dir();
    $base_url = $upload_dir['baseurl'];
    
    // Get the path after 'wp-content/uploads/'
    $parts = explode('wp-content/uploads/', $url);
    if (count($parts) > 1) {
        return $base_url . '/' . ltrim($parts[1], '/');
    }

    return $url;
}

function display_guide_pdf_meta_box($post) {
    $value = get_post_meta($post->ID, '_guide_pdf_link', true);
    $dynamic_url = wg_get_dynamic_pdf_url($value);
    ?>
    <div style="margin-bottom: 10px;">
        <label for="guide_pdf_link" style="display:block; margin-bottom:5px;">PDF URL:</label>
        <input type="text" name="guide_pdf_link" id="guide_pdf_link" value="<?php echo esc_attr($dynamic_url); ?>" style="width: 80%;" placeholder="https://example.com/guide.pdf">
        <button type="button" id="upload_pdf_button" class="button">Upload/Select PDF</button>
        <?php if ($value && $value !== $dynamic_url): ?>
            <p style="color: #d63638; font-size: 11px; margin-top: 5px;">Note: The stored URL has been adjusted to match this server.</p>
        <?php endif; ?>
    </div>
    <p class="description">This field is only visible if the "Guides" category is selected. You can upload a PDF or paste a link.</p>
    <?php
}

function wealth_genius_admin_scripts() {
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'wealth_genius_admin_scripts');


function save_guide_pdf_meta_box($post_id) {
    if (array_key_exists('guide_pdf_link', $_POST)) {
        update_post_meta(
            $post_id,
            '_guide_pdf_link',
            sanitize_text_field($_POST['guide_pdf_link'])
        );
    }
}
add_action('save_post', 'save_guide_pdf_meta_box');

// Conditional Display Script for Admin (Works for Classic & Block Editor)
function guide_pdf_admin_script() {
    global $pagenow;
    if ($pagenow == 'post-new.php' || $pagenow == 'post.php') {
        ?>
        <script type="text/javascript">
        jQuery(document).ready(function($) {
            function isGuidesChecked() {
                var checked = false;
                var foundCategoryList = false;

                // 1. Classic Editor Check
                var classicCheckboxes = $('#category-all input[type="checkbox"]');
                if (classicCheckboxes.length > 0) {
                    foundCategoryList = true;
                    classicCheckboxes.each(function() {
                        var label = $(this).closest('label').text().trim();
                        if (label.toLowerCase() === 'guides') {
                            if ($(this).is(':checked')) checked = true;
                        }
                    });
                }
                
                // 2. Block Editor (Gutenberg) - Broad Check
                // Look for any checkbox where the label or parent container mentions "Guides"
                $('.components-checkbox-control, .editor-post-taxonomies__hierarchical-terms-list-item').each(function() {
                    var labelText = $(this).text().trim().toLowerCase();
                    if (labelText === 'guides') {
                        foundCategoryList = true;
                        if ($(this).find('input[type="checkbox"]').is(':checked')) {
                            checked = true;
                        }
                    }
                });

                // If we didn't find the category list at all, we might be in the middle of loading.
                // In that case, return TRUE to show the field as a fallback.
                if (!foundCategoryList) return true;
                
                return checked;
            }

            function updateVisibility() {
                var show = isGuidesChecked();
                var $box = $('#guide_pdf_meta_box');
                var $container = $box.closest('.postbox');

                if (show) {
                    $box.show();
                    $container.show();
                } else {
                    $box.hide();
                    $container.hide();
                }
            }

            // Sync frequently
            setInterval(updateVisibility, 1000);

            // Immediate triggers
            $(document).on('change', 'input[type="checkbox"]', updateVisibility);
            
            // Media Uploader
            $(document).on('click', '#upload_pdf_button', function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select or Upload Guide PDF',
                    button: { text: 'Use this PDF' },
                    multiple: false,
                    library: { type: 'application/pdf' }
                });

                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('#guide_pdf_link').val(attachment.url);
                });

                frame.open();
            });
        });
        </script>

        <?php
    }
}

add_action('admin_footer', 'guide_pdf_admin_script');

// Exclude 'Guides' and 'Events' category from the main blog loop
function exclude_guides_category($query) {
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        $query->set('category_name', 'blogs'); // Only show 'blogs' category on home page
    }
}
add_action('pre_get_posts', 'exclude_guides_category');



// Create 'Events' category programmatically if it doesn't exist
function ensure_events_category_exists() {
    if ( ! term_exists( 'events', 'category' ) ) {
        wp_insert_term(
            'Events', 
            'category', 
            array(
                'description' => 'Posts related to company events',
                'slug'        => 'events'
            )
        );
    }
}
add_action( 'init', 'ensure_events_category_exists' );

// Register Testimonial CPT
function wg_register_testimonial_cpt() {
    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'new_item'           => 'New Testimonial',
        'view_item'          => 'View Testimonial',
        'search_items'       => 'Search Testimonials',
        'not_found'          => 'No testimonials found',
        'not_found_in_trash' => 'No testimonials found in trash',
        'menu_name'          => 'Testimonials',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => false,
        'menu_icon'           => 'dashicons-format-quote',
        'supports'            => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'wg_register_testimonial_cpt');

// Register Testimonial Category Taxonomy
function wg_register_testimonial_taxonomy() {
    $labels = array(
        'name'              => 'Testimonial Categories',
        'singular_name'     => 'Testimonial Category',
        'search_items'      => 'Search Categories',
        'all_items'         => 'All Categories',
        'parent_item'       => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category Name',
        'menu_name'         => 'Categories',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'testimonial-category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('testimonial_category', array('testimonial'), $args);
}
add_action('init', 'wg_register_testimonial_taxonomy');

// Register Videos CPT
function wg_register_video_cpt() {
    $labels = array(
        'name'               => 'Videos',
        'singular_name'      => 'Video',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Video',
        'edit_item'          => 'Edit Video',
        'new_item'           => 'New Video',
        'view_item'          => 'View Video',
        'search_items'       => 'Search Videos',
        'not_found'          => 'No videos found',
        'not_found_in_trash' => 'No videos found in trash',
        'menu_name'          => 'Videos',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => false,
        'menu_icon'           => 'dashicons-video-alt3',
        'supports'            => array('title', 'thumbnail'),
        'show_in_rest'        => true,
    );

    register_post_type('wg_video', $args);
}
add_action('init', 'wg_register_video_cpt');

// Add Metabox for Video Details
function wg_add_video_meta_box() {
    add_meta_box(
        'wg_video_details',
        'Video Details',
        'wg_display_video_meta_box',
        'wg_video',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'wg_add_video_meta_box');

function wg_display_video_meta_box($post) {
    $video_type = get_post_meta($post->ID, '_wg_video_type', true);
    $youtube_url = get_post_meta($post->ID, '_wg_youtube_url', true);
    $local_video_url = get_post_meta($post->ID, '_wg_local_video_url', true);
    ?>
    <div style="margin-bottom: 15px;">
        <label style="display:block; margin-bottom:5px;"><strong>Video Type:</strong></label>
        <select name="wg_video_type" id="wg_video_type" style="width: 100%;">
            <option value="none" <?php selected($video_type, 'none'); ?>>None (Image Only)</option>
            <option value="youtube" <?php selected($video_type, 'youtube'); ?>>YouTube</option>
            <option value="local" <?php selected($video_type, 'local'); ?>>Local Video</option>
        </select>
    </div>

    <div id="wg_youtube_field" style="margin-bottom: 15px; display: <?php echo ($video_type === 'youtube' ? 'block' : 'none'); ?>;">
        <label style="display:block; margin-bottom:5px;"><strong>YouTube URL:</strong></label>
        <input type="text" name="wg_youtube_url" value="<?php echo esc_attr($youtube_url); ?>" style="width: 100%;" placeholder="https://www.youtube.com/watch?v=...">
    </div>

    <div id="wg_local_field" style="margin-bottom: 15px; display: <?php echo ($video_type === 'local' ? 'block' : 'none'); ?>;">
        <label style="display:block; margin-bottom:5px;"><strong>Local Video:</strong></label>
        <input type="text" name="wg_local_video_url" id="wg_local_video_url" value="<?php echo esc_attr($local_video_url); ?>" style="width: 80%;">
        <button type="button" id="wg_upload_video_button" class="button">Select Video</button>
    </div>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#wg_video_type').change(function() {
            var val = $(this).val();
            $('#wg_youtube_field').hide();
            $('#wg_local_field').hide();
            if (val === 'youtube') $('#wg_youtube_field').show();
            if (val === 'local') $('#wg_local_field').show();
        });

        $('#wg_upload_video_button').click(function(e) {
            e.preventDefault();
            var frame = wp.media({
                title: 'Select or Upload Video',
                button: { text: 'Use this video' },
                multiple: false,
                library: { type: 'video' }
            });
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $('#wg_local_video_url').val(attachment.url);
            });
            frame.open();
        });
    });
    </script>
    <?php
}

function wg_save_video_meta_box($post_id) {
    if (isset($_POST['wg_video_type'])) {
        update_post_meta($post_id, '_wg_video_type', sanitize_text_field($_POST['wg_video_type']));
    }
    if (isset($_POST['wg_youtube_url'])) {
        update_post_meta($post_id, '_wg_youtube_url', esc_url_raw($_POST['wg_youtube_url']));
    }
    if (isset($_POST['wg_local_video_url'])) {
        update_post_meta($post_id, '_wg_local_video_url', esc_url_raw($_POST['wg_local_video_url']));
    }
}
add_action('save_post', 'wg_save_video_meta_box');
