<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <?php include '../../style_css.php' ?>
</head>

<body>

    <!--Header-->
    <?php include '../../header.php' ?>
    <!--Header-->
    <section>
        <div class="container">
            <div class="Hdnew">
                <span>Savings</span>
                <h1 data-aos="fade-up">OEICs</h1>
            </div>
            <div class="banner-bg">
                <img data-aos="fade-up" data-aos-delay="100"
                    src="<?= $base_url ?>assets/images/services/taxation-banner.webp">
            </div>
        </div>
    </section>

    <section class="greenbg">
        <div class="container-sm">
            <div class="subHd">
                <h3 data-aos="fade-up">Open Ended Investment Companies (OEICs)</h3>
                <p data-aos="fade-up">An OEIC works in a very similar way to a unit trust except that an OEIC is legally constituted as a limited company (Plc). OEICs have been operating outside the UK for some time, but only since 1997 has it been possible to operate an OEIC in the UK.</p>
                <p data-aos="fade-up">OEICs are not trusts and do not therefore have a trustee. Instead, however, they have a depository which holds the securities and has similar duties to a unit trust trustee.</p>
                <p data-aos="fade-up">Most OEICs operate as umbrella funds which means that the OEIC is authorised and then can set up sub-funds without gaining individual authorisation for individual sub-funds. Each sub-fund has different investment aims. For example, a sub-fund may specialise in the shares of small companies or in a particular country, such as the USA. Each sub-fund can also have different charges and minimum and maximum investments. Unit trusts are allowed to do this too, but few do.</p>
                <p data-aos="fade-up">Most OEICs only have one unit price and the initial charge is added as an extra. Unit trusts always have two prices, the lower or bid price is what you get when you sell back to the managers; the higher or offer price is what you have to pay when you buy.</p>
            </div>
        </div>
    </section>

    <section class="typePensionbg taxnote">
        <div class="container-sm">
            <div class="imgtxtmain">
                <div class="typepensImg">
                    <img data-aos="fade-up" src="<?= $base_url ?>assets/images/services/risk.png">
                </div>
                <div class="typepenstxt">
                    <p data-aos="fade-up">THE VALUE OF INVESTMENTS AND THE INCOME THEY PRODUCE CAN FALL AS WELL AS RISE. YOU MAY GET BACK LESS THAN YOU INVESTED.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="related-links-section">
        <div class="container-sm">

                    <?php include '../related-links.php' ?>
        </div>
    </section>
    <section class="whyNeed">
        <div class="container-sm">
            <?php include '../../service-form.php' ?>
        </div>
    </section>

    <section class="ourService">
        <div class="container-sm">
            <div class="Hd">
                <h3 data-aos="fade-up">Other Areas of Expertise</h3>
            </div>

            <?php include '../area-of-expertise.php' ?>

        </div>
    </section>



    <!--Footer-->
    <?php include '../../footer.php' ?>
    <!--Footer-->

    <?php include '../../style_js.php' ?>
</body>

</html>