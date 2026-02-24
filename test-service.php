<?php
session_start();
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Service Form Test</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php include 'style_css.php' ?>
</head>
<body>

    <?php include 'header.php' ?>

    <section>
        <div class="container-sm">
            <div class="contactMain">
                <div class="contactHd">
                    <h1>Service Form Test</h1>
                </div>
                <div class="contactformMain">
                    <?php include 'service-form.php' ?>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>
    <?php include 'style_js.php' ?>
</body>
</html>
