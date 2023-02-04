<?php
require_once '../view/header.php';
?>

<section id="loop">
    <div class="d-flex flex-md-row flex-column">
        <div class = "flex-column">
            <div class = "container">
                <h1>Description: <br></h1>
                <h6>The Clarion Loop Trail is a 1.6 mile lightly trafficked loop trail located near Clarion. This trail has been added to the North Country Trail connecting Clarion to the Clarion River that winds through hemlocks and hardwoods, passing over creeks and rocks until you reach the river.</h6>
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
                    <td>Clarion University Loop Trail</td>
                    <td>3/5</td>
                    <td>1.6</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>All hours</td>
                    <td>All seasons</td>
                </tr>
                </tbody>
            </table>

        </div>
        <div style="width: 75%" class="m-3">
            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1073%20E%20Main%20St,%20Clarion,%20PA%2016214+(Clarion%20University%20Loop%20Trail)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a>
            </iframe>
        </div>

    </div>
</section>

<?php
require_once '../view/footer.php';
?>

