// Account Modal Functionality
const accountModal = document.getElementById("account-modal");
const openAccountModalButton = document.getElementById("open-account-modal");
const closeAccountModalButton = document.getElementById("close-modal");

// Only open 'Your Account' modal when clicked on 'Your Account' from the sidebar
openAccountModalButton.addEventListener('click', function(e) {
    e.preventDefault();
    accountModal.style.display = "block";
    document.body.classList.add('modal-open'); // Disable scrolling when modal is open
});

// Close 'Your Account' modal when the 'x' button is clicked
closeAccountModalButton.addEventListener('click', function() {
    accountModal.style.display = "none";
    document.body.classList.remove('modal-open'); // Enable scrolling when modal is closed
});

// Close 'Your Account' modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === accountModal) {
        accountModal.style.display = "none";
        document.body.classList.remove('modal-open'); // Enable scrolling when modal is closed
    }
});


// Help Modal Functionality
const helpModal = document.getElementById("help-modal");
const openHelpModalButton = document.getElementById("open-help-modal");
const closeHelpModalButton = document.getElementById("close-help-modal");

// Only open Help modal when clicked on 'Help' from the sidebar
openHelpModalButton.addEventListener('click', function(e) {
    e.preventDefault();
    helpModal.style.display = "block";
    document.body.classList.add('modal-open'); // Disable scrolling when modal is open
});

// Close Help modal when the 'x' button is clicked
closeHelpModalButton.addEventListener('click', function() {
    helpModal.style.display = "none";
    document.body.classList.remove('modal-open'); // Enable scrolling when modal is closed
});

// Close Help modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === helpModal) {
        helpModal.style.display = "none";
        document.body.classList.remove('modal-open'); // Enable scrolling when modal is closed
    }
});

// Ensure no modals appear on page load (Reset modal states)
window.addEventListener('load', function() {
    accountModal.style.display = "none";
    helpModal.style.display = "none";
    document.body.classList.remove('modal-open'); // Ensure scrolling is enabled
});
