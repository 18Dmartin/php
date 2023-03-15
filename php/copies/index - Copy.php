<!DOCTYPE html>
<head>
<title>database prep 1- 27/02/2023</title>
<script>
function callme(){
alert("function called");
  return true }

</script>
</head>
<body>

  <form name="MyForm" action="dbshow.php" method="post" onsubmit="return callme()"> 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br><br>
  
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  
  <label for="passwrd">password:</label><br>
  <input type="text" id="passwrd" name="passwrd"><br><br>

  <label for="confpassword">confirm your password:</label><br>
  <input type="text" id="confpassword" name="confpassword"><br><br>

  <label for="gender">what is your gender</label><br>
  <input type="text" id="gender" name="gender" ><br><br>
  

  <type>input your adress</type><br>
  <label for="house_number">house number:</label>
  <input type="text" id="house_number" name="house_number"><br>

  <label for="adress_line_1">adress line 1:</label>
  <input type="text" id="adress_line 1" name="adress_line_1"><br>

  <label for="adress_line_2">adress line 2:</label>
  <input type="text" id="adress_line 2" name="adress_line_2"><br>

  <label for="city">city:</label>
  <input type="text" id="city" name="city"><br>

  <label for="country">country:</label>
  <input type="text" id="country" name="country"><br>

  <label for="postcode">postcode:</label>
  <input type="text" id="postcode" name="postcode"><br>

  <label for="contact_number">contact number:</label>
  <input type="text" id="contact_number" name="contact_number"><br>
  
  <br><br><input type="Submit" id="Submit" name="Submit"><br>

 
</form>
</body>