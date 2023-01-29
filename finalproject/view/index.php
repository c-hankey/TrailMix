
<?php
    require_once '../view/header.php';
?>
<section id="main">

    <div class="d-flex flex-md-row flex-column mx-2">
        <div class="container-lg">
            <div id="carouselExampleIndicat ors" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/boots.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/hikers.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/hikingboots.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        </div>

        <div class="container-sm">
            <h1>Welcome!</h1>
            <p>If you are viewing this page you have stumbled into the world of Trail Mix. No we are not talking about the edible
                treat you eat while performing various activities, but the wonderful world of hiking trails. We are hoping to dive
                into this world by compiling hiking trail information from trails in Western Pennsylvania. Not interested in Pennsylvania?
                That's okay! Our site provides many useful tips and tricks that are useful on any hiking trip. Our site also acts as
                connection point for hikers across the world. Feel free to post a comment or add to any conversation. Now go ahead
                and take a tour around the site!</p>
        </div>
    </div>
</section>

<?php
    require_once '../view/footer.php';
?>


