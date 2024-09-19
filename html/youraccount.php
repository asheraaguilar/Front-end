<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<div class="sidebar">
    <div class="logo-container">
        <img src="../img/Logo.png" alt="Lipa Logo" class="logo">
    </div>
    <nav>
        <ul>
            <li><a href="../html/mainmenu.php"><i class="fas fa-home"></i><span class="menu-item">Main Menu</span></a></li>
            <li class="active"><a href="../html/applicationpage.php"><i class="fas fa-file-alt"></i><span class="menu-item">Application</span></a></li>
            <!-- Trigger modal on click -->
            <li><a href="#" id="open-account-modal"><i class="fas fa-user"></i><span class="menu-item">Your Account</span></a></li>
            <li><a href="#"><i class="fas fa-cog"></i><span class="menu-item">Settings</span></a></li>
            <li><a href="#" id="logout-button"><i class="fas fa-sign-out-alt"></i><span class="menu-item">Log out</span></a></li>
        </ul>
    </nav>
</div>

<!-- Your Account Modal -->
<div id="account-modal" class="modal">
    <div class="modal-content">
        <span class="close" id="close-modal">&times;</span>
        <h2>Your Account</h2>
        <div class="password-container">
            <label for="current-password">Current Password</label>
            <input type="password" id="current-password" name="current-password">
            <button type="button" onclick="togglePassword('current-password')">Show</button>
        </div>
        <div class="password-container">
            <label for="new-password">New Password</label>
            <input type="password" id="new-password" name="new-password">
            <button type="button" onclick="togglePassword('new-password')">Show</button>
        </div>
        <div class="password-container">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password">
            <button type="button" onclick="togglePassword('confirm-password')">Show</button>
        </div>
        <button type="submit">Submit</button>
    </div>
</div>

<script src="../js/navbar.js"></script>
<script src="../js/youraccount.js"></script>

<!-- Include this script to handle the modal functionality -->
<script>
    // Get modal elements
    const modal = document.getElementById("account-modal");
    const openModalButton = document.getElementById("open-account-modal");
    const closeModalButton = document.getElementById("close-modal");

    // Open modal when 'Your Account' is clicked
    openModalButton.addEventListener('click', function(e) {
        e.preventDefault();
        modal.style.display = "block";
    });

    // Close modal when 'x' button is clicked
    closeModalButton.addEventListener('click', function() {
        modal.style.display = "none";
    });

    // Close modal if user clicks outside of the modal content
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
</script>
