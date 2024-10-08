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
                    <div class="info-text">
                        <p><strong>Applicant Name:</strong> Ashera Kathryn R. Aguilar</p>
                        <p><strong>Applicant ID:</strong> EBA-109-24</p>
                        <p><strong>Address:</strong> Brgy. Sico Lipa City Batangas</p>
                        <p><strong>Email:</strong> aguilaraskathryn@gmail.com</p>
                        <p><strong>Contact Number:</strong> 09952318729</p>
                        <p><strong>Status:</strong> <span class="status">PENDING</span></p>
                    </div>
                    <div class="photo">
                        <img src="../img/samplepic.jpg" alt="Applicant Photo">
                    </div>
                </div>
            </div>
            <div class="carousel">
                <div class="slideshow-container">
                    <!-- Slide 1 -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 6</div>
                        <img src="../img/Announcement 1.png" style="width:100%">
                    </div>

                    <!-- Slide 2 -->
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 6</div>
                        <img src="../img/Announcement 2.png" style="width:100%">
                    </div>

                    <!-- Slide 3 -->
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 6</div>
                        <img src="../img/Announcement 3.png" style="width:100%">
                    </div>

                    <!-- Slide 4 -->
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 6</div>
                        <img src="../img/Announcement 4.png" style="width:100%">
                    </div>

                    <!-- Slide 5 -->
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 6</div>
                        <img src="../img/Announcement 5.png" style="width:100%">
                    </div>

                    <!-- Slide 6 -->
                    <div class="mySlides fade">
                        <div class="numbertext">6 / 6</div>
                        <img src="../img/Announcement 6.png" style="width:100%">
                    </div>

                    <!-- Previous and Next buttons -->
                    <button class="carousel-control prev" onclick="plusSlides(-1)">❮</button>
                    <button class="carousel-control next" onclick="plusSlides(1)">❯</button>
                </div>
            </div>

            <!-- Dots navigation placed outside the carousel -->
            <div class="carousel-dots">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
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
    <script src="../js/mainmenu.js"></script> <!-- Link to mainmenu.js -->
</body>
</html>
