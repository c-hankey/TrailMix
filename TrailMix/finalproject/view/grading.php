<?php
$title = "Grading";
require_once '../view/header.php';
$filename = '../view/grading.php';
?>

    <section id="grading">

        <div class="container-md my-4">
            <table width="100%" border="1" class="grade">
                <tr>
                    <th>CIS 370 Assignment 3 Specific Requirement</td>s
                    <th>How to test this feature.</th>
                    <th>Works Completely<br />
                        (Yes/No)</th>
                </tr>
                <tr>
                    <td>1. Convert your web application to use the simple MVC pattern demonstrated in class.</td>
                    <td>Look at the URL when navigating</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">a. Add a controller.php that is called any time a request is made to a new page in your site.  </td>
                    <td>Look at the URL when clicking something</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">b. Organize your model, view, and controller code in the appropriate folders.</td>
                    <td>Look at the folder structure</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">c. Go back and modify the file processing pages (email registration) to use MVC and fix the links in your navigation system.</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>2. Create a database using phpMyAdmin.</td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1"> a. Include at least 6 columns (or fields) with a
                        variety of data types including at least one of each of the following:
                        character string, date, integer, decimal, and Yes/No values.
                    </td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">b. Add at least 15 rows of data into that table.</td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>

                <tr>
                    <td>3. Create a simple PHP page that will display a list of the most important
                        columns for all rows in your table.</td>
                    <td>Listed under the Trails dropdown under Table of Trails</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">a. Use an HTML table to show your column headings and
                        data values.</td>
                    <td>Look at our table</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">b. Add formatting where appropriate for numbers (right justify), dates, phone
                        numbers, SSNs, Y/N values, etc...</td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>4. Make a page that allows the user to Search for subsets of your records.</td>
                    <td>Under the Search Trails in the Trails dropdown</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">a. Search using a Selection box with values pre-loaded
                        in a logical order (like a dropdown of names in alphabetical order).</td>
                    <td>Look at dropdown under Search Trails</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">b. A general search that searches all character fields
                        for any subset of characters.</td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">c. Links to show natural subsets of the data (like &quot;Clearance
                        Items&quot; or &quot;New Listings&quot;).</td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">d. Never show a list of only one item.  If a search results in only one item
                        matching, automatically proceed to the details view if only one item is found.</td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>5. Make a page that shows a Details view of a single row of your data.</td>
                    <td>We have two - one in the hyper link on the table and one in the details link under the Trails > Trails dropdown</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">a. Listing screen should automatically link to this
                        screen passing primary key as a querystring parameter.</td>
                    <td>Look in URL when navigating</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">c. Include the display of your binary data (or player or link if no visual component).  </td>
                    <td>Under the Trails > Trails dropdown</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>6. Use PHP Data Objects instead of the mysql or mysqli interfaces to
                        access your data.</td>
                    <td>Look in our model</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td class="indent1">a. Use prepared statements to execute your parameterized
                        queries to avoid SQL injection.</td>
                    <td>Try typing something in the URL that is harmful</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>7. This sheet linked in to your site under the Admin menu and filled
                        out properly so I can grade it.</td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>8. Complete site published to vcisprod (including
                        redirection to this assignment).</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="indent1">a. Create a .zip file of your whole site and turn it in to the appropriate folder on D2L.</td>
                    <td>&nbsp;</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td colspan="3" bgcolor="#CCCCCC"> <div align="center"><strong><font size="+1">Extra
                                    Credit</font></strong></div></td>
                </tr>
                <tr>
                    <td>9. Add a second table in your database to keep track of category-type information that you can use to feed into a selection box.  </td>
                    <td>&nbsp;</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>10. Make your general search mechanisms work for date ranges and numeric column matches as well as searching your string data fields.</td>
                    <td>&nbsp;</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>11. Include a mechanism to choose an initial sort order for the list entries whenever
                        you search your records.</td>
                    <td>&nbsp;</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td class="indent1">a. The sort order should default to a natural (or common)
                        value and affect the results regardless of which mechanism they used to create the list.</td>
                    <td>&nbsp;</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td class="indent1">b. This must be a server-side sort (from the database) and avoid SQL Injection attacks.</td>
                    <td>&nbsp;</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>12. Allow the user to click any of the column headers to sort the data
                        shown on the client-side.</td>
                    <td>&nbsp;</td>
                    <td>No</td>
                </tr>
            </table>
        </div>

    </section>

<?php
require_once '../view/footer.php';
?>