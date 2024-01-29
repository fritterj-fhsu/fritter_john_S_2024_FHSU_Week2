<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php
// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// Check if all required parameters are present
if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age'])) {
    // Sanitize input parameters
    $firstname = sanitizeInput($_GET['firstname']);
    $lastname = sanitizeInput($_GET['lastname']);
    $age = sanitizeInput($_GET['age']);

    // Output sentences based on parameters
    echo "<p>Hello, my name is $firstname $lastname.</p>";
    echo "<p>I am $age years old and ";

    // Check age condition
    if ($age >= 18) {
        echo "I am old enough to vote in the United States.</p>";
    } else {
        echo "I am not old enough to vote in the United States.</p>";
    }

    // Calculate and output days based on age
    $days = $age * 365; // Assuming a year has 365 days
    echo "<p>Based on my age, I have lived for approximately $days days.</p>";

    // Output current date
    echo "<p>Current date: " . date("Y-m-d") . "</p>";

} else {
    // Output message if required parameters are not submitted
    echo "<p>Please provide all required parameters (firstname, lastname, age).</p>";
}
?>

</body>
</html>
