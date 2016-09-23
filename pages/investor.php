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
        <title>Lendr | Investors</title>
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
            <P><H2>INVESTORS</H2></P>
            <p>A pioneer way to invest in your peers and gain above market returns.</p>
            </div>
            <div class="info_tab2">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab-1" data-toggle="tab">1. Why Invest.</a>
                    </li>
                    <li>
                        <a href="#tab-2" data-toggle="tab">2. Investor Eligibility</a>
                    </li>
                    <li>
                        <a href="#tab-3" data-toggle="tab">3. Investment process</a>
                    </li>
                    <li>
                        <a href="#tab-4" data-toggle="tab">4. Return & Fees</a>
                    </li>
                    <li>
                        <a href="#tab-5" data-toggle="tab">5. Investor Code of conduct</a>
                    </li>
                </ul>
            
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade in active">
                    <h3>Registration</h3>
                    <p>LendR uses a transparent, convenient and efficient system to serve its users
                        LendR is a Peer-to-Peer lending platform, which gets creditworthy borrowers and willing investors together to transact on short to medium term personal unsecured loans.<br><br>
All borrowers go through a thorough financial, personal, professional and social background check which is performed through the use of sophisticated technology, industry standard methodology, working in tandem with seasoned and dedicated professionals.<br><br>
LendR’s investors have access to a wide range of borrowers with varied risk profiles giving the investor an option to create a diverse portfolio.<br><br>
Financial Institutions provide limited products for investments and low returns on options such as fixed deposits. Mutual funds are limited with regards to the investors they attract as they require high capital commitments over a long period of time. Finally, equity markets are highly volatile and require a significant holding capacity and risk appetite and even then returns are not guaranteed.<br><br>
LendR fills this gap by offering a new fixed income asset class which is safe and secure and offers a higher ROI than regular asset classes offered by conventional financial institutions.<br><br>
You may have been refused a loan from high street banks or other traditional financial institutions even though you are more than capable of repaying your loans. This may be due to an unconventional profile or something that banks might consider a "bad credit" profile.<br><br>
LendR takes a different approach compared to that of banks and looks at several more data points to create a more holistic credit profile and does not rely entirely on credit bureau scores and conventional KYC information.<br><br>
This approach helps us assist individuals with so-called bad credit profiles in getting personal loans at desired interest rates. Sign up as an investor and explore the tailor-made proposals that suit to your needs.<br><br>
Some of the key advantages of lending through LendR are: 
                    <ul>
                        <li>Attractive returns, higher than conventional banks offering</li>
                        <li>Access to a wide range of Pre-verified credit-worthy borrowers</li>
                        <li>Detailed credit assessment through sophisticated technology and dedicated professionals</li>
                        <li>Diversified portfolio of borrowers</li>
                        <li>Convenient and transparent processing system with no hidden charges</li>
                        <li>Opportunity to negotiate with the borrower before closing a deal</li>
                        <li>Support in collections when required</li>
                        <li>Recommended score and interest rate along with approved amount</li>
                    </ul>
                    
                    LendR follows an out of the box approach to credit assessment through a perfect blend of big data analytics and highly qualified professionals. Some of the factors we thoroughly assess are:<br>
                    <ul>
                        <li>Net Salary and expenditure trends</li>
                        <li>Educational Qualification and Professional History</li>
                        <li>Professional industry type and total asset holding</li>
                        <li>Number of total jobs held and frequency of job changes</li>
                        <li>Utility and Mobile bills</li>
                        <li>Credit card expenditure and limits</li>
                        <li>Locality of stay</li>
                        <li>Online spending behavior and many other non-traditional data points</li>
                    </ul>
                    In total, LendR reviews over 100 data points to ensure that our system accurately profiles a borrowers and our investors are provided with an accurate credit assessment to assist in their decision making process.
</p>
                </div>
                <div id="tab-2" class="tab-pane fade">
                    <h3>Investor Eligibility</h3>
                    <p>LendR is a platform for people with unconventional approach to Investing, which ultimately pays off with higher returns on an investor’s idle cash. This is more like investing in people rather than lending with much less risk factor and positive returns in most of the cases.<br><br>
The registration process to become an investor are fast and simple. Some of the basic requirements to be eligible to become an investor are:<br><br>
                    <ul>
                        <li>You must be a Nigerian resident</li>
                        <li>You must be more than 18 years old</li>
                        <li>You must have a valid Nigerian bank account</li>
                        <li>You must have a valid means of identity</li>
                        <li>You must abide by LendR's Terms & Conditions</li>
                        <li>You must adhere to Investor's code of conduct</li>
                        <li>You must register your details on the website https://www.LendR.com.ng</li>
                    </ul>
                </p>
                </div>
                <div id="tab-3" class="tab-pane fade">
                    <h3>Investment Process</h3>
                    <p>Investing at LendR is very similar to stock market investments but with much less volatility. LendR is all about investing in people through a transparent, convenient and efficient process.<br><br>
The process of investing in borrowers is fairly simple and streamlined
                    <ul>
                        <li><b>Registration</b>: Register your personal and professional details on LendR. We do basic checks on the information provided and ask for some documentation</li>
                        <li><b>Account activation</b>: LendR verifies the information provided and activates the account</li>
                        <li><b>Browsing and selecting borrowers</b>: Active investors can browse through the list of borrowers on the platform with varied risk profiles</li>
                        <li><b>Browsing and selecting borrowers</b>: Active investors can browse through the list of borrowers on the platform with varied risk profiles</li>
                        <li><b>Loan repayments</b>: All borrowers are encouraged to issue standing instructions in favour of their investors to make monthly payments easy and paper-free</li>
                    </ul>
                    </p>
                </div>
                <div id="tab-4" class="tab-pane fade">
                    <h3>Return & Fees</h3>
                    <p>
                        The returns you earn by investing through LendR depend on your risk appetite. So, you decide the risk profile of borrowers you want to invest in and LendR will facilitate the process afterwords.<br><br>
Non-Payment of Loan Installment: In case the borrowers do not transfer the loan repayment by the due date, additional penal interest would be applicable as per the loan agreement signed between the Investors and their respective borrowers and will be applied to the due amount for the duration of delay, which Borrowers will be liable to pay the Investor.
                    </p>
                </div>
                <div id="tab-5" class="tab-pane fade">
                    <h3>Investor Code of Conduct</h3>
                    <p><ul>
                    <li>The data provided on the website is directed solely at and is for use solely by people mentioned in the terms and conditions applying to lenders. The content provided on the website is not intended for distribution to, or use by, any person or entity in any jurisdiction where such distribution or use would be contrary to applicable law or regulation</li>
                    <li>You are permitted to download and print content from this platform solely for your own personal use to the extent required to use the services provided on this website. LendR supplied content must not be copied or reproduced, modified, redistributed, used or otherwise dealt with for any other reason without our express written consent</li>
                    <li>LendR is not responsible for content downloaded or posted by Investors on the platform</li>
                    <li>You agree to use the platform only for lawful purposes and in a way which does not infringe the rights of any anyone else or restrict or inhibit anyone else's use and enjoyment of the platform</li>
                    <li>You agree not to use the LendR website or any information accessible on or obtained from it for the purpose of canvassing or soliciting any person or enticing any person away from LendR</li>
                    <li>
                        You guarantee that you have taken all reasonable precautions to ensure that any information you upload or otherwise submit to the website is free from viruses and anything else which may have a contaminating or destructive effect on any part of the website or any of its technology
                    </li>
                    <li>You are responsible for all costs incurred by you in accessing the platform</li>
                    <li>The platform may contain links to websites. We accept no responsibility or liability for any material supplied by or contained on any third party website which is linked from or to the platform, or any use of personal data by such third party</li>
                    </ul>
                    </p>
                </div>
            </div>
          </div>
        </div>
        <div class="container footer">
            <p>&copy; 2016 Agnosys Technologies.</p>
        </div>
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