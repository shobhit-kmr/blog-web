<!-- blog post update -->
<?php
include('connection.php');
session_start();
if(isset($_GET['id'])){
    $id= $_GET['id'];
}
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


$query ="UPDATE `post` SET `date`='$date',`last_modified`='$lstmfddate',`blog_title`='$blgtitle',`blog_content`='$blgcon', `banner_img` ='$file_name', `categories`='$category',`tags`='$tag' WHERE `id`= $id";
$result = mysqli_query($conn,$query);
if($result){
    echo "update succefully";
    header('location:user_profile_page.php');
}
?>