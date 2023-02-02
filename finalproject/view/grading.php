<?php
require_once '../view/header.php';
?>

    <section id="grading">

        <div class="container-md my-4">
            <table width="100%" class="table table-bordered">
                <tr><th scope="col">Specific Requirement</th><th scope="col">Works Completely (Yes/No)<br />How to Test?</th></tr>
                <tr><td>1.	Come up with a theme for a site that you will continue throughout the semester.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">a.	It should look like a completely mature (developed) site from the home page.</td><td>&nbsp;</td></tr>
                <tr><td>2.  Follow the basic principles of good web site design.</td><td>&nbsp;</td></tr>
                <tr><td>3.  Create a basic template, color scheme, and CSS for your site and use them consistently.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">a.	Limit any duplication of code to the extent possible.  Modularize your code using Server-Side Includes.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">b.	Use external files for CSS and JavaScript.</td><td>&nbsp;</td></tr>
                <tr><td>4.	Organize the files for your site into appropriate folders.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">a.	Include separate subfolders for CSS, images, JavaScript, etc...</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">b.	Use relative addresses to refer to all local links and files.</td><td>&nbsp;</td></tr>
                <tr><td>5.	Include an index.html page in your http://vcisprod.pennwest.edu/~s_account/ folder to redirect to your site home page.</td><td>&nbsp;</td></tr>
                <tr><td>6.	Include a site Navigation system (menu, links, etc)</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">a.	Include Major and Minor items in navigation system.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">b.	Include major groups for Home, Admin, About, and at least two others that make sense to your site.</td><td>&nbsp;</td></tr>
                <tr><td class="indent2">i.	Include belivable content on your Home Page so it looks like a completed site.</td><td>&nbsp;</td></tr>
                <tr><td class="indent2">ii.	Under the Admin menu, include links for File Uploads, Send Emails, Security, and Grading.</td><td>&nbsp;</td></tr>
                <tr><td class="indent2">iii. Under the About menu item, show an About page that lists your name as the developer and perhaps a date and make your name an e-mail link to yourself. </td><td>&nbsp;</td></tr>
                <tr><td class="indent2">iv.	Include at least one other page with static (hard-coded for now) data that will later be replaced by database data.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">c.	Navigation Links that are not yet implemented should show an under construction message.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">d.	Include a footer with an e-mail link for comments.</td><td>&nbsp;</td></tr>
                <tr><td>7.	Include at least three image files and use CSS/JavaScript to show them so the image collection may expand later.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">b.	Make sure the images show in a similar height/width footprint.</td><td>&nbsp;</td></tr>
                <tr><td>8.	Include an icon or menu item available from the Home Page to see a Newsletter or similar.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">a.	This icon or menu item should show a believable example of that content.</td><td>&nbsp;</td></tr>
                <tr><td>9.	Include an icon for your site that shows on the browser tab when any page of your site is visited.</td><td>&nbsp;</td></tr>
                <tr><td>10.	Implement a Responsive Web Design technique so your site is reformatted automatically for at least full-screen and cell phone resolutions.</td><td>&nbsp;</td></tr>
                <tr><td>11.	Make sure all pages on your site pass the <a href="https://validator.w3.org/">HTML5 conformance checker</a> and the <a href="https://jigsaw.w3.org/css-validator/">CSS validator</a>. Note that CSS errors from the Bootstrap Libraries are allowed.</td><td>&nbsp;</td></tr>
                <tr><td>12.	Link in a Check Sheet page under your Admin menu.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">a.	I will provide you with the layout for this page and you will fill in the table entries for whether or not each specific requirement was met and how to test them (unless it is obvious).</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">b.	Style this page to be consistent with the rest of your site (color, font, heading, navigation, etc).</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">c.	An additional penalty will be levied for any item that you say was tested successfully but does not work.</td><td>&nbsp;</td></tr>
                <tr><td>13.	Publish your site to vcisprod.pennwest.edu.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">a.	Don’t forget to include a redirection page in your public_html folder to send me to your home page.</td><td>&nbsp;</td></tr>
                <tr><td class="indent1">b.	Create a .zip file of your whole site and turn it in to the appropriate folder on D2L.</td><td>&nbsp;</td></tr>
                <tr><td></td><td>&nbsp;</td></tr>
                <tr><th colspan="2">Extra Credit</th></tr>
                <tr><td></td><td>&nbsp;</td></tr>
                <tr><td>14.	Integrate a Google Calendar if it makes sense on your site. This may require you to set up a Google account.</td><td>&nbsp;</td></tr>
                <tr><td>15.	Integrate a chart using the javascript library from <a href="http://www.highcharts.com/">highcharts</a>.  The chart should make sense on your site. </td><td>&nbsp;</td></tr>
                <tr><td>16.	On your About page, include an interactive (zoomable) Google Map centered on your address. This may require you to set up a Google account.</td><td>&nbsp;</td></tr>
            </table>
        </div>

    </section>

<?php
require_once '../view/footer.php';
?>