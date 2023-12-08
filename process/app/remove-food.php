<?php

include_once("auth.php");

try {
    # Check request method
    if ($_SERVER["REQUEST_METHOD"] !== "DELETE") {
        echo json_encode([
            "status" => "error",
            "message" => "Only DELETE requests are allowed"
        ]);
        exit();
    }

    if (empty($_GET["id"])) {
        echo json_encode([
            "status" => "error",
            "message" => "Food ID is required"
        ]);
        exit();
    }

    $id = $_GET["id"];

    # Mark food as removed
    $sql = "UPDATE food SET is_removed = 1 WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    # Check if query is successful
    if (!$result) {
        echo json_encode([
            "status" => "error",
            "message" => "Error While Removing Food"
        ]);
        exit();
    }

    echo json_encode([
        "status" => "success",
        "message" => "Food Removed Successfully"
    ]);
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}
