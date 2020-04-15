<?php
// variables with $
$user = "John";
// print something out!
echo $user;
echo "\n";

// typy zmiennych (liczby, napisy)
$a1 = "This is string";
$a2 = 34;
$a3 = True;
echo($a1 . " " . $a2 . " " . $a3);

// instrukcje warunkowe (if-else)
$x = 5;
if($x == 5){
    echo("x is {$x}\n");
}

$x = 3;
if($x == 5){
    echo("x is {$x}\n");
} else {
    echo("No problem!\n");
}


$x = 3;
if($x == 5){
    echo("x is {$x}\n");
} elseif ($x == 3) {
    echo("Bingo!\n");
}

// while - read: do while the condition in () is true...
// conditional loops
$x = 10;
while ($x > 1) {
echo("x is {$x} and counting...\n");
$x = $x - 1;
}

// for - loop but with boundaries (from ... to)
for($i = 0;$i <10; $i++){
echo("i in for is {$i}\t");
}

?>