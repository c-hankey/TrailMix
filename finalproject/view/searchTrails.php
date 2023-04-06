<?php
$title = "Trail Search";
require_once '../view/header.php';
$filename = 'searchTrails.php';
?>

<section id="trailDisplay">
    <div class="detailForm">
        <h1>Search Trails</h1>
        <div class="formRow">
            <label>Select a Trail:</label>
            <select id="trailSelect" onchange="trailSearch()">
                <option value="">Select a Trail</option>
                <?php foreach($results as $row) {?>
                <option value="<?php echo $row['TrailID'] ?>"><?php echo $row['Name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</section>

<script>
    function trailSearch() {
        document.location = '../controller/controller.php?action=DisplayTrail&TrailID=' + $('#trailSelect').val();
    }
</script>

<?php
require_once '../view/footer.php';
?>

