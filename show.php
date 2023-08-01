<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// Check if the data is passed in the URL as query parameters
if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["gender"])) {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $website = isset($_GET["website"]) ? $_GET["website"] : '';
    $comment = isset($_GET["comment"]) ? $_GET["comment"] : '';
    $gender = $_GET["gender"];

    // Display the user input
    echo "<h2>Your Input:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Website: " . $website . "<br>";
    echo "Comment: " . $comment . "<br>";
    echo "Gender: " . $gender . "<br>";
} else {
    // Data not available in the URL, handle the case accordingly
    echo "No data to display.";
}
?>

</body>
</html>
