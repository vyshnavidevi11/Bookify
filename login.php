<?php 
session_start();
include('conn.php');
if(isset($_SESSION['username']))
{
  header("Location: index.php");
}
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
  
  $usname = validate($_POST['usname']);
  $passw = validate($_POST['passw']);



    $passw = md5($passw);
    $sql = "SELECT * FROM users WHERE usname = ? AND passw = ?";
    $smt = $con->prepare($sql);
    $smt->bind_param('ss', $usname,$passw);
    $smt->execute();
    $res = $smt->get_result();
    if(count($res->fetch_all()) == 0)
    {
        echo '<script>alert("Incorrect username or password")</script>';
    }
    else {
        $_SESSION['username'] = $usname;
        echo '<script>window.location.replace("index.php")</script>';
    }
}


?>
<!DOCTYPE html>
  <head>
    <title>Login form</title>
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Login Form</header>
        <form action="" method="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" id="usname" name="usname" required placeholder="Email">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" name="passw" id = "passw" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
          <div class="pass">
           
          </div>
          <div class="field">
            <input type="submit" name="submit" id="submit" value="submit">
          </div>
          <br>
</form>
        <div class="signup">Don't have account?
          <br>
          <br>
          <a href="register.php">Register</a>
        </div>
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>


  </body>
</html>
