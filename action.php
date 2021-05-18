<?php 
$navn = $_POST["navn"];

if ($navn == "Emil" or $navn == "Noah" or $navn == "emil" or $navn == "noah"){
    echo('Du ligner en 1.000.000');
}
else if ($navn == "Alexander" or $navn = "alexander"){
    echo('Du ligner en 100.000');
}
else {
    echo('Du ligner pis');
}



?>
