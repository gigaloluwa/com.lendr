<?php
include 'assets/objects/dependencies.php';
$ls = new dependencies();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Better than Banks">
        <meta name="author" content="Agnosys Technologies">
        <title>LendR | Welcome</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/extra.css" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <script src="bootstrap/js/ie-emulation-modes-warning.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/menu.js" type="text/javascript"></script>
        <link href="bootstrap/css/menu.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body class="body">
        <div class="heading">
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
                    <li><a href='<?php echo $ls->invest ?>'>Investor</a></li>
                    <li><a href='<?php echo $ls->borrow ?>'>Borrower</a></li>
                    <li><a href='<?php echo $ls->contact; ?>'>Contact us</a></li>
                    <li><a href='<?php echo $ls->repayment_calculator; ?>'>Repayment Calculator</a></li>
                    <li><a href='<?php echo $ls->qualify_yn ?>'>Qualified?</a></li>
                    <li><a href='<?php echo $ls->FAQs ?>'>FAQs</a></li>
                    <li><a href='<?php echo $ls->FAQs ?>'>Legal</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
        <!-- /End of Navbar -->
        <div class="jumbotron frontPageTop1" data-pg-name="Banner_effects">
            <div class="container-fluid sectionrow">
                <div class="center-piece">
                    <h3 class="headline">LendR.</h3>
                    <p class="lead">Forget Banks.<br>Direct Advance & P2P Lending<br> Invest or Borrow on your own terms</p>
                    <p class="lead"><a href="<?php echo $ls->register; ?>" class="btn btn-lg btn-default">Register</a></p>
                </div>
            </div>
        </div>
        <!-- /End of Banner -->
        <div class="segments">
            <div class='container centric-text'>
                <p class='lead'><b>LendR</b> is Nigeria's premiere online Peer to Peer lending market place. <b>LendR</b> connects borrowers and investors. <b>LendR's</b> primary aim is to make borrowing seamless and while maximizing the returns on investors funds via a safe channel.
                </p>
        </div>
            <div class="row centre-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <p><a class="btn btn-default" href="<?php echo $ls->register ?>" role="button">Want to Invest? »</a></p>
                    </div>
                    <div class="col-sm-4">
                        <p><a class="btn btn-default" href="<?php echo $ls->register ?>" role="button">Need a Loan? »</a></p>
                    </div>
                    <div class="col-sm-4">
                        <p><a class="btn btn-default" href="<?php echo $ls->contact ?>" role="button">Contact Us »</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End of Segments -->
        <div class="jumbotron frontpage2">
            <div class="container sectionrow">
                <h2 class="center-block">Try out our Loan Repayment Calculator<br></h2>
                <p><b>Transparency</b> Find out how much you need to pay back</p>
                <p><a class="btn btn-default" role="button" href="<?php echo $ls->repayment_calculator; ?>"> &nbsp;Here »</a></p>
            </div>
        </div>
        <!-- /End of MailID -->
        <div class="jumbotron centric-text">
            <div class="sectionrow">
                <h1>How can we help you?</h1>
                <p>LendR connects businesses and individuals to their investing or financing needs</p>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 segments">
                        <div class='row'>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4 placeholder">
                                <img class="img-responsive" src="assets/img/img-Invest.png"  alt="Generic placeholder image"></div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="row">
                           <div class="col-sm-4"></div>
                           <div class="col-sm-4">
                               <p class='lead'> Want to invest?</p>
                               <p><a class="btn btn-default" href="<?php echo $ls->register ?>" role="button">Register as a Lender »</a></p>
                           </div>
                            <div class="col-sm-4"></div> 
                        </div>
                    </div>
                    <div class="col-sm-6 segments">
                         <div class='row'>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4 placeholder">
                                <img class="img-responsive img-circle" src="assets/img/img-borrow.png" alt="Generic placeholder image"></div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="row">
                           <div class="col-sm-4"></div>
                           <div class="col-sm-4">
                               <p class='lead'> Want to borrow?</p>
                               <p><a class="btn btn-default" href="<?php echo $ls->register ?>" role="button">Register as a borrower »</a></p>
                           </div>
                            <div class="col-sm-4"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End of Media -->
        <div class="container footer">
            <footer>
                <p>© Agnosys Technologies</p>
            </footer>
        </div>
        <!-- /End of Footer -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
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
