<?php
$title = "Trail Details";
require_once '../view/header.php';
$filename = 'displayTrail.php';
?>

<section id="trailDisplay">
    <div class="detailForm">
        <h1>Trail Details</h1>
        <div class="formRow">
            <label>Trail Name:</label>
            <?php echo $row['Name'] ?>
        </div>
        <div class="formRow">
            <label>Description:</label>
            <?php echo $row['Description'] ?>
        </div>
        <div class="formRow">
            <label>Location:</label>
            <?php echo $row['Location'] ?>
        </div>
        <div class="formRow">
            <label>Distance:</label>
            <?php echo $row['Distance'] ?>
        </div>
        <div class="formRow">
            <label>Difficulty:</label>
            <?php echo $row['Difficulty'] ?>
        </div>
        <div class="formRow">
            <label>Date Added:</label>
            <?php echo $row['DateAdded'] ?>
        </div>
        <div class="formRow">
            <label>Loop Trail?:</label>
            <?php echo $row['Loops'] ?>
        </div>
        <div class="formRow">
            <label>Bike Accessible?:</label>
            <?php echo $row['Bike'] ?>
        </div>
        <div class="formRow">
            <label>Active Hours:</label>
            <?php echo $row['ActiveHours'] ?>
        </div>
        <div class="formRow">
            <label>Active Season:</label>
            <?php echo $row['ActiveSeason'] ?>
        </div>
    </div>
</section>


<?php
require_once '../view/footer.php';
?>