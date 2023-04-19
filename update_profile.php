<?php
include('connection.php');
session_start();
// if(isset($_SESSION['email'])){
//     $email= $_SESSION['email'];
// }
$email= $_SESSION['email'];
if(isset($_FILES["file"])){
    $targetDir = "profile/";
$file = $_FILES["file"]["name"];
$tmp = $_FILES["file"]["tmp_name"];
$fetch ="profile/".$file;
$file_trgt = $targetDir . basename($_FILES["file"]["name"]);

$fileType = pathinfo($targetDir,PATHINFO_EXTENSION);
if(move_uploaded_file($tmp, "profile/".$file)){
    echo $fetch;
    // echo "<img src='profile/".$file."'>";
}
$sql = "UPDATE `signin` SET `profile_image` ='$file' WHERE `email` = '$email'";
// echo $fetch;

$res = mysqli_query($conn,$sql);

if($res==1){
   $output ="";
    while ($row = mysqli_fetch_assoc($res)) {
        
        ?>
        
      <img src="<?php echo 'profile/'.$row['profile_image'];?>"    
      $output.="'profile/'.<?php echo $row['profile_image']; ?>"
        <?php
        }
        
echo $output;
    // echo "upload successfull";
    
}
else{
    alert('pic not upload');
}

}

echo $fetch;
?>
