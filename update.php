<?php
include('connection.php');
session_start();
$mail = $_SESSION['email'];
$name1 = $_POST['uname'];
// $email1 = $_POST['umail'];
$phone1 = $_POST['number'];
$genre1 = $_POST['gen'];
$sql = "UPDATE `signin` SET `user_name`='$name1', `phone_no`= '$phone1',`genre`= '$genre1' WHERE `email` ='$mail'";

$res = mysqli_query($conn,$sql);
if($res){
    echo "update successfully";
    
}

else{
    echo "not found";
}

// fetch the records from the database
// $email_id =$_SESSION['email'];
// $query = "SELECT  `user_name`, `email`, `country`, `city`, `genre` FROM `sign_up` WHERE `email` ='$email_id'";
// $result =mysqli_query($conn,$query);
// if(mysqli_num_rows($res) > 0){
//     while($row=mysqli_fetch_assoc){
//         ?>
//         <div class="mt-5 text-center text_user fetch">

// <h4 class="mb-0">Benjamin Tims</h4>
// <span class="text-muted d-block mb-2"><?php echo $row['user-name'];?> || <?php echo $row['genre'];?> || Bay Area, <?php echo $row['city'];?>, <?php echo $row['country'];?></span>
// <p class="text-secondary mb-1"></p>
//       <p class="text-muted font-size-sm"></p>
//       <p class="text-muted font-size-sm"><?php echo $row['email'];?></p>
//     </div>
//         <?php
//     }
// }
?>

<!-- user pic insert -->
