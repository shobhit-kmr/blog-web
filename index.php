<?php
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>WebMag HTML Template</title>
  <link rel="canonical" href="https://preview.colorlib.com" />
  <link href="//fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet" />
  <link type="text/css" rel="stylesheet" href="theme/webmag/css/bootstrap.min.css" />
  <link rel="stylesheet" href="theme/webmag/css/font-awesome.min.css" />
  <link type="text/css" rel="stylesheet" href="theme/webmag/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
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
  <header id="header">
    <div id="nav">
      <div id="nav-fixed">
        <div class="container">
          <div class="nav-logo">
            <a href="index.html" class="logo"><img src="theme/webmag/img/logo.png" alt="" /></a>
          </div>

          <ul class="nav-menu nav navbar-nav">
            <li><a href="theme/webmag/category.html">News</a></li>
            <li><a href="theme/webmag/category.html">Popular</a></li>
            <!-- <li class="cat-1">
                <a href="theme/webmag/category.html">Web Design</a>
              </li>
              <li class="cat-2">
                <a href="theme/webmag/category.html">JavaScript</a>
              </li>
              <li class="cat-3">
                <a href="theme/webmag/category.html">Css</a>
              </li>
              <li class="cat-4">
                <a href="theme/webmag/category.html">Jquery</a>
              </li> -->
          </ul>


          <div class="nav-btns">
            <!-- <button class="aside-btn"><i class="fa fa-bars"></i></button>
		
              <button class="search-btn"><i class="fa fa-search"></i></button> -->
            <button class="aside-btn"><i class="fa-solid fa-user"></i> <a href="login.php">Login</a></button>
            <button class="aside-btn"><i class="fa-solid fa-user-plus"></i><a href="signup.php">Sign up</a></button>
            <div class="search-form">

              <input class="search-input" type="text" name="search" placeholder="Enter Your Search ..." />
              <button class="search-close">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>


        </div>
      </div>
      <div id="nav-aside">
        <div class="section-row">
          <ul class="nav-aside-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="theme/webmag/about.html">About Us</a></li>
            <li><a href="#">Join Us</a></li>
            <li><a href="#">Advertisement</a></li>
            <li><a href="New Folder/post.php">Blog Post</a></li>
            <li><a href="theme/webmag/contact.html">Contacts</a></li>
          </ul>
        </div>
        <div class="section-row">
          <h3>Recent Posts</h3>
          <div class="post post-widget">
            <a class="post-img" href="theme/webmag/blog-post.html"><img src="theme/webmag/img/widget-2.jpg" alt="" /></a>
            <div class="post-body">
              <h3 class="post-title">
                <a href="theme/webmag/blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into
                  Code Automatically</a>
              </h3>
            </div>
          </div>
          <div class="post post-widget">
            <a class="post-img" href="theme/webmag/blog-post.html"><img src="theme/webmag/img/widget-3.jpg" alt="" /></a>
            <div class="post-body">
              <h3 class="post-title">
                <a href="theme/webmag/blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development
                  Block!</a>
              </h3>
            </div>
          </div>
          <div class="post post-widget">
            <a class="post-img" href="theme/webmag/blog-post.html"><img src="theme/webmag/img/widget-4.jpg" alt="" /></a>
            <div class="post-body">
              <h3 class="post-title">
                <a href="theme/webmag/blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="section-row">
          <h3>Follow us</h3>
          <ul class="nav-aside-social">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </li>
          </ul>
        </div>
        <button class="nav-aside-close"><i class="fa fa-times"></i></button>
      </div>
    </div>
  </header>
  <div class="section">
    <div class="container">
      <div class="row">

      <?php

$query = "SELECT `id`, `date`, `blog_title`, `color`, `banner_img`,`tags`,`color` FROM `post` order by id desc LIMIT 2";
$result = mysqli_query($conn, $query);

//  mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0) {
  $a = $result;

  while ($row = mysqli_fetch_assoc($a)) {
?>


        <div class="col-md-6">
          <div class="post post-thumb">
            <a class="post-img" href="theme/webmag/blog-post.php?userid=<?php echo $row['id'];?>"><img src="<?php echo "uploads/".$row['banner_img']; ?>" style="height: 370px;" alt="" /></a>
            <div class="post-body">
              <div class="post-meta">
                <a class="post-category <?php echo $row['color']; ?>" href=><?php echo $row['tags']; ?></a>
                <span class="post-date"><?php echo $row['date']; ?></span>
              </div>
              <h3 class="post-title">
                <a href="theme/webmag/blog-post.html"><?php echo $row['blog_title']; ?></a>
              </h3>
            </div>
          </div>
        </div>

        <?php
          }
        }


        ?>



        <!-- <div class="col-md-6">
          <div class="post post-thumb">
            <a class="post-img" href="theme/webmag/blog-post.html"><img src="theme/webmag/img/post-2.jpg" alt="" /></a>
            <div class="post-body">
              <div class="post-meta">
                <a class="post-category cat-3" href="theme/webmag/category.html">Jquery</a>
                <span class="post-date">March 27, 2018</span>
              </div>
              <h3 class="post-title">
                <a href="theme/webmag/blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a>
              </h3>
            </div>
          </div>
        </div> -->





      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>Recent Posts</h2>
          </div>
        </div>

        <?php

        $query = "SELECT `id`, `date`, `blog_title`, `banner_img`, `color`, `tags` FROM `post` order by id desc LIMIT 4";
        $result = mysqli_query($conn, $query);

        //  mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
          $a = $result;

          while ($row = mysqli_fetch_assoc($a)) {
        ?>
            <div class="col-md-4">
              <div class="post">
                <a class="post-img" href="theme/webmag/blog-post.php?userid=<?php echo $row['id'];?>"><img src="<?php echo "uploads/".$row['banner_img']; ?>" style="height: 240px;" alt="" /></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a class="post-category <?php echo $row['color']; ?>" href="theme/webmag/blog-post.php?userid=<?php echo $row['id'];?>"><?php echo $row['tags']; ?></a>
                    <span class="post-date"><?php echo $row["date"]; ?></span>
                  </div>
                  <h3 class="post-title">
                    <a href="theme/webmag/blog-post.php?userid=<?php echo $row['id'];?>"><?php echo $row["blog_title"]; ?></a>
                  </h3>
                </div>
              </div>
            </div>
        <?php
          }
        }


        ?>
        <!--        
        <div class="col-md-4">
          <div class="post">
            <a class="post-img" href="theme/webmag/blog-post.html"><img src="theme/webmag/img/post-4.jpg" alt="" /></a>
            <div class="post-body">
              <div class="post-meta">
                <a class="post-category cat-2" href="theme/webmag/category.html">JavaScript</a>
                <span class="post-date">March 27, 2018</span>
              </div>
              <h3 class="post-title">
                <a href="theme/webmag/blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU
                  Side-Channel Attacks</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="post">
            <a class="post-img" href="theme/webmag/blog-post.html"><img src="theme/webmag/img/post-5.jpg" alt="" /></a>
            <div class="post-body">
              <div class="post-meta">
                <a class="post-category cat-3" href="theme/webmag/category.html">Jquery</a>
                <span class="post-date">March 27, 2018</span>
              </div>
              <h3 class="post-title">
                <a href="theme/webmag/blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="clearfix visible-md visible-lg"></div>
        <div class="col-md-4">
          

        </div>
        <div class="col-md-4">
          <div class="post">
            <a class="post-img" href="theme/webmag/blog-post.html"><img src="theme/webmag/img/post-2.jpg" alt="" /></a>
            <div class="post-body">
              <div class="post-meta">
                <a class="post-category cat-1" href="theme/webmag/category.html">Web Design</a>
                <span class="post-date">March 27, 2018</span>
              </div>
              <h3 class="post-title">
                <a href="theme/webmag/blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a>
              </h3>
            </div>
          </div>
        </div>
      </div> -->
        <div class="row">
          <div class="col-md-8">
            <!-- <div class="row">
              <div class="col-md-12">
                <div class="post post-thumb">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-2.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-3"
                        href="theme/webmag/category.html"
                        >Jquery</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Ask HN: Does Anybody Still Use JQuery?</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="post">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-1.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-4"
                        href="theme/webmag/category.html"
                        >Css</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >CSS Float: A Tutorial</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="post">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-2.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-1"
                        href="theme/webmag/category.html"
                        >Web Design</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Tell-A-Tool: Guide To Web Design And Development
                        Tools</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
              <div class="clearfix visible-md visible-lg"></div>
              <div class="col-md-6">
                <div class="post">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-4.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-2"
                        href="theme/webmag/category.html"
                        >JavaScript</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Chrome Extension Protects Against JavaScript-Based CPU
                        Side-Channel Attacks</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="post">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-5.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-3"
                        href="theme/webmag/category.html"
                        >Jquery</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Ask HN: Does Anybody Still Use JQuery?</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
              <div class="clearfix visible-md visible-lg"></div>
              <div class="col-md-6">
                <div class="post">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-3.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-1"
                        href="theme/webmag/category.html"
                        >Web Design</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Pagedraw UI Builder Turns Your Website Design Mockup
                        Into Code Automatically</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="post">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-4.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-2"
                        href="theme/webmag/category.html"
                        >JavaScript</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Chrome Extension Protects Against JavaScript-Based CPU
                        Side-Channel Attacks</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- <div class="col-md-4">
            <div class="aside-widget">
              <div class="section-title">
                <h2>Most Read</h2>
              </div>
              <div class="post post-widget">
                <a class="post-img" href="theme/webmag/blog-post.html"
                  ><img src="theme/webmag/img/widget-1.jpg" alt=""
                /></a>
                <div class="post-body">
                  <h3 class="post-title">
                    <a href="theme/webmag/blog-post.html"
                      >Tell-A-Tool: Guide To Web Design And Development Tools</a
                    >
                  </h3>
                </div>
              </div>
              <div class="post post-widget">
                <a class="post-img" href="theme/webmag/blog-post.html"
                  ><img src="theme/webmag/img/widget-2.jpg" alt=""
                /></a>
                <div class="post-body">
                  <h3 class="post-title">
                    <a href="theme/webmag/blog-post.html"
                      >Pagedraw UI Builder Turns Your Website Design Mockup Into
                      Code Automatically</a
                    >
                  </h3>
                </div>
              </div>
              <div class="post post-widget">
                <a class="post-img" href="theme/webmag/blog-post.html"
                  ><img src="theme/webmag/img/widget-3.jpg" alt=""
                /></a>
                <div class="post-body">
                  <h3 class="post-title">
                    <a href="theme/webmag/blog-post.html"
                      >Why Node.js Is The Coolest Kid On The Backend Development
                      Block!</a
                    >
                  </h3>
                </div>
              </div>
              <div class="post post-widget">
                <a class="post-img" href="theme/webmag/blog-post.html"
                  ><img src="theme/webmag/img/widget-4.jpg" alt=""
                /></a>
                <div class="post-body">
                  <h3 class="post-title">
                    <a href="theme/webmag/blog-post.html"
                      >Tell-A-Tool: Guide To Web Design And Development Tools</a
                    >
                  </h3>
                </div>
              </div>
            </div>
            <div class="aside-widget">
              <div class="section-title">
                <h2>Featured Posts</h2>
              </div>
              <div class="post post-thumb">
                <a class="post-img" href="theme/webmag/blog-post.html"
                  ><img src="theme/webmag/img/post-2.jpg" alt=""
                /></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a
                      class="post-category cat-3"
                      href="theme/webmag/category.html"
                      >Jquery</a
                    >
                    <span class="post-date">March 27, 2018</span>
                  </div>
                  <h3 class="post-title">
                    <a href="theme/webmag/blog-post.html"
                      >Ask HN: Does Anybody Still Use JQuery?</a
                    >
                  </h3>
                </div>
              </div>
              <div class="post post-thumb">
                <a class="post-img" href="theme/webmag/blog-post.html"
                  ><img src="theme/webmag/img/post-1.jpg" alt=""
                /></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a
                      class="post-category cat-2"
                      href="theme/webmag/category.html"
                      >JavaScript</a
                    >
                    <span class="post-date">March 27, 2018</span>
                  </div>
                  <h3 class="post-title">
                    <a href="theme/webmag/blog-post.html"
                      >Chrome Extension Protects Against JavaScript-Based CPU
                      Side-Channel Attacks</a
                    >
                  </h3>
                </div>
              </div>
            </div>
            <div class="aside-widget text-center">
              <a href="#" style="display: inline-block; margin: auto">
                <img
                  class="img-responsive"
                  src="theme/webmag/img/ad-1.jpg"
                  alt=""
                />
              </a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="section section-grey">
      <div class="container">
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="section-title text-center">
              <h2>Featured Posts</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post">
              <a class="post-img" href="theme/webmag/blog-post.html"
                ><img src="theme/webmag/img/post-4.jpg" alt=""
              /></a>
              <div class="post-body">
                <div class="post-meta">
                  <a
                    class="post-category cat-2"
                    href="theme/webmag/category.html"
                    >JavaScript</a
                  >
                  <span class="post-date">March 27, 2018</span>
                </div>
                <h3 class="post-title">
                  <a href="theme/webmag/blog-post.html"
                    >Chrome Extension Protects Against JavaScript-Based CPU
                    Side-Channel Attacks</a
                  >
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post">
              <a class="post-img" href="theme/webmag/blog-post.html"
                ><img src="theme/webmag/img/post-5.jpg" alt=""
              /></a>
              <div class="post-body">
                <div class="post-meta">
                  <a
                    class="post-category cat-3"
                    href="theme/webmag/category.html"
                    >Jquery</a
                  >
                  <span class="post-date">March 27, 2018</span>
                </div>
                <h3 class="post-title">
                  <a href="theme/webmag/blog-post.html"
                    >Ask HN: Does Anybody Still Use JQuery?</a
                  >
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post">
              <a class="post-img" href="theme/webmag/blog-post.html"
                ><img src="theme/webmag/img/post-3.jpg" alt=""
              /></a>
              <div class="post-body">
                <div class="post-meta">
                  <a
                    class="post-category cat-1"
                    href="theme/webmag/category.html"
                    >Web Design</a
                  >
                  <span class="post-date">March 27, 2018</span>
                </div>
                <h3 class="post-title">
                  <a href="theme/webmag/blog-post.html"
                    >Pagedraw UI Builder Turns Your Website Design Mockup Into
                    Code Automatically</a
                  >
                </h3>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>






    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <!-- <div class="row">
              <div class="col-md-12">
                <div class="section-title">
                  <h2>Most Read</h2>
                </div>
              </div>
              <div class="col-md-12">
                <div class="post post-row">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-4.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-2"
                        href="theme/webmag/category.html"
                        >JavaScript</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Chrome Extension Protects Against JavaScript-Based CPU
                        Side-Channel Attacks</a
                      >
                    </h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam...
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="post post-row">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-6.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-2"
                        href="theme/webmag/category.html"
                        >JavaScript</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Why Node.js Is The Coolest Kid On The Backend
                        Development Block!</a
                      >
                    </h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam...
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="post post-row">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-1.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-4"
                        href="theme/webmag/category.html"
                        >Css</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >CSS Float: A Tutorial</a
                      >
                    </h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam...
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="post post-row">
                  <a class="post-img" href="theme/webmag/blog-post.html"
                    ><img src="theme/webmag/img/post-2.jpg" alt=""
                  /></a>
                  <div class="post-body">
                    <div class="post-meta">
                      <a
                        class="post-category cat-3"
                        href="theme/webmag/category.html"
                        >Jquery</a
                      >
                      <span class="post-date">March 27, 2018</span>
                    </div>
                    <h3 class="post-title">
                      <a href="theme/webmag/blog-post.html"
                        >Ask HN: Does Anybody Still Use JQuery?</a
                      >
                    </h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam...
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="section-row">
                  <button class="primary-button center-block">Load More</button>
                </div>
              </div>
            </div> -->

          </div>
          <!-- <div class="col-md-4">
            <div class="aside-widget text-center">
              <a href="#" style="display: inline-block; margin: auto">
                <img
                  class="img-responsive"
                  src="theme/webmag/img/ad-1.jpg"
                  alt=""
                />
              </a>
            </div>
            <div class="aside-widget">
              <div class="section-title">
                <h2>Catagories</h2>
              </div>
              <div class="category-widget">
                <ul>
                  <li>
                    <a href="#" class="cat-1">Web Design<span>340</span></a>
                  </li>
                  <li>
                    <a href="#" class="cat-2">JavaScript<span>74</span></a>
                  </li>
                  <li>
                    <a href="#" class="cat-4">JQuery<span>41</span></a>
                  </li>
                  <li>
                    <a href="#" class="cat-3">CSS<span>35</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="aside-widget">

               <div class="tags-widget">
                <ul>
                  <li><a href="#">Chrome</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">Backend</a></li>
                  <li><a href="#">JQuery</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li><a href="#">Website</a></li>
                </ul>
              </div>

            </div>
          </div> -->


        </div>
      </div>
    </div>
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="index.html" class="logo"><img src="theme/webmag/img/logo.png" alt="" /></a>
              </div>
              <ul class="footer-nav">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Advertisement</a></li>
              </ul>
              <div class="footer-copyright">
                <span>&copy; Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | This template is made with
                  <i class="fa fa-heart-o" aria-hidden="true"></i> by
                  <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-6">
                <div class="footer-widget">
                  <h3 class="footer-title">About Us</h3>
                  <ul class="footer-links">
                    <li><a href="theme/webmag/about.html">About Us</a></li>
                    <li><a href="#">Join Us</a></li>
                    <li><a href="theme/webmag/contact.html">Contacts</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="footer-widget">
                  <h3 class="footer-title">Catagories</h3>
                  <ul class="footer-links">
                    <li><a href="theme/webmag/category.html">Web Design</a></li>
                    <li><a href="theme/webmag/category.html">JavaScript</a></li>
                    <li><a href="theme/webmag/category.html">Css</a></li>
                    <li><a href="theme/webmag/category.html">Jquery</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-widget">
              <h3 class="footer-title">Join our Newsletter</h3>
              <div class="footer-newsletter">
                <form>
                  <input class="input" type="email" name="newsletter" placeholder="Enter your email" />
                  <button class="newsletter-btn">
                    <i class="fa fa-paper-plane"></i>
                  </button>
                </form>
              </div>
              <ul class="footer-social">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="theme/webmag/js/jquery.min.js"></script>
    <script src="theme/webmag/js/bootstrap.min.js"></script>
    <script src="theme/webmag/js/main.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-23581568-13");
    </script>
    <script defer src="beacon.min.js" data-cf-beacon='{"rayId":"76af3ad3a8479e17","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'></script>
    <center>
      <font size="2">This is the free demo result. For a full version of this website,
        please go to
        <a href="https://www6.waybackmachinedownloader.com/website-downloader-online/scrape-all-files/">Website Downloader</a>
      </font>
    </center>
</body>

</html>