<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <textarea name="phoneNumber"></textarea>
    <input type="submit" value="Click">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textArea = $_REQUEST["phoneNumber"];

    $Viet = array();
    $Vina = array();
    $Mobi = array();
    $textArea = explode(",", $textArea);
    echo "PhoneNumber";
    echo "<pre>";
    print_r($textArea);
    $Viettel = ["097", "098", "094", "092", "096", "091", "093"];
    $Vinaphone = ["089", "087", "086", "085", "082", "081", "084"];
    $Mobiphone = ["016", "035", "013", "032", "015", "023"];

    for ($i = 0; $i < count($textArea); $i++) {
        $number = str_split($textArea[$i], 3);
        if (in_array($number[0], $Viettel)) {
            array_push($Viet, $textArea[$i]);
        } else if (in_array($number[0], $Vinaphone)) {
            array_push($Vina, $textArea[$i]);
        } else if (in_array($number[0], $Mobiphone)) {
            array_push($Mobi, $textArea[$i]);
        }
    }
}
echo "Viettel";
echo "<pre>";
print_r($Viet);
echo "<pre>";
echo "Vinaphone";
echo "<pre>";
print_r($Vina);
echo "<pre>";
echo "Mobiphone";
echo "<pre>";
print_r($Mobi);



