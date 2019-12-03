<?php
echo "Je tijd is?".PHP_EOL;
$tijd = readline();

$vind = "s";
$plaats = strpos($tijd, $vind);
$tijd = (int) $tijd;

if ($plaats) {
    echo "$tijd Seconden";
}
else{
    echo "Dit is geen seconde!";
}