<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipeño E-skolar System</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/landingpage.css">
</head>
<body>
    <header>
        <div class="header-left">
            <img src="../img/Logo.png" alt="Lipa City Seal"> 
            <span>Lipa Educational Benefit Assistance Program</span>
        </div>
        <nav class="header-right">
            <a href="#home">Home</a>
            <a href="#carousel">Articles</a>
            <a href="loginpage.php">Login</a>
            <a href="applyhome.php">Apply</a>
            <a href="#contact">Contact Us</a>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1><span class="welcome">WELCOME TO</span><br><span class="main-title">LIPENO E-SKOLAR SYSTEM</span></h1>
            <p>This website serves as a convenient gateway to the Educational Benefit Assistance Program in Lipa City, Batangas. Designed with accessibility in mind, our platform streamlines the registration process, providing students with swift access to vital educational assistance. Join us in paving the way for a brighter future through seamless registration and comprehensive support. KAYANG-KAYA BASTA SAMA SAMA.</p>
            <form action="applyhome.php">
                <button type="submit">Be an EBA Scholar</button>
            </form>
        </div>
    </section>

    <!-- Add Carousel Title -->
    <section class="carousel-section" id="carousel">
        <h2 class="carousel-title">Latest Events</h2>
        <div class="carousel-container">
        <button class="prev">&#10094;</button>
            <div class="carousel">
                <div class="carousel-item">
                    <img src="../img/event1.jpg" alt="Event Image 1">
                    <p class="date">July 27, 2022</p>
                    <h3 class="title">SHS Batch 2 Distribution</h3>
                    <p class="description">Mayor Eric Africa, kasama ang City Treasurer's Office at City Community Affairs Office, Namahagi ng Educational Financial Assistance para sa SHS Students.</p>
                </div>

                <div class="carousel-item">
                    <img src="../img/event4.jpg" alt="Event Image 3">
                    <p class="date">November 26, 2022</p>
                    <h3 class="title">Unclaimed Educational Assistance Pinamahagi</h3>
                    <p class="description">Mayor Eric Africa Nangunguna sa Pamamahagi ng Unclaimed Educational Benefit Assistance para sa College at Senior High School Scholarships</p>
                </div>

                <div class="carousel-item">
                    <img src="../img/event3.jpg" alt="Event Image 3">
                    <p class="date">June 2, 2023</p>
                    <h3 class="title">EBA Youth Scholars ng BSU</h3>
                    <p class="description">Tuloy tuloy ang pamamahagi ng Educational Financial Assistance ni Mayor Eric Africa sa mga EBA Youth Scholars ng University of Batangas.</p>
                </div>

                <div class="carousel-item">
                    <img src="../img/event2.jpg" alt="Event Image 2">
                    <p class="date">November 28, 2023</p>
                    <h3 class="title">Oportunidad na Full Scholarship para sa N.U</h3>
                    <p class="description">National University, Kaagapay ni Mayor Eric Africa sa Pagbibigay ng Full Scholarship: 50% Sagot ng Paaralan, 50% Sagot ng Pamahalaan</p>
                </div>

                <div class="carousel-item">
                    <img src="../img/event5.jpg" alt="Event Image 3">
                    <p class="date">November 26, 2023</p>
                    <h3 class="title">Sadyang sa Lipa, KABATAAN ang Bida!</h3>
                    <p class="description">Mayor Eric Africa Namahagi ng First Batch ng Educational Benefit Assistance sa 30,000 Mag-aaral</p>
                </div>

                <div class="carousel-item">
                    <img src="../img/event6.jpg" alt="Event Image 3">
                    <p class="date">April 27, 2024</p>
                    <h3 class="title">Kung gustong makatapos, may paraan para sa Kabataan</h3>
                    <p class="description">Full Scholarship Grants at Educational Assistance Programs ng Pamahalaan: Pagkakataon para sa Kabataan sa Lungsod ng Lipa</p>
                </div>  
                
                <div class="carousel-item">
                    <img src="../img/event7.jpg" alt="Event Image 3">
                    <p class="date">April 27, 2024</p>
                    <h3 class="title">Mabilis at maayos na distribution sa mga Kabataang Lipeño</h3>
                    <p class="description">Educational Benefit Assistance ng Mayor Eric Africa, Ilulunsad sa 50 Barangay ng Lungsod ng Lipa</p>
                </div>  

                <div class="carousel-item">
                    <img src="../img/event8.jpg" alt="Event Image 3">
                    <p class="date">April 28, 2024</p>
                    <h3 class="title">Suporta sa Edukasyon ng Pamahalaan</h3>
                    <p class="description">72 Barangay, Nabigyan na ng Educational Benefit Assistance sa Pangunguna ni Mayor Eric Africa para sa Kabataang Lipeño</p>
                </div>  
            </div>
        <button class="next">&#10095;</button>
        </div>
    </section>

    <!-- FAQ Button -->
    <div class="faq-button">
        <a href="#">FAQ's</a>
    </div>

    <!-- FAQ Modal -->
    <div id="faq-modal" class="faq-modal">
        <div class="faq-content">
            <h2>Frequently Asked Questions</h2>
            <ol>
                <li><strong>Ano ang aking gagawin kapag hindi kumpleto ang aking requirements?</strong>
                    <p>Ang mga aplikanteng makakapagsubmit sa nasabing schedule ang mapapabilang sa First Batch Payout. Kumpletong requirements lamang po ang tatanggapin.</p>
                </li>
                <li><strong>Paano kung hindi ako nakapagpasa sa tamang oras, saan ako magpapasa ng aking requirements?</strong>
                    <p>Ang mga hindi makakaabot sa itinakdang schedule ay mapapabilang naman sa Second Batch Payout. Maaaring ipasa ang mga requirements sa City Community Affairs Office.</p>
                </li>
                <li><strong>Ako po ay estudyante mula sa KLL (Kolehiyo ng Lungsod ng Lipa) kami po ay pedeng maging aplikante ng programang ito?</strong>
                    <p>Hindi kasama sa renewal o new applicant ang mga estudyante mula sa KLL sa kadahilanang government funded na ang KLL.</p>
                </li>
                <li><strong>Pwede pa ba ang school ID? Kung hindi, ano ang mga identification card na pwede?</strong>
                    <p>Hindi na pinapayagan ang school ID bagkus kailangan magbigay ng National ID o Voters ID na katunayan na ang aplikante ay taga-lipa.</p>
                </li>
            </ol>
            <button id="close-faq">Close</button>
        </div>
    </div>

    <!-- Footer Section for Contact Information -->
    <footer id="contact">
        <div class="footer-container">
            <div class="footer-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.7990285196258!2d121.1507814!3d13.9423918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6d7eb726bf21%3A0x72afbfdfda4f6aa5!2sLipa%20City%20Hall!5e0!3m2!1sen!2sph!4v1630910429182!5m2!1sen!2sph" 
                width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <p><strong>Lipa City Hall</strong></p>
                <p>President Jose P. Laurel Highway, Brgy. Marawoy, Lipa City, 4217, Batangas, Philippines</p>
                <p>(043) 784 2512</p>
            </div>
            <div class="footer-right">
                <div class="footer-contact">
                    <!-- Added Contact Us Title -->
                    <h3>Contact Us</h3>
                    <p><strong>City Community Affairs Office</strong></p>
                    <p><strong>Address:</strong> Brgy Marawoy, Lipa City, Batangas</p>
                    <p><strong>Contact No.:</strong> (043) XXX-XXXX</p>
                    <p><strong>Email:</strong> example@gmail.com</p>
                    <p><strong>Office Hours:</strong> Monday - Friday, 8:00 AM - 5:00 PM</p>
                </div>

                <!-- Social Media Links -->
                <div class="social-media">
                    <p><strong>Follow Us</strong></p>
                    <a href="https://www.facebook.com/EricAfricaPage" target="_blank">
                        <img src="../img/facebook logo.png" alt="Facebook" class="social-icon">
                    </a>
                    <a href="https://lipa.gov.ph/" target="_blank">
                        <img src="../img/website logo.png" alt="Webpage" class="social-icon">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Lipa City. All rights reserved.</p>
        </div>
    </footer>

    <script src="../js/landingpage.js"></script>
</body>
</html>
