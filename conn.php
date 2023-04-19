<?php
session_start();
$conn=mysqli_connect("localhost","root","","blog");
if($conn){
// echo "done";


if(isset($_POST['submit'])){

$date=$_POST['date'];
$lstmfddate=$_POST['lstdate'];
$blgtitle=$_POST['blgtitle'];
$blgcon=$_POST['editordata'];
$category=$_POST['category'];
$tag=$_POST['tags'];
 

$file_name =$_FILES["banimg"]["name"];

 $tmp = $_FILES["banimg"]["tmp_name"];

$target_file=basename($_FILES["banimg"]["name"]);

$imgfiletype=pathinfo(PATHINFO_EXTENSION);

    if (move_uploaded_file($tmp,"uploads/".$file_name)) {
        //    echo "The file ". htmlspecialchars( basename( $_FILES["banimg"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
$color=["clr-1", "clr-2", "clr-3", "clr-4", "clr-5", "clr-6",];
$select_color =rand(1,6);

$query="INSERT INTO `post`(`userid`, `date`, `last_modified`, `blog_title`, `blog_content`,`banner_img`,`categories`, `tags`,`color`)
 VALUES ('".$_SESSION['email']."','$date','$lstmfddate','$blgtitle','$blgcon','$file_name','$category','$tag', '$color[$select_color]')";
 

$result=mysqli_query($conn,$query);
if($result == true) {
    echo "done";
     header('location:user_profile_page.php');
}else{
    echo "not done";
}

}
}
?>