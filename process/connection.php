<?php

# Database credentials
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "Well#ON123";
$DB_NAME = "restaurant";

# Database connection
try {
    # Connection
    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

    # Check connection
    if ($conn->connect_error) {
        echo json_encode([
            "status" => "error",
            "message" => "Database connection failed"
        ]);
        exit();
    }
} catch (mysqli_sql_exception $e) {
    # Connection failed
    echo json_encode([
        "status" => "error",
        "message" => "Database connection failed"
    ]);
    exit();
}
