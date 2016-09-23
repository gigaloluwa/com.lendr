<?php
include '../assets/objects/dependencies.php';
$ls = new dependencies();
session_start();
if(!$_SESSION["USER_ID"]){
    $redirect = "Location:../pages/signin.php";
        header($redirect);}
try{ $dbc = new PDO($ls->db_host, $ls->db_usn, $ls->db_psw,array(PDO::ATTR_PERSISTENT => true));
           }
           catch(PDOException $e){print "Error!: ".$e->getMessage();die();}
$id = $_SESSION["USER_ID"];
$statement = "SELECT * FROM CONF_REG_001 WHERE USR_CODE = '$id'";
$prep = $dbc->prepare($statement);
$prep->execute();
$result = $prep->fetchAll();
$sal = intval($result[0]["annual_income"])*0.35;
$rate = filter_input(INPUT_GET,'rate');
$tenor = filter_input(INPUT_GET,'tenor');
$purpose = filter_input(INPUT_GET,'purpose');
$segment = filter_input(INPUT_GET,'segment');
$loan_code = filter_input(INPUT_GET,'loanCode');
$amt = filter_input(INPUT_GET,'amount');
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
    <script src="../bootstrap/js/val_reg2.js" type="text/javascript"></script>
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
            <form method="POST" action="../functions/fn_borrow.php">
                <table class='table table-responsive table table-condensed table-striped'>
                    <tr><td><label>User</label></td><td><label><?php echo $_SESSION["email"] ?></label></td></tr>
                    <tr><td colspan="2"><label>Your Lending Limit is <?php echo number_format($sal, 0, ".", ","); ?></label></td></tr>
                    <tr><td><label>Amount (in Naira)</label></td><td><input class="form-control" type="number" id="loan_amt" name="loan_amt" min="100000" max="<?php echo $sal; ?>" placeholder="<?php echo $amt; ?>" value="<?php echo $amt; ?>" ></td>
                    </tr>
                    <tr>
                        <td><label>Loan Segment</label></td><td><?php echo $segment; ?><input class="form-control" type="hidden" id="loan_segment" name="loan_segment" value="<?php echo $segment; ?>"></td>
                        </td>
                    </tr>
                    <tr><td><label>Rate(in %)</label></td><td><?php echo $rate; ?><input class="form-control" type="hidden" id="rate" name="rate" value="<?php echo $rate; ?>" ></td>
                    </tr>
                    <tr><td><label>Tenor (in Months)</label></td><td><?php echo $tenor; ?><input class="form-control" type="hidden" id="loan_tenor" name="loan_tenor" value="<?php echo $tenor; ?>"></td>
                    </tr>
                    <tr><td><label>Preferred Purpose</label></td><td><?php echo $purpose; ?><input class="form-control" type="hidden" id="loan_purpose" name="loan_purpose" value="<?php echo $purpose; ?>"></td>
                    </tr>
                    <tr><td colspan="4">By clicking the Submit button, I have read and agree with the <a href="../downloads/Terms_and_conditions/Borrower Agreement.pdf" target="_blank">Borrower's Agreement</a> of this site</td></tr>
                     <tr> <td colspan="2">
                       <input type="hidden" name="loan_code" value="<?php echo $loan_code; ?>">
                       <input type="hidden" name="sal_limit" value="<?php echo $sal; ?>">
                        <button type="btn" id="submit_btn" class="btn btn-danger">Apply</button></td></form>
                </tr>
                </table>
            </form>
        </div>
        </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
</body></html>