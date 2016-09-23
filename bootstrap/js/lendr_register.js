/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $.notify.defaults({ className: "warn" });
    $("#dob").datepicker(
            {changeYear: true,
             changeMonth:true,
             yearRange: "1900:2000",
             defaultDate: -1,
             maxDate: '-21Y'
        });
    $.notify("Please note that this form is still under construction.");
    //use notify to add alerts to the fields
  
   $("#lendr_registration").validate({
           rules:{Last_Name: "required",
                  Other_Names: "required",
                  dob: {
                         required : true,
                         date: true
                     },
                  email:{
                         required:true,
                         email:true
                     },
                  phone:{required:true, digits:true, minlength:11,maxlength:11},
                  res_address: "required",
                  emp_name: "required",
                  emp_addr:"required",
                  annual_income:"required",
                  net_mon_inc:"required",
                  emp_hist:"required",
                  YOCE:"required",
                  pay_day:"required",
                  bankName:"required",
                  accName:"required",
                  NUBAN:"required",
                  bvn:"required"
        },
           messages:{Last_Name:"Last Name Required",
                     Other_Names: "Other Names Required",
                     dob: "Date of Birth required",
                     email:"Please enter a valid email address",
                     phone: "Please enter a valid 11 digit phone number",
                     res_address: "Residential Address required",
                     emp_name: "Please enter your employer's registered name",
                     emp_addr:"Enter employer address",
                     annual_income:"Enter your annual income",
                     net_mon_inc:"Enter your net monthly income",
                     emp_hist:"Information required",
                     YOCE:"Information required",
                  pay_day:"Information required",
                  bankName:"Information required",
                  accName:"Information required",
                  NUBAN:"Information required",
                  bvn:"Information required"
        },
           onfocusout : true}
               );
});

