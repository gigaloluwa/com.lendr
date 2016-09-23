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
            <table class="table table-responsive table-striped">
                <thead>
                   <th>Segment</th>
                   <th>Amount</th>
                   <th>Rate</th>
                   <th>Lender</th>
                   <th>Purpose</th>
                   <th>Action</th>
                </thead>
                <tbody>
                    <?php 
                    $PAGE = 'travel_lender';
                    $stmt = "SELECT * FROM LENDR_MKT_001 WHERE SEGMENT = '$PAGE' AND ACTIVE_YN = 'Y' AND PROC_CODE = 0";
                    $tbl_res = $dbc->prepare($stmt);
                    $tbl_res->execute();
                    $result = $tbl_res->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($result as $row => $header){
                    ?>
                    <tr>
                        <td><?php echo $header['SEGMENT']; ?></td>
                        <td><?php echo $header['AMOUNT']; ?></td>
                        <td><?php echo $header['RATE']; ?></td>
                        <td><?php echo $header['LENDR_CODE']; ?></td>
                        <td><?php echo $header['PURPOSE']; ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    Action
                                </button>
                                         <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">                                <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="./borrow.php?loanCode=<?php echo $header['LOAN_CODE']; ?>&rate=<?php echo $header['RATE']; ?>&tenor=<?php echo $header['TENOR']; ?>&purpose=<?php echo $header['PURPOSE']; ?>&segment=<?php echo $header['SEGMENT']; ?>&amount=<?php echo $header['AMOUNT']; ?>">Borrow</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="../functions/removeLoan.php?loanCode=<?php echo $header['LOAN_CODE']; ?>&lender=<?php echo $header['LENDR_CODE']; ?>">Remove</a>
                                    </li>
                                    <?php if ($_SESSION["USER_ID"] === $header['LENDR_CODE']){
                                    echo '<li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="./myApplicants.php?loanCode='.$header["LOAN_CODE"].'&lender='.$header["LENDR_CODE"].'">View Applicants</a></li>';}
                                    ?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
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