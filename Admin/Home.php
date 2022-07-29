<?php
include "connection.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location:Login.php');
}
$sql="SELECT COUNT(Questions) as number from questions";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$notif=$row['number'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic"
        rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-10">
            <img src="img/logo.jpeg" class="logo" alt="logo">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary "><a href="Logout.php">Logout</button>
            </div>
            
        </div>
    </div>
    
    <div class="breadcrumb-text">
					<div class="container">
					<div class="breadcrumb-menu">
						<ul>
							<li><a href="index.html">Welcome to Admin Panel Mr :&nbsp;&nbsp;<?php echo  $_SESSION['username'];?></a></li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
	
    <div class="container">
        <div class="row">
            <h1 class="media-heading mt-5 mb-5">Admin Panel</h1>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Jawab </h5>
                    <p class="card-text">.</p>
                    <a href="Jawab.php" class="btn btn-primary btn">Open</a>
                </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Post Insert</h5>
                    <p class="card-text"></p>
                    <a href="Post-Insert.php" class="btn btn-primary btn">Open</a>
                </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Questions (<?php
                    echo $notif;
                    ?>)</h5>
                    <p class="card-text"></p>
                    <a href="Questions.php" class="btn btn-primary">Open</a>
                   
                </div>
                </div>
                </div>
             
        </div>
    
            <div class="row mt-5">
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Book Insert </h5>
                    <p class="card-text"></p>
                    <a href="Book-Insert.php" class="btn btn-primary">Open</a>
                </div>
                </div>
                </div>
             
        </div>
     
    </div>
   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $(".readmore").click(function () {
            $(".more-info").toggle("slow");
        });
        $(".readmore1").click(function () {
            $(".more-info1").toggle("slow");
        });
        $(".readmore2").click(function () {
            $(".more-info2").toggle("slow");
        });
    });
</script>

</html>