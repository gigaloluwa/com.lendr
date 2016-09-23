<?php
include '../assets/objects/dependencies.php';
$ls = new dependencies();
session_start();
if(!$_SESSION["USER_ID"]){
    $redirect = "Location:../pages/signin.php";
        header($redirect);}
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
    <title>Lendr:Market Place</title>
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
            <li><a href="<?php echo $ls->about; ?>">About us</a></li>
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
            <li><a href="#">Segments</a>
                <ul>
                    <li><a href="./marketPlace_homes.php">Home Lendr.</a></li>
                    <li><a href="./marketPlace_fees.php">Fee Lendr.</a></li>
                    <li><a href="./marketPlace_holiday.php">Holiday Lendr.</a></li>
                </ul>
            </li>
            <li><a href="invest.php">Invest</a></li>
            <li><a href="#">Hello <?php echo $_SESSION["Names"]; ?></a>
                <ul>
                    <li><a href="../functions/signout.php">Sign Out</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
        <div>
            <form method="POST" action="../functions/fn_invest.php">
                <table class='table table-responsive table table-condensed table-striped'>
                    <tr><td><label>User</label></td><td><label><?php echo $_SESSION["email"] ?></label></td></tr>
                    <tr>
                        <td><label>Segment</label></td>
                        <td>
                            <select class='form-control' name="loan_segment">
                            <option value='general'>General</option>
                            <option value='home_lendr'>Home Lendr.</option>
                            <option value='fee_lendr'>Fee Lendr.</option>
                            <option value='travel_lender'>Travel Lendr.</option>
                        </select>
                        </td>
                    </tr>
                    <tr><td><label>Amount (in Naira)</label></td><td><input class="form-control" type="number" id="loan_amt" name="loan_amt" placeholder="e.g. enter 70000 if N70,000" min="100000"></td>
                    </tr>
                    <tr><td><label>Rate(in %)</label></td><td><input class="form-control" type="number" id="rate" name="rate" placeholder="e.g. enter 7 if 7%"></td>
                    </tr>
                    <tr><td><label>Tenor (in Months)</label></td><td><input class="form-control" type="number" id="loan_tenor" name="loan_tenor" placeholder="e.g. enter 3 if 3 Months" max="24" min="0"></td>
                    </tr>
                    <tr><td><label>Preferred Purpose</label></td>
                        <td>
                            <select class='form-control' name="loan_purpose">
                            <option value='OTHER'>Other</option>
                            <option value='RENT'>Rent</option>
                            <option value='AUTO'>Automobile</option>
                            <option value='TRAVEL'>Travel</option>
                            <option value='EDUCATION'>Education</option>
                            </select>
                        </td>
                    </tr>
                     <tr> <td colspan="2"><button type="btn" id="submit_btn" class="btn btn-danger">Submit</button></td></form>
                </tr>
                </table>
            </form>
        </div>
        </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="../bootstrap/js/jquery.min.js"></script></script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
</body></html>