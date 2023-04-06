<?php
    $title = "Sign Up Processing";
    require_once '../view/header.php';
    $filename = 'processSignupForm.php';
?>

<section id="confirm">

    <h1 class="d-flex justify-content-center">Trail Mix Registration</h1>

        <?php
            echo "<h3>Current members are:</h3><ol>";

            foreach ($memberArray as $member) {
                echo "<li><a href='mailto:$member[3]'>" .
                    "$member[0] $member[1]</a></li>" ;
            }
            echo "</ol>";

            echo "<h3>$FirstName</h3>";
        ?>

</section>

<?php
require_once '../view/footer.php';
?>


