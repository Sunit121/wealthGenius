<?php 
if (!isset($base_url)) {
    $is_live = (
        (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'a-c-m-e.in') !== false) ||
        (strpos(__FILE__, '/home/u133917450/') !== false)
    );
    if ($is_live) {
        $base_url = "https://a-c-m-e.in/wealthGenius/";
    } else {
        $base_url = "http://localhost/web/wealth-genius-new/";
    }
}
?>

<!-- WEB JS -->


<!-- WEB JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="<?= $base_url ?>assets/js/script.js"></script> 
<script>
    window.addEventListener('load', function() {
        AOS.init({
            duration: 600,
            once: true,
        });
        AOS.refresh();
    });
</script>

<!-- WEB JS END -->