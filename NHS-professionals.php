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

    <div class="hero-section">
        <img src="<?= $base_url ?>assets/images/hero_bg_landscape.jpg" alt="NHS Financial Future" class="hero-bg-img">
        <div class="container-sm">

            <div class="hero-content text-center">
                <div class="hero-badge" data-aos="fade-up">
                    <span class="dot"></span> Trusted by NHS Professionals
                </div>
                <h1 class="hero-title" data-aos="fade-up">
                    Your Financial Future, <br>
                    <span class="highlight">Secured with Confidence</span>
                </h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                    Expert guidance on NHS pensions, retirement planning, and wealth management tailored for healthcare professionals across the UK.
                </p>
                <div class="hero-btns" data-aos="fade-up" data-aos-delay="300">
                    <a href="<?= $base_url ?>contact.php" class="btn btn-green">Book Free Consultation &rarr;</a>
                    <a href="#" class="btn btn-outline">Download McCloud Guide</a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-features">
        <div class="small-container">
            <div class="feature-grid">
                <div class="feature-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="feature-info">
                        <h3>Expert Advisors</h3>
                        <p>Specialist guidance</p>
                    </div>
                </div>
                <div class="feature-card" data-aos="zoom-in" data-aos-delay="500">
                    <div class="feature-icon">
                        <i class="fa-solid fa-check-to-slot"></i>
                    </div>
                    <div class="feature-info">
                        <h3>Regulated Service</h3>
                        <p>Fully compliant advice</p>
                    </div>
                </div>
                <div class="feature-card" data-aos="zoom-in" data-aos-delay="600">
                    <div class="feature-icon">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <div class="feature-info">
                        <h3>NHS Focused</h3>
                        <p>Healthcare professionals</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="why-choose-wg-section">
        <div class="container-sm">
            <div class="why-choose-wg-hd">
                <h3 data-aos="fade-up">Why Choose Wealth Genius?</h3>
                <p data-aos="fade-up">At Wealth Genius, we specialise in delivering clarity, confidence and control over your financial life whether you’re an NHS doctor navigating McCloud Remedy, a GP planning retirement, or a professional investing for the future.</p>
            </div>

            <div class="keyPointMain why-choose-wg-main">
                <div class="contri" data-aos="fade-up">
                    <h4 data-aos="fade-up">Trusted by doctors, GPs, NHS staff and public sector professionals</h4>
                </div>
                <div class="contri" data-aos="fade-up" data-aos-delay="200">
                    <h4 data-aos="fade-up">Specialist NHS pension & McCloud remedy guidance</h4>
                </div>
                <div class="contri" data-aos="fade-up" data-aos-delay="300">
                    <h4 data-aos="fade-up">Tailored financial planning & wealth strategies</h4>
                </div>
                <div class="contri" data-aos="fade-up" data-aos-delay="400">
                    <h4 data-aos="fade-up">Regulated advice under Quilter Financial Services Ltd</h4>
                </div>
            </div>
            <p data-aos="fade-up">We provide clear, structured financial guidance to support informed decisions at every stage of your financial journey.</p>
        </div>
    </div>


     <section class="our-area-serivces panel">
        <div class="container-sm">
            <div class="area-services-slider">
                <div class="item">
                    <div class="areaService">
                        <img src="<?= $base_url ?>assets/images/our-area-service-1.webp">
                        <div class="areaServiceTxt weSupport">
                            <h4>NHS Pension & McCloud Remedy Advice</h4>
                            <p>Navigate the McCloud Pension Remedy with expert guidance:</p>
                            <ul>
                                <li>Understand your Remediable Pension Savings Statement</li>
                                <li>Maximise Pension benefits without unnecessary risk</li>
                                <li>Clear next steps if you haven't received your statement</li>
                                <li>Specialist advice for doctors, Gps & NHS workforce</li>
                            </ul>
                            <a href="<?= $base_url ?>">Start NHS pension review  <span><svg width="9" height="8" viewBox="0 0 9 8"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.5 3.18164C0.223858 3.18164 0 3.4055 0 3.68164C0 3.95778 0.223858 4.18164 0.5 4.18164V3.68164V3.18164ZM8.85355 4.03519C9.04882 3.83993 9.04882 3.52335 8.85355 3.32809L5.67157 0.146107C5.47631 -0.0491555 5.15973 -0.0491555 4.96447 0.146107C4.7692 0.341369 4.7692 0.657951 4.96447 0.853214L7.79289 3.68164L4.96447 6.51007C4.7692 6.70533 4.7692 7.02191 4.96447 7.21717C5.15973 7.41244 5.47631 7.41244 5.67157 7.21717L8.85355 4.03519ZM0.5 3.68164V4.18164H8.5V3.68164V3.18164H0.5V3.68164Z"
                                        fill="#043B1C" />
                                </svg>

                            </span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="areaService">
                        <img src="<?= $base_url ?>assets/images/our-area-service-2.webp">
                        <div class="areaServiceTxt weSupport">
                            <h4>Retirement & Pension Planning</h4>
                            <p>Plan a retirement that meets your expectations, not your fears:</p>
                            <ul>
                                <li>Personal pensions and executive pension planning</li>
                                <li>Annuities and income drawdown strategies</li>
                                <li>Carry forward & annual allowance reviews</li>
                            </ul>
                            <a href="<?= $base_url ?>">Plan my retirement wisely  <span><svg width="9" height="8" viewBox="0 0 9 8"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.5 3.18164C0.223858 3.18164 0 3.4055 0 3.68164C0 3.95778 0.223858 4.18164 0.5 4.18164V3.68164V3.18164ZM8.85355 4.03519C9.04882 3.83993 9.04882 3.52335 8.85355 3.32809L5.67157 0.146107C5.47631 -0.0491555 5.15973 -0.0491555 4.96447 0.146107C4.7692 0.341369 4.7692 0.657951 4.96447 0.853214L7.79289 3.68164L4.96447 6.51007C4.7692 6.70533 4.7692 7.02191 4.96447 7.21717C5.15973 7.41244 5.47631 7.41244 5.67157 7.21717L8.85355 4.03519ZM0.5 3.68164V4.18164H8.5V3.68164V3.18164H0.5V3.68164Z"
                                        fill="#043B1C" />
                                </svg>

                            </span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="areaService">
                        <img src="<?= $base_url ?>assets/images/our-area-service-1.webp">
                        <div class="areaServiceTxt weSupport">
                            <h4>Wealth Management & Investment Guidance</h4>
                            <p>Grow your assets with strategies that work:</p>
                            <ul>
                                <li>Investment planning & equities</li>
                                <li>Collective funds, fixed interest & investment bonds</li>
                                <li>Diversified portfolio construction</li>
                            </ul>
                            <a href="<?= $base_url ?>">Book investment consultation  <span><svg width="9" height="8" viewBox="0 0 9 8"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.5 3.18164C0.223858 3.18164 0 3.4055 0 3.68164C0 3.95778 0.223858 4.18164 0.5 4.18164V3.68164V3.18164ZM8.85355 4.03519C9.04882 3.83993 9.04882 3.52335 8.85355 3.32809L5.67157 0.146107C5.47631 -0.0491555 5.15973 -0.0491555 4.96447 0.146107C4.7692 0.341369 4.7692 0.657951 4.96447 0.853214L7.79289 3.68164L4.96447 6.51007C4.7692 6.70533 4.7692 7.02191 4.96447 7.21717C5.15973 7.41244 5.47631 7.41244 5.67157 7.21717L8.85355 4.03519ZM0.5 3.68164V4.18164H8.5V3.68164V3.18164H0.5V3.68164Z"
                                        fill="#043B1C" />
                                </svg>

                            </span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="areaService">
                        <img src="<?= $base_url ?>assets/images/our-area-service-1.webp">
                        <div class="areaServiceTxt weSupport">
                            <h4>Tax Planning & Mitigation</h4>
                            <p>Protect your wealth from unnecessary tax charges:</p>
                            <ul>
                                <li>Income tax planning</li>
                                <li>Capital gains tax planning</li>
                                <li>Inheritance tax planning</li>
                            </ul>
                            <a href="<?= $base_url ?>">Book tax planning consultation  <span><svg width="9" height="8" viewBox="0 0 9 8"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.5 3.18164C0.223858 3.18164 0 3.4055 0 3.68164C0 3.95778 0.223858 4.18164 0.5 4.18164V3.68164V3.18164ZM8.85355 4.03519C9.04882 3.83993 9.04882 3.52335 8.85355 3.32809L5.67157 0.146107C5.47631 -0.0491555 5.15973 -0.0491555 4.96447 0.146107C4.7692 0.341369 4.7692 0.657951 4.96447 0.853214L7.79289 3.68164L4.96447 6.51007C4.7692 6.70533 4.7692 7.02191 4.96447 7.21717C5.15973 7.41244 5.47631 7.41244 5.67157 7.21717L8.85355 4.03519ZM0.5 3.68164V4.18164H8.5V3.68164V3.18164H0.5V3.68164Z"
                                        fill="#043B1C" />
                                </svg>

                            </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="whyChooseWealth">
        <div class="container-sm">
            <div class="whyChooseWealthHd">
                <h3 data-aos="fade-up">Why choose Wealth Genius</h3>
                <p data-aos="fade-up">We don’t just recommend services — we craft strategic plans tailored to your life, career and goals.</p>
            </div>
            <div class="container-sm">
                <div class="whyChooseWealthListMain">
                    <div class="whyChooseWealthList">
                        <img src="<?= $base_url ?>assets/images/icon-2.svg">
                        <div class="whyChooseTxt">
                            <h3 data-aos="fade-up"><b>Personalised<br>financial plans</b></h3>
                        </div>
                    </div>
                    <div class="whyChooseWealthList">
                        <img src="<?= $base_url ?>assets/images/icon-3.svg">
                        <div class="whyChooseTxt">
                            <h3 data-aos="fade-up"><b>Clear explanations, <br>no jargon</b></h3>
                        </div>
                    </div>
                    <div class="whyChooseWealthList">
                        <img src="<?= $base_url ?>assets/images/icon-5.svg">
                        <div class="whyChooseTxt">
                            <h3 data-aos="fade-up"><b>Actionable steps you<br>can implement today</b></h3>
                        </div>
                    </div>
                    <div class="whyChooseWealthList">
                        <img src="<?= $base_url ?>assets/images/icon-5.svg">
                        <div class="whyChooseTxt">
                            <h3 data-aos="fade-up"><b>Ongoing support<br>as your life changes</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial panel">
        <div class="container-sm">
            <div class="testimonialHd">
                <h3 data-aos="fade-up">Testimonials</h3>
                <p data-aos="fade-up">See What Our Clients Have to Say About Us</p>
            </div>
            <div class="testimonial-slider">
                <div class="item">
                    <div class="testimonial-box landing-page-testimonial">
                        <div class="quote-img">
                            <img src="<?= $base_url ?>assets/images/quote.png">
                            <span>Review from <br>Verified Client</span>
                        </div>
                        <div class="testiMaintxt">
                            <div class="testiTxt">
                                <p>Wealth Genius have been providing me with advice and support in terms of investments and pension advice for a few years. I feel greatly supported with the excellent service particularly since I find it hard to get my head round financial jargon and concepts. They recently helped me with issues around my NHS pension and the annual allowance and the McCloud remedy which they took care of very efficiently. I would very much recommend their service.”</p>
                                <br>
                                <p><b> -Andrew I.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-box landing-page-testimonial">
                        <div class="quote-img">
                            <img src="<?= $base_url ?>assets/images/quote.png">
                            <span>Review from <br>Verified Client</span>
                        </div>
                        <div class="testiMaintxt">
                            <div class="testiTxt">
                                <p>Dinesh has been exceptional in managing our mortgage and giving us excellent financial advice and will always respond promptly and answers our questions as quickly as possible. We have had an excellent service from Dinesh and would recommend him to anyone.”</p>
                                <br>
                                <p><b>  -Samanthi K.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-box landing-page-testimonial">
                        <div class="quote-img">
                            <img src="<?= $base_url ?>assets/images/quote.png">
                            <span>Review from <br>Verified Client</span>
                        </div>
                        <div class="testiMaintxt">
                            <div class="testiTxt">
                                <p>Very good service, keeps me updated and motivated. Would recommend.”</p>
                                <br>
                                <p><b> -Samanthi K.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

       <section class="network panel">
        <div class="container-sm">
            <div class="networkHd">
                <h3 data-aos="fade-up">Get free resources now</h3>
            </div>
            <div class="resourcesMain">
            <div class="MacCloudResource">
            <div class="MacCloudResourceHd">
                <h3>MacCloud Remedy Guide</h3>
                 <div class="resourcesBtn"  data-aos="fade-up">
            <a href="<?= $base_url ?>service.php">Download</a>
            </div>
            </div>
           </div>
           <div class="toolsResource">
            <h3>Tools</h3>
            <div class="resourcesBtn"  data-aos="fade-up">
            <a href="<?= $base_url ?>service.php">Pension Calculator</a>
            <a href="<?= $base_url ?>service.php">Mortgage Affordability Calculator</a>
            <a href="<?= $base_url ?>service.php">Retirement Planner</a>
            </div>
          </div>
        </div>
    </section>
    <section class="subscribe panel">
        <div class="container-sm">
            <div class="subscribeMain">
                <div class="subscribeHd">
                    <h3 data-aos="fade-up">Subscribe to Our Newsletter</h3>
                    <p data-aos="fade-up">Send us your email address if you would like <br>to receive our regular newsletter</p>
                </div>
                <div class="subscribe-wrapper">
                    <form class="subscribe-form">
                        <div class="subscribe-input">
                            <input type="email" placeholder="Your email" required />
                            <button type="submit">Send</button>
                        </div>

                        <label class="privacy-check">
                            <input type="checkbox" required />
                            <span>
                                Please tick this box to confirm you have read and understood our privacy notice<br>
                                <a href="https://wealthgenius.co.uk/sites/default/files/clients/922/Privacy-notice.pdf"
                                    target="_blank">
                                    https://wealthgenius.co.uk/sites/default/files/clients/922/Privacy-notice.pdf
                                </a>
                            </span>
                        </label>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <section class="financial-future panel">
        <div class="container-sm">
            <div class="financial-futureMain">
                <div class="financial-futureHd">
                    <h3 data-aos="fade-up">Ready to take control of your financial future?</h3>
                </div>
                    <div class="resourcesBtn financial-futureBtn"  data-aos="fade-up">
            <a href="<?= $base_url ?>contact.php">Book a Consultation</a>
            <a href="<?= $base_url ?>service.php">Speak to a Specialist Adviser</a>
            <a href="<?= $base_url ?>contact.php">Contact Wealth Genius Today</a>
            </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <?php include 'footer.php' ?>
    <!--Footer-->

    <?php include 'style_js.php' ?>
</body>

</html>