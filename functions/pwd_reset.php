<?php
include '../assets/objects/dependencies.php';
include './randGenerator.php';
$ls = new dependencies();
$npwd = new randgen();

session_start();
           try{ $dbc = new PDO($ls->db_host, $ls->db_usn, $ls->db_psw,array(PDO::ATTR_PERSISTENT => true));
           }
           catch(PDOException $e){print "Error!: ".$e->getMessage();die();}
           $emailer = filter_input(INPUT_POST, 'verifyMail');
            //database connection
           try{
               $len_stmt = "SELECT * FROM LENDR_LOGIN_DTL WHERE EMAIL = '$emailer' ";
                $tbl_cnt = $dbc->prepare($len_stmt);
                $tbl_cnt->execute();
                $result = $tbl_cnt->fetchAll();
                
                
                if($result){
                    
                if($emailer==$result[0]["EMAIL"]){
                    //Send Message
               $mailto = $emailer;
               $newPwd = $npwd->rand_pswd();
               $pwd_update = "UPDATE LENDR_LOGIN_DTL SET PASSWORD = MD5('$newPwd') WHERE EMAIL = '$emailer' ";
               $pwd_prep = $dbc->prepare($pwd_update);
               $pwd_prep->execute();
               $body = "<html><head>
                            <title>Your new password</title>
                        </head>
                        <body>
                        <p>Your new password</p>
                        <table border='1' style='width:100%' align='left'>
                            <tr><th>Email</th><th>$emailer</th></tr>
                            <tr><th>New Password</th><th>$newPwd</th></tr>
                        </table>
                        </body>
                    </html>";
               
               //Send Mail
				require '../assets/PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				//$mail->SMTPDebug = 3;                               // Enable verbose debug output

				$mail->isSMTP();                                    // Set mailer to use SMTP
				$mail->SMTPDebug = 0;
				$mail->Debugoutput = 'html';
				$mail->Host = $ls->smtp_server;  // Specify main and backup SMTP servers
				$mail->Port = $ls->smtp_port;// TCP port to connect to
				$mail->SMTPAuth = false;                               // Enable SMTP authentication
				$mail->Username = $ls->smtp_usn;                 // SMTP username
				$mail->Password = $ls->smtp_psw;                          // SMTP password
				$mail->setFrom('info@mylab-agnosys.com', 'Mailer');
				$mail->addReplyTo('info@mylab-agnosys', 'Information');
				$mail->addAddress($mailto, 'Recipient');     // Add a recipient
				$mail->addAddress('peter_ilori@yahoo.co.uk');               // Name is optional
				$mail->SMTPSecure = false; // Enable TLS encryption, `ssl` also accepted
				$mail->Subject = 'LendR - Your new Password';         

				
				
				// $mail->addCC('cc@example.com');
// 				$mail->addBCC('bcc@example.com');

				// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// 				$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				                                // Set email format to HTML

				
				$mail->msgHTML($body);
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if(!$mail->send()) {
					echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
					echo 'Message has been sent';
				}
               
               //Generate user response! Display within body
                $output = "YOUR NEW PASSWORD HAS BEEN SENT TO YOU";}
                else{$output = "EMAIL NOT FOUND IN OUR DATABASE";}}
                else{$output = "EMAIL NOT FOUND IN OUR DATABASE";}
           }
               catch (Exception $e){
                $output = "Error!: " . $e->getMessage();
           }
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
    <title>Lendr:Password Verification</title>
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
            <li><a href="#">Hello <?php echo $emailer; ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
          <p><h2><?php echo $output; ?></h2></p>
      <p><h2>Return <a href="../index.php">Home</a></h2></p>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
</body></html>