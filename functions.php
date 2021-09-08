<!-- This guided project was instructed by Dani Krossing on Youtube https://youtu.be/STJfIu8T3kM
Since this is PHP code, make sure to add the proper tag at the beginning of document-->
<?php
function myCalculator($num01, $oper, $num02) { 
    /*include the different parameters, or pieces of data inside the () of function
    First Step: Declare variable called sum, FYI you are not assigning a value to this variable
    because you dont know the value yet, you wont know until the user interacts with the form
    */
    $sum;
    switch ($oper) {
    /*Switch statements are similar to IF statements in Python. FYI an IF statement is conditional statement stating 
    that if true, perform function or display information */
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
        default:
            $sum = "There was an error!";
            break;
    }
    return $sum;
    //The variable sum is assigned a value from the switch statement
}

/*This is what will grab the data from page after the form gets submitted. The way data is passed from one document
to another is through the URL by using GET/POST superglobal aka $_GET/POST. */
$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: " . myCalculator($num01, $oper, $num02);

?>