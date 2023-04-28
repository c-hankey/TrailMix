<?php
    $title = "Trail Details";
    require_once '../view/header.php';
    $filename = 'trailDetails.php';
?>

<section id="baker">
    <div class="d-flex flex-md-row flex-column">
        <div class = "flex-column">
            <div class = "container">
                <h1>Description: <br></h1>
                <h6><?php echo $row['Description'] ?></h6>
            </div>
            <table class="table table-bordered m-3 align-self-start">
                <thead>
                    <tr>
                        <th scope="col">Trail Name</th>
                        <th scope="col">Difficulty</th>
                        <th scope="col">Distance (miles)</th>
                        <th scope="col">Loop Trail?</th>
                        <th scope="col">Bike Accessible?</th>
                        <th scope="col">Active Hours</th>
                        <th scope="col">Active Season</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Difficulty'] ?>/5</td>
                        <td><?php echo $row['Distance'] ?></td>
                        <td><?php echo $row['Loops'] ?></td>
                        <td><?php echo $row['Bike'] ?></td>
                        <td><?php echo $row['ActiveHours'] ?></td>
                        <td><?php echo $row['ActiveSeason'] ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div style="width: 75%" class="m-3 px-3">
            <img src="../DataFiles/TrailImages/<?php echo $row['TrailID'] ?>.jpg" alt="<?php echo $row['Name'] ?> image">
        </div>

    </div>
</section>

<?php
require_once '../view/footer.php';
?>
