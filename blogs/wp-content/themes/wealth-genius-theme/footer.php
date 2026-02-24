    </div> <!-- Close container -->

    <?php 
    // Include the main site's footer
    if (file_exists(__DIR__ . '/../../../../footer.php')) {
        include(__DIR__ . '/../../../../footer.php'); 
    }
    
    // Include the main site's JS
    if (file_exists(__DIR__ . '/../../../../style_js.php')) {
        include(__DIR__ . '/../../../../style_js.php'); 
    }
    ?>
    
    <?php wp_footer(); ?>
</body>
</html>
