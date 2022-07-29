<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:Login.php');
}

?>'
<?php

require 'connection.php';
if(isset($_POST['insert']))
{

$post_name=$_POST['post_name'];
$post_category=$_POST['post_category'];
$post_poster=basename($_FILES['post_image']['name']);


$sql="Insert into posts (id, post_name, post_category, post_image) values ('','$post_name','$post_category','$post_poster')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Data Has been Added Succesfully")</script>';
    // header("location: Movie-Insert.php");
    
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container align:center">
        <div class="row">
        <form class="support form-container " action="" method="POST" enctype="multipart/form-data">
                    
                    <h1 class="heading"> Insert here </h1>

                              
                              <div class="form-group">
                              <label for="exampleInputName"> Post Name</label>
                              <input required  type="text" class="form-control" name="post_name" placeholder="Enter Post Title "/>
                              <span class="text-danger"></span>
                              </div>
                   
                            <div class="form-group">
                                  <label for="exampleInputGenre">Post Category</label>
                              <input required  type="text" class="form-control" name="post_category" placeholder="Enter category"/>
                               <span class="text-danger"></span>
                            </div>
                           
                      <div class="form-group">
                          <label for="movie_poster">Post Poster</label>
                          <input required type="file" name="post_image" id="moccupation" required class="form-control" placeholder="Enter Image" />
                      </div>
                  </div>
                  <div class="form-group btn-save">
            <input required   type="submit" name="insert" value="Save" class="btn btn-success btn-block">
            </div>    
                  </form>
</div>
</div>
</body>
</html>