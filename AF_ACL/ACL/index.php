<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px; 
            font-weight: bold;
        }
        .form-group input {
            width: calc(100% - 1px); 
            padding: 10px; 
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        .button-group button {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button-group .exit {
            background-color: #ccc;
        }
        .button-group .login {
            background-color: #28a745;
            color: white;
        }
        .button-group button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-group">
                <button type="reset" class="reset">Limpiar campos</button>
                <button type="submit" class="login">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>
