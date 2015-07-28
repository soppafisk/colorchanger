<?php
function toRGB($hex) {
    $hex = substr($_POST['color'],1);

    $hex = str_split($hex);
    $hex = array_chunk($hex, 2);
    $newHex = [];
    foreach($hex as $sub) {
        $newHex[] = implode("", $sub);
    }

    $color =  array_map('hexdec', $newHex );
    return implode(",",$color);
}

$myfile = fopen("color.txt", "w") or die();
$color = toRGB($_POST['color']);
print $color;
fwrite($myfile, $color);
fclose($myfile);
