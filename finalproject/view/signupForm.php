
<?php
$title = "Register";
require_once '../view/header.php';
?>
<div class="d-flex justify-content-center">
<h1>Add yourself to the Mix. Register now!</h1>
</div>

<div class="container-fluid">
        <div class = "d-flex flex-row justify-content-center">
            <form action="processSignupForm.php" method="post">
                <label>First Name: </label>
                <input type="text" name="firstName" required/><br><br>
                <label>Last Name: </label>
                <input type="text" name="lastName" required/><br><br>
                <label>Age: </label>
                <input type="number" name="age" required/><br><br>
                <label>Email: </label>
                <input type="email" name="email" required/><br>
                <input type="submit" value="Sign Up"/>
            </form>
        </div>
    <br>
</div>
<?php
require_once '../view/footer.php'
?>