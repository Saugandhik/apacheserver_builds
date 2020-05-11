<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'sau');
define('DB_PASSWORD', '1998');
define('DB_NAME', 'login_details');
$table = 'user_details';
 
try {
	$db = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
	echo "<h2>Details</h2><ol>";
	foreach($db->query("SELECT user_id FROM $table") as $row) {
    		echo "<li>" . $row['user_id'] . "</li>";
  	}
  	echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
