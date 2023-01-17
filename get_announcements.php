<?php
include("connection.php");


$stmt = $con->prepare("SELECT * FROM announcements");
$stmt->execute();
$result = $stmt->get_result();
$announcements = array();
while ($row = $result->fetch_assoc()) {
    $announcements[] = $row;
}

echo json_encode($announcements);

$stmt->close();
$con->close();