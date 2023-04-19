 <?php
 session_start();
 
if(isset($_SESSION['email'])){
    header("location:user_profile_page.php");
}


$conn = mysqli_connect('localhost','root','','blog');
 
  //check if username is exist or not
  if(isset($_POST['email'])){
        $query = "SELECT email FROM signin WHERE email = '".$_POST['email']."'";
        $res =mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0){
        echo 1;
        }
        else{
            echo 0;     
        }
    }
    if(isset($_POST['submit'])){
        $name = $_POST['username']; 
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $gender="N/A";
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        $phone = $_POST['number'];
        $city = $_POST['city'];
        $country =$_POST['country'];
        $registration = $_POST['registration_date'];
        $last_login = $_POST['last_date_of_login'];
        // $genre = $_POST['genre'];
        $file = $_FILES["img"]["name"];

        // validate form in php
        if($name != "" && $email != "" && $pass != "" && $gender != "" && $phone != "" && $city != "" && $country != "" && $registration != "" && $last_login != ""  && $file != "")
        {
            $targetDir = "uploads/";
            $file = $_FILES["img"]["name"];
            $tmp = $_FILES["img"]["tmp_name"];

            $file_trgt = $targetDir . basename($_FILES["img"]["name"]);

            $fileType = pathinfo($targetDir,PATHINFO_EXTENSION);
            if(move_uploaded_file($tmp, "uploads/".$file)){
                // echo "file upload";
            }

            $insert ="INSERT INTO `signin`(`user_name`, `password`, `email`, `country`, `city`, `phone_no`, `gender`, `date_of_registration`, `login_last_date`, `profile_image`) 
            VALUES ('$name','$pass','$email','$country','$city','$phone','$gender','$registration','$last_login','$file')";
           
           $result = mysqli_query($conn,$insert);
           if( $result == true){
                 $getdata= "SELECT * FROM `sign_in` WHERE email = '$email'";
                $data= mysqli_query($conn,$getdata);
                if($data==true){ 
                    $_SESSION['email']=$_POST['email'];
                    header('location:user_profile_page.php');
                    echo "ok";
                }                   
             }
        }
    }
?>