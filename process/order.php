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

    if (!$result) {
        echo json_encode([
            "status" => "error",
            "message" => "Error while placing order"
        ]);
        exit();
    }

    # Get last inserted id
    $sql = "SELECT * FROM `order` WHERE 
        `name` = '$data->name' AND 
        `address` = '$data->address' AND 
        `mobile` = '$data->mobile' ORDER BY `id` DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $order = mysqli_fetch_array($result);

    if (!$result) {
        echo json_encode([
            "status" => "error",
            "message" => "Something went wrong"
        ]);
        exit();
    }

    # Insert order items
    foreach ($data->items as $item) {
        $sql = "INSERT INTO `order_has_food` (`order_id`, `food_id`, `qty`)
                VALUES (
                    " . $order['id'] . ", 
                    '$item->id',
                    '$item->qty'
                )";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo json_encode([
                "status" => "error",
                "message" => "Something went wrong"
            ]);

            # Delete order if order items insertion fails
            $sql = "DELETE FROM `order` WHERE `id` = " . $order['id'];
            $result = mysqli_query($conn, $sql);

            exit();
        }
    }

    echo json_encode([
        "status" => "success",
        "message" => "Order Placed Successfully"
    ]);
} catch (Exception $e) {
    echo "Something went wrong" . $e->getMessage();
}
