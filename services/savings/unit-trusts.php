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
                <h1 data-aos="fade-up">Unit Trusts</h1>
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
                <h3 data-aos="fade-up">Investing in Unit Trusts</h3>
                <p data-aos="fade-up">Unit Trusts are a common type of collective investment.</p>
                <p data-aos="fade-up">A unit trust is a large fund of monies and/or investments pooled together and
                    controlled by trustees to gain capital appreciation, income, or both.</p>
                <p data-aos="fade-up">Unit Trusts are made up of 'units'. Each unit will have both a buying price and a
                    selling price. The difference in these prices includes the fund management charges. The number of
                    units held, multiplied by the current price, gives the current value of an investor’s holding.</p>
                <p data-aos="fade-up">These investments are open-ended, which means that units are created every time an investor puts money into the fund, and liquidated when they withdraw money so that the fund can react to demand and continually grow through prosperous periods.</p>
                <p data-aos="fade-up">Investors can then enjoy the benefits of larger investments. However, during periods of poorer performance, the fund may need to sell assets to enable investors to withdraw their monies, so the fund size is reduced.</p>
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