<?php

session_start();
require 'connection.php';
if(isset($_POST['insert']))
{

$useremail=$_POST['email'];
$password=$_POST['password'];
$checking_email="select * from login where email='$useremail'";
$qry=mysqli_query($conn,$checking_email);
$email_count=mysqli_num_rows($qry);
if($email_count)
{
    $email_pass=mysqli_fetch_assoc($qry);
    $db_pass=$email_pass['pass'];
    $_SESSION['username']=$email_pass['username'];
    if($db_pass==$password){
        
        header("Location: Home.php"); 
        exit();
     
    }
    else{
        echo "<script>alert('Incorrect Email & Password ')</script>";
       
    }
}
    else{
        echo "<script>alert('Invalid Email & Password ')</script>";
}
// $sql="SELECT * FROM `login` WHERE username='$username' and pass='$password' ";

// if ($conn->query($sql) === TRUE) {
//     echo '<script>alert("Login Succesfully")</script>';
//     header("location: Movie-Insert.php");
    
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
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

<body style="font-family: Urdu Nastaliq Unicode">
    <div class="container">
        <div class="row">
            <h1 class="main-heading mt-5 mb-5">Login Panel</h1>

        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name* &nbsp;اپنا نام درج کریں</label>
                            <input type="email" required class="form-control" id="inputName" name="email" placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputpass">Password* &nbsp;پاس ورڈ</label>
                            <input type="password" required class="form-control" id="inputpass" name="password" placeholder="Enter Your Name">
                        </div>
                    </div>
                       
                        <button type="submit" name="insert" value="Save" class="btn btn-success mt-5 mb-5">Login</button>
                </form>
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
<!-- <script>
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
</script> -->

</html>