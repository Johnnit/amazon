<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verify</title>
    <link rel="stylesheet" href="../store/style.css">
   <link rel="stylesheet" href="../store/mobile.css">
    
    <script src="../store/signup.js"></script>
    
    <style>
    body{
      width:100%;
    }
    .mainPage {
      padding: 50px 15px;
    display: flex;
    flex-direction: column;
    gap:10px;
    }
    h1{
      font-weight: 500;
    }
    .phone{
      font-weight: bold;
    }
    .phone a 
    {
      text-decoration: none;
      font-weight: lighter;
      color:rgba(74, 148, 200, 1);
    }
    .notify{
      font-size: 18px;
    }
      .grp{
        display: flex;
        width:100%;
        gap:5px;
        flex-direction: column;
      } 
      .error{
        font-size: 17px;
        color:rgba(181, 39, 20, 1);
      }
      .grp input{
        width:100%;
        padding:13px;
        outline:none;
        font-size:20px;
        border-radius:10px;
        border: 1px solid darkgrey;
      }
      button{
        padding:13px;
        background: orange;
        font-size: large;
        color:white;
        margin-top:20px;
        border:none;
        border-radius:10px;
      }
      hr{
        box-shadow:2px 2px 10px ghostwhite,
                  -2px -2px 10px white;
                  padding:  2px;
      }
      button.signin {
        background: whitesmoke;
        color:black;
        border:1px solid darkgrey;
        font-size: 17px;
      }
      .resend{
        text-align: center;
        text-decoration: none;
        margin-top: 10px;
      }
      .foot{
        position: absolute ;
        bottom:0;
  background: var(--light-dark);
  color:var(--text-color);
  width: 100%;
  text-align: center;
  margin-top: 3%;
  padding:20px;
}
.foot .two{
  background: var(--light-dark);
  color:var(--text-color);
  padding: 10px 0;
}
.foot a{
text-decoration: none;
color: rgba(58, 169, 206, 1);
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
    <h1>Authentication required</h1>
    <p class="phone">NG +2349057326602 <a href="">Change    
</a></p>
<p class="notify">We've sent a One Time Password(OTP) to the mobile number above. Please enter it to complete verification.</p>
<div class="grp">
  <h3>Enter OTP</h3>
  <input type="tel" name="otp" maxlength="6" id="otp">
  <span class="error"><i class="fa fa-exclamation-circle"></i> Invalid OTP. Please check your code and try again.</span>
  <button class="continue" name="continue">Continue</button>
  <a href="" class="resend">Resend OTP</a>
  <br>
 <span style="text-align: center;"> or</span>
  <br>
  <hr>
  <button class="signin">Sign in with your password</button>
</div>
  </div>
  
    
  <!--footer in main-->
<div class="foot">
  <a href ="">Terms and conditions </a><br><br>
  <a href ="">Privacy Policy </a><br><br>
  <span>Developed by johnnittech.</span>
  <div class="two">
  <cite>&copy; 2022-2024, AMAzöñ.org.</cite>
  </div>
</div>

</div>
</body>

</html>