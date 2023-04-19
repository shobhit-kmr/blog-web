<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    if(isset($_SESSION['email'])){
        header('location:user_profile_page.php');
    }
 ?>

<?php

$conn = mysqli_connect('localhost','root','','blog');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    if($_POST['email'] != "" && $_POST['pass'] != ""){
        $query="SELECT * FROM `signin` WHERE email = '$email'";
    
        $result = mysqli_query($conn,$query);
       
        if(mysqli_num_rows($result) ==1 ){
            $_SESSION['email']=$_POST['email'];
            header('location:user_profile_page.php');
                // echo "ok";
            }else{
                // echo "not done";               
            }
        }
}



?>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
           
body {
    font-family: 'Poppins', sans-serif;
    background-color: #c8e6cd;
}
main {
    height: 90vh;
    width: 100vw;
    position: relative;
    margin: 0 auto;
}
footer {
    height: 10vh;
    background-color: #ffffff;
}
.row {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    max-width: 1000px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.colm-logo {
    flex: 0 0 50%;
    text-align: left;
}
.colm-form {
    flex: 0 0 40%;
    text-align: center;
}
.colm-form .form-container {
    background-color: #ffffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    padding: 20px;
    max-width: 400px;
}
.colm-form .form-container input, .colm-form .form-container .btn-login {
    width: 100%;
    margin: 5px 0;
    height: 45px;
    vertical-align: middle;
    font-size: 16px;
}
.colm-form .form-container input {
    border: 1px solid #dddfe2;
    color: #1d2129;
    padding: 0 8px;
    outline: none;
}
.colm-form .form-container input:focus {
    border-color: #1877f2;
    box-shadow: 0 0 0 2px #e7f3ff;
}
.colm-form .form-container .btn-login {
    background-color: #1877f2;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    padding: 0 16px;
    color: #ffffff;
    font-weight: 700;
}
.colm-form .form-container a {
    display: block;
    color: #1877f2;
    font-size: 14px;
    text-decoration: none;
    padding: 10px 0 20px;
    border-bottom: 1px solid #dadde1;
}
.colm-form .form-container a:hover {
    text-decoration: underline;
}
.colm-form .form-container .btn-new {
    background-color: #42b72a;
    border: none;
    border-radius: 6px;
    font-size: 17px;
    line-height: 48px;
    padding: 0 16px;
    color: #ffffff;
    font-weight: 700;
    margin-top: 20px; 
}
.colm-form p a {
    text-decoration: none;
    color: #1c1e21;
    font-weight: 600;
}
.colm-form p a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <main>
        <div class="row">
            
            <div class="colm-form">
                <div class="form-container">
                    <form method="post" action="#" name="myform">
                    <div ><input id="input"required type="text" placeholder="Email address or phone number" name="email"><span id="valid_mail"> <div id ="u_small"></div></span></div>
                    <input required type="password" id="password" placeholder="Password" name="pass"><span id="valid_pass"></span>
                    <input class="btn-login" id="sub" name="submit" type="submit" value="login">
                    <a href="forgot_pass.php">Forgotten password?</a></form>
                   <a href="signup.php"><button class="btn-new">Create new Account</button></a>
            
        </div>
    </main>
    
</body>
<script>
    $(document).ready(function(){
  $("#input").blur(function(){
    var email =$(this).val();
    $.ajax({
      url:'login_db.php',
      type:'POST',
      datatype:'text',
      data: 'email=' +email,
      success: function(data){
        console.log(data)
        if(data== 1){
          $("#valid_mail").html("Welcome Back !");
        }
        else if(data== 0){
          $("#valid_mail").html("You'r Not Registred");
        }        
      }
    })
  })

})


   
     // email check
  function email_valid(){
    var ptrn =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(ptrn.test(document.myform.email.value)){
          document.getElementById("valid_mail").textContent = "mail is valid";
          document.getElementById("valid_mail").style.color = 'green';
          document.getElementById("valid_mail").style.fontSize = '12px';
          if(document.myform.email.value==""){
            document.getElementById("valid_mail").textContent = " "; 
          }
    }
    else{
      document.getElementById("valid_mail").textContent = "mail is invalid";
      document.getElementById("valid_mail").style.color = 'red';
          document.getElementById("valid_mail").style.fontSize = '12px';
          if(document.myform.email.value==""){
            document.getElementById("valid_mail").textContent = " "; 
          }
    }
  }
  // password check
  function pass_valid(){
    var ptrn =/^[a-zA-Z0-9!@#$%^&*]{6,16}$/;

    if(ptrn.test(document.myform.pass.value)){
          document.getElementById("valid_pass").textContent = "password is valid";
          document.getElementById("valid_pass").style.color = "green";
          document.getElementById("valid_pass").style.fontSize = '12px';
          if(document.myform.pass.value==""){
            document.getElementById("valid_pass").textContent = " ";
          }
    }
    else{
      document.getElementById("valid_pass").textContent = "password is invalid(minium 6 and maximum 16 char is accept)";
      document.getElementById("valid_pass").style.color = "red";
          document.getElementById("valid_pass").style.fontSize = '12px';
          if(document.myform.pass.value==""){
            document.getElementById("valid_pass").textContent = " ";
          }
    }
    
  }
  document.myform.email.addEventListener("keyup", email_valid);
  document.myform.pass.addEventListener("keyup", pass_valid);


</script>
</html> 