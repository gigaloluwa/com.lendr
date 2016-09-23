/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global math */

$(document).ready(function() {
    var dec = 2;
    $('#btn_compute').click(
            function($e){
                $e.preventDefault();
                var dec=2;
                var loanAmount = $('input#principal').val();
                var loanAmount = parseInt(loanAmount);
                var d_period = $('input#tenor').val();
                var n_period = parseInt(d_period)/30;
                var r_rate = parseInt($('input#rate').val())/100;
                var bullet_Tint = loanAmount*r_rate*d_period/365;
                var bullet_tr = loanAmount+parseInt(bullet_Tint);
                var var1 = r_rate/12;
                var var2 = Math.pow((var1 + 1),n_period);
                var var3 = (loanAmount*var1*var2)/(var2-1);
                var var4 = (var3*n_period).toFixed(dec);
                
               
                //bullet repayment
                $('#bullet_Tint').attr('value',bullet_Tint.toFixed(dec));
                $('#bullet_tr').attr('value',bullet_tr);
                $('#bullet_mr').attr('value',(parseInt(bullet_tr)/parseInt(n_period)).toFixed(dec));
                
                //bullet repayment
                $('#amort_mr').attr('value',var3.toFixed(dec));
                $('#amort_tr').attr('value',var4);
                $('#amort_Tint').attr('value',(var4-loanAmount).toFixed(dec));
            }
            );
});


