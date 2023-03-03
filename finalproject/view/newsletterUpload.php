<?php
    $title = "Newsletter Upload";
    require_once '../view/header.php';
?>

<section id="newsletterUpload">
    <div class="container-fluid">
        <h1><strong>Newsletter File Upload</strong></h1>

        <p>Note: Newsletter files should be in html file format.</p>
        <form enctype="multipart/form-data"
              action="processFileUpload.php" method="post" class="my-3">
            Send this file:
            <input type="hidden" name="action" value="newsletterUpload">
            <input type="file" name="userfile" accept=".txt"/>
            <input type="submit" value="Send File" />
        </form>

        <a href="../DataFiles/newsletter.html" target="_blank" class="text-black">Click here to view the current newsletter file.</a>
    </div>
</section>


<?php
    require_once '../view/footer.php';
?>