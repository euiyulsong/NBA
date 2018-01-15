<?php
include 'searchPage.php';
$result = "";
if (isset($_REQUEST['text'])) {
	$result = $_REQUEST['text'];
}
# Connect
$username = "info344user";
$password = "<password>";

try {
    $conn = new PDO('mysql:host=euiyulsong.cwhmbr4rrjkt.us-east-2.rds.amazonaws.com;dbname=CSV_DB', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare('SELECT * FROM `TABLE 2` WHERE Name like \'%'.$result$'%\'');
    $stmt->execute();

    while($row = $stmt->fetch()) {

       	print_r($row);

    }

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


?>
