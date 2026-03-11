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
                <h1 data-aos="fade-up">Introduction To Savings & Investments</h1>
            </div>
            <div class="banner-bg">
                <img data-aos="fade-up" data-aos-delay="100" src="<?= $base_url ?>assets/images/services/taxation-banner.webp">
            </div>
        </div>
    </section>

    <section class="greenbg">
        <div class="container-sm">
            <div class="subHd">
                <h3 data-aos="fade-up">Why Save?</h3>
                <p data-aos="fade-up">Often, people save for a specific reason and it's usually the safest way to build up a pot of money.</p>
                <p data-aos="fade-up">It’s less risky than investing, but it offers limited growth. The most you'll earn on the money you save is the interest added. Saving is perfect for people who don’t want to take any risks with their money, and most savings accounts have easy access or are for a fixed term.</p>
                <p data-aos="fade-up">There are many different ways to save, but whichever way you choose, the general idea is the same: to build up some money - savings - that can be used, for example, to make a large purchase such as a new fridge, go on holiday, pay for school fees or cover the cost of expensive times like Christmas.</p>
                <p data-aos="fade-up">Savings also provide security by making sure that some money is put aside for emergencies or unexpected costs.</p>              
            </div>

            <div class="subHd mt-5">
                <h3 data-aos="fade-up">Where Can I Put My Money?</h3>
                <p data-aos="fade-up">There are several different types of savings products out there. The links in this section will provide a guide to what is available to you.</p>            
            </div>
        </div>
    </section>

    <section class="international-consi">
        <div class="container-sm">
            <h3 data-aos="fade-up">What's The Difference Between Saving and Investing?</h3>
            <p data-aos="fade-up">Saving is a stage on the way to investing. You cannot be an investor without being a saver - but you can be a saver without being an investor.</p>
            <p data-aos="fade-up">When someone talks about savings and saving money, it could be referring to a piggy bank on the mantelpiece or a high-interest deposit account. Savings are effectively cash or cash instruments, such as deposit accounts or term bonds.</p>
            <p data-aos="fade-up">Investing is what you can do with the savings you have created - if you are looking to generate a return on your money that is greater than what is already available to you through your savings instruments. As a saver, you will take very few and very small risks with your money.</p>
            <p data-aos="fade-up">As an investor, you are taking a much greater risk. Not only is the return on offer to you likely not to be fixed or guaranteed, but the capital sum you invest is at risk as well.</p>
            <p data-aos="fade-up">So why would anyone want to take such risks? The short answer is that the potential rewards may be greater and you want to generate more from your money than is possible by simply leaving it in a bank or building a society deposit account.</p>
        </div>
    </section>
    <section class="greenbg">
        <div class="container-sm">
            <div class="subHd">
                <h3 data-aos="fade-up">What Should I Do Now?</h3>
                <p data-aos="fade-up">Since there are so many different types of savings and investments, and there are potential risks with investments in particular, it is wise to seek expert advice which can be tailored to suit your circumstances.</p>
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
                    <p data-aos="fade-up">CASH ON DEPOSIT ADVICE IS NOT REGULATED BY THE FINANCIAL CONDUCT AUTHORITY.</p>
                    
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