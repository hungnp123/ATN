<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style >
    .carousel-inner  .item img {
      margin: auto;     
    }
    body{
        background-color: #1C3334;
    }
    .wrapper{
        width:  auto;
        margin: auto;
        height: auto;
    }   
    .header ul li{
      list-style: none;
    }
    .header img{
      float:left;
    }
  .header a{
    margin-top: 15px;
    margin-right: 10px;
    margin-left: 10px;
    margin-bottom: 15px;
  } 
    .product-group {
      background-color: royalblue;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a href="index.php"><img style="margin: 10px;" src="Img/logotoy.jpg" width="180px" height="65px"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="index.php"><span class=" glyphicon glyphicon-home"> Home</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Account<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                  </ul>
                </li>
                <li><a href="manageproduct.php"><span class=" glyphicon glyphicon-gift"> Toys</a></li>
                <li><a href="introduction.php"><span class=" glyphicon glyphicon-bookmark"> About us</a></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                <div style="margin-top: 26px;" id="form_search">
                  <form method="get" action="search.php">
                    <input type="text" name="user_query" placeholder="Search a toy" />
                    <input type="submit" name="search" value="Search" />
                  </form>
                </div>  
              </ul>
          </div>
        </div>
      </nav>  
    </div>
    <div class="container">
  <?php
              $connect=mysqli_connect('3.132.234.157','phihung','123@123a','cp_phihung');
              // $connect = mysqli_connect('localhost','root','','cp_phihung');
              if (!$connect)
              {
                echo (" Not connect");
              }
              $Search = "";
              if( !empty($_GET['search']))
              {
                $Search = $_GET['user_query'];
              }
              ?>
              <h3 style="color: white;" class="title"> Search Result for: <?= $Search ?></h3>
              <div class="container">
                <div class="row">
                  <?php
                  if( !empty($Search))
                  {
                    $sql="SELECT * FROM toy WHERE toy.toy_name LIKE'%{$Search}%'";
                    $rs=mysqli_query($connect,$sql);
                    while($row = mysqli_fetch_assoc($rs))
                    {
                    $toy_id = $row['toy_id'];
                    $toy_name =$row['toy_name'];
                    $toy_img =$row['toy_img'];
                    $toy_price = $row['toy_price'];
                    $toy_origin =$row['toy_origin'];                
                      ?>
                      <div class="card" style="background-color: white;margin-top:20px; margin-bottom: 30px;margin-left: 350px;overflow: auto; width: 500px; border: 2px solid #F8ABAB; border-radius: 1px;border-bottom: 6px solid #FCA5A5;text-align: center;">
                        <a href="detail.php?id=<?php echo $toy_id; ?>" style="text-decoration: none;text-align: center;"> 
                          <div style="height: 80px;">
                            <h2><?php echo $toy_name ?> </h2>
                          </div>

                          <div><img src="img/<?php echo $toy_img; ?>" style="width: 500px;height: 500px;padding: 7px;">
                            <p style="color: red"><?php echo $toy_price; ?></p>
                            <h4 style="color: #3BA33D"><?php echo $toy_origin; ?> </h4>
                          </a>
                        </div>
                        <?php
                      }
                    }
                    ?>
    </div>
  </div>                 
<div class="footer">
        <br>  
        <hr style="color: white;">
        <img src="Img/logotoy.jpg" width="180px" height="60px">
        <p style="color: white;"> Information: </p>
        <ul>
            <li><p style="color: white;">Address: Hanoi, Vietnam</p></li>
            <li><p style="color: white;">Phone: 01234</p></li>
            <li><p style="color: white;">Email: Tunesorce@gmail.com</p></li>
        </ul>

        <hr>
            <br>
            <p style="text-align: center; color: white;">© COPYRIGHT 2022 TUNE SORCE. ALL RIGHTS RESERVED.</p>
            <br>
    </div> 
</body>
</html>