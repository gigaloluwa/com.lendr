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
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <title>Lendr:Register</title>
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="../bootstrap/js/notify.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
        <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle">This Page is under construction</i>
                            <a href="http://lendr.com.ng" class="alert-link">lendr.com.ng</a>
                        </div>
                    </div>
                </div>
        <div class="container-fluid" >
           <form method="POST" action="../functions/fn_register.php" name='lendr_registration' id='lendr_registration'>
            <table class='table-responsive table table-condensed'>
                <tr class="segment_lead"><td colspan='4'>Personal Information</td></tr>
                <tr><td><label>Last Name</label></td><td colspan="3"><input type='text' class="form-control" name='Last_Name' id='Last_Name' placeholder="Last Name" required></td></tr>
                <tr><td><label>Other Names</label></td><td colspan="3"><input type='text' class="form-control" name='Other_Names' id="Other_Names" placeholder="Other Names" required></td></tr>
                <tr><td><label>Gender</td>
                    <td><select class='form-control' name="sex">
                            <option value='Female'>Female</option>
                            <option value='Male'>Male</option>
                        </select>
                    </td>
                    <td style="text-align:center">D.O.B.</td>
                    <td>
                        <input type="date" class="form-control" name="dob" id="dob">
                    </td>
                </tr>
                <tr><td><label>Email</label></td><td colspan="3"><input type='email' class="form-control" name ='email' id="email" placeholder="email address" required></td></tr>
                <tr><td><label>Phone Number</label></td><td colspan="3"><input type='number' class="form-control" name='phone' id="phone" placeholder="Phone" required></td></tr>
                <tr><td><label>Marital Status</label></td><td colspan="3">
                    <select class='form-control' name="marital_status">
                            <option value='Single'>Single</option>
                            <option value='married'>Married</option>
                            <option value='widowed'>Widowed</option>
                        </select>
                    </td></td></tr>
                <tr><td><label>No. of Children</label></td><td colspan="3"><input type='number' class="form-control" name='no_of_kids' placeholder="Kids? How many?"></td></tr>
                <tr><td><label>Education Level</label></td>
                    <td colspan="3"><select class='form-control' name="ed_level">
                            <option value='5'>POST SECONDARY EDUCATION</option>
                            <option value='POST PRIMARY'>POST PRIMARY EDUCATION</option>
                            <option value='PRIMARY'>PRIMARY EDUCATION</option>
                            <option value='NONE'>NO FORMAL EDUCATION</option>
                        </select>
                    </td></tr>
                <tr><td><label>Residential Status</td>
                    <td colspan="3"><select class='form-control' name="res_status">
                            <option value='HomeOwner_ful'>Home Owner (fully Owned)</option>
                            <option value='HomeOwner_mor'>Home Owner (Mortgage)</option>
                            <option value='RentedApartment'>Rented Apartment</option>
                        </select>
                    </td></tr>
                <tr><td><label>Residential Address</label></td><td colspan="3"><input type='text' class="form-control" name ='res_address' id="res_address" placeholder="Home address" required></td></tr>
                <tr><td><label>Local Government Area</label></td><td colspan="3"><input type='text' class="form-control" id='' placeholder="LGA"></td></tr>
                <tr class='segment_lead'><td colspan='4'>Employment Information</td></tr>
                <tr><td><label>Type of Company of Employment</label></td>
                    <td colspan="3"><select class='form-control' name="emp_status">
                            <option value='9'>PUBLICLY QUOTED (TIER 1) COMPANY WITH FOREIGN AFFILIATES</option>
                            <option value='7'>PUBLICLY QUOTED (TIER 1) COMPANY WHOLLY OWNED BY NIGERIANS/GOVT PARASTATALS</option>
                            <option value='6'>PUBLICLY QUOTED (TIER 2) COMPANY WHOLLY OWNED BY NIGERIANS</option>
                            <option value='5'>PRIVATELY OWNED COMPANY WITH FOREIGN SHAREHOLDING</option>
                            <option value='3'>PRIVATELY OWNED COMPANY WHOLLY OWNED BY NIGERIANS</option>
                            <option value='3'>SELF EMPLOYED</option>
                        </select>
                    </td></tr>
                <tr><td><label>Employer Name</label></td><td colspan="3"><input type='text' class="form-control" name ='emp_name' id="emp_name" placeholder="Employer Name" required></td></tr>
                <tr><td><label>Employer Address</label></td><td colspan="3"><input type='text' class="form-control" name='emp_addr' placeholder="Employer Address" required></td></tr>
                <tr><td><label>Nature of Employment</label></td>
                    <td colspan="3">
                    <select class='form-control' name="job_title">
                            <option value='3'>Full Staff</option>
                            <option value='1'>Contract Staff</option>
                            <option value='0'>Self Employed</option>
                        </select>
                    </td>
                </tr>
                <tr><td><label>Annual Income (in Naira)</label></td><td colspan="3"><input type='number' class="form-control" name='annual_income' id='annual_income' placeholder="Annual Income" required></td></tr>
                <tr><td><label>Net Monthly Income</label></td><td colspan="3"><input type='number' class="form-control" name='net_mon_inc' id='net_mon_inc' placeholder="Net Monthly Income" required></td></tr>
                <tr><td><label>Leave Allowance</label></td><td colspan="3"><input type='number' class="form-control" name ='leave_allowance' id ='leave_allowance' placeholder="Leave Allowance"></td></tr>
                <tr><td><label>Other Allowances? (Amount)</label></td><td colspan="3"><input type='number' class="form-control" name='other_allowances' placeholder="Other Allowances" ></td></tr>
                <tr><td><label>Number of employers (last 5 years)</label></td><td colspan="3"><input type='text' class="form-control" name='emp_hist' id='emp_hist' placeholder="Employment History" required></td></tr>
                <tr><td><label>Current employment period (in years)</label></td><td colspan="3"><input type='number' class="form-control" name = 'YOCE' id = 'YOCE' placeholder="Years on current employment" required></td></tr>
                <tr><td><label>Salary payment Date</label></td><td colspan="3"><input type='text' class="form-control" name='pay_day' id='pay_day' placeholder="What day of the month do you get paid" min="1" max="31" required></td></tr>
                <tr class='segment_lead'><td colspan='4'>Banking Information</td></tr>
                <tr><td><label>Bank Name</label></td><td colspan="3"><input type='text' class="form-control" name='bankName' id="bankName" placeholder="Bank Name" required></td></tr>
                <tr><td><label>Account Name</label></td><td colspan="3"><input type='text' class="form-control" name ='accName' id="accName" placeholder="Account Name" required></td></tr>
                <tr><td><label>Account Number</label></td><td colspan="3"><input type='text' class="form-control" name='NUBAN' id="NUBAN" placeholder="Account Number (NUBAN)" required></td></tr>
                <tr><td><label>BVN Number</label></td><td colspan="3"><input type='text' class="form-control" name ='bvn' id="bvn" placeholder="BVN Number" required></td></tr>
                <tr class='segment_lead'>
                    <td colspan='2'>Quick Qualification checks</td>
                    <td>Yes</td><td style="text-align:center">No</td>
                </tr>
                <tr>
                    <td colspan='2'><label>Are you 21 years or older?</label></td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_age" value="yes" checked> 
                        </div> 
                    </td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_age" value="no" checked> 
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><label>Do you currently reside in Lagos?</label></td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_residence_lag" value="yes" checked> 
                        </div> 
                    </td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_residence_lag" value="no" checked> 
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><label>Are you currently employed?</label></td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_emp_status" value="yes" > 
                        </div> 
                    </td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_emp_status" value="no" checked> 
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><label>Are you Nigerian?</label></td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_citizen" value="yes" checked> 
                        </div> 
                    </td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_citizen" value="no" checked> 
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><label>Have you been on your current employment for at least 1 year?</label></td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_emp_len" value="yes" checked> 
                        </div> 
                    </td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_emp_len" value="no" checked> 
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><label>Do you currently earn above N3m per annum?</label></td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_3m_salary" value="yes" checked> 
                        </div> 
                    </td>
                    <td style="text-align:center"><div class="radio">
                            <label class="control-label"></label>
                            <input type="radio" name="Q_3m_salary" value="no" checked> 
                        </div> 
                    </td>
                </tr>
                <tr><td colspan="4">By clicking the Submit button, I have read and agree with the <a href="../downloads/Terms_and_conditions/Terms of Use - LendR.pdf" target="_blank">terms and conditions</a> of this site</td></tr>
                <tr> <td colspan="2"><button type="btn" id="submit_btn" class="btn btn-danger">Submit</button></td></form>
                </tr>
            </table>
        </div>
      </div>
      <div class="container">
        <div class="inner">
            <p>© Agnosys Technologies </p>
        </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>-->
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="../bootstrap/js/notify.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="../bootstrap/js/lendr_register.js" type="text/javascript"></script>
</body></html>