<html>
    <head>
    <?php>
$servername = "10.140.42.235";
$username = "DM";
$password = "password";
$port = "3307";
$db_name ="";
$conn = mysqli_connect($servername,$username,$password,$db_name,$port);

$sql = "CREATE DATABASE DM_dbassign";
if (mysqli_query($conn, $sql)) {
    echo "database created successfully";
    echo("<br>");

} else{
echo "error creating database: " . mysqli_error($conn);
echo("<br>");
}

$sql = "CREATE TABLE home (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    passwrd varchar(50) NOT NULL,
    confpassword varchar(50)  NOT NULL,
    gender varchar(10) NOT NULL,
    house_number varchar(50),
    adress_line_1 varchar(50),
    adress_line_2 varchar(50),
    city varchar(50),
    country varchar(50),
    postcode varchar(50) NOT NULL,
    contact_number varchar(20) NOT NULL,
)"

if(mysqli_query)
?>