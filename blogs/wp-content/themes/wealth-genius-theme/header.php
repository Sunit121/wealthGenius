<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <?php 
    // Include the main site's CSS setup which also defines $base_url
    if (file_exists(__DIR__ . '/../../../../style_css.php')) {
        include(__DIR__ . '/../../../../style_css.php'); 
    } else {
        echo "<!-- ERROR: style_css.php not found -->";
    }
    ?>
    <style>
        /* Specific overrides for WordPress content */
        body {
           /* Ensure body styles from main site persist */
        }
        
    </style>
</head>
<body <?php body_class(); ?>>

    <?php 
    // Include the main site's header
    if (file_exists(__DIR__ . '/../../../../header.php')) {
        include(__DIR__ . '/../../../../header.php'); 
    } else {
        echo "<!-- ERROR: header.php not found -->";
    }
    ?>

    <div class="container container-sm blog-content-wrapper">
