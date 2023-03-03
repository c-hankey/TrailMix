<?php
$title = "Upload Quote File";
require_once '../view/header.php';
?>

<section id="quote">
    <div class="container-fluid">
        <h1><strong>Quote File Uploads</strong></h1>

        <p>Note: Quote files should be in a text file format with a new line separating each quote.</p>
        <form enctype="multipart/form-data"
              action="processFileUpload.php" method="post" class="my-3">
            Send this file:
            <input type="file" name="userfile" accept=".txt"/>
            <input type="submit" value="Send File" />
        </form>

        <a href="../DataFiles/quotes.txt" target="_blank" class="text-black">Click here to view the current quotes file.</a>
    </div>
</section>

<?php
require_once '../view/footer.php';
?>
