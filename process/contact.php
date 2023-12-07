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
        empty($data->email) ||
        empty($data->subject) ||
        empty($data->mobile) ||
        empty($data->message)
    ) {
        echo json_encode([
            "status" => "error",
            "message" => "All fields are required"
        ]);
        exit();
    }

    # Query
    $sql = "INSERT INTO contact (`name`, `email`, `mobile`, `subject`, `message`)
            VALUES (
                '$data->name', 
                '$data->email', 
                '$data->mobile', 
                '$data->subject', 
                '$data->message'
            )";
    $result = mysqli_query($conn, $sql);

    # Check if query is successful
    if ($result) {
        echo json_encode([
            "status" => "success",
            "message" => "Message Sent Successfully",
        ]);
        exit();
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Message Sending Failed"
        ]);
        exit();
    }
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Something went wrong"
    ]);
}
