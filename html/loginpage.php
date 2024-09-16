<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipeño E-skolar System</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/loginpage.css">
</head>
<body>
    <header>
        <div class="header-left">
            <a href="landingpage.php"> <!-- Added link to the logo -->
                <img src="../img/Logo.png" alt="Lipa City Seal">
            </a>
            <span>Lipa Educational Benefit Assistance Program</span>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to<br><span class="main-title">Lipeño E-skolar System</span></h1>
            <form class="login-form">
                <input type="text" placeholder="Applicant Control Number" required> <!-- Changed type to 'text' -->
                <input type="password" placeholder="Password" required>
                <a href="forgotpassword.php" class="forgot-password">Forgot Password ?</a>
                <button type="submit">Login</button>
                <p>Want to be a scholar? <a href="applyhome.php">Register</a></p>
            </form>
        </div>
    </section>
</body>
</html>
