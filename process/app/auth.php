<?php

include_once("../connection.php");

try {
    # get session
    session_start();
    if (empty($_SESSION["user"])) {
        echo json_encode([
            "status" => "error",
            "message" => "Forbidden access",
            "redirect" => true,
        ]);
        exit();
    }

    # get user data from session
    $id = $_SESSION["user"]["id"];
    $email = $_SESSION["user"]["email"];

    # get user data from database
    $sql = "SELECT * FROM user WHERE id = '$id' AND email = '$email'";
    $result = mysqli_query($conn, $sql);

    # check if user exists
    if (mysqli_num_rows($result) == 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Unauthorized access",
            "redirect" => true,
        ]);
        exit();
    }
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Something went wrong",
    ]);
    exit();
}
