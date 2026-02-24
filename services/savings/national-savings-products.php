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
                <h1 data-aos="fade-up">National Savings Products</h1>
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
                <p data-aos="fade-up">The least risky of investment options are those offered by National Savings, which raises money on behalf of the UK Government.</p>
                <p data-aos="fade-up">While investment returns are not exceptional and some involve tying your money up for long periods, they are nevertheless stable and in some cases can be paid tax free.</p>
                <p data-aos="fade-up">They include National Savings Bank accounts and various forms of savings and Income Bonds. These savings and investment products are backed by H.M. Treasury, which makes them the most secure cash products available in the UK.</p>            
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
                    <p data-aos="fade-up">THE FINANCIAL CONDUCT AUTHORITY DOES NOT REGULATE ON NATIONAL SAVINGS PRODUCTS.</p>
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