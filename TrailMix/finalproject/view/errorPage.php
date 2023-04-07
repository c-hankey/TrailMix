<?php
$title = 'Error';
require_once '../view/header.php';
$filename = '../view/errorPage.php';
?>

<h1><?php echo $errorMessage ?></h1>

<?php
require_once '../view/footer.php';
?>