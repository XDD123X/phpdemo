<?php
require_once __DIR__ . '/../Config/database.php';

/* DEBUG – thêm tạm */
if (!isset($conn)) {
    die('DB NOT CONNECTED');
}

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
