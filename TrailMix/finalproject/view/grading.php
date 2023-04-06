<?php
$title = "Grading";
require_once '../view/header.php';
$filename = 'grading.php';
?>

    <section id="grading">

        <div class="container-md my-4">
            <table width="100%" class="table table-bordered">
                <tbody>
                <tr><th>Specific Requirement</th><th>How to Test<br/>(if not obvious)</th><th>Works Completely<br>(Yes/No)</th></tr>
                <tr><td>1.	Header, Footer, and Nav included via PHP.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td>2.	All source files organized into proper folders.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td>3.	Automatic redirection from top of your web space to proper location for this assignment.</td><td>Start at vcisprod.pennwest.edu/~s_cmhankey1</td><td>Yes</td></tr>
                <tr><td>4.	Email sign-up link in main navigation or on Home page.</td><td>Located under register link</td><td>Yes</td></tr>
                <tr><td class="indent1">a.	Validate e-mail before saving on client and server.</td><td>Send an invalid email</td><td>Yes</td></tr>
                <tr><td class="indent1">b.	New addresses successfully added.</td><td>Send a valid email</td><td>Yes</td></tr>
                <tr><td class="indent1">c.	Success or error page responds when appropriate.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td>5.	File Management link in Admin menu.</td><td>Located under image upload, newsletter upload, and quote upload</td><td>Yes</td></tr>
                <tr><td class="indent1">a.	Upload page provides a list of all current files in the directory.</td><td>Upload an image file</td><td>Yes</td></tr>
                <tr><td class="indent1">b.  Proper permissions are set on server folders to allow uploads.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent1">c.	Newsletter-Type File Upload Mechanism</td><td>Located under newsletter upload</td><td>Yes</td></tr>
                <tr><td class="indent2">i.	HTML self-contained file with fonts and colors.</td><td>Attached to the various newsletter links on the site</td><td>Yes</td></tr>
                <tr><td class="indent2">ii.	File can be seen via link on home page showing most recently uploaded version.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent2">iii.  Appropriate use of accept attribute to limit file types.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent2">iv.  Upload gives error if not an HTML file.</td><td>Try a non-html file</td><td>Yes</td></tr>
                <tr><td class="indent1">d.	Quote File Upload Mechanism</td><td>Located under quote upload</td><td>Yes</td></tr>
                <tr><td class="indent2">i.	Text file with one line per quote.</td><td>Click the link under the form to view the current file</td><td>Yes</td></tr>
                <tr><td class="indent2">ii.	Upload gives error if not a text file.</td><td>Try a non-text file</td><td>Yes</td></tr>
                <tr><td class="indent2">iii.  Appropriate use of accept attribute.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent2">iv. Link on File Management page to see the current Quote File.</td><td>Located under form for quote upload</td><td>Yes</td></tr>
                <tr><td class="indent1">e.	Image File Uploads</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent2">i.	Allow additional image files to upload.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent2">ii.	Only allow jpeg, gif, and png formats.</td><td>Try uploading something not in this format</td><td>Yes</td></tr>
                <tr><td class="indent2">iii. On successful upload list all files.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent2">iv.	Newly uploaded images may appear on home page.</td><td>They will appear within the carousel</td><td>Yes</td></tr>
                <tr><td class="indent2">v.	Validate and notify if image size matters.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent2">vi.  Appropriate use of accept attribute to limit file types.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td>6.	Sending of Bulk E-Mails</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent1">a.	Newsletter-Type file is body of the message.</td><td>Click send emails link</td><td>Yes</td></tr>
                <tr><td class="indent1">b.	E-Mail is sent to all recipients that have signed up.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent1">c.	No recipient should be able to see the email address of others.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent1">d.	Confirmation page shows all addresses who received a message.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent1">e.	E-Mail is properly addressed to help avoid going to SPAM folders.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td>7.	In your footer, include a way to show the last date modified of each page.</td><td>Located on very bottom of the footer</td><td>Yes</td></tr>
                <tr><td>8.	This sheet linked in to your site under the Admin menu.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td>9.	Make sure all pages on your site pass the <a href="https://validator.w3.org/">HTML5 conformance checker</a> and the <a href="https://jigsaw.w3.org/css-validator/">CSS validator</a>. Note that CSS errors from the Bootstrap Libraries are allowed.</td>
                <td>Some errors show due to the iframe we use on the about and trail details pages. We will look into how to fix this for the next assignment and may change it to an image.</td><td>No</td></tr>
                <tr><td>10.	Complete site published to vcisprod (including redirection).</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td class="indent1">a.	Create a .zip file of your whole site and turn it in to the appropriate folder on D2L.</td><td>&nbsp;</td><td>Yes</td></tr>
                <tr><td></td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><th colspan="2">Extra Credit</th></tr>
                <tr><td></td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>11.	Provide a mechanism to delete unwanted image files.</td><td>&nbsp;</td><td>No</td></tr>
                <tr><td>12.	Show a random quote in your footer.  The quote should
                        come from the Quote file (above) that may be replaced via upload at any
                        time by the user.</td><td>Reload pages to see several different quotes in the footer</td><td>Yes</td></tr>
                <tr><td>13.	Include a "Remember Me" checkbox on e-mail signup page.</td><td>&nbsp;</td><td>No</td></tr>
                <tr><td class="indent1">a.	Include a "Welcome First Name" in header if they wanted to be remembered on that machine.</td><td>&nbsp;</td><td>No</td></tr>
                <tr><td>14.	When adding an e-mail address to receive messages, also
                        validate that any new e-mail added does not already exist on the file
                        before adding it.  If the address was already in the list, give them an
                        appropriate message indicating this.</td><td>&nbsp;</td><td>No</td></tr>
                <tr><td>15.	Allow multi-file selection of images in the upload.</td><td>&nbsp;</td><td>No</td></tr>
                <tr><td>16.	Allow the Newsletter upload to be a PDF file and send it as an attachment to the email.</td><td>&nbsp;</td><td>No</td></tr>
                </tbody>
            </table>
        </div>

    </section>

<?php
require_once '../view/footer.php';
?>