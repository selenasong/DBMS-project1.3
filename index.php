<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSI 127b</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">COSI 127b</h1><br>
        <h3 style="text-align:center">Connecting Front-End to MySQL DB</h3><br>
    </div>

    <div class="container">
        <h2 style="text-align:left">Project 1.2</h2><br>
    </div>

    <div class="container">
        <label for="movies"> Query 1: view all movies</label><br>
        <form id="movies" method="post" action="index.php">
             <button class="btn btn-primary" type="submit" name="view_movies" id="button-movie">View all movies</button>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="actors"> Query 2: view all actors</label><br>
        <form id="actors" method="post" action="index.php">
            <button class="btn btn-primary" type="submit" name="view_actors" id="button-actor">View all actors</button>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="user_like_a_movie"> Query 3: User likes movies</label><br>
        <form id="user_like_a_movie" method="post" action="index.php"> 
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your email" name="input_email" id="input_email">     
                <input type="int" class="form-control" placeholder="Enter a movie id" name="input_movie_id" id="input_movie_id">            
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="liked" id="button-input-mp">Like the movie</button>
                </div>
            </div>
        </form>
        <br>
    </div>

    <div class="container">
        <h2 style="text-align:left">Project 1.3</h2><br>
    </div>
  
    <div class="container">
        <label for="all_tables">Query 1: List all the tables in the database.</label><br>
        <form id="all_tables" method="post" action="index.php">
            <button class="btn btn-primary" type="submit" name="view_all_tables" id="button-tables">View all tables in the database</button>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="motion_picture_search">Query 2: Search MP by MP name.</label><br>
        <form id="motion_picture_search" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter the name of the motion picture" name="input_mp" id="inputMP">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="mpname_entered" id="button-input-mp">Query</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <label for="mp_search_by_email">Query 3: Find the movies that have been liked by a specific email.</label><br>
        <form id="mp_search_by_email" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your email" name="input_email_mp" id="input_email_mp">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="mpemail_entered" id="button-input-mp">Query</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <label for="mp_search_by_country">Query 4: Search MP by their shooting location country.</label><br>
        <form id="mp_search_by_country" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter a coutry" name="input_country_mp" id="input_country_mp">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="mpcountry_entered" id="button-input-mp">Query</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <label for="mp_search_by_zip">Query 5: List all directors who have directed TV series shot in a specific zip code.</label><br>
        <form id="mp_search_by_zip" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter a zip code" name="input_zip_mp" id="input_zip_mp">                
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="zip_entered" id="button-input-mp">Query</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <label for="people_search_by_num_awards">Query 6: Find the people who have received more than k awards for a single MP in the same year.</label><br>
        <form id="people_search_by_num_awards" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter k" name="input_num_awards" id="input_num_awards">                
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="k_entered" id="button-input-mp">Query</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <label for="youngest_actor">Query 7: Find the youngest and the oldest actors to win at least one award.</label><br>
        <form id="youngest_actor" method="post" action="index.php">
             <button class="btn btn-primary" type="submit" name="view_youngest_actor" id="button-tables">View the youngest actor's info</button>
        </form>
    </div>

    <div class="container">
        <form id="oldest_actor" method="post" action="index.php">
             <button class="btn btn-primary" type="submit" name="view_oldest_actor" id="button-tables">View the oldest actor's info</button>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="producer_search_by_boc_and_budget">Query 8: Find American Producers who had a box office collection of more than or equal to x with a budget less than or equal to y.</label><br>
        <form id="producer_search_by_boc_and_budget" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Enter a number of box office collection" name="input_boc" id="input_boc">     
                <input type="number" class="form-control" placeholder="Enter a number of budget" name="input_budget" id="input_budget">            
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="8_submitted" id="button-input-mp">Query</button>
                </div>
            </div>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="mp_search_by_rating_multiple_role">Query 9: List the people who have played multiple roles in a MP where the rating is more than x.</label><br>
        <form id="mp_search_by_rating_multiple_role" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="float" class="form-control" placeholder="Enter a rating" name="input_rating" id="input_rating">                
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="9_x_submitted" id="button-input-mp">Query</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <label for="boston_thrillers">Query 10: Find the top 2 rates thriller movies that were shot exclusively in Boston.</label><br>
        <form id="boston_thrillers" method="post" action="index.php">
             <button class="btn btn-primary" type="submit" name="view_boston_thriller" id="button-tables">View the top 2 thrillers shot in Boston</button>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="movie_search_by_likes_and_age">Query 11: Find all the movies with more than x likes by users of age less than y.</label><br>
        <form id="movie_search_by_likes_and_age" method="post" action="index.php"> 
            <div class="input-group mb-3">
                <input type="int" class="form-control" placeholder="Enter a min likes" name="input_min_likes" id="input_min_likes">     
                <input type="int" class="form-control" placeholder="Enter a max age" name="input_max_age" id="input_max_age">            
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="11_xsubmitted" id="button-input-mp">Query</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <label for="MWB_actors">Query 12: Find the actors who have played a role in both "Marvel" and "Warner Bros" productions.</label><br>
        <form id="MWB_actors" method="post" action="index.php">
             <button class="btn btn-primary" type="submit" name="view_mwb_actor" id="button-tables">View actors that played a role in both Marvel and Warner Bros</button>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="better_than_comedies">Query 13: Find the MP that have a higher rating than the average rating of all comedy MP.</label><br>
        <form id="better_than_comedies" method="post" action="index.php">
             <button class="btn btn-primary" type="submit" name="view_better_than_comedies" id="button-tables">View Motion Pictures rated higher than avg of comedies</button>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="top_5_crowded_movie">Query 14: Find the top 5 movies with the highest number of people playing a role in that movie.</label><br>
        <form id="top_5_crowded_movie" method="post" action="index.php">
             <button class="btn btn-primary" type="submit" name="view_top_5_crowded_movie" id="button-tables">View top 5 movies with most poeple</button>
        </form>
        <br>
    </div>

    <div class="container">
        <label for="same_birthday_actors">Query 15: Find actors who share the same birthday.</label><br>
        <form id="same_birthday_actors" method="post" action="index.php">
             <button class="btn btn-primary" type="submit" name="view_same_birthday_actors" id="button-tables">View pairs of actors who share the same birthday</button>
        </form>
        <br>
    </div>

    
    

    <!-- Like a movie-->
    <div class="container">
    <?php
        if(isset($_POST['liked']))
        {
           $email = $_POST["input_email"]; 
           $movieid = $_POST["input_movie_id"]; 
        
       
       
            // SQL CONNECTIONS
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("INSERT INTO Likes (uemail, mpid) VALUES (:email, :movieid)");
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':movieid', $movieid, PDO::PARAM_STR);

                // execute statement
                $stmt->execute();
            }
            catch(PDOException $e) {
                echo "Make sure you are a registered user and like a valid movie";
            }
            echo "</table>";
            // destroy our connection
            $conn = null;
        }

    ?>
    </div>

    <!-- View All Movies -->
    <div class="container">
        <?php
        if(isset($_POST['view_movies'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT MotionPicture.id, MotionPicture.name, Movie.mpid, MotionPicture.rating, MotionPicture.production, MotionPicture.budget, Movie.boxoffice_collection FROM Movie JOIN MotionPicture ON Movie.mpid = MotionPicture.id");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>Movies</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> Name </th><th class='col-md-2'>MPID</th><th class='col-md-2'>Rating</th><th class='col-md-2'>Production</th><th class='col-md-2'>Budget</th><th class='col-md-2'>Box Office Collection</th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['mpid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['rating'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['production'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['budget'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['boxoffice_collection'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            $conn = null;
        }
    ?>
    </div>

    <!-- View all tables  -->
    <div class="container">
        <?php
        if(isset($_POST['view_all_tables'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                //retrieve Movie table
                $stmt = $conn->prepare("SELECT * FROM Movie");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>Movie</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> MPID </th><th class='col-md-2'> BOX OFFICE COLLECTION </th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['mpid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['boxoffice_collection'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";

                //retrieve Award table
                $stmt = $conn->prepare("SELECT * FROM Award");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>Award</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> MPID </th><th class='col-md-2'> PID </th><th class='col-md-2'> AWARD NAME </th> <th class='col-md-2'> AWARD YEAR </th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['mpid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['pid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['award_name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['award_year'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";

                //retrieve Genre table
                $stmt = $conn->prepare("SELECT * FROM Genre");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>Genre</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> MPID </th><th class='col-md-2'> GENRE NAME </th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['mpid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['genre_name'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";

                //retrieve Likes Table
                $stmt = $conn->prepare("SELECT * FROM Likes");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>Likes</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> MPID </th><th class='col-md-2'> UEMAIL </th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['mpid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['uemail'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";

                //retrieve Location Table
                $stmt = $conn->prepare("SELECT * FROM Location");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>Location</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> MPID </th><th class='col-md-2'> Zip </th><th class='col-md-2'> City </th><th class='col-md-2'> Country </th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['mpid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['zip'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['city'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['country'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";

                //retrieve MotionPicture Table
                $stmt = $conn->prepare("SELECT * FROM MotionPicture");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>MotionPicture</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> ID </th><th class='col-md-2'> Name </th><th class='col-md-2'> Rating </th><th class='col-md-2'> Production </th><th class='col-md-2'> Budget </th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['id'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['rating'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['production'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['budget'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";

                //retrieve People Table
                $stmt = $conn->prepare("SELECT * FROM People");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>People</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> ID </th><th class='col-md-2'> Name </th><th class='col-md-2'> Nationality </th><th class='col-md-2'> DOB </th><th class='col-md-2'> Gender </th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['id'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['nationality'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['dob'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['gender'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";

                //retrieve Role Table
                $stmt = $conn->prepare("SELECT * FROM Role");

                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<div class='container'>";
                echo "<h1>Role</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> MPID </th><th class='col-md-2'> PID </th><th class='col-md-2'> Role Name </th></thead>";

                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['mpid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['pid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['role_name'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
                
                //retrieve Series Table
                $stmt = $conn->prepare("SELECT * FROM Series");

                $stmt->execute();
    
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
                echo "<div class='container'>";
                echo "<h1>Series</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> MPID </th><th class='col-md-2'> Season Count </th></thead>";
    
                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['mpid'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['season_count'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
                
                //retrieve User Table
                $stmt = $conn->prepare("SELECT * FROM User");

                $stmt->execute();
    
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
                echo "<div class='container'>";
                echo "<h1>User</h1>";
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'> Email </th><th class='col-md-2'> Name </th><th class='col-md-2'> Age </th></thead>";
    
                while($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['email'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['age'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            $conn = null;
        }
    ?>
    </div>

    <!-- View all Actors -->
    <div class="container">
        <?php
            if(isset($_POST['view_actors'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT People.name, People.nationality, People.dob, People.gender FROM People JOIN Role ON People.id = Role.pid WHERE Role.role_name = 'actor'");

                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<div class='container'>";
                    echo "<h1>Actors</h1>";
                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'> Name </th><th class='col-md-2'>Nationality</th><th class='col-md-2'> Date of Birth</th><th class='col-md-2'>Gender</th></tr></thead>";

                    while($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['nationality'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['dob'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['gender'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    echo "</div>";
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
            }
    ?>
    </div>
    
    <!-- Search Motion Picture by Motion Picture Name -->
    <div class="container">
    <?php
        if(isset($_POST["mpname_entered"]))
        {
            $mpname = $_POST["input_mp"]; 
    
            // SQL CONNECTIONS
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT name, rating, production, budget FROM MotionPicture WHERE name=:mpname");
                $stmt->bindParam(':mpname', $mpname, PDO::PARAM_STR);

                // execute statement
                $stmt->execute();

                // set the resulting array to associative. 
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Rating</th><th class='col-md-2'>Production</th><th class='col-md-2'>Budget</th></tr></thead>";    

                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['rating'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['production'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['budget'] . "</td>";
                    echo "</tr>";
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            echo "</table>";
            // destroy our connection
            $conn = null;
        }

    ?>
    </div>

    <!-- Search the liked Motion Pictures according to email -->
    <div class="container">
    <?php
        if(isset($_POST["mpemail_entered"]))
        {
           $email_mp = $_POST["input_email_mp"]; 
       
            // SQL CONNECTIONS
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT MP.name, MP.rating, MP.production, MP.budget FROM MotionPicture MP JOIN Movie ON Movie.mpid=MP.id JOIN Likes L on MP.id = L.mpid WHERE L.uemail=:emailmp");
                $stmt->bindParam(':emailmp', $email_mp, PDO::PARAM_STR);

                // execute statement
                $stmt->execute();

                // set the resulting array to associative. 
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Rating</th><th class='col-md-2'>Production</th><th class='col-md-2'>Budget</th></tr></thead>";    

                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['rating'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['production'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['budget'] . "</td>";
                    echo "</tr>";
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            echo "</table>";
            // destroy our connection
            $conn = null;
        }
    ?>
    </div>
    
    <!-- Search the Motion Pictures according to country -->
    <div class="container">
    <?php
        if(isset($_POST["mpcountry_entered"]))
        {
            $country_mp = $_POST["input_country_mp"]; 

            // SQL CONNECTIONS
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT DISTINCT MP.name FROM MotionPicture MP JOIN Location L on MP.id = L.mpid WHERE L.country=:countrymp");
                $stmt->bindParam(':countrymp', $country_mp, PDO::PARAM_STR);

                // execute statement
                $stmt->execute();

                // set the resulting array to associative. 
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'>Motion Picture Name</th></tr></thead>";    

                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    echo "</tr>";
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            echo "</table>";
            // destroy our connection
            $conn = null;
        }

    ?>
    </div>

    <!-- Search directors of the Series according to zip -->
    <div class="container">
        <?php
            if(isset($_POST["zip_entered"]))
            {
                $zip = $_POST["input_zip_mp"]; 
            
                // SQL CONNECTIONS
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT DISTINCT P.name FROM MotionPicture MP JOIN Location L on MP.id = L.mpid JOIN Series S ON MP.id = S.mpid JOIN Role R ON MP.id = R.mpid JOIN People P ON P.id = R.pid WHERE R.role_name='Director' AND L.zip=:zip");
                    $stmt->bindParam(':zip', $zip, PDO::PARAM_STR);

                    // execute statement
                    $stmt->execute();

                    // set the resulting array to associative. 
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Director Name</th></tr></thead>";    

                    while ($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                        echo "</tr>";
                    }
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                echo "</table>";
                // destroy our connection
                $conn = null;
            }
    ?>
    </div>

    <!-- Search people who have received more than k awards -->
    <div class="container">
        <?php
            if(isset($_POST["k_entered"]))
            {
                $k = $_POST["input_num_awards"]; 
            
                // SQL CONNECTIONS
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT p.name AS person_name,
                    mp.name AS motion_picture_name,
                    a.award_year,
                    COUNT(a.award_name)AS award_count
                    FROM Award a
                    JOIN People p ON a.pid = p.id
                    JOIN MotionPicture mp ON a.mpid = mp.id
                    GROUP BY p.name, mp.name, a.award_year
                    HAVING COUNT(*) > :k");
                    $stmt->bindParam(':k', $k, PDO::PARAM_STR);

                    // execute statement
                    $stmt->execute();

                    // set the resulting array to associative. 
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Person Name</th><th class='col-md-2'>Motion Picture Name</th><th class='col-md-2'>Award Year</th><th class='col-md-2'>Award Count</th></tr></thead>";    

                    while ($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['person_name'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['motion_picture_name'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['award_year'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['award_count'] . "</td>";
                        echo "</tr>";
                    }
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                echo "</table>";
                // destroy our connection
                $conn = null;
            }
    ?>
    </div>

    <!-- View youngest actor -->
     <div class="container">
        <?php
            if(isset($_POST['view_youngest_actor'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT p.name,
                    YEAR(a.award_year) - YEAR(p.dob) AS award_age
                    FROM People p
                    JOIN Award a ON p.id = a.pid
                    WHERE YEAR(a.award_year) - YEAR(p.dob) = (
                        SELECT MIN(YEAR(a1.award_year) - YEAR(p1.dob))
                        FROM People p1
                        JOIN Award a1 ON p1.id = a1.pid
                        JOIN Role R On p1.id = R.pid
                        WHERE R.role_name='Actor'
                    )");

                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<div class='container'>";
                    echo "<h1>Youngest Actor</h1>";
                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'> Name </th><th class='col-md-2'>Age when got the award</th></tr></thead>";

                    while($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['award_age'] . "</td>";
                    }

                    echo "</table>";
                    echo "</div>";
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
            }
    ?>
    </div>

    <!-- View oldest actor -->
    <div class="container">
        <?php
            if(isset($_POST['view_oldest_actor'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT p.name,
                    YEAR(a.award_year) - YEAR(p.dob) AS award_age
                    FROM People p
                    JOIN Award a ON p.id = a.pid
                    WHERE YEAR(a.award_year) - YEAR(p.dob) = (
                        SELECT MAX(YEAR(a1.award_year) - YEAR(p1.dob))
                        FROM People p1
                        JOIN Award a1 ON p1.id = a1.pid
                        JOIN Role R On p1.id = R.pid
                        WHERE R.role_name='Actor'
                    )");

                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<div class='container'>";
                    echo "<h1>Oldest Actor</h1>";
                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'> Name </th><th class='col-md-2'>Age when got the award</th></tr></thead>";

                    while($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['award_age'] . "</td>";
                    }

                    echo "</table>";
                    echo "</div>";
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
            }
    ?>
    </div>

    <!-- Search producers according to box office collection and budget -->
    <div class="container">
        <?php
            if(isset($_POST["8_submitted"])){
                $boc = $_POST["input_boc"]; 
                $budget = $_POST["input_budget"]; 

                // SQL CONNECTIONS
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT People.name as pname, MP.name as mpname, Movie.boxoffice_collection, MP.budget as mpbudget
                    FROM MotionPicture MP
                    JOIN Movie ON MP.id=Movie.mpid
                    JOIN Role ON Role.mpid=Movie.mpid
                    JOIN People ON Role.pid=People.id
                    WHERE Movie.boxoffice_collection >= :boc
                    AND MP.budget <= :budget
                    AND Role.role_name = 'Producer'
                    AND People.nationality='USA'");
                    $stmt->bindParam(':boc', $boc, PDO::PARAM_STR);
                    $stmt->bindParam(':budget', $budget, PDO::PARAM_STR);

                    // execute statement
                    $stmt->execute();

                    // set the resulting array to associative. 
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Producer Name</th><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Box Office Collection</th><th class='col-md-2'>Budget</th></tr></thead>";    

                    while ($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['pname'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['mpname'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['boxoffice_collection'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['mpbudget'] . "</td>";
                        echo "</tr>";
                    }
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                echo "</table>";
                // destroy our connection
                $conn = null;
            }
    ?>
    </div>

    <!-- Search people who have played multiple roles in mp under specific rating -->
    <div class="container">
        <?php
            if(isset($_POST["9_x_submitted"]))
            {
                $rating = $_POST["input_rating"]; 
        
                // SQL CONNECTIONS
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT People.name as person_name, MP.name as mp_name, COUNT(Role.role_name) as counts
                    FROM People 
                    JOIN Role ON People.id=Role.pid
                    JOIN MotionPicture MP ON Role.mpid=MP.id
                    WHERE MP.rating >= :rating
                    GROUP BY People.name, MP.name
                    HAVING COUNT(*)>1");
                    $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);

                    // execute statement
                    $stmt->execute();

                    // set the resulting array to associative. 
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Person Name</th><th class='col-md-2'>Motion Picture Name</th><th class='col-md-2'>Number of Roles</th></tr></thead>";    

                    while ($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['person_name'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['mp_name'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['counts'] . "</td>";
                        echo "</tr>";
                    }
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                echo "</table>";
                // destroy our connection
                $conn = null;
            }   
    ?>
    </div>

    <!-- View top 2 boston thrillers -->
    <div class="container">
        <?php
            if(isset($_POST['view_boston_thriller'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT MotionPicture.name, MotionPicture.rating
                    FROM MotionPicture
                    JOIN Genre ON MotionPicture.id = Genre.mpid
                    JOIN Location ON MotionPicture.id = Location.mpid
                    JOIN Movie ON Movie.mpid=MotionPicture.id
                    WHERE Genre.genre_name = 'thriller'
                    AND Location.city = 'Boston'
                    AND NOT EXISTS (
                        SELECT 1
                        FROM Location
                        WHERE Location.mpid = MotionPicture.id
                        AND Location.city != 'Boston'
                    )
                    ORDER BY MotionPicture.rating DESC
                    LIMIT 2;");

                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<div class='container'>";
                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'> Movie Name </th></tr></thead>";

                    while($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    }

                    echo "</table>";
                    echo "</div>";
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
            }
    ?>
    </div>
    
    <!-- Search movies according to count of likes and age of users -->
    <div class="container">
        <?php
            if(isset($_POST["11_xsubmitted"]))
            {
                $min_likes = $_POST["input_min_likes"]; 
                $max_age = $_POST["input_max_age"]; 
           
                // SQL CONNECTIONS
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "COSI127b";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT MP.name, COUNT(*) AS count
                    FROM MotionPicture MP
                    JOIN Movie ON MP.id=Movie.mpid
                    JOIN Likes ON Likes.mpid=Movie.mpid
                    JOIN User ON User.email=Likes.uemail
                    WHERE User.age<:maxage
                    GROUP BY MP.name
                    HAVING COUNT(*) >:minlikes");
                    $stmt->bindParam(':maxage', $max_age, PDO::PARAM_STR);
                    $stmt->bindParam(':minlikes', $min_likes, PDO::PARAM_STR);

                    // execute statement
                    $stmt->execute();

                    // set the resulting array to associative. 
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Count of Likes</th></tr></thead>";    

                    while ($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                        echo "<td style='text-align:center'>" . $row['count'] . "</td>";
                        echo "</tr>";
                    }
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                echo "</table>";
                // destroy our connection
                $conn = null;
            }
    ?>
    </div>

    <!-- Search actors who have played in both Marvel and Warner Bros -->
    <div class="container">
    <?php
        if(isset($_POST["view_mwb_actor"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";
            
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $stmt = $conn->prepare("SELECT DISTINCT People.name AS ActorName, MotionPicture.name AS MPName
                FROM People
                JOIN Role ON People.id = Role.pid
                JOIN MotionPicture ON Role.mpid = MotionPicture.id
                WHERE Role.role_name = 'Actor'
                AND MotionPicture.production IN ('Marvel', 'Warner Bros')
                AND People.id IN (
                    SELECT pid
                    FROM Role
                    JOIN MotionPicture ON Role.mpid = MotionPicture.id
                    WHERE MotionPicture.production = 'Marvel'
                )
                AND People.id IN (
                    SELECT pid
                    FROM Role
                    JOIN MotionPicture ON Role.mpid = MotionPicture.id
                    WHERE MotionPicture.production = 'Warner Bros'
                )");
    
                // execute statement
                $stmt->execute();
    
                // set the resulting array to associative. 
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'>Actor Name</th><th class='col-md-2'>Movie Name</th></tr></thead>";    
    
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['ActorName'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['MPName'] . "</td>";
                    echo "</tr>";
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
        }
    ?>
    </div>

    <!-- Search motion pictures with rating higher than avg of comedies-->
    <div class="container">
    <?php
        if(isset($_POST["view_better_than_comedies"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $stmt = $conn->prepare("SELECT MotionPicture.name, MotionPicture.rating
                FROM MotionPicture
                WHERE MotionPicture.rating > (
                    SELECT AVG(MotionPicture.rating)
                    FROM MotionPicture
                    JOIN Genre ON MotionPicture.id = Genre.mpid
                    WHERE Genre.genre_name = 'comedy'
                )
                ORDER BY MotionPicture.rating DESC;
                )");
    
                // execute statement
                $stmt->execute();
    
                // set the resulting array to associative. 
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'>Motion Picture Name</th><th class='col-md-2'>Rating</th></tr></thead>";    
    
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['rating'] . "</td>";
                    echo "</tr>";
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
        }
    ?>
    </div>

    <!-- Search movies with the highest number of people playing a role in that movie-->
    <div class="container">
    <?php
        if(isset($_POST["view_top_5_crowded_movie"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $stmt = $conn->prepare("SELECT MotionPicture.name AS MovieName, COUNT(DISTINCT Role.pid) AS PeopleCount, COUNT(*) AS RoleCount
                FROM MotionPicture
                JOIN Role ON MotionPicture.id = Role.mpid
                GROUP BY MotionPicture.id, MotionPicture.name
                ORDER BY PeopleCount DESC
                LIMIT 5");
    
                // execute statement
                $stmt->execute();
    
                // set the resulting array to associative. 
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'>Movie Name</th><th class='col-md-2'>People Count</th><th class='col-md-2'>Role Count</th></tr></thead>";    
    
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['MovieName'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['PeopleCount'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['RoleCount'] . "</td>";
                    echo "</tr>";
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
        }
    ?>
    </div>

    <!-- Search movies with the highest number of people playing a role in that movie-->
    <div class="container">
    <?php
        if(isset($_POST["view_same_birthday_actors"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "COSI127b";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $stmt = $conn->prepare("SELECT DISTINCT P1.name AS actor1_name, P2.name AS actor2_name, P1.dob AS common_birthday
                FROM People P1
                JOIN People P2 ON P1.dob = P2.dob AND P1.id < P2.id
                JOIN Role R1 ON P1.id = R1.pid
                JOIN Role R2 ON P2.id = R2.pid
                WHERE R1.role_name = 'Actor' AND R2.role_name = 'Actor';");
    
                // execute statement
                $stmt->execute();
    
                // set the resulting array to associative. 
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
                echo "<table class='table table-md table-bordered'>";
                echo "<thead class='thead-dark' style='text-align: center'>";
                echo "<tr><th class='col-md-2'>Actor 1</th><th class='col-md-2'>Actor 2</th><th class='col-md-2'>Birthday</th></tr></thead>";    
    
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td style='text-align:center'>" . $row['actor1_name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['actor2_name'] . "</td>";
                    echo "<td style='text-align:center'>" . $row['common_birthday'] . "</td>";
                    echo "</tr>";
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
        }
    ?>
    </div>

    

</body>
</html>
