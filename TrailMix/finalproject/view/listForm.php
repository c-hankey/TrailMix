<?php
$title = "Table of Trails";
require_once '../view/header.php';
$filename = '../view/listForm.php';
?>

<section id="trailList">
    <div class="listForm">
        <h1>Trail List</h1>

        <table>
            <thead>
                <th>Name</th>
                <th>Location</th>
                <th>Distance</th>
                <th>Difficulty</th>
                <th>Date Added</th>
            </thead>

            <tbody>

            <?php
                $i = 0;
                foreach($results as $row) {
                $i++;
                ?>

                <tr class="<?php echo ($i % 2 == 0)?"evenRow":"oddRow" ?>">
                    <td>
                        <a href="../controller/controller.php?action=DisplayTrail&TrailID=<?php echo $row['TrailID'] ?>">
                            <?php echo $row['Name'] ?>
                        </a>
                    </td>
                    <td><?php echo $row['Location'] ?></td>
                    <td class="right"><?php echo $row['Distance'] ?></td>
                    <td class="right"><?php echo $row['Difficulty'] ?></td>
                    <td class="text-center"><?php echo toDisplayDate($row['DateAdded']) ?></td>
                </tr>

            <?php } ?>

            </tbody>
        </table>
    </div>

</section>

<?php
require_once '../view/footer.php';
?>
