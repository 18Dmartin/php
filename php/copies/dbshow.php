<!DOCTYPE html>  
<html>  
<head>  
<style>  
table, th, td {  
    border: 1px solid grey;  
}  
</style>  
</head>  
<body>  
<?php
 $servername = "10.140.42.235";
 $username = "DM";
 $password = "password";
 $database = "dm_db";
 $port = "3307";
 
 $conn = mysqli_connect($servername,$username,$password,$database, $port);


 if(mysqli_connect_errno()){
     echo "Failed to connect to MySQL " . mysqli_connect_error();
     exit();
 }
 else{
     echo "Connection Successful <br>";
 };

 
 # Prepare the SELECT Query
  $selectSQL =  "SELECT fname, lname, passwrd, confpassword, gender, house_number, adress_line_1,  adress_line_2, city, country, postcode FROM mytable";
  $result_data = $conn->query($selectSQL);  
  if ($result_data->num_rows > 0) {  
      echo "<table><tr> <th> fname </th> <th> lname </th> <th> passwrd </th> <th> confpassword </th> <th> gender </th><th> house_number </th><th> adress_line_1 </th><th> adress_line_2 </th><th> city </th><th> country </th><th> postcode </th></tr>";  
      // output data of each row  
      while($row = $result_data->fetch_assoc()) {  
          echo "<tr> <td>" . $row["fname"]. "</td> <td>" . $row["lname"].  "</td> <td>" . $row["passwrd"]. "</td> <td>" . $row["confpassword"]. "</td> <td>" . $row["gender"]. "</td> <td>" . $row["house_number"]. "</td> <td>" . $row["adress_line_1"]. "</td> <td>" . $row["adress_line_2"]. "</td> <td>" . $row["city"]. "</td> <td>" . $row["country"]. "</td> <td>" . $row["postcode"].  "</td> </tr>";  
      }  
      echo "</table>";  
  } else {  
      echo "error or no results";  
  }  
  $conn->close();  
  ?>  
  </body>  
  </html>  
