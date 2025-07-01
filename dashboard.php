<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit();
}

$user = $_SESSION['user'] ?? 'Unknown'; 
$status = $_SESSION['vpn_status'] ?? 'Disconnected';
$location = $_SESSION['vpn_location'] ?? ''; 
$IP = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';



?>

<!DOCTYPE html>
<html>
<head>
    <title>Ghost Services Dashboard</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="dashboard">
        <h1>Ghost Services</h1>
        <p><strong>User:</strong> <?php echo $user; ?></p>
        <p><strong>IP address:</strong> <?php echo htmlspecialchars($IP); ?></p>
        <p><strong>Status:</strong> <?php echo $status; ?></p>
        <p><strong>Location:</strong> <?php echo $location; ?></p> 
        <form method="post" action="vpn.php">
            <?php if ($status == 'Disconnected'): ?>
                <input type="hidden" name="action" value="connect">
                <button type="submit" class="btn connect">Connect</button>
            <?php else: ?>
                <input type="hidden" name="action" value="disconnect">
                <button type="submit" class="btn disconnect">Disconnect</button>
            <?php endif; ?>
        </form>
        <a href="home.php" class="logout">Home</a>
        <br>
        <a href="logout.php" class="logout">Logout</a>

    </div>
</body>
</html>
