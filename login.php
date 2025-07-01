<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $username;

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

if (isset($_SESSION['logged_in'])) {
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Ghost Services</title>
    <link rel="stylesheet" href="login.css">
</head>
  
<body>
    <BR>
    
    <div class="login-box">
        <h2>Login</h2>

        <?php if (!empty($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <p><a href="register.php">Don’t have an account? Register</a></p>
    </div>
</body>
</html>
