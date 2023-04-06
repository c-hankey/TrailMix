<?php
    $title = "Image Upload";
    require_once '../view/header.php';
    $filename = 'imageFileUpload.php';
?>

<section id="imageUpload">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1><strong>Image File Upload</strong></h1>

                <p>Note: Image files should be in the JPEG, GIF, or PNG format.</p>
                <form enctype="multipart/form-data"
                    action="imageProcessFile.php" method="post">
                    Select an Image File:
                    <input name="userfile" type="file" accept="image/png, image/jpeg, image/gif"/>
                    <input type="submit" value="Send File" />
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../view/footer.php';
?>

