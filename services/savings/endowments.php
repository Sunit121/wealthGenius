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
                <h1 data-aos="fade-up">Endowments</h1>
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
                <h3 data-aos="fade-up">Endowment Policies</h3>
                <p data-aos="fade-up">These are life insurance policies that are designed to pay a lump sum after a
                    specific term and pay out a guaranteed sum if the person insured dies within the term of the plan.
                </p>
                <p data-aos="fade-up">Although it is still possible to buy endowments that guarantee the value of the
                    lump sum at maturity, the majority of policies do not guarantee the maturity value - the money that
                    you get back will depend on the value of the investments within the policy.</p>
                <p data-aos="fade-up">By using life insurance policies, the value of the plan at maturity can be paid
                    without paying any further tax if certain ‘qualifying conditions’ are met. Although the policyholder
                    can avoid paying any tax at maturity, the insurance company does pay tax on income and gains within
                    the policy.
                </p>
                <p data-aos="fade-up">These policies can be particularly useful if you have an investment objective
                    you’d like to realise regardless of what happens to you. For example, to repay a mortgage, provide a
                    legacy for your children or provide for university fees etc.</p>
                <p data-aos="fade-up">However, the policy charges and the cost of the life insurance mean that it can
                    take several years before the endowment’s value is greater than the contributions paid in. Also,
                    there are other, more tax-efficient and less expensive investment options available, so if you do
                    not have any need to guarantee a sum will be paid if you die, an endowment is unlikely to be the
                    most suitable option for you. As with most investment the value of an endowment depends on
                    investment performance and is not guaranteed.</p>
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
                    <p data-aos="fade-up">TAX TREATMENT VARIES ACCORDING TO INDIVIDUAL CIRCUMSTANCES AND IS SUBJECT TO CHANGE.</p>
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