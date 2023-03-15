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


$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if(mysqli_query($conn, $sql)){
        echo "Table MyGuests created successfully";
    }else{
             echo "Error creating table: " . mysqli_error($conn);
          }

     $sql = "INSERT INTO MyGuests ( firstname, lastname, email) VALUES
            ('John', 'Michael', 'j.@email.com'),
            ('Juliet', 'Emma, ' J.e@email.com')":
    if(mysqli_query($conn, $sql)){
            echo "Data entered successfully";
            echo mysqli_affected_rows($conn)."rows added successfully";
    }else{
            echo "Error entering data: " . mysqli_error($conn);
            error_log("You messed up!", 3, "my-errors.log");
            due('Could not enter data. ' ); 
        }
    mysqli_close($conn);



    ?>
</head>
<body>
    
<a href="index.php"> return to main page </a>
</body> 
    </html>