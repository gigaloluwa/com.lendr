/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
   $("#pswd_verify").validate({
       rules:{
           user_psw:{
               required:'Please provide a password',
               pwdLength:true,
               pwdContent:true,
               pwdDigit:true,
               pwdLCase:true
           },
           conf_user_psw:{
               required:true,
               equalTo:"#user_psw"
           }
       },
       messages:{
           user_psw:{
               required:"Please enter a password",
               pwdLength:"Minimum of 8 characters",
               pwdContent:"Please only enter valid symbols",
               pwdDigit:"Passwords must include at least 1 number",
               pwdLCase:"Passwords must have at least one lowercase letter"
           },
           conf_user_psw:{
               required:"Please re-enter the password above",
               equalTo:"Please re-enter the password above"
           }
       },
       onfocusout : true
   });
   $.validator.addMethod("pwdLength",function(value){
       return value.length >= 8;
   });
    $.validator.addMethod("pwdContent",function(value){
       return /^[A-Za-z0-9\d=!\-@._*]+$/.test(value);
   });
    $.validator.addMethod("pwdDigit",function(value){
       return /\d/.test(value);
   });
    $.validator.addMethod("pwdLCase",function(value){
       return /[a-z]/.test(value);
   });
});

