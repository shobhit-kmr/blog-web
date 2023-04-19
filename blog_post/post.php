<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
// if(isset($_SESSION['email'])){
// //   header('location:user_profile_page.php');

// }else{
//     header('location:login.php');
// }
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Post</title>
    
    <style>
        body{
            padding: 0;
            margin: 0;
            background: #a5f0f2;   
        }
     
        .post_header{
            font-size: 30px;
            text-align: center; 
            margin-top: 15px;   
        }
        .btn_sub_post{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-top: 23px;
            width: 50%;
            text-align: center;
            background: #2f7cf7;
            margin-left: 20%;
            color: #fff;
            border-radius: 80px;
        }
        .text_content{
            width: 30%;
        }
        .img_post{
            position: relative;
            border-radius: 5px;
            width: 100%;
            height: 275px;
            margin-top: 24px;
            background-color: #fff;
        }
        .note-frame{
            border-radius: 5px;

            height: 300px;
            width: 92%;
            margin-left: 4%;  
        }
        .note-editable{
            height: 260px;
            width: 100%;
        }
        p{
            margin:5px;
            font-size: 15px;  
        }
        input[type="text"]{
            font-size: 15px;
        }
        input[type="date"]{
            font-size: 15px;
        }
        input[type="file"]{
            font-size: 15px;
        }
        input[type="submit"]{
            font-size: 15px;
        }
        .color_back_left{
            margin-top: 5px;
            background-image: linear-gradient(to right top, #87767f, #958693, #a296a7, #aea7bb, #b9b9d0, #b5bcd2, #b2c0d4, #b0c3d4, #a3b7c3, #99abb1, #919fa1, #899292);
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }
         .column_second{
            border-radius: 8px;
            background-color: #fff;
            margin-top: 5px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;


            
        } 
        .header_h3{
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            background: #2f7cf7;
            color: #fff;
            height: 70px;
            font-size: 40px;
        }
        #imgpost{
            border-radius: 8px;
            position: absolute;
            width: 100%;
            height: 275px;
        }
        #preview{
            outline: none;
        }
        #banner_image{
            border-radius: 8px;
            margin-left: -6px;
            width: 102%;
            height: 200px;
            /* border: 1px solid red; */
        }
        .blgtitle{
            position: absolute;
            text-align: center;
            top: 69%;
            left: 8%;
            color: #fff;
        }
        .imgposter{
            border: none;
            margin-top: 3px;
            border-radius: 5px;
            width: 99.7%;
            height: 230px;
        }
        .blgt{
           margin-left: 18px; 
        }
        .for_summernote{
            margin-top: 50%;
          
        }
        .row_1{
            height: 400px;
            justify-content: space-between;
        }
        .position{
            position: relative;
        }
        #post_date_h4{
            font-size: 15px;
            position: absolute;
            top: 56%;
            left: 30%;
            color: #fff;
        }
        .col_post_2 select option,.col_post_2 select{
            font-size: 15px;
        }
        #category_show{
            border-radius: 3px;
            position: absolute;
            top: 55%;
            left: 8%;
            color: #fff;
            background-color: #ff8700;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }
        #content_p{
            
            margin-top: 5%;
            padding: 3%;
            word-wrap: break-word;

        }
        .contianer{
            width: 99%;
            height: 700px;
            display: flexbox;
            /* border: 2px solid black; */
            
        }
        .content_div{
            width: 100%;
            border: 2px solid black;
        }
        #user_tag{
            display: flex;
            justify-content: space-around;
            position: absolute;
            top: 84%;
            left: 7.45%;
            gap: 4px;
            font-size: 10px;
        }
            
        .gap{
            color: #fff;
            border-radius: 3px;
            background-color: #ff8700;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        .tag_p{

           font-size: 11px;
        }
        .remove{
            cursor: pointer;
        }
      
        
    </style>
</head>
<body>
    
<div class="contianer">
<!-- ==============================================
FIRST ROW INSIDE THE ROW TWO COLUMNS ARE DEFINE 
=================================================== -->
<div class="row  row_1">
<!-- =======
===========================================
FIRST COLUMN INSIDE CREATE POST YOUR POST SECTION START
======================================================= -->
    
    <div class="col-md-5">
         <div class="row  color_back_left" >

         <form action="conn.php" method="post" enctype="multipart/form-data">

         <div class="row header_h3"> <h3 class="post_header">Create Your Post</h3></div>
       
        <div class="col-md-6">
        <p> Email:</p><input type="text" name="userid" placeholder="<?php echo $_SESSION['email'];?>" disabled class="form-control" id="userid">
        <p>Date:</p><input required type="date" name="date" class="form-control"  id="post_date">
        <p>last Modified:</p><input required type="date" name="lstdate" class="form-control"  id="last_modified_date">
        <p>Blog Title:</p><input required type="text" name="blgtitle" class="form-control"  id="blog_title">
        </div>

        <div class="col-md-6 col_post_2">
        <p>Cartegories</p> 
        <select name="category" id="category" required class="form-control">
        <option value="">--select Categories--</option>
        <option value="Marketing">Marketing</option>
        <option value="App Development">App Development</option>
        <option value="Web Development">Web Development</option>
        </select>
        <!-- <div class="div"> -->
        <p>Tags</p><input type="text" name="tags" 
        value="
        
        
        
        
        
        "
        class="form-control" id="tag">
        <!-- <div class="tag-list"></div>
        </div> -->
        <p>Bannerimg</p><input required type="file" name="banimg"class="form-control"  id="preview" onchange="myfun(event)">
        <input required type="submit" name="submit" class="form-control btn_sub_post" value="Post">
        </div>
        <div class="row for_summernote"><p class="blgt">Blog Content </p><textarea required id="summernote" name="editordata" cols="30" rows="10" class="form-control text_content"></textarea>
        </div>
        </form>
        </div>    
    </div>
<!-- =================================================
FIRST COLUMN INSIDE CREATE POST YOUR POST SECTION END
===================================================== -->


<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
SECOND COLUMN INSIDE DISPLAY THE PREVIEW OF POST SECTION START
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div class="col-md-6 column_second">
    
    <div id="banner_image">
    <div class="position">

    <img src="" alt="" class="imgposter" id="usha">
    <h1 id="blog_title_h1" class="blgtitle"> </h1> 
    <div id="user_tag"></div>
    <h4 id="post_date_h4"></h4>
    <div><h4 id="category_show"></h4></div>
    </div>
    </div>
    
    <h1 id="post_heading_h1"></h1>
    <h4 id="last_moddate_h4"></h4>
    <div  id="content_p"></div>
    </div>


<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
SECOND COLUMN INSIDE DISPLAY THE PREVIEW OF POST SECTION CLOSED
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

</div>
</div>



<script>
    function myfun(event){
        var img=document.getElementById("imgpost");
        var imgposter=document.getElementById("usha");
        // img.src=URL.createObjectURL(event.target.files[0]);
        imgposter.src=URL.createObjectURL(event.target.files[0]);
        console.log("done");
     }

</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote({
  callbacks: {
    onChange: function(contents, $editable) {
    //   console.log('onChange:', contents, $editable);
      var x=$("#summernote").val();
           $("#content_p").html(x);

    }
  }
})
 

        $("#category").change(function(){
            var x=$("#category").val();
           $("#category_show").html(x);
           $("#category_show").css("padding","4px");
        });

        
        $("#tag").change(function(){
            var x=$("#tag").val();
            var d='<div class="gap"><p class="tag_p">'+x+'<span class="remove"> &times</span></p></div>';
           $("#user_tag").css("padding","4px");
           $("#user_tag").append(d);
        //    $("#tag").val("");
        });

        $(document).on('click','.remove',()=>{
            let a= $(this);
            //a.parent().parent().hide();
            $(".gap").remove();
        });


           $("#post_date").change(function(){
            var x=$("#post_date").val();
           $("#post_date_h4").html(x);
        });


        $("#blog_title").keyup(function(){
            var x=$("#blog_title").val();
           $("#blog_title_h1").html(x);
        });
       
       


});
  </script>
  


</body>
<!-- post edit  -->

</html>
