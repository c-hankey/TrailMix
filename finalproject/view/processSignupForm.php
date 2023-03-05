<?php
    $title = "Sign Up Processing";
    require_once '../view/header.php';
    $filename = 'processSignupForm.php';
?>

<section id="confirm">

    <h1 class="d-flex justify-content-center">Trail Mix Registration</h1>

        <?php
            //variables
            $FirstName = $_POST['firstName'];
            $LastName = $_POST['lastName'];
            $Age = $_POST['age'];
            $Email = $_POST['email'];

            $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);

            if (filter_var($Email, FILTER_VALIDATE_EMAIL) == false){
                echo "<h4>Please enter a valid email address.</h4>";
            }
            else{
                echo "<h4 class = 'd-flex justify-content-center'>$FirstName, welcome to the Mix!!!</h4><br>";

                $file = fopen('../UserFiles/members.csv', 'ab');
                fputcsv($file,
                array($FirstName, $LastName, $Age, $Email));
                fclose($file);

                echo "<div class='d-flex justify-content-center registerbox'><u><h4>The current members are: </h4></u><ol>";

                $file = fopen('../UserFiles/members.csv', 'rb');
                while(($data = fgetcsv($file)) !== FALSE) {
                    echo "<li style='text-decoration: none'><a href='mailto:$data[3]'>" . "$data[0] $data[1]</a></li>";
                }
                echo "</ol></div>";
                fclose($file);
            }
        ?>

</section>

<?php
require_once '../view/footer.php';
?>


