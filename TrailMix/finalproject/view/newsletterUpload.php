<?php
    $title = "Newsletter Upload";
    require_once '../view/header.php';
    $filename = '../view/newsletterUpload.php';
?>

<section id="newsletterUpload">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1><strong>Newsletter File Upload</strong></h1>

                <p>Note: Newsletter files should be in html file format.</p>
                <form enctype="multipart/form-data"
                    action="../controller/controller.php?action=ProcessFileUpload" method="post" class="my-3">
                    Select a Newsletter File:
                    <input type="hidden" name="action" value="newsletterUpload">
                    <input type="file" name="userfile" accept=".html">
                    <input type="submit" value="Send File">
                </form>

                <a href="../controller/controller.php?action=Newsletter" target="_blank" class="text-black">Click here to view the current newsletter file.</a>
            </div>
        </div>
    </div>
</section>


<?php
    require_once '../view/footer.php';
?>