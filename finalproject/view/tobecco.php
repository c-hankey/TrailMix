<?php
$title = "North Country Trail Details";
require_once '../view/header.php';
?>

<section id="nct">
    <div class="d-flex flex-md-row flex-column">
        <div class = "flex-column">
            <div class = "container">
                <h1>Description: <br></h1>
                <h6>A high-grade trail with scenes of the old growth forest. Sections of the trail follow the river.<br>
                The trailhead is located right next to the Gateway Lodge for a bite to eat.</h6>
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
                    <td>Tobecco Trail</td>
                    <td>3/5</td>
                    <td>35.0</td>
                    <td>No</td>
                    <td>Yes</td>
                    <td>Dawn/Dusk</td>
                    <td>All seasons</td>
                </tr>
                </tbody>
            </table>

        </div>
        <div style="width: 75%" class="m-3">
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=336-350%20PA-899,%20Clarington,%20PA%2015828+(Tobecco%20Trail)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="https://www.maps.ie/distance-area-calculator.html">area maps</a>
            </iframe>
        </div>

    </div>
</section>

<?php
require_once '../view/footer.php';
?>

