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
        case 'DisplayTrail':
            displayTrail();
            break;
        case 'EmailSend':
            include '../view/emailSend.php';
            break;
        case 'Trails':
            include '../view/trails.php';
            break;
        case 'Newsletter':
            include '../DataFiles/newsletter.html';
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
        case 'ListAllTrails':
            listAllTrails();
            break;
        case 'Quote':
            include '../view/quoteupload.php';
            break;
        case 'ProcessRegisterMember':
            processRegisterMember();
            break;
        case 'RegisterMember':
            include '../view/signupForm.php';
            break;
        case 'SearchTrails':
            searchTrails();
            break;
        case 'Newsletter':
            include '../view/newsletterUpload.php';
            break;
        default:
            include('../view/index.php');   // default
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

    function listAllTrails(){
        $listType =
        $results = getAllTrails();

        if(count($results) == 0){
            $errorMessage = "No trails found.";
            include '../view/errorPage.php';
        }
        else {
            include '../view/listForm.php';
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


            include '../model/model.php';
            include '../view/processSignupForm.php';
            saveMemberInfo($FirstName, $LastName, $Age, $Email);
            $memberArray = getMembers();

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


