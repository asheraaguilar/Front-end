<head>
    <link rel="stylesheet" href="../css/navbaradmin.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<div class="sidebar">
    <div class="logo-container">
        <img src="../img/Logo.png" alt="Lipa Logo" class="logo">
    </div>
    <nav>
        <ul>
            <li><a href="../html/dashboard.php"><i class="fas fa-chart-line"></i><span class="menu-item">Dashboard</span></a></li> 
            <li><a href="../html/applicantsadminpage.php"><i class="fas fa-user-friends"></i><span class="menu-item">Applicants</span></a></li> 
            <li><a href="../html/manageaccadmin.php" id="open-account-modal"><i class="fas fa-gear"></i><span class="menu-item">Manage Account</span></a></li> 
            <li><a href="#" id="open-help-modal"><i class="fas fa-print"></i><span class="menu-item">Print Report</span></a></li>
            <li><a href="#" id="open-account-modal"><i class="fas fa-user"></i><span class="menu-item">Your Account</span></a></li> 
            <li><a href="../html/ticketadmin.php" id="open-help-modal"><i class="fas fa-ticket-alt"></i><span class="menu-item">Tickets</span></a></li> 
            <li><a href="#" id="logout-button"><i class="fas fa-sign-out-alt"></i><span class="menu-item">Log out</span></a></li> 
        </ul>
    </nav>
</div>
<div id="account-modal" class="modal">
    <div class="modal-content">
        <span class="close" id="close-modal">&times;</span> <!-- Larger close button -->
        <h2>Your Account</h2>
        <div class="password-container">
            <label for="current-password">Current Password</label>
            <input type="password" id="current-password" name="current-password">
            <i class="fas fa-eye" onclick="togglePassword('current-password')"></i>
        </div>
        <div class="password-container">
            <label for="new-password">New Password</label>
            <input type="password" id="new-password" name="new-password">
            <i class="fas fa-eye" onclick="togglePassword('new-password')"></i>
        </div>
        <div class="password-container">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password">
            <i class="fas fa-eye" onclick="togglePassword('confirm-password')"></i>
        </div>
        <button type="submit">Submit</button>
    </div>
</div>

<!-- Include SweetAlert and JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/navbaradmin.js"></script>
<script src="../js/navbar.js"></script>
