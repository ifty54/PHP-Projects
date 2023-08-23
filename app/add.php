<?php 
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['title']) && !empty($_POST['title'])) {
        $title = $_POST['title'];

        try {
            $stmt = $conn->prepare("INSERT INTO tasks (title, date_time) VALUES (?, NOW())");
            $stmt->execute([$title]);
            header("Location: dashboard.php");
            exit;
        } catch (PDOException $e) {
            header("Location: dashboard.php?mess=error");
            exit;
        }
    } else {
        header("Location: dashboard.php?mess=error");
        exit;
    }
} else {
    header("Location: dashboard.php");
    exit;
}
?>