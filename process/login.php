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
    if (empty($data->email) || empty($data->password)) {
        echo json_encode([
            "status" => "error",
            "message" => "All fields are required"
        ]);
        exit();
    }

    # Query
    $sql = "SELECT * FROM user WHERE email = '$data->email'";
    $result = mysqli_query($conn, $sql);

    # Check if query is successful
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $password = $row["password"];

        # Verify password
        if (!password_verify($data->password, $password)) {
            echo json_encode([
                "status" => "error",
                "message" => "Invalid Login Credentials"
            ]);
            exit();
        }
        session_start();

        # Get user data
        $email = $row["email"];
        $name = $row["name"];

        # Set session
        $_SESSION["user"] = [
            "id" => $row["id"],
            "email" => $email,
            "name" => $name,
        ];

        echo json_encode([
            "status" => "success",
            "message" => "Login Successful",
        ]);
        exit();
    }

    echo json_encode([
        "status" => "error",
        "message" => "Invalid Login Credentials",
    ]);
    $conn->close();
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Something went wrong"
    ]);
    $conn->close();
}

$conn->close();
