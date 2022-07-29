<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .carousel-inner .item img {
        margin: auto;
    }
    body{
    background-image: url(Img/loginbackgound.jpg);
    font-family: 'Roboto', sans-serif;
    }
    .carousel-inner .item img {
        margin: auto;
    }
    .wrapper{
        width:  auto;
        margin: auto;
        height: auto;
    }   
    .header{
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
    .from-search{
        float: right;
        margin-left: 20px;
        margin-right: 20px;
    }
    .login-box{
            margin-top: 90px;
            margin-bottom: 50px;
            height: auto;
            text-align: center;
            margin-left:300px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            background:rgba(30,30,32,.9);
    }
    .login-title{
            margin-top: 0px;
            text-align: center;
            font-size: 30px;
            font-family: Comic Sans Ms;
            letter-spacing: 2px;
            margin-top: 15px;
            margin-bottom:15px;
            font-weight: bold;
            color: #ECF0F5;
    }
    .login-form{
            margin-top: 25px;
            text-align: left;
    }
    input[type=text]{
            background: #202020;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            margin-bottom: 20px;
            padding-left: 0px;
    }
    input[type=password]{
            background-color: #202020;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            padding-left: 0px;
            margin-bottom: 20px;
            color: #ECF0F5;
    }
    .form-group{
            margin-bottom: 40px;
            outline: 0px;
    }
    .form-control:focus{
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 2px solid #0DB8DE;
            outline: 0;
            background-color: #202020;
            color: #ECF0F5;
    }
    input:focus{
            outline: none;
            box-shadow: 0 0 0;
    }
    label{
            margin-bottom:0px;
    }
    .form-control-label{
            font-size: 10px;
            color: #6C6C6C;
            font-weight: bold;
            letter-spacing: 1px;
    }
    input[ type=submit]{
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
    .login-btm{
            color: white;
            text-align: center;
    }
    .footer{
        color: white;
    }
    .footer img{
        float: right;
        margin-right: 20px;
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
        <div class="row">
            <div class="col-lg-6 col-md-8 login-box">
<div class="col-lg-12 login-form"> 
	<form method ="POST">
			<div class="col-lg-12 login-title">
                    SIGN UP
            </div>
            <br>
			<hr style=" width: 250px;">
			<div class="form-group">
            	<label class="form-control-label">USER_ID</label>
                <input type="text" name="user_id"class="form-control">
            </div>
			<div class="form-group">
            	<label class="form-control-label">USERNAME</label>
                <input type="text" name="username"class="form-control">
            </div>
            <div class="form-group">
				<label class="form-control-label">PASSWORD</label>
            	<input type="password" name="password" class="form-control">
            </div>
            <div class="col-lg-12 loginbttm">
                <div class="col-lg-12 login-btm">
                	<p>You have an account?<a href="login.php"> login here </a></p>
				</div>
            <div class="col-lg-12 login-btm ">
               <input type="submit" name="register" value="REGISTER">
            </div>
	</form> 
</div>
</div>
    	</div>
	</div>
</div>
<?php 
	$connect =mysqli_connect('3.132.234.157','hungnp','123@123a','cp_phihung');
    // $connect = mysqli_connect('localhost','root','','cp_phihung');
if(!$connect){
	echo "kết nối that bai";
}

   ////nêus click vào register thì mwois thực hiện
   if(isset($_POST['register'])){
   	$user_id = $_POST['user_id'];
   	$username= $_POST['username'];
   	$password= $_POST['password'];
   	$sql ="INSERT INTO user VALUES('$user_id','$username','$password')";
   	$result= mysqli_Query($connect,$sql);
   	if($result){
   		echo "<br>";
   		echo "<script> alert('thêm mới thành công')</script>";
        echo"<script> window.open('login.php','_self') </script>";
   	}
   	else{
   		echo "<script> alert('thêm mới thất bại')</script>";
   	}
   }
	?>
<div class="footer" style="background:#1C3334;">
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
</div> >
</body>
</html>