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
    <title>Lendr:FAQs</title>
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
        </div><!--/.nav-collapse -->
      <div class='container'>
          <h1>Frequently Asked Questions</h1>
          <p class='question'><h2>What is peer-to-peer lending? </h2></p>
      <p class='answer'>Peer to peer lending is an exciting new way for people to borrow money from other people. The people providing the funding are investors who would like to loan money to credit-worthy borrowers.</p>
      <p class='answer'>Borrowers get the recognition for their good credit behavior, by saving with better rates. For investors, it offers an opportunity to invest in a new, attractive fixed income asset class.</p>
      <p class='question'><h2>How is Peer to Peer Lending different from a bank loan?</h2></p>
      <p class='answer'><b>Lendr.</b> P2P is not your typical bank and does not intend to become one. P2P lending provides a different and interesting alternative for credit-worthy borrowers and fixed income investors to get a better deal. Part of the attraction of P2P lending is that it can provide better rates and returns without the infrastructure cost and complexity that comes from being a traditional bank or deposit-taking institution.</p>
      <p class='question'><h2>How much can I borrow, and for how long?</h2></p>
      <p class='answer'><b>Lendr.</b> personal loans range from N300,000 to N3,000,000 with flexible loan terms of 3 – 12 months.</p>
      <p class='question'><h2>What will my interest rate be?</h2></p>
      <p class='answer'>Your interest rate is determined by the matching request of the investor (lender), your credit profile and financial behavior and a 2&#37 mark-up. Good borrowers get rewarded for their good credit histories.</p>
      <p class='question'><h2>Are there any other fees and charges?</h2></p>
      <p class='answer'>We charge a one-off establishment and structuring fee. This is included in your total loan amount. There are no monthly fees or early repayment fees. So you have the security of a fixed rate loan, with the flexibility to pay it off early!</p>
      <p class='question'><h2>Do I qualify&quest;</h2></p>
      <p class='answer'>You only qualify if you meet the following Risk Acceptance Criteria (RAC):
            <ol>
                <li>You must be a confirmed staff at a listed/reputable institution for at least 1 year prior to the application.</li>
                <li>Your salary must be domiciled at a specified bank. See <a href='#qualification'>here</a></li>
                <li>You must be a Nigerian citizen or have the license to reside and work in Nigeria</li>
                <li>The monthly repayment does not exceed 35&#37 of average net monthly salary (existing loan inclusive)</li>
                <li>You  must not have any past  due obligation or be in hardship with any bank or finance house</li>
                <li>You must not have any adverse Credit Bureau </li>
                <li>You do not have a pending, current or previous history of bankruptcy</li>
                <li>The loan is for you, personally, not for anyone else or a business</li>
            </ol></p>
       <p class='question'><h2>What is the process – how do I apply and when I will receive my loan&quest;</h2>
       <p class='answer'><ol>
           <li>Apply online - 10 mins: Complete our easy online application.</li>
           <li>Get your rate - 2 mins: Get a rate estimate based on the matching investors request and your credit grade</li>
           <li>Get your loan funded - 24hrs: We will assess your application, fund your loan and get back to you with a loan offer on the same day</li>
           <li>Get your money - 72 hrs: Once you finalise your loan, get your money within 72 hours</li>
       </ol></p>
       <p><h2>Making repayments</h2></p>
          <ol>
            <li>  How do I make repayments</li> 
            <li>  How are repayments calculated</li> 
            <li>  Can I choose and/or change my repayment dates</li> 
            <li>  Can I repay my loan early</li> Can I make extra payments</li> 
            <li>  Are there any fees and charges that come with early exit</li> 
            <li>  Can I change my bank account/direct debit details</li>
          </ol>
       <p><h2>Investing in the marketplace</h2></p>
      <ol>
            <li>Who can invest</li> 
            <li>  Why can't retail clients invest now</li> 
            <li>  Can a SME invest</li> 
            <li>  Can I invest as a trust or company</li> 
            <li>  What is the minimum investment amount</li> 
            <li>  Is there a maximum investment</li> 
            <li>  What will I be investing in</li> 
            <li>  How do I apply to invest</li> 
            <li>  How many Investors are there per loan</li> 
            <li>  What if there is not enough investor demand for a loan</li> 
            <li>  Can I diversify my investment</li> 
            <li>  How many loans will I have in my portfolio</li> 
            <li>  How long does it take for my investments to be deployed into loans</li> 
            <li>  What structure do I invest through</li> 
            <li>  Do I invest directly in loans</li> 
            <li>  Can I withdraw the funds in my cash account as loans are repaid</li> 
            <li>  Where is my cash held</li> 
            <li>  What interest do I receive on the cash balance 
            <li>  What happens if a borrower defaults</li>  
      </ol>
      <p><h2>Investing in personal loans</h2></p>
      <ol>
        <li>  What are the loans used for</li> 
        <li>  How much are the loans for</li> 
        <li>  What are the loan terms</li> 
        <li>  Who are the borrowers</li> 
        <li>  How are personal loans evaluated</li> 
        <li>  What percentage of applications are listed for funding</li> 
        <li>  What determines the interest rate</li> 
        <li>  How do I invest</li> 
        <li>  Can I choose the loans I invest in</li> 
        <li>  What returns will I receive</li> 
        <li>  Is the interest rate fixed or variable</li> 
        <li>  When is the capital repaid</li> 
        <li>  What credit grades are most common</li> 
        <li>  How frequently are personal loan repayments made</li> 
        <li>  How soon are repayments available for withdrawal</li> 
        <li>  What happens when loans are repaid</li> 
        <li>  What interest do I receive on my cash balances</li> 
        <li>  What are <b>Lendr.</b>'s fees</li> 
        <li>  Is the investment liquid</li> 
        <li>  What are the risks</li> 
        <li>  What happens if a borrower defaults</li> 
      </ol>
      </div>
      <div class='container'>
          <footer>
                <p>&copy; 2016 Agnosys Technologies.</p>
          </footer>
      </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="../bootstrap/js/jquery.min.js"><\/script>')</script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
</body></html>