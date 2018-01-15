<?php

if (isset($_REQUEST['text'])) {
    $result = $_REQUEST['text'];
    $username = "info344user";
    $password = "<password>";

    try {
        $conn = new PDO('mysql:host=euiyulsong.cwhmbr4rrjkt.us-east-2.rds.amazonaws.com;dbname=CSV_DB', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare('SELECT * FROM `TABLE 2` WHERE Name like \'%'.$result.'%\'');
        $stmt->execute();
        $i = 0;
        while($row = $stmt->fetch()) {
            if ($i < 5) {
                echo "<div class=\"each_name\">".$row['Name']."</div>";
            }
            $i++;
        }
    } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
}
?>
