<!doctype html>
<html lang="en">
<head>
</head>
<body>
<?php
function validate_input($data) {
$data = trim($data);//remove any trailing spaces
$data = stripslashes($data);//remove and unnecessary slashes
$data = htmlspecialchars($data); //convert any special chars to their html equivalent
return $data;
}
//Check all the fields have data
if (isset($_POST['Submit'])) { //Check that the submit button was pressed
if(!empty($_POST['fname'])) { //Check that the field name FirstName is not empty
$fname = validate_input($_POST['fname']); //Check the input is valid
}
if(!empty($_POST['lname'])) {
$lname = validate_input($_POST['lname']);
}
if(!empty($_POST['passwrd'])) {
$passwrd = validate_input($_POST['passwrd']);
}
if(!empty($_POST['confpassword'])) {
$confpassword = validate_input($_POST['confpassword']);
}
if(!empty($_POST['gender'])) {
$gender = validate_input($_POST['gender']);
}
if(!empty($_POST['house_number'])) {
$house_number = validate_input($_POST['house_number']);
}
if(!empty($_POST['adress_line_1'])) {
$adress_line_1 = validate_input($_POST['adress_line_1']);
}
if(!empty($_POST['adress_line_2'])) {
$adress_line_2 = validate_input($_POST['adress_line_2']);
}
if(!empty($_POST['city'])) {
$city = validate_input($_POST['city']);
}
if(!empty($_POST['country'])) {
$country = validate_input($_POST['country']);
}
if(!empty($_POST['postcode'])) {
$postcode = validate_input($_POST['postcode']);
}

}
$host = "10.140.42.235";
$username = "DM";
$password = "password";
$database = "dm_db";
$port = "3307";
$db_name ="dm_db";
$conn = mysqli_connect($host, $username, $password,$database,$port);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}
else{
$sql = "insert into mytable (fname, lname, passwrd, confpassword, gender, house_number, adress_line_1, adress_line_2, city, country, postcode, ) VALUES
('$fname','$lname','$passwrd','$passwrd','$confpassword','$gender','$house_number','$adress_line_1','$adress_line_2','$city','$country',' )";
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