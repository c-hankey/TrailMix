<?php
$title = "Trail Details";
require_once '../view/header.php';
$filename = 'displayTrail.php';
?>

<section id="trailDisplay">
    <div class="detailForm">
        <h1><b>Trail Details</b></h1>
        <div class="formRow">
            <label><b><h5>Trail Name:   </b></h5></label> <br>
            <?php echo $row['Name'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Description:     </b></h5></label> <br>
            <?php echo $row['Description'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Location:     </b></h5></label> <br>
            <?php echo $row['Location'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Distance:     </b></h5></label> <br>
            <?php echo $row['Distance'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Difficulty:     </b></h5></label> <br>
            <?php echo $row['Difficulty'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Date Added: </b></h5></label> <br>
            <?php echo $row['DateAdded'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Loop Trail: </b></h5></label> <br>
            <?php echo $row['Loops'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Bike Accessable: </b></h5></label> </b>
            <?php echo $row['Bike'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Active Hours: </b></h5></label> <br>
            <?php echo $row['ActiveHours'] ?>
        </div><br>
        <div class="formRow">
            <label><b><h5>Active Season:</b></h5></label> <br>
            <?php echo $row['ActiveSeason'] ?>
        </div><br>
    </div>
</section>


<?php
require_once '../view/footer.php';
?>