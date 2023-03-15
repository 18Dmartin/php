<html>
    <head>
    <?php
$servername = "10.140.42.235";
$username = "DM";
$password = "password";
$port = "3307";
$db_name ="dm_db";
$conn = mysqli_connect($servername,$username,$password,$db_name,$port);

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL " . mysqli_connect_error();
 exit();
}else
{
    echo "Connection Successful <br>";};

$sql = "CREATE TABLE mytable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30),
    passwrd VARCHAR(30),
    confpassword VARCHAR(30),
    gender VARCHAR(10),
    house_number VARCHAR(50),
    adress_line_1 VARCHAR(50),
    adress_line_2 VARCHAR(50),
    city VARCHAR(50),
    country VARCHAR(50),
    postcode VARCHAR(50),
    contact_number VARCHAR(20)
)";

if(mysqli_query($conn, $sql)){
    echo "Table mytable created successfully";
}else{
         echo "Error creating table: " . mysqli_error($conn);
      }

mysqli_close($conn);

*/
?>








 