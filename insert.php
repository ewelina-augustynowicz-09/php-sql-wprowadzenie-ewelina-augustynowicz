<?php
$servername = "mysql-ewelina.alwaysdata.net";
$username = "ewelina";
$password = "ewelinailukas";
$dbname = "ewelina_09";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (null, 'imie', 'dzial', 'zarobki') VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
echo("jestes w insert.php");
echo $_POST['name'];

$servername = "mysql-ewelina.alwaysdata.net";
$username = "ewelina";
$password = "ewelinailukas";
$dbname = "ewelina_09";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (null, 'imie', 'dzial', 'zarobki') VALUES (null,".$_POST['name'].", 1, 76,'1991-11-21')";

echo "<li>".$sql;



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
