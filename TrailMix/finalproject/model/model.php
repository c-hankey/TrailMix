<?php

    function getDBConnection() {
        $dsn = 'mysql:host=localhost;dbname=s_djhackenbe';
        $username = 's_djhackenbe';
        $password = 's_djhackenbe';
        try {
            $db = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
        return $db;
    }

    function getAllTrails() {
        try {
            $db = getDBConnection();
            $query = "select * from trail ORDER BY Name";
            $statement = $db->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results; // Array of Rows
        } catch (PDOException $e) {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
    }

    function getLoopTrails() {
        try {
            $db = getDBConnection();
            $query = "select * from trail where Loops = 'Y' ORDER BY Name";
            $statement = $db->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results; // Array of Rows
        } catch (PDOException $e) {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
    }

    function getEasyTrails() {
        try {
            $db = getDBConnection();
            $query = "select * from trail where Difficulty < 3 ORDER BY Name";
            $statement = $db->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results; // Array of Rows
        } catch (PDOException $e) {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
    }

    function getByGeneralSearch($criteria){
        try {
            $db = getDBConnection();
            $query = "select * from trail where Name like :criteria OR Location like :criteria ORDER BY Name";
            $statement = $db->prepare($query);
            $statement->bindValue(':criteria', "%$criteria%");
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closeCursor();
            return $results; // Array of Rows
        } catch (PDOException $e) {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
    }

    function getTrail($trailID) {
        try {
            $db = getDBConnection();
            $query = "SELECT * FROM trail WHERE TrailID = :trailID ";
            $statement = $db->prepare($query);
            $statement->bindValue(':trailID', $trailID);
            $statement->execute();
            $result = $statement->fetch(); // Should be 0 or 1 row
            $statement->closeCursor();
            $result['TrailImagePath'] = checkTrailImagePath($trailID);
            return $result; // False if 0 rows
        } catch (PDOException $e) {
            $errorMessage = $e->getMessage();
            include '../view/errorPage.php';
            die;
        }
    }

    function saveMemberInfo($firstName, $lastName, $age, $email) {
        $file = fopen('../DataFiles/members.csv', 'ab');
        fputcsv($file,
            array($firstName, $lastName, $age, $email));
        fclose($file);
    }

    function getMembers() {
        $file = fopen('../DataFiles/members.csv', 'rb');
        while (($data = fgetcsv($file)) !== FALSE) {
            $memberArray[] = array($data[0], $data[1], $data[2], $data[3]);
        }
        fclose($file);
        return $memberArray;
    }

    function getTrailImagePath($trailID) {
        $trailImageDirectory = "../DataFiles/TrailImages";
        return $trailFilePath = "$trailImageDirectory/$trailID.jpg";
    }

    function checkTrailImagePath($trailID) {
        $trailFilePath = getTrailImagePath($trailID);
        if(is_file($trailFilePath)) {
            return $trailFilePath;
        } else {
            return "";
        }
    }

    function saveTrailImageFile ($trailID, $tempImageFilePath) {
        if($tempImageFilePath != "") {
            $newImagePath = getTrailImagePath($trailID);
            if(move_uploaded_file($tempImageFilePath, $newImagePath) == FALSE) {
                $errorMessage = "Unable to move the image file.";
                include '../view/errorPage.php';
            }
        }
    }

    function insertTrail($name, $description, $location, $distance, $difficulty, $loop, $bike, $activehours, $activeseason, $tempImageFilePath){
        $db = getDBConnection();
        $query = 'INSERT INTO beer (Name, Brewery, Style, Alcohol, IBU, Local, AvailableSince)
			VALUES (:Name, :Brewery, :Style, :Alcohol, :IBU, :Local, :AvailableSince)';
        $statement = $db->prepare($query);

        $statement->bindValue(':Name', $name);
        $statement->bindValue(':Description', $description);
        $statement->bindValue(':Location', $location);
        $statement->bindValue(':Distance', $distance);
        $statement->bindValue(':Difficulty', $difficulty);
        $statement->bindValue(':Loops', $loop);
        $statement->bindValue(':Bike', $bike);
        $statement->bindValue(':ActiveHours', $activehours);
        $statement->bindValue(':ActiveSeason', $activeseason);
        if (empty($availableSince)){		// Date may be blank so store a Null
            $statement->bindValue(':AvailableSince', null, PDO::PARAM_NULL);
        } else {
            $statement->bindValue(':AvailableSince', toMySQLDate($availableSince));
        }

        $success = $statement->execute();
        $statement->closeCursor();


        //Uncomment this code for the success-- it was touched on in a later lecture
        /*if($succes) {
            saveTrailImageFile($db->lastInsetId(), $tempImageFilePath);
            return $db->lastInsertId();
        } else {
            logSQLError($statement->errorInfo());
        }*/
    }

    function updateTrail($trailID, $name, $description, $location, $distance, $difficulty, $loop, $bike, $activehours, $activeseason, $tempImageFilePath, $deleteImage) {
        $db = getDBConnection();
        $query = 'UPDATE trail SET Name = :Name, Description = :Description, Location = :Location, Distance = :Distance,
                  Difficulty = :Difficulty, Loops = :Loop, Bike = :Bike, ActiveHours = :ActiveHours, ActiveSeason = :ActiveSeason
                  WHERE TrailID = :TrailID';
        $statement = $db->prepare($query);
        $statement->bindValue(':Name', $name);
        $statement->bindValue(':Description', $description);
        $statement->bindValue(':Location', $location);
        $statement->bindValue(':Distance', $distance);
        $statement->bindValue(':Difficulty', $difficulty);
        $statement->bindValue(':Loop', $loop);
        $statement->bindValue(':Bike', $bike);
        $statement->bindValue(':ActiveHours', $activehours);
        $statement->bindValue(':ActiveSeason', $activeseason);
        $statement->bindValue(':TrailID', $trailID);

        $success = $statement->execute();
        $statement->closeCursor();
        if($success) {
            saveTrailImageFile($trailID, $tempImageFilePath);
            if($deleteImage && $tempImageFilePath == "") {
                deleteTrailImageFile($trailID);
            }
            return $statement->rowCount();
        } else {
            logSQLError($statement->errorInfo());
        }
    }

    function deleteOneTrail($trailID) {
        $db = getDBConnection();
        $query = 'DELETE FROM trail
                  WHERE TrailID = :TrailID';
        $statement = $db->prepare($query);
        $statement->bindValue(':TrailID', $trailID);
        $success = $statement->execute();
        $statement->closeCursor();
        if ($success) {
            deleteTrailImageFile($trailID);
            return $statement->rowCount(); // Number of rows affected
        } else {
            logSQLError($statement->errorInfo()); // Log error
        }
    }

    function deleteTrailImageFile($trailID) {
        $imageFilePath = checkTrailImagePath($trailID);
        if($imageFilePath != "") {
            if(unlink($imageFilePath) == FALSE) {
                $errorMessage = "Unable to delete image file at $imageFilePath";
                include '../view/errorPage.php';
            }
        }
    }


    function logSQLError($error) {
        $errorMessage = $error[2];
    }

?>
