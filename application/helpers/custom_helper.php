<?php
function generate_reference()
{
    $track2 = '';
    $track = '';
    $array = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $array2 = array('Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M');
    for ($i = 0; $i <= 5; $i++) {
        $random = array_rand($array);
        $track .= $array[$random];
    }
    for ($i = 0; $i <= 1; $i++) {
        $random = array_rand($array2);
        $track2 .= $array2[$random];
    }
    $final = $track2 . $track;
    return $final;
}

function generate_pin()
{
    $pin = '';
    $numbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    for ($i = 0; $i <= 3; $i++) {
        $random = array_rand($numbers);
        $pin .= $numbers[$random];
    }
    return $pin;
}


function dateDiff($your_date, $return = null) {
    $now = time(); // or your date as well
    $your_date = strtotime($your_date);
    $dateDiff = $now - $your_date;
    $longAgo = floor($dateDiff / (60 * 60 * 24));
    if ($return == null) {
        return $longAgo;
    } else {
        echo $longAgo;
    }
}