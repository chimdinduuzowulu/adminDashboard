<?php
include "connect.php";

// Create connection
$conn = mysqli_connect($serverName, $userName, $password,$database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$ql = "CREATE TABLE usersTb (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FName VARCHAR (30) NOT NULL,
LName VARCHAR (30) NOT NULL,
userName VARCHAR (30) NOT NULL,
company VARCHAR (30) NOT NULL,
Email VARCHAR (30) NOT NULL,
phone VARCHAR (30) NOT NULL,
passW VARCHAR (30) NOT NULL,
confirmPassW VARCHAR (30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
// if (!mysqli_query($conn, $ql)) {
// if(mysqli_error($conn) == "Error creating table: Table 'usersTb' already exists"){
// echo "";
// }
// else{
//   echo "Error creating table: " . mysqli_error($conn);
// } 
// }
mysqli_query($conn, $ql);
if(mysqli_error($conn) == "Table 'usersTb' already exists"){
echo "";
}
else{
echo  " ".mysqli_error($conn);
} 

mysqli_close($conn);
?>