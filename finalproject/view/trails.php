
<?php
    $title = "Trails";
    require_once '../view/header.php';
    $filename = 'trails.php';
?>

<section id="trails">

    <div class="card d-flex justify-content-center align-items-center flex-md-row">
        <div class="card my-4 mx-4" style = "width: 25%;">
            <img src="../img/looptrail.jpg" style = "height: 50%;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Clarion Loop Trail</h5>
                <p class="card-text"><strong>Clarion, PA</strong></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Distance: 1.6 miles</li>
                <li class="list-group-item">Difficulty: 3/5</li>
            </ul>
            <div class="card-body">
                <a href="loop.php" class="card-link">Details</a>
                <a href="https://www.visitpa.com/region/pennsylvania-wilds/clarion-loop-trail" class="card-link">Trail Website</a>
            </div>
        </div>
        <div class="card my-4 mx-4" style = "width: 25%">
            <img src="../img/bakertrail.jpg" class="card-img-top" alt="...">
            <div class="card-body" >
                <h5 class="card-title">Baker Trail</h5>
                <p class="card-text"><strong>Cooksburg, PA</strong></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Distance: 12 miles</li>
                <li class="list-group-item">Difficulty: 4/5</li>
            </ul>
            <div class="card-body">
                <a href="baker.php" class="card-link">Details</a>
                <a href="https://visitpago.com/listings/baker-trail/#:~:text=In%20Cook%20Forest%2012%20miles,hiking%20trail%20traversing%20six%20counties."
                   class="card-link">Trail Website</a>
            </div>
        </div>
    </div>

</section>

<?php
    require_once '../view/footer.php';
?>

