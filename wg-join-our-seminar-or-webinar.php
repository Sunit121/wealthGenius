<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <?php include 'style_css.php' ?>
</head>

<body>

    <!--Header-->
    <?php include 'header.php' ?>
    <!--Header-->
    <section>
        <div class="container">
            <div class="Hdnew">
                <h1 data-aos="fade-up">Join Our Seminar or Webinar</h1>
            </div>
            <div class="banner-bg">
                <img data-aos="fade-up" data-aos-delay="100"
                    src="<?= $base_url ?>assets/images/services/taxation-banner.webp">
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container-sm">
            <div class="subHd">
                <h3 data-aos="fade-up">Smart Tax & Wealth Strategies for Medical Professionals</h3>
                <p data-aos="fade-up">Take control of your finances with expert insights on tax efficiency, NHS pension planning, and smart wealth growth strategies.</p>
                <br>
                <ul>
                        <li><strong>Reduce Tax Liabilities –</strong>  Optimise your earnings and avoid unnecessary taxes.</li>
                    <li><strong>Maximise Your NHS Pension –</strong> Stay ahead of pension changes and benefits.</li>
                    <li><strong>Smart Investment Strategies –</strong> Build long-term financial security.</li>
                    <li><strong>Income Structuring –</strong> Save more through incorporation and efficient planning.</li>
                    <li><strong>Estate Planning –</strong> Protect your assets and ensure a tax-efficient legacy for your loved ones.</li>
                </ul>
                <h3 data-aos="fade-up"><a href="<?= $base_url ?>contact.php">Limited seats available – Register now!</a></h3>
                <p data-aos="fade-up"><b>When: [Insert Date & Time]</b></p>
                <p data-aos="fade-up"><b>Where: [Insert Venue/Online]</b></p>

            </div>
        </div>
    </section>


            
    <section class="whyNeed mt-5">
        <div class="container-sm">
            <?php include 'service-form.php' ?>
        </div>
    </section>

    <section class="ourService">
        <div class="container-sm">
            <div class="Hd">
                <h3 data-aos="fade-up">Other Areas of Expertise</h3>
            </div>

            <?php include 'services/area-of-expertise.php' ?>

        </div>
    </section>



    <!--Footer-->
    <?php include 'footer.php' ?>
    <!--Footer-->

    <?php include 'style_js.php' ?>
</body>

</html>