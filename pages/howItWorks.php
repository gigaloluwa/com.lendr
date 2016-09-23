<?php
include '../assets/objects/dependencies.php';
$ls = new dependencies();
?>
<html lang="en">
    <head>
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
        <link href="../bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="../bootstrap/css/pages.css" rel="stylesheet" type="text/css" />
        <script src="../bootstrap/js/ie-emulation-modes-warning.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/menu.js" type="text/javascript"></script>
        <link href="../bootstrap/css/menu.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="">
        <!--/.nav-collapse start-->
        <div class="container">
            <div id='cssmenu'>
                <ul>
                    <li>
                        <a href="<?php echo $ls->index; ?>">Home</a>
                    </li>
<!--                    <li class="active">-->
                    <li>
                        <a href="<?php echo $ls->about; ?>">About us</a>
                    </li>
                    <li>
                        <a href="<?php echo $ls->howitworks; ?>">How it works</a>
                    </li>
                    <li>
                        <a href="#">Market Place</a>
                        <ul>
                            <li>
                                <a href='<?php echo $ls->marketPlace; ?>'>Member</a>
                            </li>
                            <li>
                                <a href='<?php echo $ls->register; ?>'>Not Registered</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">More</a>
                        <ul>
                            <li>
                                <a href='<?php echo $ls->contact; ?>'>Contact us</a>
                            </li>
                            <li>
                                <a href='<?php echo $ls->repayment_calculator; ?>'>Repayment Calculator</a>
                            </li>
                            <li>
                                <a href='<?php echo $ls->qualify_yn ?>'>Qualified?</a>
                            </li>
                            <li>
                                <a href='<?php echo $ls->FAQs ?>'>FAQs</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse End-->
        </div>
        <!--/.Header End -->
        <div class='container'>
            <div class="starter-template">
            <P><H2>HOW LendR. WORKS</H2></P>
            <p>
                In this growing global market getting in touch with potential investors and borrowers is challenging and this is where <b>LendR</b> comes into play. <br>
                <b>LendR</b> is an online financial community that connects borrowers and investors. Our lower operating cost advantage means we can share significant savings and offer a better deal. Borrowers get better rates. Investors get solid returns. It's that simple.
            </p>
                <p>Our easy lending steps produce faster results. <b>LendR</b> has made the lending and borrowing process seamless and gives the user complete control.</p>
            </div>
            <div class="info_tab">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab-1" data-toggle="tab">1. Register</a>
                    </li>
                    <li>
                        <a href="#tab-2" data-toggle="tab">2. KYC Credit Checks</a>
                    </li>
                    <li>
                        <a href="#tab-3" data-toggle="tab">3. LendR Verification</a>
                    </li>
                    <li>
                        <a href="#tab-4" data-toggle="tab">4. Negotiation</a>
                    </li>
                    <li>
                        <a href="#tab-5" data-toggle="tab">5. Loan Disbursement</a>
                    </li>
                </ul>
            
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade in active">
                    <h3>Registration</h3>
                    <p>Any Nigerian resident above 18 years can register with LendR. Registration happens after filing out necessary forms on the site, and after thorough verification as per KYC norms laid by CBN for opening bank accounts and online trading accounts, assuring authentic and safe dealings. <a href="register.php">contact us</a> now to get started.</p>
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
          </div>
            <div class="">
                <details>
                    <summary>The LendR Process Flow</summary>
                    <p>Once registered with LendR, borrowers and investors can advertise/request for loans on the marketplace. The loan proposals/request between the investor and the borrower comes along with some basic information such as reason, amount, preferred interest rate, tenure etc. The receiver of proposal can either Accept, Reject, Re-negotiate or send a counter proposal. Both borrowers and Investors are allowed to strike multiple deals at one point of time.<br><br>
The whole procedure is discreet and without any intervention from us. The parties sign a formal contract on the platform after the agreement is made for amount and interest rate for same, between the investor and borrower, followed by transfer of fund to borrower's bank account.<br><br>
The EMI for repayment can be made and tracked via us along with other regular modes, such as, post-dated cheques, electronic transfers via Direct or Auto Debits, NEFT, NIP, etc.
<br><br><b>DISCLAIMER:</b><br><br>
LendR’s role in the bilateral transactions is limited to providing an avenue to facilitate the transaction, verification of borrower’s information and also facilitating loan repayment from the borrower back to the investor based on the agreed schedule. We also charge a service fee for our services. 
                 </p>
                </details>
                <details>
                    <summary>What LendR does.</summary>
                    <p>We verify each and every member at the time of registration, either as an investor or borrower. This ensures that the information that you see on our website about each member is authenticated as per proper guidelines set by the CBN/KYC rules. For the same, we collect Personal, Professional, Social and Financial details from each potential member.<br><br>
Once borrower and investors come to a mutual agreement, LendR will help them legalize the transaction by signing a formal contract. We make necessary provisions and help both parties realize the deal without the necessity of a physical meeting.<br><br>
Once a loan is disbursed, we help investors with the collection and recovery of loans as per agreed repayment schedules. Delay in repayment by borrowers draw a penalty that is pursued by LendR as part of the process. 
We at LendR do not collect money deposits from either borrowers or investors. All monetary transactions are directly between the two parties.<br><br>
Decisions to lend on LendR are entirely at the discretion of potential investors. We do not guarantee fixed or minimum rate of returns to any investor.<br><br>
For further details, please read LendR Term of Use and Privacy policy
LendR does not give any financial advice or recommendations to either borrowers or investors on this platform. Members are encouraged to make their own researched and informed decisions and transact accordingly, free of any coercion or any form of influence from us.<br><br>
If you have further queries, feel free to email us at <font style="color:blue">giga@mylab-agnosys.com</font></p>
                </details>
                <details>
                    <summary>Loan Repayment & Fund transfers</summary>
                    <p>LendR encourages its user to use auto debits for repayments. However, fund transfers can also happen through Post Dated Bank Cheques, NIPS, NEFT and other auto debits.<br><br> 
The funds are transferred directly between users. If PDCs are issued for repayment, they are directly issues in the name of the investors.<br><br>
LendR also encourages its users to transfer money electronically from leading banks across the country.
</p>
                </details>
                <details>
                    <summary>Loan Repayment Calculator</summary>
                    <p>Find out how much repayment you need to make with our loan repayment calculator.<br>
                        Click <a href="loanRepaymentCalculator.php">here</a></p>
                </details>
            </div>
        </div>
        <footer>
            <p>&copy; 2016 Agnosys Technologies.</p>
        </footer>
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
    </body>
</html>