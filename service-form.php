<form action="<?= $base_url ?>service-submit.php" method="POST" id="serviceQuery" novalidate>
    <div class="formHd">
        <h3>We're here to help, no matter where you are in life.</h3>
    </div>
    <div class="ContactForm serviceForm">
        <!-- CSRF Token -->
        <input type="hidden" name="csrf" value="<?php echo $_SESSION['csrf'] ?? ''; ?>">

        <div class="threecol">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="s_name" placeholder="NAME">
                <span class="error-msg" id="err_s_name">Please enter your name</span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="mobile" id="s_mobile" placeholder="PHONE">
                <span class="error-msg" id="err_s_mobile">Please enter a valid phone number</span>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="s_email" placeholder="EMAIL">
                <span class="error-msg" id="err_s_email">Please enter a valid email address</span>
            </div>
        </div>
        <div class="form-group">
            <textarea placeholder="COMMENTS" type="text" name="comments" id="s_comments"></textarea>
            <span class="error-msg" id="err_s_comments">Please enter your comments</span>
        </div>
        <div class="submit-query">
            <div class="checked-query">
                <div class="checkboxMain">
                    <input type="checkbox" id="agree">
                </div>
                <label for="agree">
                    Please tick this box to confirm you have read and understood our <a href="./assets/images/Privacy-notice.pdf" target="_blank"> Privacy Notice.</a>
                </label>
            </div>
            <span class="error-msg" id="err_s_agree" style="text-align:center; margin-bottom:10px;">You must agree to the privacy notice</span>
            
            <div class="send-btn">
                <button type="submit" id="serviceSubmitBtn" class="btn-submit">Send</button>
            </div>
        </div>
    </div>

</form>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('serviceQuery');
  const btn  = document.getElementById('serviceSubmitBtn');

  form.addEventListener('submit', function (e) {
    let isValid = true;

    // Helper to show/hide errors
    const showError = (id, show) => {
        document.getElementById(id).style.display = show ? 'block' : 'none';
        if(show) isValid = false;
    };

    // 1. Name
    const name = document.getElementById('s_name').value.trim();
    showError('err_s_name', name === '');

    // 2. Mobile (Simple check: not empty and roughly number-like)
    const mobile = document.getElementById('s_mobile').value.trim();
    const mobileRegex = /^[0-9+ ]{10,}$/; 
    showError('err_s_mobile', !mobileRegex.test(mobile));

    // 3. Email
    const email = document.getElementById('s_email').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    showError('err_s_email', !emailRegex.test(email));

    // 4. Comments
    const comments = document.getElementById('s_comments').value.trim();
    showError('err_s_comments', comments === '');

    // 5. Agree Checkbox
    const agree = document.getElementById('agree').checked;
    showError('err_s_agree', !agree);

    if (!isValid) {
        e.preventDefault();
        return;
    }

    // If valid, show processing
    const originalText = btn.textContent;
    btn.textContent = 'Processing...';
    btn.style.opacity = '0.7';
    btn.style.pointerEvents = 'none';
  });
});
</script>
