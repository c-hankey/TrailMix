<?php
$title = "Add Trail";
require '../view/header.php';
?>

    <section id="trailDisplay">
        <div class="detailForm">
            <h1><b>Add Trail</b></h1>
            <form id="TrailForm" action="../controller/controller.php?action=ProcessAndEdit" method="post">
                <div class="formRow">
                    <label><b><h5>Trail Name:</b></h5></label> <br>
                    <input type="text" name="Name" id="Name" value="<?php echo $name ?>" />
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Description:</b></h5></label> <br>
                    <input type="text" name="Description" id="Description" value="<?php echo $description ?>" />
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Location:</b></h5></label> <br>
                    <input type="text" name="Location" id="Location" value="<?php echo $location ?>" />
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Distance:</b></h5></label> <br>
                    <input type="text" name="Distance" id="Distance" value="<?php echo $distance ?>"/>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Difficulty:</b></h5></label> <br>
                    <input type="text" name="Difficulty" id="Difficulty" value="<?php echo $difficulty ?>"/>
                </div>
                <br>
                <!--<div class="formRow">
                    <label><b><h5>Date Added:</b></h5></label> <br>
                    <input type="text" name="DateAdded" id="DateAdded" value="<?php echo $date?>"/>
                </div>
                <br>-->
                <div class="formRow">
                    <label><b><h5>Loop Trail:</b></h5></label> <br>
                    <input type="checkbox" name="Loops" id="Loops" <?php if($loop == 'Y') echo 'checked' ?>/>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Bike Accessible:</b></h5></label> <br>
                    <input type="checkbox" name="Bike" id="Bike" <?php if($bike == 'Y') echo 'checked'?> />
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Active Hours:</b></h5></label> <br>
                    <input type="text" name="ActiveHours" id="ActiveHours" value="<?php echo $activehours ?>"/>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Active Season:</b></h5></label> <br>
                    <input type="text" name="ActiveSeason" id="ActiveSeason" value="<?php echo $activeseason ?>" />
                </div>
                <br>
                <div class="formRow">
                    <input type="submit" name="SubmitButton" value="Save"/>
                </div>
            </form>
        </div>
        <script>
            <?php
                if(!empty($php_errormsg)){
                    echo "alert('Please correct the following errors: \\n$php_errormsg');";
                }
            ?>
        </script>
    </section>


<?php
require_once '../view/footer.php';
?>