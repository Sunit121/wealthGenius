    </div> <!-- Close container -->

    <?php 
    // Define base_url locally - Environment aware
    $is_localhost = (
        $_SERVER['SERVER_NAME'] === 'localhost' || 
        $_SERVER['SERVER_ADDR'] === '127.0.0.1' ||
        $_SERVER['SERVER_ADDR'] === '::1' ||
        strpos($_SERVER['HTTP_HOST'], 'localhost') !== false
    );
    $base_url = $is_localhost ? "http://localhost:8080/web/wealth-genius-new/" : "https://a-c-m-e.in/wealthGenius/";
    
    // Include the main site's footer
    if (file_exists(__DIR__ . '/../../../../footer.php')) {
        include(__DIR__ . '/../../../../footer.php'); 
    } else {
         echo "<!-- ERROR: footer.php not found -->";
    }

    // Include the main site's JS
    if (file_exists(__DIR__ . '/../../../../style_js.php')) {
        include(__DIR__ . '/../../../../style_js.php'); 
    } else {
         echo "<!-- ERROR: style_js.php not found -->";
    }
    ?>
    
    <?php wp_footer(); ?>
</body>
</html>
