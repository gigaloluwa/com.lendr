/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $('#submit_btn').click(function(e){
        if($('#conf_user_psw').val() !== $('#user_psw').val()){
            alert('Passwords different, please re-type');
            e.preventDefault();
        }else {return true;}
    });
 
     $('#submit_btn').click(function(e){
        if(!$('#user_psw').val()){
            alert('Please enter a password!');
            e.preventDefault();
        }else {return true;}

    });
     $('#submit_btn').click(function(e){
        if(!$('#loan_amt').val()){
            alert('Please enter an amount');
            e.preventDefault();
        }else {return true;}

    });
});

