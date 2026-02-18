<?php

$a = 100; $b = 2000; $c = 5020;

if($a > $b && $a > $c){
    echo $a . " Es mayor";
}elseif($b > $a && $b > $c){
    echo $b. " Es mayor";
}else{
    echo $c . " Es mayor";
}

echo "<br>";