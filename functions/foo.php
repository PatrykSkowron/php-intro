<?php

// prost funkcja czyli zrob cos!
function sayHello(){
 echo("Hello World");
}

// dodajmy argument what - wejscie do funkcji
function sayWhat($what){
    echo("Saying: {$what}\n");
}

// funkcja moze cos zwracac i potem używamy tego dalej

function add5($number){
    return $number + 5;
}
?>