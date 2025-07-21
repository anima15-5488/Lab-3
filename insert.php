<?php

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $age = filter_var($_POST['age'] ?? '', FILTER_VALIDATE_INT);
        $address = trim($_POST['address'] ?? '');
        $mobile = trim($_POST['mobile_number'] ?? '');
        $gender = $_POST['gender'] ?? '';
        $course = $_POST['course'] ?? '';

        $stmt = $pdo->prepare("INSERT INTO users (name, email, age, address, mobile_number, gender, course) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $age, $address, $mobile, $gender, $course]);

        echo "User data inserted successfully!";
    } else {
        echo "Invalid request method.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
