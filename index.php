<!-- This guided project was instructed by Dani Krossing on Youtube https://youtu.be/STJfIu8T3kM
This is how to use basic data input from the user and calculate it
First Step: Create basic HTML page to include head tag, body tag, meta tag, etc 
Second Step: Add in a basic HTML form. Forms are how users interact with websites. Use forms to feed data into websites. 
FYI keep this file as .php, it works the same as .html files but with the ability to use PHP code
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mia's Calculator Webpage</title>
    </head>
    <body>
        THIS IS A BASIC CALCULATOR
        <br>
        <!-- Link to PHP document with PHP code and include GET or POST method, these are the HTTP methods
        used inside <form> tag to send form data to the server. PHP has 2 methods in which the client aka browser can
        send info to the server -->
        <!-- Info sent from HTML form using Get method can be seen by everyone in the URL meaning that the 
        variable names and values will be displayed. Use POST method if dealing with sensitive data -->
        <form action="functions.php" method="get"> 
            <input type="text" name="num01" placeholder="Number 1"> 
            <select name="oper">
                <label>Choose Operation!</label>
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
            </select>
            <!-- The select input offers a simple dropdown feature that you can add options to.
            Include name attribute to the select tag and add value to option tags since the value is the data we are to 
            receive. Values need to be initially defined -->
            <input type="text" name="num02" placeholder="Number 2">
                <button type="submit">Calculate!</button>
        </form>         
    </body> 
</html>

