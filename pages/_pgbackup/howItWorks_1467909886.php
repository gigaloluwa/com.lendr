<?php
include '../assets/objects/dependencies.php';
$ls = new dependencies();
?>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Lendr.">
    <meta name="Author" content="Gigaloluwa">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <title>Lendr:How It Works</title>
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css"/>
    <!-- Custom styles for this template -->
    <link href="../bootstrap/css/pages.css" rel="stylesheet" type="text/css"/>
    <script src="../bootstrap/js/ie-emulation-modes-warning.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/menu.js" type="text/javascript"></script>
    <link href="../bootstrap/css/menu.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
      <!--/.nav-collapse start-->
      <div class="container">
              <div id='cssmenu'>
          <ul>
            <li><a href="<?php echo $ls->index; ?>">Home</a></li>
            <li  class="active"><a href="<?php echo $ls->about; ?>">About us</a></li>
            <li><a href="<?php echo $ls->howitworks; ?>">How it works</a></li>
            <li><a href="#">Market Place</a>
                <ul>
                    <li><a href='<?php echo $ls->marketPlace; ?>'>Member</a></li>
                    <li><a href='<?php echo $ls->register; ?>'>Not Registered</a></li>
                </ul>
            </li>
            <li><a href="#">More</a>
                <ul>
                    <li><a href='<?php echo $ls->contact; ?>'>Contact us</a></li>
                    <li><a href='<?php echo $ls->repayment_calculator; ?>'>Repayment Calculator</a></li>
                    <li><a href='<?php echo $ls->qualify_yn ?>'>Qualified?</a></li>
                    <li><a href='<?php echo $ls->FAQs ?>'>FAQs</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse End-->
      </div><!--/.Header End -->
      <div class='container'>
          <div class="starter-template">
              <p>Our easy lending steps produce faster results. <b>LendR</b> has made the lending and borrowing process seamless and gives the user complete control.</p>
          </div>
          <div>
              <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-1" data-toggle="tab">1. Register</a></li>
              <li><a href="#tab-2" data-toggle="tab">2. KYC Credit Checks</a></li>
              <li><a href="#tab-3" data-toggle="tab">3. LendR Verification</a></li>
              <li><a href="#tab-4" data-toggle="tab">4. Negotiation</a></li>
              <li><a href="#tab-5" data-toggle="tab">5. Loan Disbursement</a></li>
            </ul>
          </div>
          <div class="tab-content">
              <div id="tab-1" class="tab-pane fade in active">
                <h3>Registration</h3>
                <p>In our marketplace, there are Lenders and Borrowers.</p>
                <p>Both Lenders and Borrowers must be fully registered.</p>
                <p>Register <a href="register.php">Here</a></p>
              </div>
              <div id="tab-2" class="tab-pane fade">
                <h3>KYC Credit Checks</h3>
                <p>Rigorous background checks are carried out on every borrower.</p>
                <p>A Borrower is any member of the market place who applies for any of the loans placed by a Lender</p>
              </div>
              <div id="tab-3" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
              </div>
           </div>
          <div class="">
              <ol start="1">
                  <li>What does LendR do?</li>
                  <li>The Lending/Borrowing process on LendR</li>
                  <li>Loan repayment and Fund Transfer</li>
                  <li>The Loan Repayment Calculator</li>
              </ol>
          </div>
      </div>
      <div class='container footer'><p>&copy; 2016 Agnosys Technologies.</p></div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/577d711c6148bbb35bc4d9c0/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body></html>