<?
include 'searchPage.php';
include 'Player.php';

// connnects to the database if the user presses the submit button
if (isset($_REQUEST['text'])) {
	$result = $_REQUEST['text'];
  $username = "info344user";
  $password = "<password>";

  // throws error message if there is an error
  try {
      $conn = new PDO('mysql:host=euiyulsong.cwhmbr4rrjkt.us-east-2.rds.amazonaws.com;dbname=CSV_DB', $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT * FROM `TABLE 2`');
      $stmt2 = $conn->prepare('SELECT * FROM `TABLE 2` WHERE Name like \'%'.$result.'%\'');
      $stmt->execute();
      $stmt2->execute();

      echo "<h1>Results for ".$result."</h1>";
      while ($row = $stmt2->fetch()) {
        echo Player::player($row);
      }
      
      while($row = $stmt->fetch()) {
        if (levenshtein($row['Name'], $result) < 5) {
          echo Player::player($row);        
        } 
      }
      
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

}
?>