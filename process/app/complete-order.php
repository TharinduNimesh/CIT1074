<?php

include_once("auth.php");

try {
    # Check request method
    if ($_SERVER["REQUEST_METHOD"] !== "PUT") {
        echo json_encode([
            "status" => "error",
            "message" => "Only PUT requests are allowed"
        ]);
        exit();
    }

    # Validate data
    if (!isset($_GET["id"])) {
        echo json_encode([
            "status" => "error",
            "message" => "Order ID is required"
        ]);
        exit();
    }

    # Get data from json
    $id = $_GET["id"];

    # Update order status
    $sql = "UPDATE `order` SET `is_completed` = 1 WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);

    # Check if query executed successfully
    if (!$result) {
        echo json_encode([
            "status" => "error",
            "message" => "Error while completing order"
        ]);
        exit();
    }

    echo json_encode([
        "status" => "success",
        "message" => "Order $id Mark As Completed"
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Something went wrong"
    ]);
}
