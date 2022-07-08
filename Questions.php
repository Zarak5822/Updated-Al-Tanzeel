<?php
require 'connection.php';

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">نام</th>
                            <th scope="col">ای میل</th>
                            <th scope="col">واٹس ایپ نمبر</th>
                            <th scope="col">ایڈریس</th>
                            <th scope="col">شہر</th>
                            <th scope="col">ملک</th>
                            <th scope="col">سوال</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {

                        ?>

                            <tr>
                                <th scope="row"><?php echo $row["id"]?></th>
                                <td><?php echo $row["Questioner_name"]?></td>
                                <td><?php echo $row["Questioner_email"]?></td>
                                <td><?php echo $row["Questioner_whatappno"]?></td>
                                <td><?php echo $row["Questioner_address"]?></td>
                                <td><?php echo $row["Questioner_city"]?></td>
                                <td><?php echo $row["Questioner_country"]?></td>
                                <td><?php echo $row["Questions"]?></td>
                               



                            </tr>


                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>