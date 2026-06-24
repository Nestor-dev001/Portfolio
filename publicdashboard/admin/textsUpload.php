<div class="dashboard">
    <?php include("partials/sidebar.php"); ?>
    <div class="main">
        <?php include("partials/header.php"); ?>

        <div class="content-box">
            <h2>Manage Website Content</h2>
            <form method="POST">
                <input type="text" name="home" placeholder="Home Heading">
                <textarea name="home_desc" placeholder="Home Description"></textarea>
                <textarea name="about" placeholder="About Text"></textarea>
                <button name="save">Save Changes</button>
            </form>
        </div>

    </div>
</div>