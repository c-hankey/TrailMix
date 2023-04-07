
<?php
    $title = "Register";
    require_once '../view/header.php';
    $filename = '../view/signupForm.php';
?>

<section id="signup">
    <div class="d-flex justify-content-center">
        <h1>Add yourself to the Mix. Register now!</h1>
    </div>

    <div class="container-fluid mt-3">
        <div class = "d-flex flex-row justify-content-center">
            <form action="../controller/controller.php?action=ProcessRegisterMember" method="post">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="firstName" required/><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Last Name: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lastName" required/><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Age: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="age" required/><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email: </label>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" required/><br>
                        </div>
                    </div>
                    <input type="submit" value="Sign Up" class="mt-3"/>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
require_once '../view/footer.php'
?>