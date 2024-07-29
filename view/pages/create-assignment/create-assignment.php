<?php
require '../../../config.php';
$sql = 'SELECT * FROM subjects WHERE user_id = ' . $_SESSION['user_id'];
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Assignment</title>
    <link rel="stylesheet" href="./create-assignment.css">
    <script src="https://kit.fontawesome.com/ee759840f5.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../../public/assets/logo.png" type="image/x-icon">
</head>

<body>
    <?php require_once '../../includes/message.php'; ?>
    <div class="top-bar top-bar-login-register">
        <a class="brand" href="./dashboard.php">
            <img src="../../../public/assets/Assign.png" alt="Assignmate Logo" class="logo">
        </a>
        <nav>
            <a href="../view-assignments/view-assignments.php">Go back</a>
        </nav>
    </div>
    <div class="container-main">
        <div class="sidebar">
            <div class="controls">
                <a href="../view-assignments/view-assignments.php" class="control">Assignments
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="../view-subjects/view-subjects.php" class="control">Subjects
                    <i class="fa-solid fa-chalkboard-user"></i>
                </a>
                <a href="../view-timer/timer.php" class="control">Timer
                    <i class="fa-regular fa-hourglass"></i>
                </a>
                <a href="../view-edit-profile/profile.php" class="control">Profile
                    <i class="fa-regular fa-user"></i>
                </a>
            </div>
        </div>
        <div class="create-assignment-container">
            <h1>Create Assignment</h1>
            <form method="post" action="../../../controllers/create-assignment-controller.php">
                <label for="subject">Select Subject:</label>
                <select id="subject" name="subject_id" required>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['id']}'>{$row['name']}</option>";
                    }
                    ?>
                </select>
                <br>
                <label for="title">Assignment Title:</label>
                <input type="text" id="title" name="title" required>
                <br>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                <br>
                <label for="assigned_date">Assigned Date:</label>
                <input type="date" id="assigned_date" name="assigned_date" required>
                <br>
                <label for="due_date">Due Date:</label>
                <input type="date" id="due_date" name="due_date" required>
                <br>
                <input type="submit" value="Create Assignment">
            </form>
        </div>
    </div>
</body>

</html>