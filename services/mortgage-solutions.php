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


    <div class="taxationMain">
        <div class="taxation-nav-tabs">
            <ul>
                <li><a href="#mortgages-options">Mortgages Options</a></li>
                <li><a href="#limited-company">Limited Company</a></li>
                <li><a href="#let-to-buy">Let to Buy</a></li>
                <li><a href="#tracker-mortgages">Tracker Mortgages</a></li>
                <li><a href="#cashback-mortgages">Cashback Mortgages</a></li>
                <li><a href="#second-charge-mortgages">Second Charge Mortgages</a></li>
                <li><a href="#bad-credit-mortgages">Bad Credit Mortgages</a></li>
                <li><a href="#second-properties">Second Properties</a></li>
                <li><a href="#high-value-mortgages">High Value Mortgages</a></li>
                <li><a href="#offset-mortgages">Offset Mortgages</a></li>
                <li><a href="#retirement-mortgages">Retirement Interest Only Mortgages</a></li>

            </ul>
        </div>
        <div class="taxtion-content">
            <div class="container">
                <section id="intro">
                    <div class="Hdnew">
                        <h1 data-aos="fade-up">Our different mortgage solutions</h1>
                        <span>These are some examples how we cater your mortgage to your needs</span>
                    </div>
                    <div class="banner-bg p-0">
                        <img data-aos="fade-up" data-aos-delay="100"
                            src="<?= $base_url ?>assets/images/services/mortgage-solutions.webp">
                    </div>
                </section>
                <section class="taxation" id="limited-company">
                    <div class="imgTxtlr">
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/taxation.webp">
                        </div>
                        <div class="textrl">
                            <h3>Limited Company Mortgages</h3>
                            <p>A limited company mortgage is used when a property is bought and owned by a company
                                rather than personally. This is common for landlords building portfolios and can be part
                                of wider tax and business planning—though tax advice is separate and should be taken
                                from a qualified professional.</p>
                            <p> Company lending can involve extra checks (company structure, directors, property type,
                                and rental calculations), and the product range differs from personal buy-to-let. We’ll
                                explain what lenders typically want, how SPV structures are viewed, and which lenders
                                are active in this space—so you can decide whether company ownership fits your long-term
                                strategy and how to finance it smoothly.</p>
                        </div>
                    </div>
                </section>
                <section class="income-tax" id="let-to-buy">
                    <div class="imgTxtlr">
                        <div class="textrl">
                            <h3>Let-to-Buy Mortgages</h3>
                            <p>Let-to-buy is where you refinance your current home based on its expected rental income,
                                while also arranging a new residential mortgage to buy your next home. Because it
                                involves two linked applications, it can feel complex.</p>
                            <p>Buy-to-let borrowing is often interest-only and can come with higher rates than
                                residential deals, plus you’re taking on the realities of becoming a landlord. The right
                                advice helps you structure both mortgages sensibly and avoid costly surprises.</p>
                        </div>
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/let-to-buy.webp">
                        </div>
                    </div>
                </section>

                <section class="cgtax" id="tracker-mortgages">
                    <div class="imgTxtlr">
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/capital-gains-tax.webp">
                        </div>
                        <div class="textrl">
                            <h3>Tracker Mortgages</h3>
                            <p>A tracker mortgage is a type of variable rate that “tracks” an external benchmark—most
                                commonly the Bank of England base rate—usually by a set margin. If the base rate
                                changes, your mortgage rate (and monthly payment) can change too. Trackers can work well
                                for people who want a rate that’s transparently linked to a known benchmark, but the big
                                downside is uncertainty: payments can rise, and you need breathing room in your budget.
                                Some tracker deals also include early repayment charges, so it’s not always as flexible
                                as people assume. </p>
                            <p>We’ll show you what your payments could look like in different rate scenarios, and help
                                you decide whether a tracker’s risk/benefit balance suits you.</p>
                        </div>
                    </div>
                </section>

                <section class="inheritance-tax" id="cashback-mortgages">
                    <div class="imgTxtlr">
                        <div class="textrl">
                            <h3>Cashback Mortgages</h3>
                            <p>A cashback mortgage gives you a cash sum (or incentive) from the lender—either at
                                completion or later. Many people use this to help cover buying costs like legal fees,
                                surveys, stamp duty, moving, or home improvements.</p>
                            <p>Cashback can be a percentage of the mortgage or a fixed amount, and some lenders require
                                you to hold (or open) a current account with them. These deals are often linked to SVR
                                or tracker products, and you may have to repay some/all cashback if you redeem the
                                mortgage early.</p>
                        </div>
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/cashback.webp">
                        </div>
                    </div>
                </section>

                <section class="inheritance-tax" id="second-charge-mortgages">
                    <div class="imgTxtlr">
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/second-charge-mortgages.webp">
                        </div>
                        <div class="textrl">
                            <h3>Second Charge Mortgages</h3>
                            <p>A second charge mortgage (sometimes called a second mortgage) is an additional loan
                                secured on your home, separate from your main mortgage. It sits behind the first
                                mortgage in priority, which is why it’s called “second charge.” People typically use
                                second charge borrowing to raise funds without remortgaging their first mortgage—useful
                                if your existing deal has a strong rate or heavy early repayment charges. Because it’s
                                secured on your property, it can offer different pricing than unsecured loans, but it
                                also increases risk: if you can’t keep up with repayments, your home could be at risk.
                            </p>
                            <p> Second charge lending secured on a borrower’s home falls within FCA mortgage regulation.
                                We’ll explain how it works, what lenders look for, and whether it’s the right route
                                compared with remortgaging or other finance options.</p>
                        </div>
                    </div>
                </section>

                <section class="nest" id="bad-credit-mortgages">
                    <div class="imgTxtlr">
                        <div class="textrl">
                            <h3>Bad Credit Mortgages</h3>
                            <p>Bad credit doesn’t always mean “no”—some lenders will consider your overall situation,
                                not just your score. The key is being open and accurate on your application, then
                                presenting the strongest case possible.</p>
                            <p>To improve your chances, it can help to allow time since any negative events, apply with
                                stable income and a larger deposit, and take steps to improve your credit profile and
                                reduce existing debts. We can also help you identify lenders with experience supporting
                                borrowers who’ve had past credit issues.</p>
                        </div>
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/credit-mortgage.webp">
                        </div>
                    </div>
                </section>

                <section class="taxation" id="bad-credit-mortgages">
                    <div class="imgTxtlr">
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/second-properties.webp">
                        </div>
                        <div class="textrl">
                            <h3>Second Properties</h3>
                            <p>Buying a second home—whether it’s a holiday place, a home for family, or part of your
                                future plans—usually means proving you can comfortably manage the new mortgage as well
                                as your existing commitments. Lenders will look at your current mortgage payments,
                                regular bills, and the running costs of the additional property. You’ll also need a
                                deposit, and there may be extra costs such as higher stamp duty rates and additional
                                legal/valuation fees. </p>
                            <p>Requirements vary by lender, but second homes often involve stricter affordability checks
                                and potentially lower maximum LTVs than a first residential purchase. We’ll talk through
                                your goals, run affordability scenarios, and help you choose the right structure—so the
                                second property enhances your lifestyle (or plan) without stretching your finances.</p>
                            <div class="text-link">
                                <a href="#">Know More <span><svg viewBox="0 0 9 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.5 3.18188C0.223858 3.18188 0 3.40574 0 3.68188C0 3.95803 0.223858 4.18188 0.5 4.18188V3.68188V3.18188ZM8.85355 4.03544C9.04882 3.84018 9.04882 3.52359 8.85355 3.32833L5.67157 0.146351C5.47631 -0.0489113 5.15973 -0.0489113 4.96447 0.146351C4.7692 0.341613 4.7692 0.658195 4.96447 0.853458L7.79289 3.68188L4.96447 6.51031C4.7692 6.70557 4.7692 7.02216 4.96447 7.21742C5.15973 7.41268 5.47631 7.41268 5.67157 7.21742L8.85355 4.03544ZM0.5 3.68188V4.18188H8.5V3.68188V3.18188H0.5V3.68188Z"
                                                fill="url(#paint0_linear_711_11794)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_711_11794" x1="0.5" y1="3.68188"
                                                    x2="3.44161" y2="8.08522" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#279C5C" />
                                                    <stop offset="1" stop-color="#043B1C" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="nest" id="high-value-mortgages">
                    <div class="imgTxtlr">
                        <div class="textrl">
                            <h3>High Value Properties</h3>
                            <p>High-value mortgages often need a more tailored approach, and mainstream lenders may not
                                always be the best fit for complex underwriting. One common challenge is lender limits
                                on maximum loan-to-value (LTV) for premium properties.</p>
                            <p>For borrowing over £1m, it can be crucial to work with a broker who understands how
                                specialist lenders assess these cases and how to structure borrowing efficiently. In
                                some situations, assets such as pensions or stock portfolios may be used to support
                                negotiations and achieve more suitable lending terms.</p>
                        </div>
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/high-value-properties.webp">
                        </div>
                    </div>
                </section>

                <section class="taxation" id="offset-mortgages">
                    <div class="imgTxtlr">
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/offset-mortgages.webp">
                        </div>
                        <div class="textrl">
                            <h3>Offset Mortgages</h3>
                            <p>An offset mortgage links your mortgage to your savings with the same provider. Instead of
                                earning interest on those savings, you “offset” them against your mortgage balance,
                                paying interest on a lower amount.</p>
                            <p>That can help you reduce monthly payments or shorten the term. For example, if you have a
                                £200,000 mortgage and offset £20,000 savings, you pay interest on £180,000. Because
                                mortgage rates are often higher than savings rates, offsetting can be an effective way
                                to improve the overall numbers—while keeping savings accessible.</p>
                        </div>
                    </div>
                </section>
                <section class="nest" id="retirement-mortgages">
                    <div class="imgTxtlr">
                        <div class="textrl">
                            <h3>Retirement Interest Only Mortgages</h3>
                            <p>A Retirement Interest Only (RIO) mortgage lets you refinance and keep paying interest
                                only for the lifetime of the loan, with no fixed end date. The loan is repaid when the
                                borrower moves into care or passes away.</p>
                            <p>This product was introduced to help people whose interest-only mortgage term has ended
                                but who don’t have the capital to repay the original loan—provided staying in the home
                                is affordable. It can appeal to those who don’t want equity release, where interest can
                                roll up over time.</p>
                        </div>
                        <div class="imglt">
                            <img src="<?= $base_url ?>assets/images/services/retirement.webp">
                        </div>
                    </div>
                </section>

                <section id="client-testimonials">
                    <div class="service-client-testi-main">
                        <div class="client-testiHd">
                            <h3 data-aos="fade-up" data-aos-delay="100">Client Testimonials</h3>
                            <p data-aos="fade-up" data-aos-delay="200">Featured below are the ones our clients ask for
                                most frequently.</p>
                        </div>
                        <div class="client-testi-slider">
                            <div class="item">
                                <div class="testi-text">
                                    <img src="<?= $base_url ?>assets/images/quote.png">
                                    <p>Excellent, swift, open and honest advice provided to help me plan for my
                                        retirement in 0years time</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi-text">
                                    <img src="<?= $base_url ?>assets/images/quote.png">
                                    <p>Dinesh has been an invaluable source of knowledge and support in all aspects of
                                        our financial planning and I regularly recommend him to family, friends and
                                        colleagues.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi-text">
                                    <img src="<?= $base_url ?>assets/images/quote.png">
                                    <p>Professional, friendly, very responsive to questions and explained answers to my
                                        questions so that I can understand.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi-text">
                                    <img src="<?= $base_url ?>assets/images/quote.png">
                                    <p>Professional, friendly, very responsive to questions and explained answers to my
                                        questions so that I can understand.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bookCall mortgage-bookcall">
                        <div class="bookCallMain">
                            <div class="bookCallTxt">
                                <h3 data-aos="fade-up" data-aos-delay="100">Thinking about your next<br> mortgage?</h3>
                            </div>
                            <div class="bookCallBtn">
                                <a data-aos="fade-up" data-aos-delay="200" href="<?= $base_url ?>contact.php">Book a Discovery Call</a>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include '../footer.php' ?>
    <!--Footer-->

    <?php include '../style_js.php' ?>
</body>

</html>