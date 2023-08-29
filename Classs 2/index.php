<?php
// echo "hello world";
// $name = 'Monsur Ahmad Azad'; 
// echo $name;
// var_dump ($name); 
// print $name;
// $firstName = "Monsur Ahmad";
// $lastName = "Azad";
// $age = "24";
// echo $firstName.$lastName;
// echo($firstName.$lastName); 
// [ echo Multiple value at a time print]
// print $finstName, $lastName 
// [print at a time one value print] [we are use echo because echo faster & readable]
// printf($firstName);
// printf("My name is $firstName $lastName");
// echo strtoupper($firstName);
// // printf("My name is %s %s %d", strtolower($firstName), strtoupper($lastName), $age );
// $num1 = 2;
// $num2 = 6;
// $result = $num1 ** $num2;
// echo $result.'<br>';
// $a = 20;
// echo $a.'<br>';
// // $a = $a + 30;
// $a += 30;
// echo $a;
// echo $num1++.'<br>';
// echo $num1;
// $studentname = 'Azad';
// $phpnum = 100;
// $oopnum = 70; 
// $laravelnum = 100;
// $result = $phpnum + $oopnum + $laravelnum;

// echo "$studentname mark is $result";

// echo "<br>";

// $studentname = 'Monsur';
// $phpnum = 90;
// $oopnum = 80; 
// $laravelnum = 70;
// $result = $phpnum + $oopnum + $laravelnum;

// echo "$studentname mark is $result";

// function sum(){
// $studentname = 'Azad';
// $phpnum = 100;
// $oopnum = 70; 
// $laravelnum = 100;
// $result = $phpnum + $oopnum + $laravelnum;

// echo "$studentname mark is $result";

// echo "<br>";
// }
// sum ();
// sum ();
// function sum($studentname){
//     $phpnum = 100;
//     $oopnum = 70; 
//     $laravelnum = 100;
//     $result = $phpnum + $oopnum + $laravelnum;
    
//     echo "$studentname mark is $result";
    
//     echo "<br>";
//     }
//     sum ('Faisal');
//     sum ('Azad');
// function sum($studentname,  $phpnum, $oopnum, $laravelnum){
    
//     $result = $phpnum + $oopnum + $laravelnum;
    
//     echo "$studentname mark is $result";
    
//     echo "<br>";
//     }
//     sum ('Faisal', 70, 50, 80);
//     sum ('Azad', 80, 90, 85);
// function sum($phpnum, $oopnum, $laravelnum, $studentname = 'user'){
    
//     $result = $phpnum + $oopnum + $laravelnum;
    
//     echo "$studentname mark is $result";
    
//     echo "<br>";
//     }
//     sum (70, 50, 80, 'Azad');
//     sum (80, 90, 85, 'Monsur');
// $text = 'Monsur Ahmad Azad';
// echo strtoupper ($text);
// echo '<br>';
// function prince(){
//     $text = 'Monsur Ahmad Azad';
// echo strtoupper ($text);
// echo '<br>';
// }
// prince ('Azad');

function prince($text){
     
echo strtoupper ($text);
echo '<br>';
}
prince ('Monsur Ahmad Azad');
echo '<br>';

// 1st funtion summation
function sum($num1, $num2, $num3){
$result = $num1 + $num2 + $num3;
echo "The result is $result";
echo '<br>';
}
sum (40, 50, 60);
sum (60, 70, 80);
echo '<br>';

// 2nd function

function familymember($fname){
    echo "$fname is our family member";
    echo '<br>';
}
familymember('Modur ma');
familymember('Modur bap');
echo '<br>';

// 3rd function

function creatfamily($fname, $year){
    echo "My name is $fname.<br> I creat my family in $year";
    echo '<br>';
}
creatfamily("Modur Ma", 1995);
creatfamily("Modur Nana", 1960);
echo '<br>';


