<?php
require_once 'Mail.php';
$title = "Send Emails";
require_once '../view/header.php';
$filename = '../view/emailSend.php';
?>
<h1>Sending Emails</h1>

<?php
$options['host'] = 'ssl://smtp.gmail.com';
$options['port'] = 465;
$options['auth'] = true;
$options['username'] = 'trailmix.cu@gmail.com';
$options['password'] = 'whcsvjlgdxjcohwf';  //App Password
$mailer = Mail::factory('smtp', $options);

$headers = array ();
$headers['From'] = 'Daniel Hackenberg and Camden Hankey <trailmix.cu.com>';
$headers['Subject'] = 'Trail Mix News Letter';
$headers['Content-type'] = 'text/html';

$message = "<!DOCTYPE html>
            <html lang=\"en\">
            <head>
                <meta charset=\"UTF-8\">
                <title>TrailMix Newsletter</title>

                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

                <style>
                    .back-green {
                        background-color: #6A6B5B;
                    }
                    h1, h3, h4 {
                        color: #191514;
                        font-family: \"Ink Free\";
                    }
                    p, li, h5 {
                        font-family: Arial;
                    }
                    p, h3, ul {
                        margin-left: 10rem;
                        margin-right: 10rem;
                    }
                    .news-border {
                        border-style: solid;
                        border-color: #191514;
                    }
                    .news-header-border {
                        border-top-style: solid;
                        border-bottom-style: solid;
                        border-color: #191514;

                    }
                    .back-black {
                        background-color: #191514;
                    }
                    .back-white {
                        background-color: white;
                        width: 50%;
                        margin: auto;
                    }
                    @media only screen and (max-width: 992px) {
                        .back-white {
                            width: 100%;
                            margin: 0;
                        }
                        p, h3, ul {
                            margin-left: 1rem;
                            margin-right: 1rem;
                        }
                    }
                    .news-col {
                        padding-left: 0;
                        padding-right: 0
                    }
                    .row-border {
                        border-top-style: solid;
                        border-color: #191514;
                    }

                    *, ::after, ::before {
                        box-sizing: border-box;
                    }

                    .justify-content-center {
                        justify-content: center;
                    }
                    .align-items-center {
                        align-items: center;
                    }

                    .d-flex {
                        display: flex;
                    }
                    .my-3 {
                        margin-top: 1rem!important;
                        margin-bottom: 1rem!important;
                    }
                    .py-2 {
                        padding-top: 0.5rem!important;
                        padding-bottom: 0.5rem!important;
                    }
                    .mt-3 {
                        margin-top: 1rem!important;
                    }
                    .pt-3 {
                        padding-top: 1rem!important;
                    }
                    .my-2 {
                        margin-top: 0.5rem!important;
                        margin-bottom: 0.5rem!important;
                    }
                    .text-center {
                        text-align: center;
                    }

                </style>
            </head>
            <body>

            <div class=\"justify-content-center back-black\">
                <div class=\"news-border back-white news-col\">
                    <div class=\"back-green news-header-border py-2\">
                        <div class=\"d-flex align-items-center justify-content-center\">
                            <h1>Trail</h1>
                            <h1>Mix</h1>
                        </div>
                    </div>

                    <div class=\"text-center my-3\">
                        <h1><strong>Cook Forest State Park</strong></h1>
                        <h4 class=\"mt-3\">Camden Hankey & Daniel Hackenberg</h4>
                        <h5>3/3/2023</h5>
                    </div>

                    <div class=\"justify-content-center\">
                        <p>
                            This week we are looking at the beautiful trails of
                            <a href=\"https://www.dcnr.pa.gov/StateParks/FindAPark/CookForestStatePark/Pages/default.aspx\" target=\"_blank\">Cook Forest</a>,
                            featuring the North Country Trail. Home to one of the nation’s biggest old growth forests, the state park won’t
                            disappoint with 450-year-old hemlock trees and winding stretches of the Clarion River.
                        </p>
                        <div class=\"my-2 row-border pt-3\">
                            <h3>Trail of the Week: <strong>Ancient Forest Trail</strong></h3>
                            <p><strong>Description: </strong>The highest concentration of towering old growth white pines in the Northeastern U.S.</p>
                            <ul>
                                <li><strong>Difficulty: </strong>3 out of 5</li>
                                <li><strong>Distance: </strong>12.2 miles</li>
                                <li><strong>Activities: </strong>Hiking, running, snowshoeing</li>
                                <li><strong>Difficulty: </strong>617 ft</li>
                            </ul>
                        </div>

                        <div class=\"my-2 row-border pt-3\">
                            <h3>Recreational Corner:</h3>
                            <p>
                                Stop by <a href=\"http://cooksburgdrygoods.com/\" target=\"_blank\">Cooksburg Dry Goods</a>
                                    to rent snowshoes, cross country skis, and ice skates for family fun in the snow.
                            </p>
                        </div>
                    </div>
                </div>
            </div>";

echo "<h3>Sending Emails To:</h3><ol>";
$file = fopen('../UserFiles/members.csv', 'rb');
while (($data = fgetcsv($file)) !== FALSE) {
    echo "<li>$data[0] $data[1] ($data[3])</li>" ;
    $recipients[] = $data[3];
}
echo \"</ol>";
fclose($file);

$result = $mailer->send($recipients, $headers, $message);

if (PEAR::isError($result)) {
    echo 'Error Sending Email';
    echo '<p>'. $result->getMessage() . '<p>';
} else {
    echo 'Email Sent Successfully';
}


require '../view/footer.php';
?>
