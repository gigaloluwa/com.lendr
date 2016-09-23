<?php 
class randgen {
function rand_code(){
$letters = array_merge(range('a','z'),range('A','Z'));

 $random_generator = $letters[rand(0,51)].rand(101,9999).$letters[rand(0,51)].rand(1,99);
 
 return $random_generator;
}

function rand_pswd(){
$letters = array_merge(range('a','z'),range('A','Z'));

 $pswd_generator = $letters[rand(0,51)].rand(101,99999).$letters[rand(0,51)].rand(1,999);
 
 return $pswd_generator;
}
}

