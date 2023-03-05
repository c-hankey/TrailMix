<div class="container-fluid back-green">

    <div class="d-flex justify-content-center align-items-center">
        <p class="text-white my-4">
            <?php
                $content = file_get_contents('../DataFiles/quotes.txt');
                $quotes = array_filter(explode(PHP_EOL, $content));
                $quote = array_rand($quotes);
                echo($quotes[$quote]);
            ?>
        </p>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <p class="text-white mx-3">Send us an
            <a href="mailto:s_cmhankey1@pennwest.edu" class="text-white">EMAIL</a>
        </p>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <p class="text-white mx-2 my-5">Click here to view our newsletter : </p>
        <a href="../DataFiles/newsletter.html" target = "_blank">
            <i class="fa-regular fa-newspaper text-white fa-xl"></i>
        </a>
    </div>

    <div class="container-fluid text-center text-white">
        <?php
            echo "Last modified " . date("F d Y H:i:s", filemtime($filename))
        ?>
    </div>
</div>
</body>
</html>