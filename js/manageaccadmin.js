// Get modal elements
const modal = document.getElementById('addAdminModal');
const addAdminBtn = document.getElementById('addAdminBtn');
const closeModalBtn = document.querySelector('.close-btn');
let editingAdminCard = null;  // Variable to track the admin card being edited

// Make sure modal is hidden on page load
modal.style.display = 'none'; // Ensure it is hidden when the page loads

// Show the modal only when "Add Admin" button is clicked
addAdminBtn.addEventListener('click', function() {
    modal.style.display = 'flex'; // Display modal as flex when the button is clicked
    document.getElementById('addAdminForm').reset(); // Reset the form fields when modal opens
    editingAdminCard = null; // Clear the editing state (we're adding a new admin)
});

// Close the modal when the close button is clicked
closeModalBtn.addEventListener('click', function() {
    modal.style.display = 'none'; // Hide the modal
});

// Close the modal when clicking outside the modal content
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none'; // Hide modal if clicked outside of the modal content
    }
});

// Handle saving admin (both for adding and editing)
document.getElementById('saveBtn').addEventListener('click', function() {
    const name = document.getElementById('name').value;
    const gender = document.querySelector('input[name="gender"]:checked').value;
    const email = document.getElementById('email').value;

    if (name && gender && email) {
        if (editingAdminCard) {
            // Update existing admin details (edit mode)
            editingAdminCard.querySelector('.admin-details').innerHTML = `
                <strong>Name:</strong> ${name} <br>
                <strong>Gender:</strong> ${gender} <br>
                <strong>Email:</strong> ${email}
            `;
            Swal.fire({
                icon: 'success',
                title: 'Admin Updated',
                text: 'Co-admin details updated successfully!',
            });
        } else {
            // Create a new admin card (add mode)
            const adminContainer = document.getElementById('adminContainer');
            const adminCard = document.createElement('div');
            adminCard.classList.add('admin-card');
            
            // Admin details
            adminCard.innerHTML = `
                <div class="admin-details">
                    <strong>Name:</strong> ${name} <br>
                    <strong>Gender:</strong> ${gender} <br>
                    <strong>Email:</strong> ${email}
                </div>
                <div class="admin-actions">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </div>
            `;

            // Append the new admin to the list
            adminContainer.appendChild(adminCard);

            // Success alert
            Swal.fire({
                icon: 'success',
                title: 'Admin Added',
                text: 'Co-admin added successfully!',
            });

            // Delete functionality
            adminCard.querySelector('.delete').addEventListener('click', function() {
                adminContainer.removeChild(adminCard);
                Swal.fire({
                    icon: 'info',
                    title: 'Admin Removed',
                    text: 'Co-admin removed successfully!',
                });
            });

            // Edit functionality
            adminCard.querySelector('.edit').addEventListener('click', function() {
                editAdmin(adminCard, name, gender, email);
            });
        }

        // Hide the modal after saving
        modal.style.display = 'none';
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Missing Information',
            text: 'Please fill in all the fields!',
        });
    }
});

// Edit admin function (to pre-fill modal and open it)
function editAdmin(adminCard, name, gender, email) {
    // Set the form fields to the existing admin details
    document.getElementById('name').value = name;
    document.getElementById('email').value = email;
    document.querySelector(`input[name="gender"][value="${gender}"]`).checked = true;

    // Open the modal and set the editing state
    modal.style.display = 'flex';
    editingAdminCard = adminCard; // Set the current card being edited
}
