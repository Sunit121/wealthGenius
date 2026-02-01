<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <?php include '../style_css.php' ?>
</head>

<body>

    <!--Header-->
    <?php include '../header.php' ?>
    <!--Header-->

    <section>
        <div class="container">
            <div class="Hdnew">
                <span>Investments</span>
                <h1 data-aos="fade-up">Solutions tailored to your goals</h1>
            </div>
            <div class="banner-bg">
                <img data-aos="fade-up" data-aos-delay="100"
                    src="<?= $base_url ?>assets/images/services/investment-bg.webp">
            </div>
        </div>
    </section>
    <section class="whyNeed">
        <div class="container-sm">
            <div class="whyPensionMain">
                <div class="whyPensionImg">
                    <img data-aos="fade-up" data-aos-delay="100"
                        src="<?= $base_url ?>assets/images/services/investment-about.webp">
                </div>
                <div class="PensionTxt">
                    <h2 data-aos="fade-up" data-aos-delay="200">Why clients choose our<br>investment solutions</h2>
                    <p data-aos="fade-up" data-aos-delay="300"><b>Built around how you feel about risk</b></p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="500">Everyone’s different. Some people want steadier progress, others are comfortable with more
                            movement in return for higher long-term potential. We’ll help you choose an approach that
                            matches your goals and your comfort level—without overwhelming you with technical detail
                        </li>
                    </ul>
                    <p data-aos="fade-up" data-aos-delay="100"><b>Looked after as markets change</b></p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="200">Markets move, and investment strategies must adapt accordingly.</li>
                        <li data-aos="fade-up" data-aos-delay="300">Your investment are continuously reviewed and managed by experienced professionals, ensuring
                            portfolios remain aligned with strategy while responding appropriately to market conditions
                            across different economic cycles.</li>
                    </ul>
                    <p data-aos="fade-up" data-aos-delay="100"><b>More time for advice, less time on administration</b></p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="200">We simplify the investment process so you don’t have to manage everything yourself.</li>
                        <li data-aos="fade-up" data-aos-delay="300">From portfolio construction to ongoing oversight, we handle the detailed day-to-day
                            investment management and keep you updated in plain English, so you can focus on living your
                            life with confidence.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="greenbg investmentListing">
        <div class="container-sm">
            <div class="investmentListMain">
                <div class="investmentList" data-aos="fade-up" data-aos-delay="100">
                    <h4>Managed Portfolio Solutions</h4>
                    <p>Our managed portfolio solutions offer a structured investment approach with professional
                        oversight throughout.</p>
                    <p>Each portfolio is designed around clear objectives and monitored continuously, helping you stay
                        on track with greater consistency while removing the need for day-to-day investment decisions.
                    </p>
                </div>
                <div class="investmentList" data-aos="fade-up" data-aos-delay="200">
                    <h4>Multi-Asset Investment Portfolios</h4>
                    <p>Our multi-asset portfolios blend different types of investments to help balance risk and return
                        through changing market conditions.</p>
                    <p>Built by experienced investment professionals, these portfolios provide flexibility and
                        diversification, helping you match your investments to your goals, comfort with risk, and
                        personal preferences.</p>
                </div>
                <div class="investmentList" data-aos="fade-up" data-aos-delay="300">
                    <h4>Fund & Platform Investment Options</h4>
                    <p>If you’d like a wider range of choice, we give you access to a broad selection of funds and
                        investment options.</p>
                    <p>This approach lets us build a solution tailored to you using unit trusts, OEICs, ETFs and other
                        investments available on our platform, all backed by strong governance and ongoing oversight.
                    </p>
                </div>
            </div>
        </div>
    </section>

     <section class="bookCall">
    <div class="container-sm">
    <div class="bookCallMain">
    <div class="bookCallTxt">
    <h3 data-aos="fade-up" data-aos-delay="100">Thinking about your next<br>investment decision?</h3>
    <p>Our advisers are ready to support you with clarity, care, and confidence.<br>Let’s start the conversation today.</p>
    </div>
    <div class="bookCallBtn">
    <a  data-aos="fade-up" data-aos-delay="200" href="#">Book a Discovery Call</a>
    </div>
    </div>
    </div>
    </section>

    <!--Footer-->
    <?php include '../footer.php' ?>
    <!--Footer-->

    <?php include '../style_js.php' ?>
</body>

</html>