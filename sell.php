<?php
session_start();
include('conn.php');
if ($con->connect_errno)
{
  echo "Failed to connect. error: " . $con->connect_errno;
  exit();
}

if(!isset($_SESSION['username']))
{
    header("Location: index.php");
}

function validate($val)
{
        $val = strip_tags(trim($val));
        $val = htmlspecialchars_decode($val);
        return $val;
}

if(isset($_POST['submit']))
{
  
  $name = validate($_POST['name']);
  $email = validate($_POST['email']);
  $phone = validate($_POST['phone']);
  $author = validate($_POST['Author']);
  $edition = validate($_POST['Edition']);
  $msg = validate($_POST['message']);



  
    $sql = "INSERT INTO userdata (username, email, phone, Author,BookEdition,msgg)VALUES(?,?,?,?,?,?)";
    $smt = $con->prepare($sql);
    $smt->bind_param('ssssss', $name, $email, $phone, $author, $edition, $msg);
    $smt->execute();
 

}


?>
<!DOCTYPE html>  
<html>  
<meta name="viewport" content="width=device-width, initial-scale=1">    
<meta charset="UTF-8"> 
<head>
<title>Selling Form</title> 
<link rel="stylesheet" href="CSS/sell.css">  
 </head>   
<body>     
<form action="" method="post">  
  <div class="elem-group">  
    <label for="name"> Enter Your Name </label>  
    <input type="text" id="name" name="name" placeholder="" pattern= [A-Z\sa-z]{3,20} required>  
  </div>  
  <div class="elem-group">  
    <label for="email"> Enter Your E-mail </label>  
    <input type="email" id="email" name="email" placeholder="" required>  
  </div>  
  <div class="elem-group">  
    <label for="phone"> Enter Your Phone Number </label>  
    <input type="tel" id="phone" name="phone" placeholder="998-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>  
  </div>
  <div class="dropbox">
    <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="files[]" id="files[]" multiple="multiple" type="file">
    <div class="Neon-input-dragDrop">
      <div class="Neon-input-inner">
        <div class="Neon-input-icon">
          <i class="fa fa-file-image-o"></i></div>
          <div class="Neon-input-text">
            <h3>Drag&amp;Drop files here</h3> 
            <span style="display:inline-block; margin: 15px 0">or</span>
          </div><a class="Neon-input-choose-btn blue">Browse Files</a>
        </div></div>
  </div> 
  <hr>  
  <div class="elem-group inlined">
    <label for="Author"> Author </label>  
    <input type="Author" id="Author" name="Author" placeholder="" required>  
  </div>  
  <div class="elem-group inlined">  
    <label for="Edition"> Edition </label>  
    <input type="number"  id="Edition" name="Edition" placeholder="" min="0" required>  
  </div>   
  <hr>  
  <div class="elem-group">  
    <label for="message"> Message </label>  
    <textarea id="message" name="message" placeholder="Tell us anything else that might be important." required> </textarea>  
  </div>  
  <button id="submit" name="submit" type="submit">Submit</button>  
</form>    
</body>  
</html>  