<?php

include_once("connection.php");

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

    # Validate data
    if (
        empty($data->name) ||
        empty($data->address) ||
        empty($data->mobile) ||
        !is_array($data->items)
    ) {
        echo json_encode([
            "status" => "error",
            "message" => "All fields are required"
        ]);
        exit();
    }

    # Query
    $sql = "INSERT INTO `order` (`name`, `address`, `mobile`)
            VALUES (
                '$data->name', 
                '$data->address', 
                '$data->mobile'
            )";
    
    $result = mysqli_query($conn, $sql);
    echo json_encode([
        "status"=> "success",
        "order" => $result
    ]);

} catch (Exception $e) {
    echo "Something went wrong" . $e->getMessage();
}
