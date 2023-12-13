<?php

require_once("./connection.php");
$query = " select * from college ";
$result = mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <td class="fw-bold"> Име и презиме </td>
                            <td class="fw-bold"> Име на компанија </td>
                            <td class="fw-bold"> Контакт имејл </td>
                            <td class="fw-bold"> Контакт телефон </td>
                            <td class="fw-bold">Тип на студенти</td>

                        </tr>





                        <?php


                        $conn = mysqli_connect("localhost", "root", "", "example_store");

                        if ($conn === false) {
                            die("ERROR: Could not connect. "
                                . mysqli_connect_error());
                        }


                        $first_name =  $_REQUEST['first_name'];
                        $last_name = $_REQUEST['last_name'];
                        $category =  $_REQUEST['category'];
                        $address = $_REQUEST['address'];
                        $email = $_REQUEST['email'];



                        $sql = "INSERT INTO college  VALUES ('$first_name', 
            '$last_name','$address','$email','$category')";

                        if (mysqli_query($conn, $sql))
                            echo "";













                        ?>

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            $first_name = $row['first_name'];
                            $last_name = $row['last_name'];
                            $adress = $row['adress'];
                            $email = $row['email'];
                            $category_id = $row['category_id'];
                        ?>
                            <tr>
                                <td><?php echo $first_name ?></td>
                                <td><?php echo $last_name ?></td>
                                <td><?php echo $adress ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $category_id ?></td>

                            </tr>
                        <?php
                        }
                        ?>


                    </table>
                </div>
            </div>
        </div>
        <a href="../index.html" class="btn bg-danger text-white fw-bold my-3 d-flex justify-content-center">Почетна страна</a>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>