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
    <title>Lendr: Loan Repayment Calculator</title>
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
    <script src="../bootstrap/js/lendr_loanRepaymentCalculator.js" type="text/javascript"></script>
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
        </div>
      <div class="container">
          <table class="table-responsive table table-striped">
              <tr>
                  <td><label>Principal Amount</label></td>
                  <td colspan="2"><input type="number" class="form-control" id='principal' placeholder="Insert loan amount"></td>
              </tr>
              <tr>
                  <td><label>Rate</label></td>
                  <td colspan="2"><input type="number" class="form-control" id='rate' placeholder="Insert Loan rate"></td>
              </tr>
              <tr>
                  <td><label>Repayment period (in approx. days)</label></td>
                  <td colspan="2"><input type="number" class="form-control" id='tenor' placeholder="Insert number of days"></td>
              </tr>
              <tr><td><button class="btn btn-info" id='btn_compute'>Compute</button></td>
                  <td></td><td></td>
              </tr>
              <tr>
                  <td><label>&nbsp;</label></td>
                  <td><label>Bullet Repayment (capital)</label></td>
                  <td><label>Amortized Repayment (capital)</label></td>
              </tr>
              <tr>
                  <td><label>Total Repayment</label></td>
                  <td><input id='bullet_tr' class="form-control" disabled="true"></td>
                  <td><input id='amort_tr' class="form-control" disabled="true"></td>
              </tr>
              <tr>
                  <td><label>Monthly Repayment</label></td>
                  <td><input id='bullet_mr' class="form-control" disabled="true"></td>
                  <td><input id='amort_mr' class="form-control" disabled="true"></td>
              </tr>
              <tr>
                  <td><label>Total Interest</label></td>
                  <td><input id='bullet_Tint' class="form-control" disabled="true"></td>
                  <td><input id='amort_Tint' class="form-control" disabled="true"></td>
              </tr>
          </table>
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