document.addEventListener("DOMContentLoaded", function () {
    const faqButton = document.querySelector('.faq-button a');
    const faqModal = document.getElementById('faq-modal');
    const closeFaqButton = document.getElementById('close-faq');
    const pageContent = document.querySelector('body > *:not(.faq-modal)');
    const body = document.body;

    // Hide modal on page load
    faqModal.style.display = 'none';

    // Show the FAQ modal when the FAQ button is clicked
    faqButton.addEventListener('click', function (e) {
        e.preventDefault();
        faqModal.style.display = 'flex';  // Show the modal
        pageContent.style.filter = 'blur(5px)'; // Apply blur effect to the background
        body.style.overflow = 'hidden';  // Disable scroll when modal is open
    });

    // Close the FAQ modal when clicking the close button
    closeFaqButton.addEventListener('click', function () {
        faqModal.style.display = 'none'; // Hide the modal
        pageContent.style.filter = 'none'; // Remove blur effect
        body.style.overflow = 'auto';  // Re-enable scrolling
    });

    // Close the modal when clicking outside the modal content
    window.addEventListener('click', function (e) {
        if (e.target === faqModal) {
            faqModal.style.display = 'none'; // Hide the modal
            pageContent.style.filter = 'none'; // Remove blur effect
            body.style.overflow = 'auto';  // Re-enable scrolling
        }
    });

    // Carousel functionality
    const carousel = document.querySelector('.carousel');
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');

    // Move carousel items to the right
    next.addEventListener('click', () => {
        carousel.scrollBy({
            left: 300, // Adjust based on the card width
            behavior: 'smooth'
        });
    });

    // Move carousel items to the left
    prev.addEventListener('click', () => {
        carousel.scrollBy({
            left: -300, // Adjust based on the card width
            behavior: 'smooth'
        });
    });
});
