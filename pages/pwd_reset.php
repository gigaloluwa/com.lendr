<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Gigaloluwa">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <title>Lendr: Reset Password</title>
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css"/>
    <!-- Custom styles for this template -->
    <link href="../bootstrap/css/signin.css" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <link href="../bootstrap/css/pages.css" rel="stylesheet" type="text/css"/>
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/js/ie-emulation-modes-warning.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <div class='central container'>
            <form class="form-signin" action="../functions/pwd_reset.php" method="POST">
                <fieldset>
                    <p style="padding-bottom: 8px">
                        Please enter your email address; If we find it in our database, you will be sent a new password
                    </p>
                    <p style="padding-bottom: 8px">
                        Email address: <input id="verifyMail" name="verifyMail" class="form-control" placeholder="Email address" required="" autofocus="" type="email">
                    </p>
                    <p>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Reset Password</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie-emulation-modes-warning.js" type="text/javascript"></script>

</body></html>