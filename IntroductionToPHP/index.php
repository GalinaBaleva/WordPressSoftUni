<?php
$name = 'SoftUni';

//echo name;

// echo "hello, $name!";
// echo '<br /';
// $name = $name . ' Edited';
// echo 'hello, ' .$name. '!';
// echo '<br />';
// echo 'hello, ' . $name . '!';



// $x = 1;
// $y = 2;
// $sum = $x + $y;
// echo $sum;
// echo '<br />';
// $sum = $x+$y;
// echo $sum;



// var_dump( $x );
// var_dump( $sum );

// $color = array( 
//     'red', 
//     'green', 
//     'blue', 
//     'balck'
//     );
// var_dump( $color );

// $numbers = [ 'One', 'two', 'three' ];

// var_dump( $numbers );

// $numbers_with_keys = [ 99 => 'One', 1 => 'two', 2 => 'three' ];
// var_dump( $numbers_with_keys );

// foreach ( $numbers_with_keys as $key => $number){

//     if($key == '2'){
//         continue;
//     };

//     echo "The key on $numbers is $number";
//     echo '<br/>';
// }

// for ( $i = 0; $i < 10; $i++){
//     echo $i;
// }

// $zero = 0;

// while ( $zero < 5 ){
//     echo $zero;
//     echo '<br />';
//     $zero++;
// }

// do{
//     echo $zero;
//     echo '<br />';
//     $zero++;
// } while ( $zero < 5 );



function my_first_php_function () {
    return 1 + 1;
}

my_first_php_function();
echo "<br>";

function calc ($x, $y ){
    return $x + $y;
}

$sum = calc ( 1, 2 );
echo $sum;

$tropic_fruits = array( 'Orange', 'Banana', 'Lemon');

$garten_fruits = array ( 'Strawberry', 'Cherry' );

var_dump( $garten_fruits );

$fruits = array_merge( $tropic_fruits, $garten_fruits ); //concat in js
var_dump( $fruits );

$fruits = sort( $fruits );
var_dump( $fruits );

function check_for_fruit( $array, $fruit ){
    if ( in_array( $fruit, $array )){
        echo "We have $fruit in our array";
    } else {
        var_dump('in else');
    }
}

check_for_fruit( $tropic_fruits, 'Lemon ');

