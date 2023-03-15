<!doctype html>
<html lang="en">
<head>
</head>
<body>
<?php
function validate_input($data) {
$data = trim($data);//remove any trailing spaces
$data = stripslashes($data);//remove and unnecessary slashes
$data = htmlspecialchars($data); //convert any special chars to their html
equivalent
return $data;
}
//Check all the fields have data
if (isset($_POST['submit'])) { //Check that the submit button was pressed
if(!empty($_POST['fname'])) { //Check that the field name FirstName is not empty
$FirstName = validate_input($_POST['fname']); //Check the input is valid
}
if(!empty($_POST['lname'])) {
$SecondName = validate_input($_POST['lname']);
}
if(!empty($_POST['passwrd'])) {
$Pwd = validate_input($_POST['passwrd']);
}
}
$host = "localhost";
$servername = "10.140.42.235";
$username = "DM";
$password = "password";
$port = "3307";
$db_name ="";
$conn = mysqli_connect($host, $username, $password,$database,$port);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}
else{
$sql = "insert into details (fname, lname, passwrd) VALUES
('$FirstName','$SecondName','$Pwd' )";
if(mysqli_query($conn, $sql)){
echo "Data added successfully :)";
}
else{
echo "Unable to add data at this time :|". mysqli_errno($conn);
}
}
mysqli_close($conn);
?>
</body>
</html>