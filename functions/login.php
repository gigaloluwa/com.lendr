<?php
include '../assets/objects/dependencies.php';
$ls = new dependencies();
session_start();
           try{ $dbc = new PDO($ls->db_host, $ls->db_usn, $ls->db_psw,array(PDO::ATTR_PERSISTENT => true));
           }
           catch(PDOException $e){print "Error!: ".$e->getMessage();die();}
           $mail = $_POST["inputEmail"];
           $pswd = $_POST["inputPassword"];
           
            //database connection
           try{
               $len_stmt = "SELECT * FROM LENDR_LOGIN_DTL WHERE EMAIL = '$mail' AND PASSWORD = MD5('$pswd')";
                $tbl_cnt = $dbc->prepare($len_stmt);
                $tbl_cnt->execute();
                $result = $tbl_cnt->fetchAll();
                
                
                if($result){
                if($mail==$result[0]["EMAIL"] && md5($pswd)==$result[0]["PASSWORD"]){
                $_SESSION["email"] = $result[0]["EMAIL"];
                $_SESSION["Names"] = $result[0]["OTHER_NAMES"];
                $_SESSION["USER_ID"] = $result[0]["USR_CODE"];
                header("Location:../marketPlace/marketPlace.php");}
                else{$message = "INVALID USERNAME OR PASSWORD.";}}
                else{$message = "INVALID USERNAME OR PASSWORD.";}
           }
               catch (Exception $e){
                $message = "Error!: " . $e->getMessage();
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
    <title>Lendr: Market Place</title>
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
            <li><a href="#">Hello <?php echo $_SESSION["Names"]; ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
          <p><h2><?php echo $message; ?></h2></p>
      <p><h2>Return to <a href="../pages/signin.php">Login</a></h2></p>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
</body></html>