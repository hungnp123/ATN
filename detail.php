<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Detail</title>
</head>
<style type="text/css">
	.carousel-inner .item img {
        	margin: auto;
    	}
    body{
    	background-color: #1C3334;
    }
	.container{
		width: auto;
		height: auto;
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
	.infor{
		background:rgba(255,255,255,.9);
		margin-bottom: 20px;
    		height: auto;
    		width: auto;
    		text-align: center;
    		padding-right: 50px;
   		border-radius: 4%;
   		margin-top: 30px;
   		margin-left:482px;
   		margin-right:15px;
    		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    		padding-bottom: 40px;
	}
	.infor ul li{
		list-style: none;
	}

</style>
<body>
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
	<div class="row">
		<?php
		session_start();
		$connect = mysqli_connect('3.132.234.157','hungnp','123@123a','cp_phihung');
		// $connect = mysqli_connect('localhost','root','','cp_phihung');
		$id = $_GET["id"];
		$sql = "SELECT * FROM toy WHERE toy.toy_id ={$id}";		
		$result = mysqli_query($connect,$sql);
		while($row= mysqli_fetch_array($result)){
			$id = $row['toy_id'];
			?>
			<div class="col-md-6 col-lg-6 infor">
				<ul>	
				<li><h2> Name: <?php echo $row['toy_name'];?> </h2></li>
				<li><h4> Singer: <?php echo $row["toy_origin"] ;?></h4></li>
				<li><p> Price: <?php echo $row['toy_price'];?> </p></li>
				<div class="images-detail">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
    				<ol class="carousel-indicators">
      					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      					<li data-target="#myCarousel" data-slide-to="1"></li>
      					<li data-target="#myCarousel" data-slide-to="2"></li>
   					 </ol>
                    <div class="carousel-inner">
                    	<div class="item active">
							<img src="IMG/<?php echo $row['toy_img'] ?>" style = "width: 500px;height: 500px;" alt="banner1">
						</div>
						<div class="item">	
							<img src="IMG/<?php echo $row['toy_pic1'] ?>" style = "width: 500px;height: 500px;" alt="banner2">
						</div>
						<div class="item">	
							<img src="IMG/<?php echo $row['toy_pic2'] ?>" style = "width: 500px;height: 500px;" alt="banner3">
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
				</ul>	  
			<?php
		}

	?>
	</div>
</div>
	<a style="width: 100px; height: 40px; text-align: center; margin-left:722px; margin-bottom: 20px;" href='index.php' class='btn btn-primary'>Back</a>
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
</html

