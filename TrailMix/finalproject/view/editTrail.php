<?php
$title = "$mode Trail";
require '../view/header.php';
?>

    <section id="trailDisplay">
        <div class="detailForm container">
            <h1><b><?php echo $mode ?> Trail</b></h1>
            <div class="row">
                <div class="col-md-6">
                    <form id="TrailForm" action="../controller/controller.php?action=ProcessAndEdit" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="TrailID" value="<?php echo $trailID ?>">
                        <input type="hidden" name="Mode" value="<?php echo htmlspecialchars($mode) ?>">
                        <div class="formRow">
                            <label><b><h5>Trail Name:</b></h5></label> <br>
                            <input type="text" name="Name" id="Name" value="<?php echo htmlspecialchars($name) ?>" />
                        </div>
                        <br>
                        <div class="formRow">
                            <label><b><h5>Description:</b></h5></label> <br>
                            <input type="text" name="Description" id="Description" value="<?php echo htmlspecialchars($description) ?>" />
                        </div>
                        <br>
                        <div class="formRow">
                            <label><b><h5>Location:</b></h5></label> <br>
                            <input type="text" name="Location" id="Location" value="<?php echo htmlspecialchars($location) ?>" />
                        </div>
                        <br>
                        <div class="formRow">
                            <label><b><h5>Distance:</b></h5></label> <br>
                            <input type="text" name="Distance" id="Distance" value="<?php echo htmlspecialchars($distance) ?>"/>
                        </div>
                        <br>
                        <div class="formRow">
                            <label><b><h5>Difficulty:</b></h5></label> <br>
                            <input type="text" name="Difficulty" id="Difficulty" value="<?php echo htmlspecialchars($difficulty) ?>"/>
                        </div>
                        <br>
                        <!--<div class="formRow">
                            <label><b><h5>Date Added:</b></h5></label> <br>
                            <input type="text" name="DateAdded" id="DateAdded" value="<?php //echo $date?>"/>
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
                            <input type="text" name="ActiveHours" id="ActiveHours" value="<?php echo htmlspecialchars($activehours) ?>"/>
                        </div>
                        <br>
                        <div class="formRow">
                            <label><b><h5>Active Season:</b></h5></label> <br>
                            <input type="text" name="ActiveSeason" id="ActiveSeason" value="<?php echo htmlspecialchars($activeseason)?>" />
                        </div>
                        <br>
                        <div class="formRow">
                            <label for="ImageFile"><b><h5>Image File:</b></h5></label> <br>
                            <input type="file" name="ImageFile" id="ImageFile" />
                        </div>

                        <?php if($tempImageFilePath != "") { ?>
                        <br>
                        <div class="formRow">
                            <label for="DeleteImage"><b><h5>Delete Image:</b></h5></label> <br>
                            <input type="checkbox" name="DeleteImage" id="DeleteImage" />
                        </div>
                        <?php } ?>

                        <br>
                        <div class="formRow">
                            <input type="submit" name="SubmitButton" value="Save"/>
                        </div>
                    </form>
                </div>

                <?php if($tempImageFilePath != "") { ?>
                <div class="col-md-6">
                    <img width = 90% src="<?php echo $tempImageFilePath ?>?foolcache=<?php echo time() ?>">
                </div>
                <?php } ?>
            </div>
        </div>h
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