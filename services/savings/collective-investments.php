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
                <h1 data-aos="fade-up">Collectives</h1>
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
                <h3 data-aos="fade-up">Collective Investments</h3>
                <p data-aos="fade-up">With a collective investment, your money is pooled, along with that of other
                    investors, to create a large capital sum. Professional fund managers then use this capital sum to
                    build up a large portfolio of investments. This approach enables you to indirectly hold a wide range
                    of stocks and shares or other investments in a way which would not be practical for the majority of
                    individual investors, whilst reducing the effects on your capital of fluctuations in individual
                    share values.</p>
                <p data-aos="fade-up">Collectives can also invest in fixed-interest instruments. These include UK
                    government stock, also known as gilt-edged stock or "gilts" for short. Corporate bonds are also
                    fixed interest instruments and both represent direct borrowing on the part of the issuer of the
                    bonds. They are referred to as "fixed interest" because their cost of borrowing is fixed, while the
                    price of the bonds themselves may float up or down depending on supply and demand.</p>
                <p data-aos="fade-up">Traditionally, fixed-interest investments have been regarded as a safe option.
                    However, it is important to remember that not only do they fluctuate in price, but also that the
                    investor risks that the issuer may not be able to pay the interest (coupon) on the bonds, or the
                    principal when the bonds mature.</p>
                <p data-aos="fade-up">With a collective investment, your capital can benefit from expert full-time
                    investment management, reducing the risk and complexities of direct investment into equities. Your
                    money becomes part of a much larger investment portfolio with much larger individual investments, as
                    well as more individual holdings.</p>
                <p data-aos="fade-up">Not all the money in collective investments will be invested. The managers will
                    normally hold a small amount of capital in cash to help pay for costs and to provide money for
                    investors who want to sell units in the investment. In circumstances where there has been a
                    reduction in fund values and/or the funds receive a large number of requests, fund managers may
                    delay or postpone withdrawals to avoid having to sell investments and undervalue them. This can be
                    of particular importance to investments that invest in illiquid or difficult-to-sell assets, e.g.
                    commercial property.</p>
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