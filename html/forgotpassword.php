<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Lipeño E-skolar System</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/forgotpassword.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="../img/Logo.png" alt="City of Lipa Official Seal" class="logo">
            <h1>LIPA EDUCATIONAL BENEFIT ASSISTANCE PROGRAM</h1>
        </div>
        <div class="right-section">
            <form class="forgot-password-form">
                <h2>Forgot Password?</h2>
                <p>Enter your email to reset password</p>
                <input type="email" placeholder="Email" required>
                <div class="buttons">
                    <button type="submit" class="submit-btn">Submit</button>
                    <button type="button" class="cancel-btn" id="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("cancel-btn").addEventListener("click", function() {
            window.location.href = "loginpage.php";
        });
    </script>
</body>
</html>
