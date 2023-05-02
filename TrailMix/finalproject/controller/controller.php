<?php
    require_once '../model/model.php';
    require_once '../lib/general_func.php';

    if (isset($_POST['action'])) {  // check get and post
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        include('../view/index.php');  // default action
        exit();
    }

    //change the navbar to match up with these
    switch ($action) {
        case 'About':
            include '../view/about.php';
            break;
        case 'AddTrail':
            addTrail();
            break;
        case 'DeleteTrail':
            deleteTrail();
            break;
        case 'DisplayTrail':
            displayTrail();
            break;
        case 'EditTrail':
            editTrail();
            break;
        case 'EmailSend':
            include '../view/emailSend.php';
            break;
        case 'Trails':
            listTrailCards();
            break;
        case 'Newsletter':
            include '../DataFiles/newsletter.html';
            break;
        case 'NewsletterUpload':
            include '../view/newsletterUpload.php';
            break;
        case 'Home':
            include '../view/index.php';
            break;
        case 'ImageUpload':
            include '../view/imageFileUpload.php';
            break;
        case 'Grading':
            include '../view/grading.php';
            break;
        case 'ListTrails':
            listTrails();
            break;
        case 'Quotes':
            include '../DataFiles/quotes.txt';
            break;
        case 'QuoteUpload':
            include '../view/quoteupload.php';
            break;
        case 'ProcessImage':
            include '../view/imageProcessFile.php';
            break;
        case 'ProcessFileUpload':
            include '../view/processFileUpload.php';
            break;
        case 'ProcessRegisterMember':
            processRegisterMember();
            break;
        case 'ProcessAndEdit':
            processAddEdit();
            break;
        case 'Register':
            include '../view/signupForm.php';
            break;
        case 'SearchTrails':
            searchTrails();
            break;
        case 'TrailDetails':
            displayTrailCard();
            break;
        default:
            include('../view/index.php');   // default
    }

    function addTrail(){
        $mode = "Add";
        $trailID = 0;
        $name = "";
        $description = "";
        $location = "";
        $distance = 0;
        $difficulty = 0;
        $date = "";
        $loop = "Y";
        $bike = "Y";
        $activehours = "All";
        $activeseason = "All";

        include '../view/editTrail.php';
    }

    function deleteTrail(){
        $trailID = $_GET['TrailID'];
        if(!isset($trailID)) {
            $errorMessage = "You must provide a trail ID to display.";
            include '../view/errorPage.php';
        } else {
            $rowCount = deleteOneTrail($trailID);
            if($rowCount != 1) {
                $errorMessage = "The delete affected $rowCount rows.";
                include "../view/errorPage.php";
            } else {
                header("Location:../controller/controller.php?action=Home");
            }
        }
    }

    function displayTrail() {
        $trailID = $_GET['TrailID'];
        if(!isset($trailID)){
            $errorMessage = "You must provide a trail ID to display.";
            include '../view/errorPage.php';
        }
        else {
            $row = getTrail($trailID);
            if($row == FALSE){
                $errorMessage = "That trail was not found";
                include '../view/errorPage.php';
            }
            else {
                include '../view/displayTrail.php';
            }
        }
    }

    function displayTrailCard() {
        $trailID = $_GET['TrailID'];
        if(!isset($trailID)){
            $errorMessage = "You must provide a trail ID to display.";
            include '../view/errorPage.php';
        }
        else {
            $row = getTrail($trailID);
            if($row == FALSE){
                $errorMessage = "That trail was not found";
                include '../view/errorPage.php';
            }
            else {
                include '../view/trailDetails.php';
            }
        }
    }

    function editTrail() {
        $trailID = $_GET['TrailID'];
        if(!isset($trailID)){
            $errorMessage = "You must provide a trail ID to display.";
            include '../view/errorPage.php';
        }
        else {
            $row = getTrail($trailID);
            if($row == FALSE){
                $errorMessage = "That trail was not found";
                include '../view/errorPage.php';
            }
            else {
                $mode = "Edit";
                $trailID = $row['TrailID'];
                $name = $row['Name'];
                $description = $row['Description'];
                $location = $row['Location'];
                $distance = $row['Distance'];
                $difficulty = $row['Difficulty'];
                $date = $row['DateAdded'];
                $loop = $row['Loops'];
                $bike = $row['Bike'];
                $activehours = $row['ActiveHours'];
                $activeseason = $row['ActiveSeason'];
                $tempImageFilePath = $row['TrailImagePath'];
                include '../view/editTrail.php';
            }
        }
    }

    function listTrails(){
        $listType = filter_input(INPUT_GET, 'ListType');
        if($listType == 'LoopTrail'){
            $results = getLoopTrails();
        }
        elseif($listType == 'Easy'){
            $results = getEasyTrails();
        }
        elseif($listType == 'GeneralSearch'){
            $results = getByGeneralSearch($_GET['Criteria']);
        }
        else
            $results = getAllTrails();

        if(count($results) == 0){
            $errorMessage = "No trails found.";
            include '../view/errorPage.php';
        }
        else if(count($results) == 1){
            $row = $results[0];
            include '../view/displayTrail.php';
        }
        else {
            include '../view/listForm.php';
        }
    }

    function processAddEdit(){
        $name = $_POST['Name'];
        $trailID = $_POST['TrailID'];
        $mode = $_POST['Mode'];
        $description = $_POST['Description'];
        $location = $_POST['Location'];
        $distance = $_POST['Distance'];
        $difficulty = $_POST['Difficulty'];
        if(isset($_POST['Loop'])){
            $loop = 'Y';
        }
        else
            $loop = 'N';
        if(isset($_POST['Bike'])){
            $bike = 'Y';
        }
        else
            $bike = 'N';
        $activehours = $_POST['ActiveHours'];
        $activeseason = $_POST['ActiveSeason'];

        $tempImageFilePath = "";
        if(isset($_POST['DeleteImage'])){
            $deleteImage = TRUE;
        } else {
            $deleteImage = FALSE;
        }

        //Validations
        $php_errormsg = "";
        if(empty($name) || strlen($name) > 30){
            $php_errormsg .= "\\n* Name is required and must be less than 30 characters long.";
        }
        if(empty($description)){
            $php_errormsg .= "\\n* Description is required.";
        }
        if(empty($location) || strlen($location) > 20){
            $php_errormsg .= "\\n* Location is required and must be less than 20 characters long.";
        }
        if(!empty($difficulty) && !ctype_digit($difficulty) || $difficulty > 5){
            $php_errormsg .= "\\n* Difficulty must be a positive integer (whole number without decimals) and between 1 and 5. Enter 0 if unknown.";
        }
        if(empty($difficulty)){
            $difficulty = 0;
        }

        if(!empty($distance) && !ctype_digit(($distance))){
            $php_errormsg .= "\\n* Distance must be a positive integer (whole number without decimals). Enter 0 if unknown.";
            $distance = 0;
        }

        if(empty($activehours) || strlen($activehours) > 30){
            $php_errormsg .= "\\n* Active trail hours are required and must be less than 30 characters long.";
        }
        if(empty($activeseason) || strlen($activeseason) > 30){
            $php_errormsg .= "\\n* The active season is required and must be less than 30 characters long.";
        }

        if($_FILES['ImageFile']['error'] != UPLOAD_ERR_NO_FILE){
            //Check to see if they upload an image and if so, validate it
            $image_info = getimagesize($_FILES['ImageFile']['tmp_name']);
            $image_width = $image_info[0];
            $image_height = $image_info[1];
            $image_type = $image_info[2];
            if($image_type != IMAGETYPE_JPEG) {
                $php_errormsg .= "\\n* Only jpg images are supported. Please choose another file type.";
            } else if($_FILES['ImageFile']['size'] > 1000000){
                $php_errormsg .= "\\n* Please choose a file under 100KB and try again.";
            } else {
                $tempImageFilePath = $_FILES['ImageFile']['tmp_name'];
            }

        }

        if($php_errormsg != ""){
            include '../view/editTrail.php';
        } else {
            if($mode == 'Add') {
                $trailID = insertTrail($name, $description, $location, $distance, $difficulty, $loop, $bike, $activehours, $activeseason, $tempImageFilePath);
            } else {
                $rowsAffected = updateTrail($trailID, $name, $description, $location, $distance, $difficulty, $loop, $bike, $activehours, $activeseason, $tempImageFilePath, $deleteImage);
            }
            header("Location:../controller/controller.php?action=DisplayTrail&TrailID=$trailID");
        }
    }

    function listTrailCards() {
        $results = getAllTrails();
        if(count($results) == 0) {
            $errorMessage = "No trails found.";
            include '../view/errorPage.php';
        }
        else {
            include '../view/trails.php';
        }
    }

    function processRegisterMember(){
        $FirstName = $_POST['firstName'];
        $LastName = $_POST['lastName'];
        $Age = $_POST['age'];
        $Email = $_POST['email'];

        $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);

        if (filter_var($Email, FILTER_VALIDATE_EMAIL) == false){
            echo "<h4>Please enter a valid email address.</h4>";
        }
        else {
            echo "<h4 class = 'd-flex justify-content-center'>$FirstName, welcome to the Mix!!!</h4><br>";
            saveMemberInfo($FirstName, $LastName, $Age, $Email);
            $memberArray = getMembers();
            include '../view/processSignupForm.php';
        }
    }

    function searchTrails() {
        $results = getAllTrails();

        if(count($results) == 0){
            $errorMessage = "No trails found.";
            include '../view/errorPage.php';
        }
        else {
            include '../view/searchTrails.php';
        }
    }


