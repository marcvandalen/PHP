<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 7-5-2018
 * Time: 13:49
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>
        body {
            text-align:center;
        }
    </style>
</head>
<body>
<?php
$leeftijd = 2;
$bedrag = 10;
if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd < 3) {
    $bedrag = 0;
}
echo $bedrag;
?>
</body>
</html>