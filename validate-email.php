<?php
$mysqli = require __DIR__ . "/database.php";

$sql = sprintf("SELECT * FROM login_db user WHERE email = '%'", $mysqli->real_escape_string($_GET["email"]));

$result = $mysqli->query($sql);
$is_available = $result->num_rows === 0;

header("content-type: application/json");

echo json_encode(["available" => $is_available]);