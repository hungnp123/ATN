<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .carousel-inner .item img {
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
	}
	.right1 {
		float: right;
		width: 82%;
		height: auto;
	}
	.left1 {
		background-color: #DA7B93 ;
		float: left;
		width: 18%;
		height: 1450px;
	}
	.left1 ul li{
		list-style: none;
	}
	.single-toy{
		float:left;
		text-align: center;
		width: auto;
		height: auto;
		margin: auto;
	}
	.single-toy h4 {
		padding-top: 20px;
    	margin-top: 20px;
    	color: white;
    	text-align: center;
    }
    .toy-box{
        margin-bottom: 30px;
    	height: 420px;
    	width: 280px;
    	border-radius: 4%;
    	margin-left: 15px;
    	margin-right: 15px;
    	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
 		background: #376E6F;
    }
    input[type=submit]{
        border-color: #0080FF;
        color: white;
        border-radius: 0px;
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        background-color: #0080FF;
        right: 0px;
        margin-bottom: 25px;
    }
    .card-img-top {
    	margin-top: 15px;
    	border: 10px solid transparent;
    }
    .card-img-top:hover {
    	border-color: #DA7B93;
    }
    .card-img-top{
    	border-radius: 10%;
/*    	margin-bottom: 10px;*/
    }
    #form-search input[type=text]{
        width: 200px; height: 30px;
    }
    #form-search input[type=submit]{
        height: 30px;
    }
</style>
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
			<div class="banner">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
    				<ol class="carousel-indicators">
      					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      					<li data-target="#myCarousel" data-slide-to="1"></li>
      					<li data-target="#myCarousel" data-slide-to="2"></li>
   					 </ol>
                    <div class="carousel-inner" role="listbox">
      					<div class="item active">
        					<img  src="Img/tbanner7.jpg" width="1200" height="600" alt="banner 1">    
      					</div>
     					<div class="item">
                            <img src="Img/tbanner6.jpg" width="1200Px" height="600Px" alt="banner 2">
      					</div>
      					<div class="item">
        					<img src="Img/tbanner2.jpg" width="1200Px" height="600Px" alt="banner 3">
      					</div>
    				</div>
    				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
    				</a>
    				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
    				</a>
                </div>
            </div>
        <div class="content">
        	<div class="left1">
        		<hr>
        		<h3 style="text-align: center; color: white; font-family:Comic Sans Ms;"> Menu </h3>
        		<hr>
        		<ul>
        			<li><a style="font-size: 18px; color: white;" href="login.php"> Sign In </a></li>
					<li><a style="font-size: 18px; color: white;" href="signup.php"> Sign Up </a></li>
        		</ul>
        		<hr style="width:200px">
        		<ul>
        			<li><a style="font-size: 18px; color: white;" href=""> Add Product </a></li>
					<li><a style="font-size: 18px; color: white;" href="manageproduct.php"> Manager toys </a></li>
        		</ul>
        	</div> 
        	<div class="right1">
        			<br>
            		<h3 style="text-align: center; color: white; font-family:Comic Sans Ms;">--------------- New Toys ----------------</h3>
            		<br>
            		<br>
            		<div class="newtoys">
            			<?php 
            			$connect = mysqli_connect('3.132.234.157','hungnp','123@123a','cp-phihung');
            			// $connect = mysqli_connect('localhost','root','','cp_phihung');
            			if(!$connect){
            				echo "Kết nối thất bại";
            			}
            			$sql="SELECT * FROM toy";

            			$result = mysqli_query($connect,$sql);
            			while($row= mysqli_fetch_array($result)){
            				$toy_id = $row['toy_id'];
            				$toy_name =$row['toy_name'];
            				$toy_img =$row['toy_img'];
            				$toy_origin =$row['toy_origin'];
            				?>
            				<div class="single-toy">
            					<div class="toy-box">                         
            						<img class="card-img-top" src="Img/<?php echo $row['toy_img'] ?>" width="250px" height="250px">
            						<h5 style="color: white; font-family:Comic Sans Ms; font-size:20px;"> <?php echo $row['toy_name'] ?></h5>
            						<hr style="width: 120px;">
            						<h5 style="color: white;"><?php echo $row['toy_price'] ?></h5>	
            						<a href='detail.php?id=<?php echo $toy_id; ?>' class='btn btn-primary'>Details</a>		
            					</div>
            				</div>  
            				<?php
            				}
            				?>
            		</div>
            </div>	
        </div>
        <br>
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