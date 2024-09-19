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
            <li><a href="#" id="open-account-modal"><i class="fas fa-user"></i><span class="menu-item">Your Account</span></a></li>
            <li><a href="#" id="open-help-modal"><i class="fa fa-question-circle"></i><span class="menu-item">Help</span></a></li>
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

<!-- Help Modal Structure -->
<div id="help-modal" class="modal">
    <div class="modal-content">
        <span class="close" id="close-help-modal">&times;</span>
        <h2>Submit a Ticket</h2>
        <div class="form-container">
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" name="full-name" placeholder="Enter your full name">
        </div>
        <div class="form-container">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-container">
            <label for="concerned-category">Concerned Category</label>
            <select id="concerned-category" name="concerned-category">
                <option value="technical-support">Technical Support</option>
                <option value="billing">Billing</option>
                <option value="general-inquiry">General Inquiry</option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </div>
</div>


<script src="../js/navbar.js"></script>
<script src="../js/youraccount.js"></script>
