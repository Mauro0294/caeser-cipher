<?php

$strings = str_split($argv[2]);

foreach ($strings as $string) {
    if ($string == " ") {
        echo " ";
    } else {
        if ($string === strtoupper($string)) {
            echo strtoupper(chr((((ord(strtolower($string)) - 97) + $argv[1]) % 26) + 97));
        } else {
            echo chr((((ord($string) - 97) + $argv[1]) % 26) + 97);
        }
    }
}
?>