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
                <h1 data-aos="fade-up">Capital Investment Bonds</h1>
            </div>
            <div class="banner-bg">
                <img data-aos="fade-up" data-aos-delay="100" src="<?= $base_url ?>assets/images/services/taxation-banner.webp">
            </div>
        </div>
    </section>

    <section class="greenbg">
        <div class="container-sm">
            <div class="subHd">
                <p data-aos="fade-up">Capital Investment bonds are life insurance contracts used for the purposes of investment. They are designed to give capital growth and/or income over the medium to long term with access to your money by taking regular or one-off withdrawals. Most bonds are designed for investment over at least five years. If you cash in your investment before that time, you are likely to be charged an early surrender penalty.</p>
                <p data-aos="fade-up">Bonds are set up through insurance companies without the need for a check on your health status and normally people of any age can hold a bond. Bonds can be opened onshore (within the UK) or offshore (usually in the Isle of Man or the Channel Islands) to take advantage of tax concessions. The decision will depend on your personal tax situation.</p>
                <p data-aos="fade-up">Most bonds have no upper limit on how much you can invest, but barriers to entry can start higher than other investments, with a £10,000 minimum contribution being typical.</p>
                <p data-aos="fade-up">Drawing down income from a capital investment bond can be an option, though any income drawn down will deplete the original capital. You may be able, depending on the policy, to make additional payments to the bond at any time, as well as one-off withdrawals.</p>              
                <p data-aos="fade-up">Capital investment bonds have management charges and these vary greatly. They are usually levied as an annual fund charge or even as an initial charge and early encashment charge.</p>            
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