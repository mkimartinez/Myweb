<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$name="Users";

$this->title = $name;
?>
<style>
table, th, td {
     border: 1px solid black;
     width: 200px;
     height: 50px;
}
</style>
 
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "199212";
$dbname = "myweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username,email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]."</td></tr>".$row["email"]."</td></tr>";
     }
     echo "</table>";
     echo"num_rows";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>