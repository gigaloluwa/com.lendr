<?php
include '../assets/objects/dependencies.php';
$ls = new dependencies();
session_start();
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
    <script src="../bootstrap/js/val_reg2.js" type="text/javascript"></script>
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
            <?php 
           try{ $dbc = new PDO($ls->db_host, $ls->db_usn, $ls->db_psw,array(PDO::ATTR_PERSISTENT => true));
           }
           catch(PDOException $e){print "Error!: ".$e->getMessage();die();}
            
           //Variables
           $segment = filter_input(INPUT_POST,'loan_segment');
           $amount = filter_input(INPUT_POST,'loan_amt',FILTER_SANITIZE_NUMBER_FLOAT);
           $rate = filter_input(INPUT_POST,'rate',FILTER_SANITIZE_NUMBER_FLOAT);
           $tenor = filter_input(INPUT_POST,'loan_tenor',FILTER_SANITIZE_NUMBER_INT);
           $lendr_name = $_SESSION['Names'];
           $lendr_code = $_SESSION['USER_ID'];
           $loan_active = 'Y';
           $proc_code = 1;
           $purpose = filter_input(INPUT_POST,'loan_purpose');
           $loanCode = filter_input(INPUT_POST,'loan_code');
           $upd_time = strtotime("now");
           $date = date('Y/m/d');
           $l_b_code = 1;
           $APPLIED_AMT = $amount;
           $sal = filter_input(INPUT_POST,'sal_limit');
           $stmt = "INSERT INTO LENDR_MKT_001 VALUES ('$segment','$amount','$rate',$tenor,'$lendr_name',";
            $stmt .= "'$lendr_code','$purpose','$loanCode','$upd_time','$date','$loan_active',$proc_code,$l_b_code,";
            $stmt .="$APPLIED_AMT)";
            
           try{
               $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $dbc->beginTransaction();
               $dbc->exec($stmt);
               $dbc->commit();
              $error = 0; 
       }catch (Exception $e){
               $dbc->rollBack();
                echo "Error!: " . $e->getMessage();
                $error = 1;
           }
          
           if($error === 0){
               //Send a Message
       $email_server = $ls->smtp_server;
       $server_port = $ls->smtp_port;
       $username = $ls->smtp_usn;
       $password = $ls->smtp_psw;
       //recipient
       $recipient = explode(":", $loanCode);
       $rcpt_stmt = $dbc->prepare("SELECT EMAIL FROM LENDR_LOGIN_DTL WHERE USR_CODE = '$recipient[1]'");
       $rcpt_stmt->execute();
       $rcpt_res = $rcpt_stmt->fetchAll();
       $mailto = $rcpt_res[0][0];
       //Subject
       $subject = "Your Loan has an applicant";
       //Message
       $link = 'http://lendr-project.mylab-agnosys.com/';
       $body = "<html><head>
                            <title>$loanCode: New Appilcant Details </title>
                        </head>
                        <body>
                        <p>$loanCode: New Appilcant Details</p>
                        <table border='1' style='width:100%' align='left'>
                            <tr><th>Applicant ID</th><th>$lendr_code</th></tr>
                            <tr><th>Application Amount</th><th>$amount</th></tr>
                            <tr><th>Applicant Limit</th><th>$sal</th></tr>
                        </table>
                        <p>Click <a href='$link'>Here</a> to proceed or Ignore mail</p>
                        </body>
                    </html>";
       //Send Mail
       require_once ("../assets/swiftmailer/lib/swift_required.php");
       $transport = Swift_SmtpTransport::newInstance($email_server, $server_port,'ssl')
               ->setUsername($username)
               ->setPassword($password);
       
       $mailer = Swift_Mailer::newInstance($transport);
       
       $message = Swift_Message::newInstance()
              ->setFrom(array("peter_ilori@yahoo.co.uk"=>"LendR Rep"))
              ->setSubject($subject)
              ->setTo($mailto)
              ->setReadReceiptTo('giga@mylab-agnosys.com')
              ->setBody($body, "text/HTML")
              ->setbcc('giga@mylab-agnosys.com');
       
       $res = $mailer->send($message);
       
       echo $res;
    ?>
            <h2>
                Application successfully Registered. 
                Return to <a href='<?php echo $ls->marketPlace; ?>'>marketPlace</a>
            </h2>
               <?php 
           }
           else {Echo 'Mail Error';}
            ?>
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