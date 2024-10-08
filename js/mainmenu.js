document.addEventListener('DOMContentLoaded', function () {
    let slideIndex = 0;
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    // Show the current slide and set dot as active
    const showSlides = () => {
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; // Hide all slides
        }
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        slides[slideIndex - 1].style.display = "block"; // Show current slide
        dots[slideIndex - 1].className += " active"; // Activate corresponding dot
        setTimeout(showSlides, 5000); // Change slide every 5 seconds
    };

    // Next/previous controls
    const plusSlides = (n) => {
        slideIndex += n - 1;
        if (slideIndex < 0) {
            slideIndex = slides.length - 1;
        } else if (slideIndex >= slides.length) {
            slideIndex = 0;
        }
        showSlides();
    };

    // Show the specific slide when clicking a dot
    window.currentSlide = (n) => {
        slideIndex = n - 1;
        showSlides();
    };

    // Initial call to start the slideshow
    showSlides();


    // Update the color of the status element based on its content
    const statusElement = document.querySelector('.applicant-info .status');
    if (statusElement) {
        const statusText = statusElement.textContent.trim().toUpperCase();
        if (statusText === 'PENDING') {
            statusElement.style.color = 'red'; // Set color to red for PENDING status
        } else if (statusText === 'ACCEPTED') {
            statusElement.style.color = 'green'; // Set color to green for ACCEPTED status
        }
    } else {
        console.error('Status element not found');
    }
});
