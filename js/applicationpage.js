// SweetAlert for logout confirmation
document.getElementById('logout-button').addEventListener('click', function() {
    Swal.fire({
        title: 'Are you sure you want to log out?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, log out'
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect to the logout page or perform the logout operation
            window.location.href = '../html/loginpage.php';
        }
    });
});

// Function to show forms and handle step transitions
function showForm(formId) {
    const forms = document.querySelectorAll('.form-section');
    const stepButtons = document.querySelectorAll('.step-button');
    
    // Hide all forms and remove active class from all buttons
    forms.forEach(form => form.style.display = 'none');
    stepButtons.forEach(button => button.classList.remove('active'));
    
    // Show the selected form
    document.getElementById(formId).style.display = 'block';

    // Set the current step button as active
    document.querySelector(`[onclick="showForm('${formId}')"]`).classList.add('active');
}

// Function to mark steps as completed and move to the next form section
function completeStep(stepNumber) {
    // Mark the current step as completed
    document.getElementById('step-' + stepNumber).classList.add('completed');
    document.getElementById('step-' + stepNumber + '-icon').innerHTML = '<i class="fa fa-check"></i>';
    
    // Move to the next step based on the current step number
    if (stepNumber === 1) {
        showForm('family-info'); // Show the family info form
    } else if (stepNumber === 2) {
        showForm('intentions-info'); // Show the intentions info form
    }
}

// Function to add a new sibling row in the table
function addSiblingRow() {
    const table = document.getElementById('siblings-table').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();

    const nameCell = newRow.insertCell(0);
    const occupationCell = newRow.insertCell(1);
    const companyCell = newRow.insertCell(2);
    const dobCell = newRow.insertCell(3);
    const ageCell = newRow.insertCell(4);

    // Add inputs to the new sibling row
    nameCell.innerHTML = '<input type="text" name="sibling-name[]" required>';
    occupationCell.innerHTML = '<input type="text" name="sibling-occupation[]" required>';
    companyCell.innerHTML = '<input type="text" name="sibling-company[]" required>';
    dobCell.innerHTML = '<input type="date" name="sibling-dob[]" required>';
    ageCell.innerHTML = '<input type="number" name="sibling-age[]" required>';
}

// Function to preview image and make it circular
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.getElementById('picture-preview');
        output.src = reader.result;
        output.style.borderRadius = '50%'; // Make the image circular
    };
    reader.readAsDataURL(event.target.files[0]);
}

// Function to handle form submission and show SweetAlert popup
function submitApplication(event) {
    event.preventDefault(); // Prevent form submission
    Swal.fire({
        title: 'YOUR APPLICATION HAS BEEN SUBMITTED!',
        text: 'We will reach out to you via email as soon as we have processed your application. Thank you!',
        icon: 'success'
    }).then(() => {
        // Optionally redirect to another page after submission
        window.location.href = 'submittedpage.php'; // Example redirection after form submission
    });
}
