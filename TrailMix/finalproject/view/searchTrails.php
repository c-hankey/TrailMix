<?php
$title = "Trail Search";
require_once '../view/header.php';
$filename = 'searchTrails.php';
?>

<section id="trailDisplay">
    <div class="detailForm">
        <b><h1>Search Trails</b></h1><br>
        <div class="formRow">
            <label>Select a Trail:</label>
            <select id="trailSelect" onchange="trailSearch()">
                <option value="">Select a Trail</option> <
                <?php foreach($results as $row) {?>
                <option value="<?php echo $row['TrailID'] ?>"><?php echo $row['Name'] ?></option>
                <?php } ?>
            </select>
        </div><br>
        <div class = 'formRow'>
            <label>Search Criteria:</label>
            <input type = "text" id="Criteria" />
            <input type = "button" value = "General Search" onclick = "generalSearch()"/>
        </div><br>
        <div><b><h1>Common Searches: </b></h1></div>
        <div class="formRow">
            <a href="../controller/controller.php?action=ListTrails&ListType=LoopTrail">Loop Trails</a>
        </div>
        <div class="formRow">
            <a href="../controller/controller.php?action=ListTrails&ListType=Easy">Easy trails</a>
        </div><br>

    </div>
</section>

<script>
    function trailSearch() {
        document.location = '../controller/controller.php?action=DisplayTrail&TrailID='
            + $('#trailSelect').val();
    }
    function generalSearch() {
        document.location = '../controller/controller.php?action=ListTrails&ListType=GeneralSearch&Criteria='
            + encodeURIComponent($('#Criteria').val());
    }
</script>

<?php
require_once '../view/footer.php';
?>

