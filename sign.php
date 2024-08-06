
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>signup</title>
  <link rel="stylesheet" href="../store/style.css">
   <link rel="stylesheet" href="../store/mobile.css">
    <link rel="stylesheet" href="../store/login.css">
    <script src="../store/signup.js"></script>
    <style>
      .confirm span{
  cursor: pointer;
}
    </style>
</head>

<body>
  <?php
  session_start();
  $warn = "";
  if(isset($_POST['verify'])){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "amazon";

    $name = $_POST['name'];
    $mail = filter_var($_POST['user'], FILTER_VALIDATE_EMAIL);
    $pass = $_POST['password'];
    // create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    // check connection
    if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM sign WHERE  email = '$mail'";
$result = $conn->query($sql);
$count_mail = mysqli_num_rows($result);

$sql = "SELECT * FROM sign WHERE  password = '$pass'";
$result = $conn->query($sql);
$count_pass = mysqli_num_rows($result);

if($count_mail == 0 && $count_pass == 0){
  $sql = "INSERT INTO sign (fullname, email, password) VALUES ('$name', '$mail', '$pass')";
  $result = $conn->query($sql);
  if($result){
    header('Location: verify.php');
  }
   
  
}
else{
  $warn =  "
  <div class='error'>
  <h3>There was a problem</h3>
      <p>This email has already been registered.<br>
       You can click login to continue to Admin Dashboard.</p>
    </div>
  ";
 
}
  
    $conn->close();
  }
  
  ?>
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
      <span class="text"> Create Account<small> New to AMAzöñ?</small></span>
      
    </div>
    
    <label for="name">
      First and last name
      <input type="text" required name="name" id="name">
    </label>
    <label for="user">
      Mobile Number or Email
      <input type="text" name="user" required id="user">
    </label>
      <label for="pswd">
        Create a password
        <input type="password" minlength="6" required name="password" id="pswd">
      </label>
       <div class="confirm  
" onclick="show()">
         <i class="check" ><input type="checkbox" name="check" id="check"></i>
      <span class="text">Show password</span>
   
    </div>

       <p class="note">To verify your number, we will send you a text-message with a temporary code.<br>Message and data fee may apply.</p>
       <div class="grp">
        
 <input type="submit" class="submit" value="Verify mobile number" name="verify">
    </div>
     <hr>
    <p class="condition">By creating an account, you agree to AMAzöñ's <a href="">Conditions of use</a> and <a href="">Privacy Notice</a>. </p>
   
  </form>
  
  <div class="sign">
    <i class="sign"><input type="radio" name="sign-in" id="sign-in"></i>
    <span class="name">Sign In <small>Already a customer?</small></span>
  </div>
  </div>
  
  <!--footer in main-->
<div class="footer">
 
  <span>Developed by johnnittech.</span>
  <div class="two">
  <cite>&copy; 2022-2024, AMAzöñ.org.</cite>
  </div>
</div>

</div>

<script>
 document.querySelector('.sign').onclick=()=>{
    open('log.php');
  }
</script>
</body>

</html>

