<?php
// index.php

require_once('student_management.php');
require_once('teacher_management.php');

// Add a student
addStudent("John Doe", 18, "12th");

// Add a teacher
addTeacher("Mr. Smith", "Math");

// Get all students
$students = getStudents();
echo "<h2>Students:</h2>";
print_r($students);

// Get all teachers
$teachers = getTeachers();
echo "<h2>Teachers:</h2>";
print_r($teachers);
?>
