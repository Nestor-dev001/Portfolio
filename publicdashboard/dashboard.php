<?php
require "includes/db.php";
$msgCount = $conn->query("SELECT COUNT(*) as total FROM messages")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

    <div class="dashboard">
        <?php include("partials/sidebar.php"); ?>
        <div class="main">
            <?php include("partials/header.php"); ?>

            <div class="cards">
                <div class="card">
                    <h2><?php echo $msgCount; ?></h2>
                    <p>Total Messages</p>
                </div>
                <div class="card">
                    <h2><?php echo $projectCount; ?></h2>
                    <p>Projects</p>
                </div>
            </div>

            <div class="content-box">
                <h3>Welcome back 👋</h3>
                <p>Manage your portfolio efficiently.</p>
            </div>

        </div>
    </div>

    <script src="js/dashboard.js"></script>

</body>

</html>