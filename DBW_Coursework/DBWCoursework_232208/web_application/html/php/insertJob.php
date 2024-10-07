<?php

// This file name is insertUser.php
// This is the function name
function InsertJob()
{

    // This 4 are variable assignments
    $created = false; // This variable is used to indicate the creation is successful or not
    $db = new SQLite3('assessment databasse and web.db'); // DB connection - get your db file here. It's strongly advised to place your db file outside htdocs. 
    $sql = 'INSERT INTO Courses(JOB_CLASS, CHG_HOUR) VALUES (:JOB_CLASS, :CHG_HOUR)';
    $stmt = $db->prepare($sql); // Prepare the SQL statement

    // Give the values for the parameters
    $stmt->bindParam(':CHG_HOUR', $_POST['CHG_HOUR'], SQLITE3_TEXT); // We use SQLITE3_TEXT for text/varchar. You can use SQLITE3_INTEGER or SQLITE3_REAL for numerical values
    $stmt->bindParam(':JOB_CLASS', $_POST['JOB_CLASS'], SQLITE3_TEXT);

    // Execute the SQL statement
    $stmt->execute();

    // The logic
    if ($stmt) {
        $created = true;
    }

    return $created;
}
?>