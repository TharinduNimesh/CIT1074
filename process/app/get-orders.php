<?php

include_once("auth.php");

try {
    # Check request method
    if ($_SERVER["REQUEST_METHOD"] !== "GET") {
        echo json_encode([
            "status" => "error",
            "message" => "Only GET requests are allowed"
        ]);
        exit();
    }

    # Get all orders
    $sql = "SELECT o.*, f.name AS food, f.price, i.qty FROM `order` o 
    INNER JOIN order_has_food i ON o.id = i.order_id
    INNER JOIN food f ON f.id = i.food_id
    ORDER BY o.id DESC";
    $result = mysqli_query($conn, $sql);
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

    # Group orders by id
    $orders_with_items = [];
    foreach ($orders as $order) {
        # Check if order exists in orders_with_items
        $order_id = $order["id"];
        $order_obj = array_filter($orders_with_items, function ($item) use ($order_id) {
            return $item["id"] === $order_id;
        });

        if (empty($order_obj)) {
            # Add order to orders_with_items
            $order_obj = [
                "id" => $order_id,
                "name" => $order["name"],
                "address" => $order["address"],
                "mobile" => $order["mobile"],
                "is_completed" => $order["is_completed"],
                "items" => [
                    [
                        "food" => $order["food"],
                        "price" => $order["price"],
                        "qty" => $order["qty"]
                    ]
                ]
            ];
            array_push($orders_with_items, $order_obj);
        } else {
            # Add item to existing order
            $order_obj = $order_obj[count($order_obj) - 1];

            foreach ($orders_with_items as &$o) {
                if ($o["id"] === $order_id) {
                    array_push($o["items"], [
                        "food" => $order["food"],
                        "price" => $order["price"],
                        "qty" => $order["qty"]
                    ]);
                }
            }
        }
    }

    echo json_encode([
        "status" => "success",
        "data" => $orders_with_items
    ]);
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Something went wrong"
    ]);
}
