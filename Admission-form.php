<?php

require 'connection.php';
if(isset($_POST['insert']))
{

$name=$_POST['name'];
$fname=$_POST['fathername'];
$email=$_POST['email'];
$phonep=$_POST['whatapp'];
$education=$_POST['education'];
$course=$_POST['course'];
$address=$_POST['address'];
$city=$_POST['city'];
$imagepic=basename($_FILES['profile_image']['name']);



$sql="INSERT INTO `admissionform`(`id`, `name`, `father_name`, `email`, `phone_number`, `eductaion`, `course`, `address`, `city`, `profile_image`) values 
('','$name','$fname','$email','$phonep','$education','$course','$address','$city','$imagepic')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("آپ کا شکریہ ہمیں آپ کا فارم مل گیا ہے ہم آپ سے بہت جلد رابطہ کریں گے۔")</script>';
    // header("location: ");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form </title>
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
            <h1 class="main-heading mt-5 mb-5">داخلہ فارم</h1>

        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data"> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name *اپنا نام درج کریں</label>
                            <input type="text" required class="form-control" id="inputName" name="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputfathername">Father Name *آپ کے والد کا نام</label>
                            <input type="text" required class="form-control" id="inputfatherName" name="fathername" placeholder="Enter Your Father Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email *اپنا ای میل درج کریں</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputwhatapp">Phone Number * واٹس ایپ نمبر درج کریں</label>
                            <input type="text" class="form-control" id="inputName" name="whatapp" placeholder="+92 3003030300">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputeducation">Education * آخری سند</label>
                            <select class="form-control" name="education" id="inputeducation">
                                   <option selected>Choose ....</option>
                                    <option value="Matric">Matric</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Master">Master</option>
                                </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputcourse">Courses * کورس</label>
                            <select class="form-control" name="course" id="inputcourse">
                                   <option selected>Choose ....</option>
                                    <option value="Dars-e-Nazmi">Dars-e-Nazmi</option>
                                    <option value="Intermediate">Ramazan Course</option>
                                    <option value="Bachelor">Umrah Course</option>
                                    <option value="Master">Hajj Course</option>
                                </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Address *اپنا ایڈریس درج کریں۔</label>
                            <input type="text" class="form-control" name="address" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        
                            <div class="form-group col-md-6">
                                <label for="inputCity">City *شہر </label>
                                <input type="text" class="form-control" name="city" id="inputCity">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="image">Image *تصویر</label>
                                <input required type="file" name="profile_image"  required class="form-control"  />
                            </div>
                           
                        
                        </div>



                        <button type="submit" name="insert" value="Save" class="btn btn-success mt-5 mb-5">جمع کرائیں</button>
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