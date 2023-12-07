<?php

include_once("connection.php");

try {
    # Check request method
    if ($_SERVER["REQUEST_METHOD"] !== "GET") {
        echo json_encode([
            "status" => "error",
            "message" => "Only GET requests are allowed"
        ]);
        exit();
    }

    # Query
    $sql = "SELECT c.name as category, f.* FROM food f
    INNER JOIN category c on c.id = f.category_id
    WHERE f.is_removed = 0";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo json_encode([
            "status" => "error",
            "message" => "Error while fetching menu"
        ]);
        exit();
    }

    # Get data
    $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode([
        "status" => "success",
        "data" => $menu
    ]);
} catch (Exception $e) {
    echo json_encode([
        "message" => "Something went wrong",
    ]);
}

$conn->close();