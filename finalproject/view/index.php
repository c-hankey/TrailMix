
<?php
    $title = "TrailMix";
    require_once '../view/header.php';
?>

<section id="main">

    <div class="d-flex flex-md-row flex-column mx-2">
        <div class="container-lg">
            <div id="carouselControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/bridge.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/hikers.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/bigtrees.jpg" class="d-block w-100" alt="...">
                        </div>

                        <?php
                        $current_dir = '../imguploads';
                        $dir = opendir($current_dir);
                        $imgs = [];
                        while(false !== ($file = readdir($dir))){
                            if($file != "." && $file != ".."){;
                                $imgs[] = $file;
                            }
                        }
                        closedir($dir);
                        foreach($imgs as $value)
                        {
                            echo "<div class=\"carousel-item\"> 
                                    <img src=\"../imguploads/$value\" class=\"d-block w-100\" alt=\"...\"> 
                                  </div>";
                        };
                        ?>
                    </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="container-sm">
            <h1><strong>Welcome!</strong></h1>
            <p>If you are viewing this page you have stumbled into the world of Trail Mix. No we are not talking about the edible
                treat you eat while performing various activities, but the wonderful world of hiking trails. We are hoping to dive
                into this world by compiling hiking trail information from trails in Western Pennsylvania. Not interested in Pennsylvania?
                That's okay! Our site provides many useful tips and tricks that are useful on any hiking trip. Our site also acts as
                connection point for hikers across the world. Feel free to post a comment or add to any conversation. Now go ahead
                and take a tour around the site!</p>
            <h1>Featured Activity: </h1>
            <div class="card my-4 mx-4" style = "width: 75%;">
                <div class="card-body">
                    <h5 class="card-title">Gateway Lodge</h5>
                    <p class="card-text"><strong>Wine and Dine Romance Package!</strong></p>
                </div>
                <div class="card-body">
                <p>Come on down to the rustic yet elegant Gateway Lodge! Enjoy <br>
                a candle lit 3-course meal accompanied by a cello and guitar duo to swoon your lover. <br>
                Make your reservation today!</p>
                </div>
                <div class="card-body">
                    <a href="https://gatewaylodge.com/food-and-drink/" class="card-link">Website</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once '../view/footer.php';
?>


