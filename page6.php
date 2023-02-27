<html>
    <head>
    <?php 
   $servername = "10.140.42.235";
   $username = "DM";
   $password = "password";
   $port = "3307";
   $db_name ="";
   $conn = mysqli_connect($servername,$username,$password,$db_name,$port);



   // Check connection
   if (mysqli_connect_error()) {
    echo "failed to connect to MYSQL: ". mysqli_connect_error();
    echo("<br>");

    exit();
   }
else{
    echo "Connection successful";
    echo("<br>");

}

// create database
$sql = "CREATE DATABASE DM_db";
if (mysqli_query($conn, $sql)) {
    echo "database created successfully";
    echo("<br>");

} else{
echo "error creating database: " . mysqli_error($conn);
echo("<br>");

}

//set the database to use 
//we didnt set this when conection so that is why
//we are running these lines
mysqli_select_db($conn, "DM_db");
$result = mysqli_query($conn, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);

printf("connected to database o]is %s.<br>", $row[0]);

/*
//sql to create table
$sql = "CREATE TABLE myguests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)"
*/

    ?>
</head>
<body>
    
<a href="index.php"> return to main page </a>
</body> 
    </html>