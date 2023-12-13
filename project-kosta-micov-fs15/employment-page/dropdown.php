<?php

$con = mysqli_connect("localhost", "root", "", "example_store");


$sql = "SELECT * FROM `category`";
$all_categories = mysqli_query($con, $sql);


if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($con, $_POST['Product_name']);





    $id = mysqli_real_escape_string($con, $_POST['Category']);





    $sql_insert =
        "INSERT INTO `product`(`product_name`, `category_id`, `telephone_id`)
			VALUES ('$name','$id')";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav>
        <ul class="sidebar">
            <div class="hamburger-menu">
                <li onclick=hideSidebar()><a href="#"><i class="fa-solid fa-xmark text-white fa-2xl"></i></a></li>
            </div>
            <li class="py-2"><a class="fw-bold text-decoration-none" href="#">Академија за маркетинг</a></li>
            <li class="py-2"><a class="fw-bold text-decoration-none" href="#">Академија за програмирање</a></li>
            <li class="py-2"><a class="fw-bold text-decoration-none" href="#">Академија за data science</a></li>
            <li class="py-2"><a class="fw-bold text-decoration-none" href="/contact.php">Академија за дизајн</a></li>
            <div class="button">
                <li><a class="btn bg-danger text-white fw-bold m-1 " href="/contact.html" target="_blank">Вработи наш студент</a></li>
            </div>
        </ul>
        <ul>
            <a href="../index.html" class="text-decoration-none text-dark">
                <div class="logo">
                    <li> <img src="../images/Logo.png" alt="logo"></li>
                    <h2 class="fw-bold">BRAINSTER</h2>
                </div>
            </a>
            <div class="navbar-center">
                <li class="hideOnMobile"><a class="fw-bold" href="#">Академија за маркетинг</a></li>
                <li class="hideOnMobile"><a class="fw-bold" href="#">Академија за програмирање</a></li>
                <li class="hideOnMobile"><a class="fw-bold" href="#">Академија за data science</a></li>
                <li class="hideOnMobile"><a class="fw-bold" href="#">Академија за дизајн</a></li>
            </div>
            <div class="button">
                <li><a class="btn bg-danger text-white fw-bold m-1 hideOnMobile btn-red" href="../employment-page/dropdown.php">Вработи наш студент</a></li>
            </div>
            <li class="menu-button mx-3" onclick=showSidebar()><a href="#"><i class="fa-solid fa-bars fa-2xl bg-white"></i></a></li>
        </ul>


    </nav>



    <section class="emp-section">
        <div class="container ">
            <h1 class="text-center py-5">Вработи студенти</h1>






            <form action="insert.php" method="post">


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="h6">Име и презиме</label>
                        <input type="text" name="first_name" id="firstName" class="form-control" style="height: 50px;" placeholder="Вашето име и презиме" require>

                    </div>


                    <div class="col-md-6 mb-3">

                        <label for="lastName" class="h6">Име на компанија</label>
                        <input type="text" name="last_name" id="lastName" class="form-control" style="height: 50px;" placeholder="Име на вашата компанија" require>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">

                        <label for="Address" class="h6">Контакт имејл</label>
                        <input type="email" name="address" id="Address" class="form-control" style="height: 50px;" placeholder="Контакт имејл на вашата компанија" require>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label for="emailAddress" class="h6">Контакт телефон</label>
                        <input type="text" name="email" id="emailAddress" class="form-control" style="height: 50px;" placeholder="Контакт телефон на вашата компанија" require>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6">

                        <label class="h6">Тип на студенти</label>
                        <select name="category" class="d-flex form-control" style="height: 50px;">
                            <option>Избери тип на студент</option>
                            <?php

                            while ($category = mysqli_fetch_array(
                                $all_categories,
                                MYSQLI_ASSOC
                            )) :;
                            ?>
                                <option value="<?php echo $category["Category_ID"];

                                                ?>">
                                    <?php echo $category["Category_Name"];

                                    ?>
                                </option>
                            <?php
                            endwhile;

                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">

                        <input type="submit" class="btn bg-danger text-white fw-bold my-4 col-12 form-control" style="height: 50px;" value="Испрати">
                    </div>
                </div>
            </form>
            <br>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    </script>
</body>

</html>