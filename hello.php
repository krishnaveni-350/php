<?php

$message = "Hello,World!";
$name = "dave";
$error_message = "Incorrect value";
$count = 3;
$float = 1.9;
$logged_in = true;
$logged_out = false;
$string = "true";
$data = null;
$price = "150";
$quantity = 3;
$price = $price * $quantity;
$start = "3 o' clock";
$end = '3 o\' clock';
$day = "Monday \n Tuesday \n Wednesday";
$articles = ["hello","veni","what doing"];
$article = array(1 => "first post",3 => "second post");
foreach($articles as $print){
    echo $print,", ";
}
if(false){
    echo "Condition is true";
}

$art = [ "one","two"];
if(empty($art)){
    echo "The array is empty";
}else{
    echo "The array is not empty";
}

$month = 13;
while ($month <= 12){
    echo $month , ", ";
    $month = $month+1;
}

for($i = 1; $i <= 10; $i++){
    echo $i . ", ";

}

