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
    <textarea name="text" id="" cols="30" rows="10"></textarea><br>
    <button name="add">Add phone number</button>

</form>

<?php
$phonenumber = $_POST['text'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = explode(" ", $phonenumber);
}
$viettel = [];
$vinaphone = [];
foreach ($num as $item) {
    $a = substr($item, 0, 3);
//    var_dump($a);
    if ($a == "091") {
        $item;
        array_push($viettel, $item);

    } elseif ($a == "092") {
        $item;
        array_push($vinaphone, $item);
    }
}
$viett = implode(",", $viettel);
$vina = implode(",", $vinaphone);
echo "viettel: " . $viett . "<br>";
echo "vinaphone: " . $vina;

?>
</body>
</html>