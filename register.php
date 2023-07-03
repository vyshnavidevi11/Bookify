<?php
include('conn.php');
if ($con->connect_errno)
{
  echo "Failed to connect. error: " . $con->connect_errno;
  exit();
}

function validate($val)
{
        $val = strip_tags(trim($val));
        $val = htmlspecialchars_decode($val);
        return $val;
}

if(isset($_POST['submit']))
{
  
  $fname = validate($_POST['First_Name']);
  $lname = validate($_POST['Last_Name']);
  $email = validate($_POST['E_mail']);
  $pass = validate($_POST['Password']);
  $cnfpass = validate($_POST['cPassword']);
  $phone = validate($_POST['phone']);

  if($pass != $cnfpass)
  {
    echo '<script>alert("Passwords did not matched!")</script>';

  }
  else{
    $pass = md5($pass);
    $sql = "INSERT INTO users (usname, passw, fname, lname,phone)VALUES(?,?,?,?,?)";
    $smt = $con->prepare($sql);
    $smt->bind_param('ssssi', $email, $pass, $fname, $lname, $phone);
    $smt->execute();
    echo '<script>alert("Registered successfully!")</script>';
    echo '<script> window.location.replace("index.php")</script>';
  
  }

}


?>
<!DOCTYPE html>  
<html>  
<meta name="viewport" content="width=device-width, initial-scale=1">   
<meta charset="UTF-8"> 
<head>
<title>Registration form</title> 
<link rel="stylesheet" href="CSS/register.css"> 
<body>     
<form action="" method="post">
</div> 
<hr>  
<div class="elem-group inlined">
  <label for="First Name"> First Name </label>  
  <input type="text" id="First_Name" name="First_Name" placeholder="" required>  
</div>  
<div class="elem-group inlined">  
  <label for="Last Name"> Last Name </label>  
  <input type="text" id="Last_Name" name="Last_Name" placeholder="" required>  
</div>   
<hr>    
  <div class="elem-group">  
    <label for="E-mail"> E-mail </label>  
    <input type="email" id="E_mail" name="E_mail" placeholder=""  required>  
  </div>  
  <div class="elem-group">  
    <label for="Password"> Create Password</label>  
    <input type="password" id="Password" name="Password" placeholder="" required>  
  </div> 
  <div class="elem-group">  
    <label for="Password"> Confirm Password</label>  
    <input type="password" id="cPassword" name="cPassword" placeholder="" required>  
  </div>  
  <div class="elem-group">  
    <label for="phone"> Enter Your Phone Number </label>  
    <input type="tel" id="phone" name="phone" placeholder="998-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>  
  </div>
  </div> 
  <button name="submit" id="submit" class = "button" type="submit" value="submit">Register</button>  
</form>    
</body>  
</html>  