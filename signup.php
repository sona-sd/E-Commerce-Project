<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link rel="stylesheet" href="style1.css">
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $addressErr = $mobileErr = $passwordErr = "";
$name = $email = $address = $mobile = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["mobile"])) {
    $mobileErr = "mobile is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="signup_submit.php"> 
<h2>REGISTRATION FORM</h2>
  Name: <input type="text" name="name">
  <span class="error">*Name  is required <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" >
  <span class="error">*Email is required <?php echo $emailErr;?></span>
  <br><br>
  address: <input type="text" name="address">
  <span class="error">*Address is required<?php echo $addressErr;?></span>
  <br><br>
  mobile: <input type="text" name="mobile">
  <span class="error">*Mobile is required<?php echo $mobileErr;?></span>
  <br><br>
  password: <input type="text" name="password">
  <span class="error">*Password is required<?php echo $passwordErr;?></span>
  <br><br>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $mobile;
echo "<br>";
echo $password;
?>

</body>
</html>