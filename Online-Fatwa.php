<?php

require 'connection.php';
if(isset($_POST['insert']))
{

$quest_name=$_POST['name'];
$quest_email=$_POST['email'];
$quest_whatapp=$_POST['whatapp'];
$quest_address=$_POST['address'];
$quest_city=$_POST['city'];
$quest_country=$_POST['country'];
$questions=$_POST['question'];
$category=$_POST['category'];



$sql="Insert into questions (id, Questioner_name, Questioner_email, Questioner_whatappno, Questioner_address, Questioner_city, Questioner_country, Questions, categories) values 
('','$quest_name','$quest_email','$quest_whatapp','$quest_address','$quest_city','$quest_country','$questions','$category')";

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
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h1 class="main-heading mt-5 mb-5">رہنمائے صارف</h1>

        </div>
        <div class="row">
            <div class="col-md-4">
                <i class="far fa-envelope mb-3 center"></i>
                <h3 class="heading">تحریری فتویٰ کا حصول </h3>
                <p class="paragraph">
                    .دارالافتاء کے سرنامہ (لیٹر ہیڈ) پر فتویٰ کی مصدقہ کاپی کے حصول کے لیے اپنا خط و کتابت کا پتہ ارسال
                    کریں یا خود دارالافتاء میں تشریف لائیں۔

                </p>
                <div class="more-info2">
                    <p class="paragraph">
                        اگر آپ ایک دفعہ سوال بھیج چکے/چکی ہیں اور آپ کو اب تک جواب موصول نہیں ہوا تو فکر مند نہ ہوں،
                        دوبارہ سوال بھیجنے کی ضرورت نہیں ہے۔<br><br>
                        جواب‘ سائل کو بذریعہ برقی پتہ ای میل بھیجا جاتا ہے جبکہ عمومی نوعیت کے سوالات عامۃ الناس کے
                        استفادہ کے لیے آن لائن بھی شائع کیئے جاتے ہیں۔<br><br>
                        ذاتی نوعیت کے سوالات کے جوابات صرف سائلین کو ارسال کیے جاتے ہیں، شائع نہیں کیے جاتے۔<br>

                    </p>

                </div>
                <button class="btn btn-success readmore2 ">مزید</button>
            </div>
            <div class="col-md-4">
                <i class="far fa-copy mb-3 center"></i>
                <h3 class="heading">جواب کیسے ملے گا؟</h3>
                <p class="paragraph">
                    . ہر سوال کا جواب بالعموم پانچ دنوں میں شائع کر دیا جاتا ہے، تاہم بہت زیادہ سوالات اکٹھے ہونے کی
                    صورت میں یا تحقیقی نوعیت کے فتویٰ کی صورت میں تاخیر ہوسکتی ہے
                </p>
                <div class="more-info1">
                    <p class="paragraph">
                        ویب سائٹ پر ہر سوال کے نیچے اسے پرنٹ کرنے کی سہولت مہیا کر دی گئی ہے، جہاں سے آپ کسی بھی سوال کا
                        مطبوعہ نسخہ حاصل کر سکتے ہیں<br><br>


                    </p>

                </div>
                <button class="btn btn-success readmore1 ">مزید</button>
            </div>

            <div class="col-md-4">
                <i class="fas fa-edit mb-3 center"></i>
                <h3 class="heading">سوال کیسے بھیجیں؟</h3>
                <p class="paragraph">
                    . سوال بھیجنے سے پہلے تلاش کے ذریعے اس بات کا
                    اطمینان کرلیں کہ جو سوال آپ پوچھنا چاہ رہے/رہی ہیں اس کا جواب پہلے دیا جا چکا ہے یا نہیں۔
                </p>
                <div class="more-info">
                    <p class="paragraph">
                        فی الحال جوابات صرف اردو میں دیے جاتے ہیں، اس لیے سوال اردو میں ہی بھیجیں۔<br>
                        ایک وقت میں صرف ایک سوال بھیجیں۔ بیک وقت زیادہ سوالات بھیجنے کی صورت میں آپ کے سوالات نظر انداز
                        کیے جاسکتے ہیں۔<br><br>
                        اس بات کو یقینی بنائیں کہ آپ نے سوال کے جملہ پہلوؤں کا احاطہ کر لیا ہے، ادھوری معلومات کے نتیجے
                        میں درست فتویٰ کا حصول ممکن نہیں۔<br><br>
                        سوال بھیجتے ہوئے اپنے نام، شہر اور برقی پتہ کا درست اندراج کریں تاکہ جواب آپ کو موصول ہو سکے۔
                    </p>

                </div>
                <button class="btn btn-success readmore ">مزید</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h1 class="main-heading mt-5 mb-5">سوالات پوچھیے</h1>

        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="" method="post"> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name *اپنا نام درج کریں</label>
                            <input type="text" required class="form-control" id="inputName" name="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email *اپنا ای میل درج کریں</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputwhatapp">WhatsApp Number * واٹس ایپ نمبر درج کریں</label>
                            <input type="text" class="form-control" id="inputName" name="whatapp" placeholder="+92 3003030300">
                        </div>


                        <div class="form-group col-md-12">
                            <label for="inputAddress2">Address *اپنا ایڈریس درج کریں۔</label>
                            <input type="text" class="form-control" name="address" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City *شہر </label>
                                <input type="text" class="form-control" name="city" id="inputCity">
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCategory">Categories *اقسام </label>
                                <select class="form-control" name="category" id="inputCategory">
                                   <option selected>Choose ....</option>
                                    <option value="ایمانیات">ایمانیات</option>
                                    <option value="عقائد">عقائد</option>
                                    <option value="عبادات">عبادات</option>
                                    <option value="معاملات">معاملات</option>
                                    <option value="معاشرت">معاشرت</option>
                                    <option value="مالیات">مالیات</option>
                                    <option value="تصوف">تصوف</option>
                                    <option value="سیرت">سیرت</option>
                                    <option value="متفرق مسائل">متفرق مسائل</option>
                                    <option value="اسلامی تاریخ">اسلامی تاریخ</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Country * ملک</label>
                                <select id="inputState" name="country" class="form-control">
                                    <option selected>Choose ....</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
                                        of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                   
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputqesution">Ask Question*سوال پوچھنے کا سیکشن</label>
                                <textarea type="text" class="form-control align" name="question"
                                    placeholder="Type your Question here"></textarea>
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