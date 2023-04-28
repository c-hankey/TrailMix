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

?>
