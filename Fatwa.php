<?php
require 'connection.php';

$sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
</head>

<body style="font-family: Urdu Nastaliq Unicode">
<div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item style">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">  تمام زمرہ جات </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">ایمانیات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">عقائد</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">عبادات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">معاملات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">معاشرت</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">مالیات </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">تصوف </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-9" role="tab">سیرت </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-10" role="tab">متفرق مسائل </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-11" role="tab">اسلامی تاریخ </a>
                    </li>
                    

                </ul><!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="container">
  
            <p class="media-heading mt-5 mb-5">تمام زمرہ جات</p>
        
        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM questions";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><a style="text-decoration: none;" href="FatwaDetail.php?question_id=<?php echo $row["id"] ?>"><?php echo $row["Questions"] ?></a></p>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
                    </div>


                    <!-- Yaha se ایمانیات Start ho rha hn -->

                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">ایمانیات</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories` = 'ایمانیات' ";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

            <p class=" fatwas pr-4"><a style="text-decoration: none;" href="FatwaDetail.php?question_id=<?php echo $row["id"] ?>"><?php echo $row["Questions"] ?></a></p>

                <?php
                }
                ?>
            </div>

        </div>
                        

                    </div>

                    <!-- Yaha se عقائد Start ho rha hn -->

                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">عقائد</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='عقائد'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>
                    <!-- Yaha se عبادات Start ho rha hn -->

                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                        <p class="media-heading mt-5 mb-5"> عبادات</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='عبادات'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>
                    <!-- Yaha se معاملات Start ho rha hn -->

                    <div class="tab-pane" id="tabs-5" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">معاملات</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='معاملات'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>

                    <!-- Yaha se معاشرت Start ho rha hn -->

                    <div class="tab-pane" id="tabs-6" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">معاشرت</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='معاشرت'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>
                    <!-- Yaha se مالیات Start ho rha hn -->

                    <div class="tab-pane" id="tabs-7" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">مالیات</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='مالیات'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>
                    <!-- Yaha se تصوف Start ho rha hn -->

                    <div class="tab-pane" id="tabs-8" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">تصوف</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='تصوف'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>
                    <!-- Yaha se سیرت Start ho rha hn -->

                    <div class="tab-pane" id="tabs-9" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">سیرت</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='سیرت'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>
                    <!-- Yaha se متفرق مسائل Start ho rha hn -->

                    <div class="tab-pane" id="tabs-10" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">متفرق مسائل</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='متفرق مسائل'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>
                    <!-- Yaha se اسلامی تاریخ Start ho rha hn -->

                    <div class="tab-pane" id="tabs-11" role="tabpanel">
                        <p class="media-heading mt-5 mb-5">اسلامی تاریخ</p>
                        <div class="row">
            <div class="col-md-3  sidebar">
                <h3>متعلقہ سوالات</h3>
                <?php
                $sql = "SELECT * FROM questions ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {

                ?>
                    <p class="sidebarquestions"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 rightbox">
                <?php
                $sql = "SELECT * FROM `questions` WHERE `categories`='اسلامی تاریخ'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>

                    <p class=" fatwas pr-4"><?php echo $row["Questions"] ?></p>
                <?php
                }
                ?>
            </div>

        </div>
                    </div>
                  

                </div>
            </div>
        </div>
    </div>
    
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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