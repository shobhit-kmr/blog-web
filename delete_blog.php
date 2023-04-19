<?php
include('connection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql = "DELETE FROM `post` WHERE `id` = $id";
$result = mysqli_query($conn,$sql);
if($result){
    header('location:user_profile_page.php');
    
}

?>