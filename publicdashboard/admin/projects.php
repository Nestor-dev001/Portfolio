<?php
require "../includes/db.php";

/* ADD PROJECT */
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $link = $_POST['link'];

    $stmt = $conn->prepare("INSERT INTO projects (title,description,link) VALUES (?,?,?)");
    $stmt->bind_param("sss",$title,$desc,$link);
    $stmt->execute();
}

/* DELETE */
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM projects WHERE id=$id");
}

$result = $conn->query("SELECT * FROM projects ORDER BY id DESC");
?>

<div class="dashboard">

<?php include("../partials/sidebar.php"); ?>

<div class="main">

<?php include("../partials/header.php"); ?>

<div class="content-box">

<!-- HEADER -->
<div class="page-header">
    <h2>Projects</h2>
    <button onclick="toggleForm()">+ Add Project</button>
</div>

<!-- ADD FORM -->
<div id="projectForm" class="project-form">

<form method="POST">

<input type="text" name="title" placeholder="Project Title" required>

<textarea name="description" placeholder="Project Description" required></textarea>

<input type="text" name="link" placeholder="Project Link">

<button name="add">Save Project</button>

</form>

</div>

<!-- PROJECT GRID -->
<div class="project-grid">

<?php while($row = $result->fetch_assoc()): ?>

<div class="project-card">

<h3><?php echo $row['title']; ?></h3>

<p><?php echo $row['description']; ?></p>

<div class="project-actions">

<?php if($row['link']): ?>
<a href="<?php echo $row['link']; ?>" target="_blank">View</a>
<?php endif; ?>

<a href="?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>

</div>

</div>

<?php endwhile; ?>

</div>

</div>
</div>
</div>

<script>
function toggleForm(){
    const form = document.getElementById("projectForm");
    form.classList.toggle("show");
}
</script>