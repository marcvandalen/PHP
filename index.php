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
</head>
<body>
<?php
$sporten = array("handbal", "korfbal", "hockey", "schaatsen");
shuffle($sporten);
echo "<li>Er zijn ".count($sporten)." sporten in de array</li>";
foreach($sporten as $sport){
    echo "<li>".$sport."</li>";
}
?>
</body>
</html>