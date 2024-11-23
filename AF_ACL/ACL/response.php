<?php
session_start();
require_once 'functions.php';

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

// Obtener permisos del usuario
$permissions = get_user_permissions($_SESSION['role_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .protected-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .protected-container h1 {
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
            text-align: center;
        }
        .permissions {
            margin-bottom: 20px;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
        }
        .buttons a {
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            color: white;
            text-align: center;
            flex: 1;
            margin: 0 5px;
        }
        .logout {
            background-color: #dc3545;
        }
        .delete-cookies {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="protected-container">
        <h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <div class="info">
            <p><strong>Role:</strong> <?= htmlspecialchars($_SESSION['role_id'] == 1 ? 'Admin' : 'User') ?></p>
        </div>
        <div class="permissions">
            <p><strong>Permissions:</strong></p>
            <ul>
                <?php foreach ($permissions as $permission): ?>
                    <li><?= htmlspecialchars($permission) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="buttons">
            <a href="logout.php" class="logout">Logout</a>
            <a href="delete_cookies.php" class="delete-cookies">Delete Cookies</a>
        </div>
    </div>
</body>
</html>
