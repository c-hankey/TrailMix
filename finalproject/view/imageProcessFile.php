<?php
    $title = "Image Processing";
    require_once '../view/header.php';
    $filename = 'imageProcessFile.php';
?>

<section id="image">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1><strong>Image File Upload</strong></h1>

                    <?php

                        $uploadfile = '../imguploads/' . $_FILES['userfile']['name'];

                        if (file_exists($uploadfile)) {
                            $message = "The file was replaced successfully";
                        } else {
                            $message = "The file was successfully uploaded";
                        }

                        //if no file is selected
                        if($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE){
                            echo "<p>You did not choose an image. Please choose an image and try again.</p>";

                          //else if image size is too large
                        } else if ($_FILES['userfile']['size'] > 1000000) {
                            echo "<p>Please choose a file smaller than 1MB and then try again.</p>";
                        } else {

                            $image_info = getimagesize($_FILES['userfile']['tmp_name']);
                            $image_width = $image_info[0];
                            $image_height = $image_info[1];
                            $image_type = $image_info[2];

                            if ($image_type != IMAGETYPE_JPEG && $image_type !=
                                IMAGETYPE_GIF && $image_type != IMAGETYPE_PNG) {
                                echo "<p>Only JPEG, GIF, and PNG files are supported.  Please try again.</p>";
                                print_r($image_info);

                              //else if image does not match size requirements
                            } else if ($image_height > $image_width) {
                                echo "<p>Image files must have a greater width than height</p>";

                              //else if image upload is successful
                            } else if (move_uploaded_file($_FILES['userfile']['tmp_name'],
                                $uploadfile)) {
                                echo "<p>$message.</p>";

                              //else if file upload fails
                            } else {
                                echo "File Upload Error\n Debugging info:";
                                print_r($_FILES);
                            }
                        }

                         $current_dir = '../imguploads';
                         $dir = opendir($current_dir);

                         echo "<p>Current list of images:</p><ul>";

                         while(false !== ($file = readdir($dir)))
                         //strip out the two entries of . and ..
                         if($file != "." && $file != "..") {

                            echo "<li>$file</li>";

                         }
                         echo '</ul>';
                         closedir($dir);
                    ?>

                <a href="imageFileUpload.php" class="text-black mt-4">Return to image upload</a>
            </div>
        </div>
    </div>

</section>
<?php
require_once '../view/footer.php';
?>
