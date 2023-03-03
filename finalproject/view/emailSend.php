<?php
require_once 'Mail.php';
$title = "Send Emails";
require_once '../view/header.php';
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

// $recipients is an array of addresses,$message is the html
$message = "<html><head></head><body></body></html>";
//    $recipients = array('jon.odonnell@gmail.com');

echo "<h3>Sending Emails To:</h3><ol>";
$file = fopen('../UserFiles/members.csv', 'rb');
while (($data = fgetcsv($file)) !== FALSE) {
    echo "<li>$data[0] $data[1] ($data[3])</li>" ;
    $recipients[] = $data[3];
}
echo "</ol>";
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
