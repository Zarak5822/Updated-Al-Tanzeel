<?php
require 'connection.php';

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta name="description"
		content="Find Islamic Academy in Karachi? Now Al Tanzeel Network  is Education center for Islamic Studies.">
	<meta name="author" content="Al-Tanzeel Network">
	<meta name="google-site-verification" content="" />
	<meta name="keywords"
		content="Al Tanzeel Network, Courses for all age students in karachi or all ove the world, Al-Tanzeel, Mufti Shahbaz,  Mufti Akaml Madani, , Well trained Stuff">
	<title>Al Tanzeel Network </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
    <script type="text/javascript">
            function add_number() {
                var first_number= parseInt( document.getElementById("Text1").value);
                var second_number= parseInt( document.getElementById("Text2").value);
                var third_number= parseInt( document.getElementById("Text3").value);
                var fourth_number= parseInt( document.getElementById("Text4").value);
                var fifth_number= parseInt( document.getElementById("Text5").value);
               var percent= parseInt( document.getElementById("Text6").value);

                var Add=(first_number + second_number + third_number + fourth_number) ;
                var Sub=Add-fifth_number;
                var collection=Sub;
                document.getElementById("Text6").value=collection;
                var percent=Sub * (.025);
                var result= percent;
                if(collection >='80000'){
                 document.getElementById("txtresult").value=result;
                // console.log('Aswer',result);
                // console.log('Aswer',collection);

                }
                else{
                    alert("آپ کے ذمے زکوۃ واجب نھیں ھے");
                }
            }
        </script>
</head>

<body style=" font-family:Urdu Nastaliq Unicode">
<section class="section slider-area mb-5">
		<div class="slider-active owl-carousel">
			<div class="single-slider" style="background-image: url('img/slider/slider-bg.jpg');">
				<div class="slider-text">
					<div class="container">
						<h2>زکوٰۃ کیلکولیٹر</h2>
						<br>

					</div>
				</div>
			</div>

		</div>
	</section>

	<div class="breadcrumb-text mb-5">
		<div class="container">
			<div class="breadcrumb-menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><span>Zakat Calculator</span></li>
				</ul>
			</div>
		</div>
	</div>
    <div class="container">
        <div class="row ">
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
            <div class="col-md-8 main">
                <p class="question mt-3 pr-4">ھدایت نامہ : اپنے ذمہ واجب الادا زکوۃ کی رقم جاننے کیلئے نیچے دیئے گئے جدول کو پر کریں۔
                    یاد رکھیں کہ ہر خانہ میں وہی (کم سے کم) رقم لکھیں جو 09 دسمبر 2020ء کے بعد آپ کے پاس موجود رہی ہو۔ یہ کیلکولیٹر ان تمام رقموں کو جمع کرتے ہوئے اس میں سے واجب الادا قرض کو منہا کرکے آپ کے ذمہ واجب الاداء زکوۃ کا تعین کرے گا</p>
                <form>
                   
                    <div class="form-group row">
                        <label for="inputaccount" class="col-sm-6 col-form-label">Bank Account * بینک اکاؤنٹ/بچت</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" id="Text1" name="TextBox1" placeholder="0"> -->
                            <input type="text" class="form-control" placeholder="0" id="Text1" name="TextBox1" required>
                            <p class="zakatlabels">حاجاتِ اصلیہ سے زائد ایک سال تک پس انداز کی گئی رقوم لکھیں</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputgoldsilver" class="col-sm-6 col-form-label">Gold & Silver * سونا، چاندی &nbsp;&nbsp; (+)</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" id="Text2" name="TextBox2" placeholder="0"> -->
                            <input type="text" id="Text2" class="form-control" placeholder="0" name="TextBox2" required>
                            <p class="zakatlabels">مالیاتی قیمت لکھیں</p>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputreciavble" class="col-sm-6 col-form-label">Receivables * واجب الوصول رقوم &nbsp;&nbsp; (+)</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" id="Text3" name="TextBox3" placeholder="0"> -->
                            <input type="text" id="Text3" name="TextBox3" class="form-control" placeholder="0" required>
                            <p class="zakatlabels">امانتیں اور قرض جو آپ نے دیے ہیں</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputprize" class="col-sm-6 col-form-label">Prize Bond & Shares * بانڈز، شیئرز &nbsp;&nbsp; (+)</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" id="Text4" name="TextBox4" placeholder="0"> -->
                             <input type="text" id="Text4" name="TextBox4" class="form-control" placeholder="0" required>
                            <p class="zakatlabels">شیئرز اور بانڈز کی بازاری قیمت</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputdebts" class="col-sm-6 col-form-label">Debts owed * واجب الادا قرض &nbsp;&nbsp; (-)</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control"id="Text5" name="TextBox5" placeholder="0"> -->
                        <input type="text" id="Text5" name="TextBox5" class="form-control" placeholder="0" required>
                            <p class="zakatlabels">قرض جو آپ پر واجب الاداء ہے</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputcollection" class="col-sm-4 col-form-label">Collection * مجموعہ</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" id="txtresult" name="TextBox6" placeholder="0"> -->
                        <input type="text" id="Text6" name="TextBox6" class="form-control" placeholder="0" >
                        <p class="zakatlabels">کل ملکیت</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputpercent" class="col-sm-5 col-form-label"> Zakat is due * واجب الادا زکوۃ</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" id="inputpercent" placeholder="2.5%"> -->
                            <input type="text" id="txtresult" name="TextBox7" class="form-control" placeholder="0" >
                            <p class="zakatlabels">% 2.5 کے حساب سے واجب الادا زکوٰۃ</p>
                        </div>
                    </div>
                    <div class="form-group row">
                    <input type="button" name="clickbtn" class="btn btn-success ml-4" value="تخمین" onclick="add_number()"> 
                    </div>
                </form>
                
            </div>

        </div>
    </div>
<br><br>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</html>