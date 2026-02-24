<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>McCloud Remedy Eligibility Checker - Wealth Genius</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <?php include 'style_css.php' ?>
</head>

<body>

    <!--Header-->
    <?php include 'header.php' ?>
    <!--Header-->

     <section class="nhsMain">
        <div class="container-sm">
            <div class="nhsHd">
                <h1 data-aos="fade-up">McCloud Remedy Eligibility Checker</h1>
            </div>
            <div class="mccloudBanner"  data-aos="fade-up">
                <img src="<?= $base_url ?>assets/images/Mc-cloud-banner.webp">
            </div>

        </div>
    </section>

    <section class="eligibility-section">
        <div class="container">
            <div class="eligibility-card" data-aos="fade-up">
                <h1 class="eligibility-title">McCloud Remedy Eligibility Checker</h1>
                <p class="eligibility-subtitle">Answer the following questions to check if you may be eligible for the McCloud pension adjustment:</p>

                <form name="eligibilityForm" class="eligibility-form">
                    <div class="eligibility-q-container">
                        <label>1. Is your new pension input (annual allowance) amount > GBP 40,000 for tax year 2022-2023?</label>
                        <select name="q1" class="eligibility-q">
                            <option value="">--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="eligibility-q-container">
                        <label>2. Is your new pension input amount greater than your old pension input amount (Annual allowance growth) during the remedy period 2015-2022?</label>
                        <select name="q2" class="eligibility-q">
                            <option value="">--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="eligibility-q-container">
                        <label>3. Have you paid annual allowance tax charge during the period 2015-16 to 2021-22 either via Scheme Pays or via Self Assessment?</label>
                        <select name="q3" class="eligibility-q">
                            <option value="">--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="eligibility-q-container">
                        <label>4. Is your Net income for 2021-2022-2023 greater than GBP 190,000?</label>
                        <select name="q4" class="eligibility-q">
                            <option value="">--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="eligibility-q-container">
                        <label>5. Are any of your contributions higher in the remedy period 2015-16 to 2021-22?</label>
                        <select name="q5" class="eligibility-q">
                            <option value="">--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="eligibility-q-container">
                        <label>6. Have your NHS Pension contributions changed during the remedy period (2015-16 to 2021-22) – NHS, Are you a locum GP subject to annualisation?</label>
                        <ul>
                            <li>A. Was your net income > GBP 100,000 for the period 2015-16 to 2019-20?</li>
                            <li>B. Was your net income > GBP 190,000 for the period 2020-21 to 2021-22?</li>
                        </ul>
                        <select name="q6" class="eligibility-q">
                            <option value="">--Select--</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="a or b">A or B</option>
                            <option value="none">None</option>
                        </select>
                    </div>

                    <button type="button" class="eligibility-submit-btn">Check Eligibility</button>
                </form>

                <div class="result-box">
                    &nbsp;
                </div>

                <div class="followUp">
                    <h4>Would you like us to send you guidance on what to do next?</h4>
                    <input type="email" placeholder="Enter your email" class="userEmail"><br>
                    <button type="button" class="submit-email-id">Submit Email</button><br>
                    <a href="https://www.wealthgenius.co.uk/contact" target="_blank"><button type="button">Book a Consultation</button></a>
                    <a href="https://www.wealthgenius.co.uk/guides/mccloud-remedy.pdf" target="_blank"><button type="button">Download Guide</button></a>
                    <p style="display:none;" class="emailResponse">
                        Thank you! We will be in touch shortly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <?php include 'footer.php' ?>
    <!--Footer-->

    <?php include 'style_js.php' ?>

    <script>
       
    </script>
</body>

</html>
