<?php
$title = "TrailMix";
require_once '../view/header.php';
?>

<section class="quote">

    <div class="container-fluid">
        <h1>Quote File Upload</h1>

        <?php

        //Upload all files to this text file
        $uploadfile = '../DataFiles/quotes.txt';

        //if user did not choose a file
        if($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE){
            echo "<p>You did not choose a file. Please choose a file and try again.</p>";
        }
        //else if file is too large
        else if ($_FILES['userfile']['size'] > 1000000) {
            echo "<p>That file is too large. Please choose a file smaller than 1MB and try again.</p>";
        }
        //else if file is not in correct format
        else if ($_FILES['userfile']['type'] != 'text/plain') {
            echo "<p>Please choose a text file type and try again...</p>";
        }
        //else if everything passes, try to upload the file
        else if (move_uploaded_file($_FILES['userfile']['tmp_name'],
            $uploadfile)) {
            echo "<p>The file was successfully uploaded.</p>";
        }
        //else if file upload fails
        else {
            echo "File Upload Error\n Debugging info:";
            print_r($_FILES);
        }
        ?>

        <a href="quoteupload.php" class="text-black">Return to uploads</a>
    </div>

</section>

<?php
require_once '../view/footer.php';
?>
