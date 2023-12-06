<?php
// student_management.php

require_once('db_connection.php');

function addStudent($name, $age, $grade) {
    global $conn;
    $sql = "INSERT INTO students (name, age, grade) VALUES ('$name', $age, '$grade')";
    $conn->query($sql);
}

function getStudents() {
    global $conn;
    $result = $conn->query("SELECT * FROM students");
    return $result->fetch_all(MYSQLI_ASSOC);
}
?>
