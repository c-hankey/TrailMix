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
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/14c195147d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid back-green">
        <div class="d-flex justify-content-end align-items-start pt-2">
            <button class="btn btn-outline-light"
                    onclick="location.href='<?php if(!loggedIn()){
                echo '../security/index.php?action=SecurityLogin&RequestedPage=' . urlencode($_SERVER["REQUEST_URI"]) . '';
            } else {
                echo '../security/index.php?action=SecurityLogOut&RequestedPage=' . urlencode($_SERVER["REQUEST_URI"]) . '';
            } ?>'">
                <?php if(!loggedIn()){
                    echo "Login";
                } else {
                    echo "Logout ".$_SESSION['UserName'];
                } ?>
            </button>
        </div>

        <div class = "container align-items-center">
            <div class="row">
            <div class = "col">
                <a href="../controller/controller.php?action=Newsletter" target = _blank> <img src = "../img/newspaper.png" alt="newspaper image"></a>
            </div>

            <div class = "col">
                <div class="d-flex align-items-center">
                     <h1 class="display-1">Trail</h1>
                    <div>
                        <a href="../view/index.php"><img src="../img/pinetreeline.png" alt="Pine Treeline"></a>
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
