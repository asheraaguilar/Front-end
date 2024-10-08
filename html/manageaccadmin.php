<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipeño E-skolar System</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/manageaccadmin.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <!-- Include PHP navbar -->
    <?php include '../html/navbaradmin.php'; ?>

    <div class="container">
        <h1>Manage Admins</h1>

        <!-- Add Admin Button -->
        <button id="addAdminBtn" class="add-btn">Add Admin</button>

        <!-- Admin List -->
        <div class="admin-list">
            <h2>Existing Admins</h2>
            <div id="adminContainer"></div>
        </div>
    </div>

    <!-- Add Admin Modal -->
<div id="addAdminModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Add Co-Admin</h2>
        <form id="addAdminForm">
            <label for="name">Full Name:</label>
            <input type="text" id="name" placeholder="Enter full name" required>

            <label>Gender:</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="Male" required> Male</label>
                <label><input type="radio" name="gender" value="Female" required> Female</label>
            </div>

            <label for="email">Email Address:</label>
            <input type="email" id="email" placeholder="Enter email address" required>

            <div class="buttons">
                <button type="button" id="saveBtn" class="modal-btn">Save</button>
                <button type="reset" id="cancelBtn" class="modal-btn cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>


    <script src="../JS/manageaccadmin.js"></script>
</body>
</html>
