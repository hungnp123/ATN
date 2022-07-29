<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Manager toy</title>
</head>
<style type="text/css">
    .carousel-inner .item img {
        margin: auto;
    }
    body{
        background-color: #1C3334;
    }
    table{
        margin-top: auto;
        margin-left:160px;
        width: 1200px;
        background-color: #F5F5F5;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }
    .logo{
        text-align: center;
    }
</style>
<body>
<div class="content"> 
<div class="logo">
    <a href="index.php"><img style="margin: 15px;" src="Img/logotoy.jpg" width="180px" height="65px"></a> 
    <hr style="color: white;">
</div>         
<table border="1 solid black">
    <tr> 
        <th>Product Id: </th>
        <th>Product Name: </th>
        <th>Price: </th>
        <th>Images: </th>
        <th>Country: </th>
        <th>Orther Images: </th>

        <th>Action: </th>
     </tr> 
        <?php 
        $connect = mysqli_connect('3.132.234.157','phihung','123@123a','cp_phihung');
        // $connect = mysqli_connect('localhost','root','','cp_phihung');
        $sql = "SELECT * FROM toy";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
            $toy_id = $row['toy_id'];
            $toy_name = $row['toy_name'];
            $toy_price = $row['toy_price'];
            $toy_img = $row['toy_img'];
            $toy_origin = $row['toy_origin'];
            $toy_pic1 = $row['toy_pic1']
            ?>
        <tr>
            <td> <?php echo $toy_id ?></td>
            <td> <?php echo $toy_name ?></td>
            <td> <?php echo $toy_price ?></td>
            <td> <img src="Img/<?php echo $toy_img ?>" style ="width: 160px; height: 160px;"></td>
            <td> <?php echo $toy_origin ?></td>
            <td> <img src="Img/<?php echo $toy_pic1 ?>" style ="width: 160px; height: 160px;"></td>
            <td> <a href='detail.php ?id=<?php echo $toy_id; ?>' class='btn btn-primary'>Details</a></td>
        </tr>
            <?php
            }
            ?>      
</table>
    <a style="width: 100px; height: 40px; text-align: center; margin-left:720px; margin-top:20px; margin-bottom: 20px;" href='index.php' class='btn btn-primary'>Back</a>
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