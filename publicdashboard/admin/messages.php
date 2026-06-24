<div class="dashboard">
    <?php include("../partials/sidebar.php"); ?>
    <div class="main">
        <?php include("../partials/header.php"); ?>

        <div class="content-box">
            <h2>Messages</h2>
            <table>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Message</td>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

    </div>
</div>