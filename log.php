<?php
session_start();
$warn =  " ";
  if(isset($_POST['verify'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $conn = new mysqli('localhost','root','','amazon');
    if($conn->connect_error){
      die('Error: ' . $conn->connect_error);
    }
    
    //query for the database
    $sql = "SELECT * FROM sign WHERE  email = '$user' AND password = '$pass'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
 
  if($count == 1){
     $_SESSION['name'] = $user;
    header('Location: admin.php');
    $sql = "INSERT INTO login (Username, Password)  VALUES ('$user', '$pass') ";
    $result = $conn->query($sql);
  
   }
   
    else{
  $warn = "
  <div class='error'>
<h3>There was a problem</h3>
   <p>Username and password does not match.</p>
 </div>
  ";
}
    
   $conn->close();
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="../store/style.css">
   <link rel="stylesheet" href="../store/mobile.css">
    <link rel="stylesheet" href="../store/login.css">
    <link rel="shortcut icon" href="../store/clothe.jpg" type="image/x-icon">
    <script src="../store/signup.js"></script>
    <style>
      .confirm span{
  cursor: pointer;
}
.error{
  border: 2px solid orangered;
  padding: 15px;
  border-radius: 5px;
  margin-bottom: 20px;
  display: block;
}
    </style>
</head>

<body>
  <div class="nav">
  <!--nav up section-->
  <div class="up">
  <h2>AMAzöñ</h2>
  </div>
  </div>
  
  <div class="mainPage">
   <!-- warning -->
  <?php echo $warn; ?>
  
  <h2>WELCOME</h2>      

  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div class="confirm  
">
      <input type="radio" checked name="check" id="radio">
      <span class="text"> Already have an account?</span>
      
    </div>
    
    <label for="user">
      Mobile Number or Email
      <input type="text" name="username" required id="username">
    </label>
      <label for="pswd">
        Enter Password
        <input type="password" minlength="6" required name="password" id="pswd">
      </label>
       <div class="confirm  
" onclick="show()">
         <i class="check" ><input type="checkbox" name="check" id="check"></i>
      <span class="text">Show password</span>
   
    </div>
    
       <p class="note">To verify you're a user. Click on the login button.</p>
       <div class="grp">
 <input type="submit" class="submit" value="Log In" name="verify">
    </div>
     <hr>
    <p class="condition">By creating an account, you agree to AMAzöñ's <a href="">Conditions of use</a> and <a href="">Privacy Notice</a>. </p>
   
  </form>
  
  <div class="sign">

    <span class="name">New to AMAzöñ? <small>Sign Up</small></span>
        <i class="sign"><input type="radio" name="sign-in" id="sign-in"></i>
  </div>
  </div>
  
  <!--footer in main-->
<div class="footer">
  
  <span class="developer">Developed by johnnittech.</span>
  <div class="two">
  <cite>&copy; 2022-2024, AMAzöñ.org.</cite>
  </div>
</div>

</div>

<script>
  document.querySelector('.sign').onclick=()=>{
    open('sign.php');
  }
</script>
</body>

</html>

