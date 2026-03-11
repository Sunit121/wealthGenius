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
                <h1 data-aos="fade-up">Junior ISAs</h1>
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
                <p data-aos="fade-up">Individual Savings Accounts for children or Junior ISAs were introduced in
                    November 2011 replacing Child Trust Funds. They are long-term, tax-efficient savings accounts for
                    children who
                    <ul>
                        <li>are under 18</li>
                        <li>live in the UK</li>
                        <li>have not invested in a Child Trust Fund account.</li>
                    </ul>
                </p>
                <p data-aos="fade-up">If your child lives outside the UK, they can only open a Junior ISA if you are a Crown servant (for example, you work in the UK’s armed forces, diplomatic service or overseas civil service) and the child depends on you for care.</p>
                <p data-aos="fade-up">A child cannot have a Junior ISA as well as a Child Trust Fund account. A Junior ISA can be opened and the trust fund transferred into it.</p>
                <p data-aos="fade-up">There are two types of Junior ISA, namely a cash Junior ISA and a stocks and shares Junior ISA. A child can have one or both types at any one time but the total annual amount which can be paid into either or both combined is £9,000 (tax year 2024/25).</p>
                <p data-aos="fade-up">If the child is under 16 the account must be opened by someone with parental responsibility, e.g. a parent or step-parent, who then becomes the 'registered contact' and the only one who can change the account or provider. They should also keep all paperwork and report on any change of circumstances.</p>
                <p data-aos="fade-up">Anyone can put money into the account (providing the annual limit is not exceeded) but only the child can take it out when they are 18 years old. If they choose not to take it out or invest it in a different type of account, the Junior ISA will automatically become an adult ISA.</p>
                <p data-aos="fade-up">The money in the account can only be withdrawn before the child is 18 under two conditions:</p>
                <ul>
                    <li>The child is terminally ill, in which case the 'registered contact' can take the money out</li>
                    <li>The child dies, in which case the money will be paid to the person who inherits the child's estate.</li>
                </ul>
            
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
                    <p data-aos="fade-up">ISA INVESTORS DO NOT PAY ANY PERSONAL TAX ON INCOME OR GAINS, BUT ISAS MAY PAY UNRECOVERABLE TAX ON INCOME FROM STOCKS AND SHARES RECEIVED BY THE ISA MANAGERS. TAX TREATMENT VARIES ACCORDING TO INDIVIDUAL CIRCUMSTANCES AND IS SUBJECT TO CHANGE.</p>

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