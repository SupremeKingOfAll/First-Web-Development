<?php

// Replace 'assessment databasse and web.db' with the actual path to your SQLite database file
$databaseFile = 'assessment databasse and web.db';

// Attempt to create a new SQLite3 object representing the database connection
$db = new SQLite3($databaseFile);

// Check if the connection was successful
if (!$db) {
    die("Connection failed: " . $db->lastErrorMsg());
} else {
    // Connection successful, you can output a success message if needed
    // echo "Database is successfully connected";
}



