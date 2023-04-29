
<?php
    $title = "Trails";
    require_once '../view/header.php';
    $filename = '../view/trails.php';
?>

<section id="trails">

    <div class="row row-cols-4">
        <?php
            $i = 0;
            foreach($results as $row) { ?>
            <div class="col">

                    <div class="card my-4 mx-4 trail-card">
                        <img src="../DataFiles/TrailImages/<?php echo $row['TrailID'] ?>.jpg" class="card-img-top" alt="<?php echo $row['Name'] ?> image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['Name']) ?></h5>
                            <p class="card-text"><strong><?php echo htmlspecialchars($row['Location']) ?></strong></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Distance: <?php echo htmlspecialchars($row['Distance']) ?></li>
                            <li class="list-group-item">Difficulty: <?php echo htmlspecialchars($row['Difficulty']) ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="../controller/controller.php?action=TrailDetails&TrailID=<?php echo $row['TrailID'] ?>" class="card-link">Details</a>
                        </div>
                    </div>
            </div>
        <?php $i++; } ?>
    </div>

</section>

<?php
    require_once '../view/footer.php';
?>

