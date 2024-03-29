<?php
$title = "Trail Details";
require_once '../view/header.php';
$filename = '../view/displayTrail.php';
?>

    <section id="trailDisplay">
        <div class="detailForm container">
            <h1><b>Trail Details</b></h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="formRow">
                    <label><b><h5>Trail Name:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['Name']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Description:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['Description']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Location:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['Location']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Distance:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['Distance']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Difficulty:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['Difficulty']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Date Added:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['DateAdded']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Loop Trail:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['Loops']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Bike Accessable:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['Bike']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Active Hours:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['ActiveHours']) ?>
                </div>
                <br>
                <div class="formRow">
                    <label><b><h5>Active Season:</b></h5></label> <br>
                    <?php echo htmlspecialchars($row['ActiveSeason']) ?>
                </div>
                <br>
                <div class="formRow">
                    <?php if(userIsAuthorized("EditTrail")) { ?>
                        <input type="button" name="EditButton" id="EditButton" value="Edit"
                           onclick="document.location='../controller/controller.php?action=EditTrail&TrailID=<?php echo $row['TrailID'] ?>'"/>
                    <?php }
                    if(userIsAuthorized("DeleteTrail")) { ?>
                        <input type="button" name="DeleteButton" id="DeleteButton" value="Delete" style="margin-left: 15px;"
                           onclick="document.location='../controller/controller.php?action=DeleteTrail&TrailID=<?php echo $row['TrailID'] ?>'"/>
                    <?php } ?>
                </div>
            </div>

            <?php if($row['TrailImagePath'] != "") { ?>
            <div class="col-md-6">
                <img width = 90% src="<?php echo $row['TrailImagePath'] ?>?foolcache=<?php echo time() ?>">
            </div>
            <?php } ?>
        </div>

    </section>


<?php
require_once '../view/footer.php';
?>