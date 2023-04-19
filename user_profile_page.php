<?php
session_start();
if(isset($_SESSION['email'])){

}else{
  header('location:login.php');
}
//  echo $_SESSION['email'];
//  echo $_SESSION['id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>user profile</title>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: rgb(207, 198, 198);
    }

    .user_blog_profile {
      background: #fff;
      width: 100%;
      padding-top: 5%;
      /* border: 2px solid black;*/
    }

    .user_blog_profile .coverpic_user {
      /* border: 2px solid red;*/
      margin-left: 10%;
      position: relative;
      width: 80%;
      height: 300px;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .user_blog_profile .pic2 {
      /*border: 2px solid blue;*/
      width: 110px;
      height: 110px;
      display: flex;
      margin: auto;
      margin-bottom: -30px;
      position: absolute;
      bottom: 0;
      left: 50%;
      right: 50%;
      transform: translate(-50%, 10px);
      border-radius: 50%;
      background: #fff;
    }
    .img_for_blogpost {
      /*  border: 2p  x solid pink;*/
      padding: 10px;
      width: 100%;

      position: relative;
    }

    .user_img_profile {
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      padding: 1px;
      align-items: center;
      border-radius: 50%;

    }

    .btn {

      display: flex;
      justify-content: space-around;
      outline:none;
      border:none;
    }

    .user_details_profilerow {
      margin-bottom: 1rem;
    }

    .user_details_profile {
      margin-top: 10%;
      /* border: 2px solid black;*/
      text-align: center;
    }

    p {
      padding: 0;
      margin: 0%;
    }

    h6 {

      margin-top: 10px;
    }

    .hr_for_line {

      width: 85%;
      margin: auto;
    }

    .opecity {
      position: relative;

      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;

    }

    .opecity:hover {
      opacity: 0.95;
    }

    h5 {
      font-size: medium;
      position: absolute;
      top: 80%;
      color: #fff;
      left: 1.5rem;
    }

    .img_for_blogpost .post_date {
      margin-left: 10px;
      color: #fff;
      font-size: 12px;
    }

    .img_for_blogpost .post_cate {
      color: #fff;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      background: #f57505;
      padding-left: 3px;
      padding-right: 3px;
      border-radius: 5px;


    }

    .post_cate_date {
      width: auto;
      position: absolute; 
      top: 68%;
      left: 1.5rem;
      display: flex;
      justify-content: space-around;

    }
    .back{
      background: #c1c3c7;
      height: 237px;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: larger;
    }
    .plus_post{
      font-size: 50px;
      margin-top: -10px;
      text-decoration: none;
    }
    .post_link{
      text-decoration: none;
    }
    .section_for_append{
      width:50%;
      margin:auto;
    }
    .set{
      display:none;
    }
    .ed{
      position:relative;
      top:24px;
      float:right;
    }
    /* profile_user style */
    /* #img_user{
     display:none;
    } */
    .userpic{
      display:flex;
    }
    #ed{
      float:right;
      margin-top:-10px;
    }
    .ff{
      display:none;
    }
    .cmr{
      float: right;
    width: 31px;
    margin-top: 70px;
    margin-left: 5px;
    }
    /* upload profile icon */
    #upload{
      margin-top:80px;
      margin-left:25px;

    }
    .dblog{
      position: relative;
    }
    /* three dots style  */
    .three-dots{
      width:20px;
      /* border: 2px solid red; */
      height: 20px;
      position: absolute;
      top: 12px;
      right: 12px;
      
    }
    .list1-content a {
        color: black;
        padding: 3px 12px;
        text-decoration: none;
        display: block;
        font-size: x-small;
      }
      .list1-content {
        display: none;

        position: absolute;
        top: 18px;
        right: 25px;
        background-color: #f1f1f1;
        min-width: 60px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      .dot{
        height:20px;
        width:25px;
      }
      /* tags color style */
      .clr-1{
        background: paleturquoise !important;
      }
      .clr-2{
        background: skyblue !important;
      }
      .clr-3{
        background: pink !important;
      }
      .clr-4{
        background: greenyellow !important;
      }
      .clr-5{
        background: blue !important;
      }
      .clr-6{
        background: red !important;
      }
    
    
   
  </style>
</head>

<body>
  <div class="container">
    <!-- ++++++++++++++++++++++++++++++++++++
                user blog profile start 
        ++++++++++++++++++++++++++++++++++++++ -->
         <!-- fetch the database  -->
         <?php
            include('connection.php');
            $unique_id =$_SESSION['email'];
            $query = "SELECT  `user_name`, `email`, `country`, `city`, `genre`, `profile_image` FROM `signin` WHERE `email` ='$unique_id'";
            $result =mysqli_query($conn,$query);
            if(mysqli_num_rows($result)){
              while($row=mysqli_fetch_assoc($result)){
                ?>
    <div class="user_blog_profile">

      <div class="coverpic_user">
        <img src="https://img.freepik.com/free-vector/abstract-business-professional-background-banner-design-multipurpose_1340-16858.jpg" width="100%" height="300px" alt="" />
        <div class="pic2">
          <!-- upload pic -->
          <form id="form" enctype="multipart/form-data" method="post">
            <div class="userpic">
             
          <img src="<?php echo 'uploads/'. $row['profile_image'];?>" class="user_img_profile" id="user_image" width="100%" alt="" />
         <input type="file" name="file" id="as" class="ff file"> 
         <label for="as"><img src="camera.png" class="cmr"></label>
         <!-- <button name="ip" class="up">upload</button> -->
         <!-- <i class="fa-sharp fa-solid fa-upload up" id="upload" ></i> -->
           <!-- <i class="fa-solid fa-pencil" id="ed"> -->
             
          </div>
          

  </form>
        </div>
      </div>
      <!-- fetch the user details -->
      
                 <div class="mt-5 text-center text_user fetch">

                
             <!-- <button class="btn btn-primary btn-sm follow">Follow</button> -->
             </div>
             
                <div class="mt-5 text-center text_user fetch">

                <h4 class="mb-0" id="user"><?php echo $row['user_name'];?></h4>
              <span class="text-muted d-block mb-2 los">Los Angles || <span class="gen"><?php echo $row['genre'];?></span> || Bay Area, <?php echo $row['city'];?>, <?php echo $row['country'];?></span>
            <!-- <p class="text-secondary mb-1"></p>
            <p class="text-muted font-size-sm"></p> -->
              <p class="text-muted font-size-sm" id="u"><?php echo $row['email'];?></p>

            <!-- <button class="btn btn-primary btn-sm follow">Follow</button> -->
            </div>
                <?php
              }
            }
            ?>
            
            
      <hr class="hr_for_line">

      <div class="row outline">
        <div class="btn">
        <!-- <button type="button" class="btn btn-primary">Create Post</button> -->
          <button type="button" class="btn btn-primary post_hide_show">Post</button>
          <button type="button" class="btn btn-primary setting">Setting</button>
          <!-- <button type="submit" class="btn btn-danger sub_modify"><a href="logout.php">logout</a></button> -->
        </div>

      </div>

      <div class="row row_for_blogpost hide">
        
          <div class="col-md-4">
            <div class="img_for_blogpost">
              <a href="post_add.php" class="post_link"><div width="100%" class="opecity back" >CREATE POST<i class="fa-duotone fa-plus plus_post"></i></div></a>
              
            </div>
          </div>

        <?php include('connection.php');
         $nm = $_SESSION['email'];
        $query = "SELECT  `id`, `date`, `blog_title`, `banner_img`, `tags`,`color` FROM `post` where `userid`= '$nm' order by id desc LIMIT 10";
        $result = mysqli_query($conn, $query);

        //  mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
          $a = $result;

          while ($row = mysqli_fetch_assoc($a)) {
        ?>
            <div class="col-md-4 dblog">
             
              <!-- edit blog option -->
              <!-- <a href="post.php?id=<?php echo $row['id'];?>"><i class="fa-sharp fa-solid fa-pencil ed"></i></a> -->
              <div class="img_for_blogpost">
                <a href="theme/webmag/blog-post.php?userid=<?php echo $row['id'];?>"  rel="noopener noreferrer">
                  <img src="<?php echo "uploads/". $row['banner_img'];?>" height="240px" width="100%" class="opecity" alt="" />
                </a>
                
                <!-- edit and delete option add -->
                <!-- onclick="myfun(this)" -->
                <div class="three-dots dotbtn" id="btn-edit">
                <i class="fa-solid fa-ellipsis-vertical dot aa"></i>
                </div>
                <div id="myDropdown" class="list1-content dropdown">

                    <a href="post.php?id=<?php echo $row['id'];?>">Edit Post</a>
                    <a href="delete_blog.php?id=<?php echo $row['id'];?>">Delete Post</a>
                 </div>
                <div class="post_cate_date">                
                   <p class="post_cate <?php echo $row['color'];?>"><?php echo $row['tags'];?></p>
                  <p class="post_date"><?php echo date('F d, Y',strtotime($row['date'])); ?></p>
                  
                </div>

                <a href="theme/webmag/blog-post.php?userid=<?php echo $row['id'];?>" target="_blank" rel="noopener noreferrer">
                  <h5 class="post _heading"><?php echo $row['blog_title'];?></h5>
                </a>

              </div>
            </div>

        <?php
          }
        }
        ?>

      </div>

      <!-- fetch the setting field from database -->

      <?php
          include('connection.php');
          $mail = $_SESSION['email'];
          $query= "SELECT `user_name`, `email`, `phone_no`, `genre` FROM `signin` WHERE `email` ='$mail'";
          $res = mysqli_query($conn,$query);
          if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
              ?>
         
    <div class="row">
      <div class="section_for_append set">
    <form id="myform" method="post">
      <div class="form-group">
        <label for="mail"></label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="uname" value="<?php echo $row['user_name'];?>" placeholder="User name">
      </div>
      <div class="form-group">
        <label for="pass"></label>
        <input type="email" disabled class="form-control" id="email" value="<?php echo $_SESSION['email'] ?>" name="umail" value="<?php echo $row['email'];?>">
      </div>     
      <div class="form-group">
        <label for="mail"></label>
        <input type="text" pattern="[0-9]{10}" class="form-control" id="phone" aria-describedby="emailHelp" name="number" value="<?php echo $row['phone_no'];?>" placeholder="Enter number">
      </div>
      <div class="form-group">
        <label for="mail"></label>
        <input type="text" class="form-control" id="genre" aria-describedby="emailHelp" name="gen" value="<?php echo $row['genre'];?>" placeholder="Genre">
      </div><br>
        <b class="btn btn-primary sub_modify update_details">Submit</b>
        <button type="submit" class="btn btn-danger sub_modify"><a href="logout.php">logout</a></button>
        <div id="update"></div>
    </form>
    </div>
    </div>
    <?php
            }
          }
          ?>


    </div>
    <!-- +++++++++++++++++++++++++++++++++++++
                user blog profile end
        ++++++++++++++++++++++++++++++++++++++ -->
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script> 
  
        $(".post_hide_show").click(function(){
          $(".hide").toggle();
          $(".set").css("display","none");

        });
        $(".setting").click(function(){
          $(".set").toggle();
          $(".hide").css("display","none");
        })
</script>


</script>
<!-- setting section change user data through ajax -->
<script>
  $(document).ready(function(){
    $(".update_details").click(function(){

      setInterval(function(){
       
           $.ajax({
      url:'update.php',
      type:'post',
      data: $("#myform").serialize(),
      success: function(data){
        $("#update").fadeIn(data);
         setTimeout(function(){
        $("#update").fadeOut("slow");
        }, 3000);
        
        console.log(data);
      
 
      }
    }) ; 
  }, 2000);
    
    });
        
  });
  // show the user details on onclick
  $(".btn").click(function(){


// $("#myform").on('change',function(){
  var u_name =$("#name").val();
var u_email=$("#email").val();
var phone_no =$("#phone").val();
var cate=$("#genre").val();
 $("#u").html(u_email);
 $("#user").html(u_name);
 $(".gen").html(cate);

})

</script>
<!-- user pic upload -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<!-- image-update -->
<script>
    $(document).ready(function(){

$("#as").change(function(){

    var fd = new FormData();
    var files = $('#as')[0].files;
    
    // Check file selected or not
    if(files.length > 0 ){
       fd.append('file',files[0]);

       $.ajax({
          url: 'update_profile.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){
             if(response != 0){
                $("#user_image").attr("src",response); 
                // $(".coverpic_user").attr("src",response); 
                console.log(response);
                // alert(response);
                
             }else{
                alert('file not uploaded');
             }
          },
       });
    }else{
       alert("Please select a file.");
    }
});
});

  // image update end code
  // delete post 
  $("#delete_post").click(function(){
    if(confirm("are you sure want to delete the post?"));
    $.ajax({
      url: 'delete_blog.php',
      type: 'post',
      success: function(data){
        alert("your post is delete");
      }
    })
  })

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script>
        
        $(this,".dropdown").click(function(){

           $("#myDropdown").toggle();
            // $(this).a;        
         
      
        })
        // let button = document.querySelectorAll(".dot");
        // for(let i =0; i < button.length; i++){
        //  button[i].addEventListener("click",function(){
        //       var a =  $(".dropdown").toggle();
        //         this.a;
        //   });
        // }
        
  </script>
</html>

<!-- <a href="post.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-user-pen ed"></i></a> -->


<!-- <a href="delete_blog.php?id=<?php echo $row['id'];?>"><i class="fa-sharp fa-solid fa-trash-arrow-up" id="delete_post"></i></a>  -->