<!-- This program creates a form to be filled by users to enable them view the Ashesi CV template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<!-- Ashesi CV Template Profile Form-->
<body onload="defaultFocus();">   <!-- Browser focus on the first name when the page is loaded -->
    <h2>My stage 2 task for <a href="https://training.zuri.team/" target="_blank">Zuri Internship</a></h2>
    <img src="zuri.png" class="center">
    <h2>Provide your Contact details to create a Template Resume</h2>

    <!-- Container for having the form structure -->
    <div class="forms">
        <h2 id="p">PROFILE</h2>
        <form id = "cv" method="post" action="cv.php">
            <!-- First name -->
            <div class="fields">
                <label for="first">First *</label><br><br>
                <input type="text" id="first" name="f_name" placeholder="first name" class="forms"
                onblur="validateFirstName(this)"><br>
                <span id="fstatus" class="error"></span><br><br>
            <!-- Middle names -->
            </div>
            <div class="fields">
                <label for="middle">Other(s)</label><br><br>
                <input type ="text" id="middle" name="m_name" placeholder="middle name(s)" class="forms" 
                onblur="validateMiddleName(this)"><br>
                <span id="mstatus" class="error"></span><br><br>
            </div>
            <!-- Last name -->
            <div class="fields">
                <label for="last">Last *</label><br><br>
                <input type="text" id="last" name="l_name" placeholder="last name" class="forms" 
                onblur="validateLastName(this)"><br>
                <span id="lstatus" class="error"></span><br><br>
            </div>
            <!-- Address - location -->
            <div class="fields">
                <label for="address">Address(Location) *</label><br><br>
                <input type="text" id="address" name="address" placeholder="region, Country" class="forms" onblur="validateAddress(this)"><br>
                <span id="astatus" class="error"></span><br><br>
            </div>
            <!-- Phone number -->
            <div class="fields">
                <label for="phone">Primary Phone number *</label><br>
                <span><i>Country code optional, spaces between numbers not allowed.</i></span><br><br>
                <input type="tel" id="phone" name="phone" placeholder="+23327776087 or 0277776087" class="forms" 
                onblur="validatePhone(this)"><br>
                <span id="pstatus" class="error"></span><br><br>
            </div>
            <!-- Primary email address -->
            <div class="fields">
                <label for="email">Primary email *</label><br><br>
                <input type="email" id="email" name="email" placeholder ="name@domain.com" class="forms" onblur="validateEmail(this)" required><br>
                <span id="estatus" class="error"></span><br><br>
            </div>
            <!-- Gender -->
            <div class="fields">
                <label for="gender">Gender *</label><br><br>
                <select id="gender" name="gender" class="forms" required>
                <option value="" >--Choose Gender--</option>
                <option  value="Male">Male</option>
                <option  value="Female">Female</option>
                </select><br>
                <span id="gstatus" class="error"></span><br><br>
            </div>
            <!-- Submit button -->
            <button id="cvForm" type="submit" value="subform">SUBMIT FORM</button>
        </form>
    </div>
    <!-- Javascript file for validation and data storage included. -->
    <script src="storage.js"></script> 
</body>

</html>



  