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
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <title>Lendr:About us</title>
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
        </div><!--/.nav-collapse -->
      <div class="container">
          <div class="starter-template">
            <h1>Lendr. combines 2 retail lending concepts</h1>
                <p class="lead"><h2>Peer 2 Peer Lending</h2></p>
          <p>P2P lending is simple yet revolutionary, <b>Lendr.</b> simply acts as a marketplace connecting borrowers and Investors. Borrowers can get funds from willing investors are lower credit costs and enjoy a better lending experience than the traditional banking experience. Investors can place their funds with borrowers via <b>Lendr.</b> at attractive risk adjusted returns than traditional banking products provide.</p>
          <p>A wide range of investors from individuals through cooperative societies and institutions are invited to participate as investors.</p>
          <p><b>Lendr.</b> leverages pooled online data and machine learning to quickly assess risk and determine credit ratings. Investors are matched to qualified applicants in seconds.</p>
          <p>The entire process is online, using technology to lower the cost of credit and pass the savings back in the form of lower rates for borrowers and solid returns for investors</p>
          <p>Register here either as an <a href='<?php echo $ls->invest; ?>'>Investor</a> or <a href='<?php echo $ls->borrow; ?>'>Borrower</a></p>
          <p class="lead"><h4>Connecting Investors and Borrowers</h4></p>
          <p><b>Lendr.</b> is an online financial community that connects borrowers and investors. Our lower operating cost advantage means we can share significant savings and offer a better deal. Borrowers get better rates. Investors get solid returns. It's that simple</p>
          <p class="lead"><h4>Our intermediation model: a more efficient one</h4></p>
          <p><b>Lendr.</b> connects individual and institutional investors with people who want to borrow, using a more efficient model. Investors get access to a new fixed income product with attractive returns while borrowers receive personalized rates based on their unique credit position.</p>
          <p class="lead"><h4>A better alternative</h4></p>
          <p>When borrowers apply for loans with <b>Lendr.</b>. We carefully evaluate each loan request using learning algorithms, filtering for only those applications on our platform that meet our high credit criteria. We remove any personal information to protect borrowers' privacy. The criteria in place also protects investors while providing higher returns on investment than other banks can provide.</p>
          <p>We are also certain that this model means that, unlike banks, the small business segment of the economy can be funded directly by investors. There is no better way for an investor to contribute to true economic growth.</p>
          <p class="lead"><h4>For investors: a better deal</h4></p>
          <p><b>Lendr.</b> investors have exposure to many different individual loans to diversify their investment. As borrowers make scheduled principal and interest repayments on their loans, investors receive predictable cash flows.</p>
          <p class="lead"><h4>Investors and borrowers information: Confidential and secure</h4></p>
          <p><b>Lendr.</b> vets the loans and handles the processing of payments in a confidential, secure environment, where the privacy of borrowers and investors is always protected.</p>
                <p class="lead"><h2>Fund Advance</h2></p>
                <p>These products are designed to finance <b>small to medium scale personal expenses</b> including rent, school fees, vehicle purchase or honeymoon advance to middle class salary earners in Nigeria, Staff of Corporate Organizations and Business Owners.</p>
                <p class='limits'><b>Personal grants</b> between N300,000 and N3 Million can be granted to borrowers at a maximum tenor of 2 years at negotiable interest rates and associated fees.</p>
                <p class='repayments'><b>Repayments</b> are flexible and are based on the borrower's cash flow/income pattern. However, generally, you will also be required to repay interest monthly and meet capital obligations either monthly or quarterly.</p>
                <p>You will also be required to pay minimal fees to <b>Lendr.
                </b></P>
                <p class='security'><b>Security</b></p>
                <p>
                        Because this products are designed primarily for salary earners with predictable earning cycles, the key security will be in the form of a domiciliation of Salary to specific banks.
                </p>
                <p class='documentation'><b>Documentation</b></p>
                <p>
                        A few documents cut across all products, these include:
                                <ol>
                                        <li>Fully completed application. See <a href='#'>here</a></li>
                                        <li>Your banks statement (over 6 months)</li>
                                        <li>A recent utility bill (bearing the same address as stated on your registration)</li>
                                        <li>Your Employer's undertaken (See your HR department)</li>
                                        <li>Pension & Tax ID</li>
                                        <li>Work ID & National ID</li>
                                        <li>Copy of duly executed and acknowledged direct debit form</li>
                                </ol>
                <p>Specific documentation for other loan products follow.</p>
                        <ol>
                            <li><b>Rent Finance</b>
                                <p>
                                    <ol>
                                        <li>Lease agreement</li>
                                        <li>Rent offer</li>
                                        <li>Photos of the property</li>
                                    </ol>
                                </p>
                            </li>
                            <li><b>School Fees Payment</b>
                                <p>
                                    <ol>
                                        <li>School fees bill</li>
                                    </ol>
                                </p>
                            </li>
                            <li><b>Auto Finance (Vehicle purchase)</b>
                                <p>
                                    <ol>
                                        <li>Proforma invoice for the vehicle</li>
                                    </ol>
                                </p>
                            </li>
                            <li><b>Honeymoon Advance</b>
                                <p>
                                    <ol>
                                        <li>Copy of visa pages</li>
                                        <li>Flight & hotel bookings</li>
                                    </ol>
                                </p>
                            </li>
                        </ol>
                </p>
                <p class='qualification'><b>Are you qualified?</b></p>
                    <p>
                        You only qualify if you meet the following Risk Acceptance Criteria (RAC):
                    <ol>
                        <li>You must be a confirmed staff at a listed/reputable institution for at least 1 year prior to the application.</li>
                        <li>Your salary must be domiciled at a specified bank. See <a href='#qualification'>here</a></li>
                        <li>You must be a Nigerian citizen or have the license to reside and work in Nigeria</li>
                        <li>The monthly repayment does not exceed 35&#37 of average net monthly salary (existing loan inclusive)</li>
                        <li>You  must not have any past  due obligation or be in hardship with any bank or finance house</li>
                        <li>You must not have any adverse Credit Bureau </li>
                        <li>You do not have a pending, current or previous history of bankruptcy</li>
                        <li>The loan is for you, personally, not for anyone else or a business</li>
                    </ol>
                    </p>
                          </div>
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
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
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