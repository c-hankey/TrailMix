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
            <a href="mailto: s_cmhankey1@pennwest.edu" class="text-white">EMAIL</a>
        </p>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <p class="text-white mx-2 my-5">Click here to view our newsletter : </p>
        <a href="../docs/TrailMix.pdf" target = _blank>
            <i class="fa-regular fa-newspaper text-white fa-xl"></i>
        </a>
        <p class="text-white mx-3 my-5"><strong>| OR</strong> - Enter your email to sign up</p>

        <div class="form-outline form-white">
            <input type="email" id="emailFooter" class="form-control" placeholder="Under construction..."/>
        </div>
    </div>
</div>
</body>
</html>