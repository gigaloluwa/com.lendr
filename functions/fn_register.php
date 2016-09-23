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
            $_SESSION["lastName"] = $_POST["Last_Name"];
            $_SESSION["otherNames"] = $_POST["Other_Names"];
            $_SESSION["email"] = $_POST["email"];
            $dob = (str_replace("/","-", $_POST["dob"]));
//            echo $lastName.'<br>'.$otherNames.'<br>'.$sex.'<br>'.$dob;
           $fields=' ';
           $values=' ';
           $len = 0;
            //This segment helps verify current age.
            function getAge($dob){
                if(!empty($dob)){
                        $birthdate = new DateTime($dob);
                        $today   = new DateTime('today');
                        $age = $birthdate->diff($today)->y;
                        return $age;
                    }else{
                return 0;
              }
            }
                $len_stmt = 'SELECT COUNT(*) FROM CONF_REG_001';
                $tbl_cnt = $dbc->prepare($len_stmt);
                $tbl_cnt->execute();
                $result = $tbl_cnt->fetchColumn(0);
                $result = intval($result)+1;
                $regCode = "'ldr".date('Y/m/d')."/".$result."'";
                $_SESSION["user_code"] = $regCode;
            
//            echo getAge($dob).'<br>';
            //displays all the post elements
            foreach($_POST as $header => $value){
                $sep = ' ';
                if($value===""){$value='null';}
                if($len<sizeof($_POST)-1){$len++;$sep = ',';}
                $fields .= $header.$sep;
                $values .= "'".$value."'".$sep;
            }
//            echo $values;
            //database connection
           $stmt = "INSERT INTO CONF_REG_001 ($fields,USR_CODE) VALUES ($values,$regCode)";
           try{
               $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $dbc->beginTransaction();
               $dbc->exec($stmt);
               $dbc->commit();
               ?>
            <h2>Hello <?php echo $_SESSION["otherNames"] ?>! your application is almost complete. Please fill the form below:</h2>
            <form method="POST" action="./fn_register_2.php" id="pswd_verify">
                <table class='table-responsive table table-condensed'>
                    <tr><td>email</td><td><input type="email" id="user_id" name="user_id" placeholder="<?php echo $_SESSION["email"]; ?>" class="form-control" disabled=""></td></tr>
                    <tr><td>Password</td><td><input type="password" id="user_psw" name="user_psw" placeholder="Password" class="form-control"></td></tr>
                    <tr><td>Confirm password</td><td><input type="password" id="conf_user_psw" name="conf_user_psw" placeholder="confirm Password" class="form-control"></td></tr>
                    <tr> <td colspan="2"><button type="btn" id="submit_btn" name="submit_btn" class="btn btn-danger">Complete Registration</button></td></form>
                </tr>
                </table>
            </form>
          <?php }catch (Exception $e){
               $dbc->rollBack();
                echo "Error!: " . $e->getMessage();
           }
            ?>
        </div>
        </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
     <script src="../bootstrap/js/psw_verify.js" type="text/javascript"></script>
</body></html>