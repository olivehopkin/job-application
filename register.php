<!DOCTYPE html>
<html>
<title>Job Tracker: Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/w3-copy.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
// password matching functionality //
var password = document.getElementById("password");
console.log(password);
var confirm_password = document.getElementById("confirm_password");
console.log(confirm_password);

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <ul class="w3-navbar w3-white w3-card-2" id="myNavbar">
            <li>
                <a href="#home" class="w3-wide">JOB TRACKER</a>
            </li>
            <!-- Right-sided navbar links -->
            <li class="w3-right w3-hide-small">
                <a href="#about">ABOUT</a>
                <a href="#team"><i class="fa fa-user"></i> REGISTER</a>
                <a href="#contact"><i class="fa fa-envelope"></i> CONTACT</a>
            </li>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <li>
                <a href="javascript:void(0)" class="w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                    <i class="fa fa-bars w3-padding-right w3-padding-left"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- Sidenav on small screens when clicking the menu icon -->
    <nav class="w3-sidenav w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidenav">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-large w3-padding-16">Close ×</a>
        <a href="#about" onclick="w3_close()">ABOUT</a>
        <a href="#team" onclick="w3_close()">TRACKER</a>
        <a href="#contact" onclick="w3_close()">CONTACT</a>
    </nav>
    <!-- Job Tracker Registration Section -->
    <div class="w3-container w3-padding-128" id="about">
        <h3 class="w3-center">JOB TRACKER REGISTRATION</h3>
        <p class="w3-center w3-large">Register to access the tools you need to track your job applications</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <form name="job-tracker-registration" action="form.asp" target="_blank">
                <p><input class="w3-border" type="text" placeholder="Email" required name="Email"></p>
                <p><input class="w3-border" type="password" placeholder="Password" id="password" required name="Password1"></p>
                <p><input class="w3-border" type="password" placeholder="Confirm your password" id="confirm_password" required name="Password2"></p>
                <div <p>
                    <button class="w3-btn w3-padding" type="submit">
      <i class="fa fa-paper-plane"></i> CREATE
    </button>
                    </p>
            </form>
            </div>
        </div>
    </div>

    <footer class="w3-center w3-black w3-padding-64">
    </footer>
    </body>
    </html>
