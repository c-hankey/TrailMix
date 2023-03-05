<?php
    $title = "File Uploads";
    require_once '../view/header.php';
    $filename = 'processFileUpload.php';
?>

<section id="fileUpload">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1><strong>File Upload</strong></h1>

                <?php

                    if($_POST['action'] == 'quoteUpload') {
                        //Upload all files to this text file
                        $uploadfile = '../DataFiles/quotes.txt';

                        //if user did not choose a file
                        if($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE){
                            echo "<p>You did not choose a file. Please choose a file and try again.</p>";

                           //else if file is too large
                        } else if ($_FILES['userfile']['size'] > 1000000) {
                            echo "<p>That file is too large. Please choose a file smaller than 1MB and try again.</p>";

                          //else if file is not in correct format
                        } else if ($_FILES['userfile']['type'] != 'text/plain') {
                            echo "<p>Please choose a text file type and try again.</p>";

                          //else if everything passes, try to upload the file
                        } else if (move_uploaded_file($_FILES['userfile']['tmp_name'],
                            $uploadfile)) {
                            echo "<p>The file was successfully uploaded.</p>";

                          //else if file upload fails
                        } else {
                            echo "File Upload Error\n Debugging info:";
                            print_r($_FILES);
                        }

                        echo "<a href=\"quoteUpload.php\" class=\"text-black\">Return to quote upload</a>";

                      //if action is newsletter upload
                    } else if($_POST['action'] == 'newsletterUpload') {
                        //Upload all files to this text file
                        $uploadfile = '../DataFiles/newsletter.html';

                        //if user did not choose a file
                        if($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE){
                            echo "<p>You did not choose a file. Please choose a file and try again.</p>";

                          //else if file is too large
                        } else if ($_FILES['userfile']['size'] > 1000000) {
                            echo "<p>That file is too large. Please choose a file smaller than 1MB and try again.</p>";

                          //else if file is not in correct format
                        } else if ($_FILES['userfile']['type'] != 'text/html') {
                            echo "<p>Please choose am HTML file type and try again.</p>";

                          //else if everything passes, try to upload the file
                        } else if (move_uploaded_file($_FILES['userfile']['tmp_name'],
                            $uploadfile)) {
                            echo "<p>The file was successfully uploaded.</p>";

                          //else if file upload fails
                        } else {
                            echo "File Upload Error\n Debugging info:";
                            print_r($_FILES);
                        }

                        echo "<a href=\"newsletterUpload.php\" class=\"text-black\">Return to newsletter upload</a>";
                    }
                ?>
            </div>
        </div>
    </div>

</section>

<?php
require_once '../view/footer.php';
?>
