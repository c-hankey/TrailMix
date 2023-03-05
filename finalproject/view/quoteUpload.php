<?php
    $title = "Quote Uploads";
    require_once '../view/header.php';
    $filename = 'quoteUpload.php';
?>

<section id="quote">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1><strong>Quote File Upload</strong></h1>

                <p>Note: Quote files should be in a text file format with a new line separating each quote.</p>
                <form enctype="multipart/form-data"
                    action="processFileUpload.php" method="post" class="my-3">
                    Select a Quote File:
                    <input type="hidden" name="action" value="quoteUpload">
                    <input type="file" name="userfile" accept=".txt"/>
                    <input type="submit" value="Send File" />
                </form>

                <a href="../DataFiles/quotes.txt" target="_blank" class="text-black">Click here to view the current quotes file.</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../view/footer.php';
?>
