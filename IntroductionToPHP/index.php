<?php
$name = 'SoftUni';

//echo name;

// echo "hello, $name!";
// echo '<br /';
// $name = $name . ' Edited';
// echo 'hello, ' .$name. '!';
// echo '<br />';
// echo 'hello, ' . $name . '!';



$x = 1;
$y = 2;
$sum = $x + $y;
echo $sum;
echo '<br />';
$sum = $x+$y;
echo $sum;



var_dump( $x );
var_dump( $sum );

$color = array( 
    'red', 
    'green', 
    'blue', 
    'balck'
    );
var_dump( $color );

$numbers = [ 'One', 'two', 'three' ];

var_dump( $numbers );

$numbers_with_keys = [ 99 => 'One', 1 => 'two', 2 => 'three' ];
var_dump( $numbers_with_keys );

foreach ( $numbers_with_keys as $key => $number){

    if($key == '2'){
        continue;
    };

    echo "The key on $numbers is $number";
    echo '<br/>';
}

for ( $i = 0; $i < 10; $i++){
    echo $i;
}

$zero = 0;

while ( $zero < 5 ){
    echo $zero;
    echo '<br />';
    $zero++;
}

do{
    echo $zero;
    echo '<br />';
    $zero++;
} while ( $zero < 5 );
