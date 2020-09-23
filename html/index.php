<?php
$name="Yosafat Restu Adi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>team treehouse <?php echo $name; ?></title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">  
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-dark">
                <div class="d-flex flex-column m-5">
                    <img class="d-flex align-self-center" src="asset/img/op3.jpg" alt="" widt="90px">
                </div>
                <div class="d-flex flex-column m-5">
                    <div class="d-flex flex-align-self-center">
                        <p class="h2 text-light"><?php echo $name; ?></p>
                    </div>
                </div>
            </div>
            <div class="content col-lg-8 p-0 vh-100">
                <div class="d-flex flex-column">
                    <p class="h2 pt-4 pl-5">My Firts Pratice PHP</p>
                </div>        

                <section>
                    <p class="h2">Unit</p>
                    <?php include "inc\unit.php";?>
                    <p class="lead">
                        <?php
                            celciusTofahrenheit(100);
                        ?>
                    </p>
                </section>

                <div class="d-flex flex-column">
                    <p class="h2">
                        <?php 
                            include "inc\string.php"
                        ?>
                        <p class="lead">
                            <?php
                                echo askName("Yosafat Restu Adi");
                            ?>
                        </p>
                    </p>
                </div>

                <div class="d-flex flex-column border position-absolute fixed-bottom">
                    <p class="font-weight-normal mx-auto flex-self-center">
                        &copy;<?php echo $name; echo "last modifed : ".date("F d Y H:i:s",getlastmod());?>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <script src="asset/css/js/jquery-3.5.1.slim.min.js"></script>
    <script src="asset/css/js/popper.min.js"></script>
    <script src="asset/css/js/bootstrap.min.js"></script>
</body>
</html>