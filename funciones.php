<?php
include 'includeBD.php';

function getAllStudents() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM students");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getStudentById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createStudent($name, $age) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO students (name, age) VALUES (?, ?)");
    return $stmt->execute([$name, $age]);
}

function updateStudent($id, $name, $age) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE students SET name = ?, age = ? WHERE id = ?");
    return $stmt->execute([$name, $age, $id]);
}

function deleteStudent($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
    return $stmt->execute([$id]);
}
?>
