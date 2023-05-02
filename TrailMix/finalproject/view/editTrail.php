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
                        onsubmit="return validateForm()" multipart/form-data">
                        <input type="hidden" name="TrailID" value="<?php echo $trailID ?>">
                        <input type="hidden" name="Mode" value="<?php echo htmlspecialchars($mode) ?>">
                        <div class="formRow">
                            <label for="Name"><b><h5>Trail Name:<span class="required">*</span></b></h5></label> <br>
                            <input type="text" name="Name" id="Name" value="<?php echo htmlspecialchars($name) ?>"
                                   required size="80" maxlength="30"  autofocus/>
                        </div>
                        <br>
                        <div class="formRow">
                            <label for="Description"><b><h5>Description:<span class="required">*</span></b></h5></label> <br>
                            <input type="text" name="Description" id="Description" value="<?php echo htmlspecialchars($description) ?>"
                            required size="80" maxlength="200"/>
                        </div>
                        <br>
                        <div class="formRow">
                            <label for="Location"><b><h5>Location:<span class="required">*</span></b></h5></label> <br>
                            <input type="text" name="Location" id="Location" value="<?php echo htmlspecialchars($location) ?>"
                                   required size="30" maxlength="30"/>
                        </div>
                        <br>
                        <div class="formRow">
                            <label for="Distance"><b><h5>Distance:<span class="required">*</span></b></h5></label> <br>
                            <input type="number" name="Distance" id="Distance" value="<?php echo htmlspecialchars($distance) ?>"
                                   size="2" maxlength="1" min="0"/>
                        </div>
                        <br>
                        <div class="formRow">
                            <label for="Difficulty"><b><h5>Difficulty:</b></h5></label> <br>
                            <input type="number" name="Difficulty" id="Difficulty" value="<?php echo htmlspecialchars($difficulty) ?>"
                                   size="5" maxlength="1" min="0"/>
                        </div>
                        <br>
                        <!--<div class="formRow">
                            <label><b><h5>Date Added:</b></h5></label> <br>
                            <input type="text" name="DateAdded" id="DateAdded" value="<?php //echo $date?>"/>
                        </div>
                        <br>-->
                        <div class="formRow">
                            <label for="Loops"><b><h5>Loop Trail:</b></h5></label> <br>
                            <input type="checkbox" name="Loops" id="Loops" <?php if($loop == 'Y') echo 'checked' ?>/>
                        </div>
                        <br>
                        <div class="formRow">
                            <label for="Bike"><b><h5>Bike Accessible:</b></h5></label> <br>
                            <input type="checkbox" name="Bike" id="Bike" <?php if($bike == 'Y') echo 'checked'?> />
                        </div>
                        <br>
                        <div class="formRow">
                            <label for="ActiveHours"><b><h5>Active Hours:</b></h5></label> <br>
                            <input type="text" name="ActiveHours" id="ActiveHours" value="<?php echo htmlspecialchars($activehours) ?>"/>
                        </div>
                        <br>
                        <div class="formRow">
                            <label for="ActiveSeason"><b><h5>Active Season:</b></h5></label> <br>
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

            function validateForm(){
                var distance = $('$Distance').val();
                var difficulty = $('$Difficulty').val();

                if(distance > 10 && difficulty < 3){
                    alert('A trail over 10 miles should be considered a trail with higher difficulty.')
                    $('$Difficulty').select();
                    return false;
                }
                return true;
            }
        </script>
    </section>


<?php
require_once '../view/footer.php';
?>