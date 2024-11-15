<?php
session_start();

if (isset($_SESSION['user_id'])) {
    echo json_encode([
        "message" => "Welcome to the dashboard!",
        "user_id" => $_SESSION['user_id'],
        "role" => $_SESSION['role']
    ]);
} else {
    echo json_encode(["message" => "Access denied. Please log in."]);
}
?>
