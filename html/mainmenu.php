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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container">
        <?php include '../html/navbar.php'; ?>
        <div class="main-content">
            <div class="header">
                <h1>Educational Benefit Assistance - Lipa City</h1>
                <div class="applicant-info">
                    <p><strong>Applicant Name:</strong> Ashera Kathryn R. Aguilar</p>
                    <p><strong>Applicant ID:</strong> EBA-109-24</p>
                    <p><strong>Address:</strong> Brgy. Sico Lipa City Batangas</p>
                    <p><strong>Email:</strong> aguilaraskathryn@gmail.com</p>
                    <p><strong>Contact Number:</strong> 09952318729</p>
                    <p><strong>Status:</strong> <span class="pending">PENDING</span></p>
                </div>
            </div>
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/announcement1.jpg" alt="Announcement 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/announcement2.jpg" alt="Announcement 2">
                        <div class="carousel-caption">
                            <h2>ANNOUNCEMENT 2</h2>
                            <p>Some other announcement content here.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control prev">❮</button>
                <button class="carousel-control next">❯</button>
            </div>
            <div class="mission-vision">
                <div class="mission">
                    <h3>Mission</h3>
                    <p>To enhance the competencies of our people thereby achieving global competitiveness. To establish a platform of governance through collaboration of all the sectors of the community. To provide excellent, beneficial and accessible services towards a vibrant, responsive and resilient community.</p>
                </div>
                <div class="vision">
                    <h3>Vision</h3>
                    <p>An economic and cultural hub of the province, home to empowered and God-loving Lipeños, with a business-friendly environment that nurtures inclusive economic growth, equipped with resilient and sustainable infrastructures that protects the biodiversity and natural resources of the City, and inspired by transparent, effective, and efficient leadership.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/applicationpage.js"></script>
</body>
</html>
