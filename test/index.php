<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form Sanele</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> 
    <link href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    

</head>
<body>

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


    <div class="container" style="border: 2px solid blue; padding: 20px;">
    <form id="surveyForm" action="submit.php" method="post" onsubmit="return validateForm()">
        <!-- Personal Details -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" class="form-control form-control-sm" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="Enter your email address" required>
                </div>

                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="tel" id="contact" name="contact" class="form-control form-control-sm" placeholder="Enter your contact number" required>
                </div>
                
                <div class="form-group">
                    <label for="birthdate">Date of Birth:</label>
                    <input type="text" id="birthdate" name="birthdate" class="form-control form-control-sm" placeholder="YYYY-MM-DD" required>
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" class="form-control form-control-sm" min="5" max="120" readonly>
                </div>
            </div>
        </div>
        <!-- Favorite Foods -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Favorite Foods:</label>
                    <div class="form-check">
                    <input type="checkbox" id="pizza" name="favoriteFoods[]" class="form-check-input" value="Pizza">
                    <label for="pizza" class="form-check-label"><i class="fas fa-pizza-slice"></i> Pizza</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="pasta" name="favoriteFoods[]" class="form-check-input" value="Pasta">
                        <label for="pasta" class="form-check-label"><i class="fas fa-utensils"></i> Pasta</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="pap" name="favoriteFoods[]" class="form-check-input" value="Pap and Wors">
                        <label for="pap" class="form-check-label">Pap and Wors</label> <!-- There's no specific icon for Pap and Wors -->
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="other" name="favoriteFoods[]" class="form-check-input" value="Other">
                        <label for="other" class="form-check-label">Other</label>
                    </div>
                </div>
            </div>
        </div>



        <!-- Ratings -->
        <div class="form-group">
            <label for="rating">Rate Out (1-5):</label><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Rating</th>
                        <th>Strongly Agree</th>
                        <th>Agree</th>
                        <th>Neutral</th>
                        <th>Disagree</th>
                        <th>Strongly Disagree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>I like to watch movies</td>
                        <td><input type="radio" id="rating1_1" name="rating1" value="1"></td>
                        <td><input type="radio" id="rating1_2" name="rating1" value="2"></td>
                        <td><input type="radio" id="rating1_3" name="rating1" value="3"></td>
                        <td><input type="radio" id="rating1_4" name="rating1" value="4"></td>
                        <td><input type="radio" id="rating1_5" name="rating1" value="5"></td>
                    </tr>
                    <tr>
                        <td>I like to listen to radio</td>
                        <td><input type="radio" id="rating2_1" name="rating2" value="1"></td>
                        <td><input type="radio" id="rating2_2" name="rating2" value="2"></td>
                        <td><input type="radio" id="rating2_3" name="rating2" value="3"></td>
                        <td><input type="radio" id="rating2_4" name="rating2" value="4"></td>
                        <td><input type="radio" id="rating2_5" name="rating2" value="5"></td>
                    </tr>
                    <tr>
                        <td>I like to eat out</td>
                        <td><input type="radio" id="rating3_1" name="rating3" value="1"></td>
                        <td><input type="radio" id="rating3_2" name="rating3" value="2"></td>
                        <td><input type="radio" id="rating3_3" name="rating3" value="3"></td>
                        <td><input type="radio" id="rating3_4" name="rating3" value="4"></td>
                        <td><input type="radio" id="rating3_5" name="rating3" value="5"></td>
                    </tr>
                    <tr>
                        <td>I like to watch TV</td>
                        <td><input type="radio" id="rating4_1" name="rating4" value="1"></td>
                        <td><input type="radio" id="rating4_2" name="rating4" value="2"></td>
                        <td><input type="radio" id="rating4_3" name="rating4" value="3"></td>
                        <td><input type="radio" id="rating4_4" name="rating4" value="4"></td>
                        <td><input type="radio" id="rating4_5" name="rating4" value="5"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="script.js"></script> 
</body>
</html>
