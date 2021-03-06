
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>contact form</title>
</head>

<body>

<link href="form.css" rel="stylesheet">
<h2>My stage 2 task for <a href="https://training.zuri.team/" target="_blank">Zuri Internship</a></h2>
<img src="images/zuri.png" class="center">
<div class="fcf-body">
    <div id="fcf-form">
    <h3 class="fcf-h3">Contact me</h3>

    <form id="fcf-form-id" class="fcf-form-class" onsubmit="return false">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" name="submit" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>


    </form>
    </div>

</div>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="script.js"></script>
</body>
</html>