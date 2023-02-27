<?php
$title = "Image Processing";
require_once '../view/header.php';
?>

<h1>Image File Upload</h1>


<?php
$uploadfile = '../imguploads/' . $_FILES['userfile']['name'];
if (file_exists($uploadfile)) {
    $message = "The file was replaced successfully";
} else {
    $message = "The file was successfully uploaded";
}

$image_info =
    getimagesize($_FILES['userfile']['tmp_name']);
$image_width = $image_info[0];
$image_height = $image_info[1];
$image_type = $image_info[2];
if ($image_type != IMAGETYPE_JPEG && $image_type !=
    IMAGETYPE_GIF && $image_type != IMAGETYPE_PNG) {
    echo "Only JPEG, GIF, and PNG files are supported.  Please try again.";
    print_r($image_info);
} else if ($image_height > $image_width) {
    echo "Image files must have a greater width than height";
} else if (move_uploaded_file($_FILES['userfile']['tmp_name'],
    $uploadfile)) {
    echo "<p>$message.</p>";
} else if ($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE) {
    echo "<p>Please choose a file first and then try again...</p>";
} else if ($_FILES['userfile']['size'] > 1000000) {
    echo "<p>Please choose a file smaller than 1MB and then try again...</p>";
} else {
    echo "File Upload Error\n Debugging info:";
    print_r($_FILES);
}
?>

<?php
require_once '../view/footer.php';
?>
