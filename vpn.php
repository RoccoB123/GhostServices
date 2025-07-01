<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['action'] == 'connect') {
        $_SESSION['vpn_status'] = 'Connected';
        $_SESSION['vpn_location'] = 'Germany'; // Random location
    } elseif ($_POST['action'] == 'disconnect') {
        $_SESSION['vpn_status'] = 'Disconnected';
    }
}

header('Location: dashboard.php');
exit();
