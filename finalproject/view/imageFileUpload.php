<?php
    $title = "Image Upload";
    require_once '../view/header.php';
    ?>
<h1>Upload Logo File to the Server</h1>

<form enctype="multipart/form-data"
      action="imageProcessFile.php" method="post">
    Select a Logo File:
    <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
<p> </p>

<?php
require_once '../view/footer.php';
?>

