
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $title ?>
    </title>

    <!--CSS STYLESHEETS-->
    <link rel="icon" href = "../img/pineicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/14c195147d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid back-green">
        <div class="d-flex justify-content-end align-items-start pt-2">
            <button class="btn btn-outline-light" href="about.html">Login</button>
        </div>

        <div class = "container align-items-center">
            <div class="row">
            <div class = "col">
                <a href="../DataFiles/newsletter.html" target = _blank> <img src = "../img/newspaper.png"></a>
            </div>

            <div class = "col">
                <div class="d-flex align-items-center">
                     <h1 class="display-1">Trail</h1>
                    <div>
                        <a href="index.php"><img src="../img/pinetreeline.png" alt="Pine Treeline"></a>
                    </div>
                    <h1 class="display-1">Mix</h1>
                </div>
            </div>

            <div class = "col"></div>
            </div>

        </div>
    </div>






<?php
    require_once '../view/navbar.php';
?>
