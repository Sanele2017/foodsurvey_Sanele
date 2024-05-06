<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "survey_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO survey_responses (fullName, email, contact, birthdate, age, favoriteFoods, rating1, rating2, rating3, rating4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisiiii", $fullName, $email, $contact, $birthdate, $age, $favoriteFoods, $rating1, $rating2, $rating3, $rating4);

    // Set parameters and execute statement
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $birthdate = date('Y-m-d', strtotime($_POST["birthdate"]));
    $age = $_POST["age"];
    $favoriteFoods = isset($_POST["favoriteFoods"]) ? implode(", ", $_POST["favoriteFoods"]) : "";
    $rating1 = $_POST["rating1"];
    $rating2 = $_POST["rating2"];
    $rating3 = $_POST["rating3"];
    $rating4 = $_POST["rating4"];

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Redirect back to the survey form or to a thank you page
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    // If the form wasn't submitted, redirect to the survey form
    header("Location: index.php");
    exit();
}
?>
