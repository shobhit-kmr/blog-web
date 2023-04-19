<?php
session_start();
if(isset($_SESSION['email'])){
    // header('location:user_profile_page.php');
 
 }
$conn = mysqli_connect('localhost','root','','blog');

if(isset($_POST['email'])){
    $query = "SELECT email FROM sign_in WHERE email = '".$_POST['email']."'";
    $res =mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
    echo 1;
    }
    else{
        echo 0;     
    }
}


// if(isset($_POST['submit'])){
//     $email=$_POST['email'];
//     if($_POST['email'] != "" && $_POST['pass'] != ""){
//         $query="SELECT * FROM `sign_up` WHERE email = '$email'";
    
//         $result = mysqli_query($conn,$query);
       
//         if(mysqli_num_rows($result) ==1 ){
//             $_SESSION['email']=$_POST['email'];
//             header('location:user_profile_page.php');
//                 echo "ok";
//             }else{
//                 echo "not done";               
//             }
//         }
// }



?>
