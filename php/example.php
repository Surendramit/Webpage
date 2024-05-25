<?php
// Check if the user is logged in as an admin
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Include the necessary files and connect to the database
require_once 'config.php';
require_once 'functions.php';
// $db = connectDB();

// Get some data for the dashboard
// $totalUsers = getTotalUsers($db);
// $totalOrders = getTotalOrders($db);
// $totalRevenue = getTotalRevenue($db);

// Display the admin dashboard
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        /* Some CSS styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .stat {
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
        }
        .stat h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>

    <div class="stat">
        <h2>Total Users</h2>
        <p><?php echo $totalUsers; ?></p>
    </div>

    <div class="stat">
        <h2>Total Orders</h2>
        <p><?php echo $totalOrders; ?></p>
    </div>

    <div class="stat">
        <h2>Total Revenue</h2>
        <p><?php echo $totalRevenue; ?></p>
    </div>

    <a href="logout.php">Logout</a>

</body>
</html>

