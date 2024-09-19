<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipeño E-skolar System</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/mainmenu.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/requirementspage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container">
        <?php include '../html/navbar.php'; ?>
        <!-- Progress Indicator -->
        <div class="progress-indicator">
            <ul class="progressbar" id="progress-bar">
                <li class="active step"><i class="fa fa-user"></i> Basic Info</li>
                <li class="step"><i class="fa fa-file"></i> Requirements</li>
                <li class="step"><i class="fa fa-check"></i> Submit</li>
            </ul> 
        </div>
        
        <div class="requirements">
            <h2>Requirements</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Certified true Copy of Grades</td>
                        <td><input type="file" name="grades"></td>
                        <td><button class="delete-btn">Delete</button></td>
                    </tr>
                    <tr>
                        <td>Enrollment Form</td>
                        <td><input type="file" name="enrollment-form"></td>
                        <td><button class="delete-btn">Delete</button></td>
                    </tr>
                    <tr>
                        <td>School ID</td>
                        <td><input type="file" name="school-id"></td>
                        <td><button class="delete-btn">Delete</button></td>
                    </tr>
                    <tr>
                        <td>Signature</td>
                        <td><input type="file" name="signature"></td>
                        <td><button class="delete-btn">Delete</button></td>
                    </tr>
                </tbody>
            </table>

            <button class="submit-btn">Submit</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/applicationpage.js"></script>
    <script src="../js/requirementspage.js"></script>
</body>
</html>
