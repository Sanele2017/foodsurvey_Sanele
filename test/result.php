<?php

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

// Calculate average age, oldest person's age, and youngest person's age
$sql = "SELECT AVG(age) AS average_age, MAX(age) AS max_age, MIN(age) AS min_age FROM survey_responses";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$average_age = $row["average_age"];
$oldest_age = $row["max_age"];
$youngest_age = $row["min_age"];

// Calculate percentage of people who like each food
$sql = "SELECT 
            SUM(CASE WHEN favoriteFoods LIKE '%pizza%' THEN 1 ELSE 0 END) AS pizza_count,
            SUM(CASE WHEN favoriteFoods LIKE '%pasta%' THEN 1 ELSE 0 END) AS pasta_count,
            SUM(CASE WHEN favoriteFoods LIKE '%pap%' THEN 1 ELSE 0 END) AS pap_count,
            SUM(CASE WHEN favoriteFoods LIKE '%other%' THEN 1 ELSE 0 END) AS other_count,
            COUNT(*) AS total_surveys
        FROM survey_responses";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_surveys = $row["total_surveys"];
$pizza_count = $row["pizza_count"];
$pasta_count = $row["pasta_count"];
$pap_count = $row["pap_count"];
$other_count = $row["other_count"];
$pizza_percentage = ($pizza_count / $total_surveys) * 100;
$pasta_percentage = ($pasta_count / $total_surveys) * 100;
$pap_percentage = ($pap_count / $total_surveys) * 100;
$other_percentage = ($other_count / $total_surveys) * 100;

// Calculate average rating for each question
$sql = "SELECT AVG(rating1) AS avg_rating1, AVG(rating2) AS avg_rating2, AVG(rating3) AS avg_rating3, AVG(rating4) AS avg_rating4 FROM survey_responses";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$avg_rating1 = round($row["avg_rating1"], 1);
$avg_rating2 = round($row["avg_rating2"], 1);
$avg_rating3 = round($row["avg_rating3"], 1);
$avg_rating4 = round($row["avg_rating4"], 1);

// Close connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Tshimologong Survey</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto"> <!-- Use ml-auto to move items to the right -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="result.php"><i class="fas fa-poll"></i> Results</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Survey Results Section -->
    <div class="container border border-primary mt-5">
    <div class="container mt-3">
        <h1 class="text-center mb-4">Survey Results</h1>

        <div class="survey-section">
            <h2 class="section-title">Age Statistics</h2>
            <div class="result-item">
                <p>Average Age: <span><?php echo round($average_age, 1); ?></span></p>
                <p>Oldest Person's Age: <span><?php echo $oldest_age; ?></span></p>
                <p>Youngest Person's Age: <span><?php echo $youngest_age; ?></span></p>
            </div>
        </div>

        <div class="survey-section mt-4">
            <h2 class="section-title">Food Preferences</h2>
            <div class="result-item">
                <p>Percentage of People Who Like Pizza: <span><?php echo round($pizza_percentage, 1); ?>%</span></p>
                <p>Percentage of People Who Like Pasta: <span><?php echo round($pasta_percentage, 1); ?>%</span></p>
                <p>Percentage of People Who Like Pap and Wors: <span><?php echo round($pap_percentage, 1); ?>%</span></p>
                <p>Percentage of People Who Like Other: <span><?php echo round($other_percentage, 1); ?>%</span></p>
            </div>
        </div>

        <div class="survey-section mt-4">
            <h2 class="section-title">Rating Statistics</h2>
            <div class="result-item">
                <p>Average Rating for 'I like to watch movies': <span><?php echo $avg_rating1; ?></span></p>
                <p>Average Rating for 'I like to listen to radio': <span><?php echo $avg_rating2; ?></span></p>
                <p>Average Rating for 'I like to eat out': <span><?php echo $avg_rating3; ?></span></p>
                <p>Average Rating for 'I like to watch TV': <span><?php echo $avg_rating4; ?></span></p>
            </div>
        </div>
    </div>
</div>
    <script src="script.js"></script> 
</body>
</html>
