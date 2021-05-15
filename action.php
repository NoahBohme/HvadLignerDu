<?php 
$navn = $_POST["navn"];

if ($navn == "Alexander" || $navn = "alexander"){
    echo('Du ligner 100.000');
}
else if ($navn == "Emil" | $navn == "Noah" || $navn == "emil" || $navn == "noah"){
    echo('Du ligner en 1.000.000');
}
else {
    echo('Du ligner pis');
}



?>