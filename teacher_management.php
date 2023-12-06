<?php
// teacher_management.php

require_once('db_connection.php');

function addTeacher($name, $subject) {
    global $conn;
    $sql = "INSERT INTO teachers (name, subject) VALUES ('$name', '$subject')";
    $conn->query($sql);
}

function getTeachers() {
    global $conn;
    $result = $conn->query("SELECT * FROM teachers");
    return $result->fetch_all(MYSQLI_ASSOC);
}
?>
