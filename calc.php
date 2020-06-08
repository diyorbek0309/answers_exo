<?php

$money1 = $_POST['money1'];
$year = $_POST['year'];
$money2 = $_POST['money2'];
$radio = $_POST['radio'];
$result = "";

if($radio == "Da") {
   $result = $money1 + ($money1 + $money2)*30*(10/($year*365));
   echo floor($result).' рубл';
}
else {
    $result = $money1 + $money1*30*(10/($year*365));
    echo floor($result).' рубл';
}

?>