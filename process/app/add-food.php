<?php

include_once("auth.php");

try {
    # Check request method
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        echo json_encode([
            "status" => "error",
            "message" => "Only POST requests are allowed"
        ]);
        exit();
    }

    # Get data from json
    $data = json_decode(file_get_contents("php://input"));

    if (
        empty($data->name) ||
        empty($data->description) ||
        empty($data->price) ||
        empty($data->category)
    ) {
        echo json_encode([
            "status" => "error",
            "message" => "Please fill all fields"
        ]);
        exit();
    }

    # validate category
    $sql = "SELECT * FROM category WHERE id = '$data->category'";
    $result = mysqli_query($conn, $sql);
    $category = mysqli_fetch_assoc($result);

    # Check if the category exists
    if (!$category) {
        echo json_encode([
            "status" => "error",
            "message" => "Unknown category"
        ]);
        exit();
    }

    # Add food to database
    $sql = "INSERT INTO food (name, description, price, category_id, created_at)
            VALUES (
                '$data->name', 
                '$data->description', 
                '$data->price', 
                '$data->category',
                NOW()
            )";
    $result = mysqli_query($conn, $sql);

    # Check if the food was added successfully
    if (!$result) {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to add food"
        ]);
        exit();
    }
    echo json_encode([
        "status" => "success",
        "message" => "Food added successfully"
    ]);
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Something went wrong" . $e->getMessage(),
    ]);
    exit();
}

$conn->close();