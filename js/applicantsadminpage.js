// Initialize SweetAlert (make sure SweetAlert library is included in your project)
const applicantContainer = document.getElementById('applicantContainer');
const viewApplicationModal = document.getElementById('viewApplicationModal'); // View and edit modal
const closeModalBtns = document.querySelectorAll('.close-btn');
const passwordModal = document.getElementById('passwordModal'); // Password modal
const passwordInput = document.getElementById('passwordInput');
const submitPasswordBtn = document.getElementById('submitPasswordBtn');
const cancelPasswordBtn = document.getElementById('cancelPasswordBtn');
const saveEditBtn = document.getElementById('saveEditBtn'); // Save button for edits
const cancelEditBtn = document.getElementById('cancelEditBtn'); // Cancel button for edits

let currentApplicant; // To store the applicant being edited
let isEditMode = false; // Flag to differentiate between view and edit mode

// Dummy data for applicants
const applicants = [
    { ctrlNumber: '001', name: 'John Doe', email: 'john@example.com', status: 'Pending', type: 'College Financial Assistance', district: 'East', barangay: 'Barangay 1', year: 2023 },
    { ctrlNumber: '002', name: 'Jane Smith', email: 'jane@example.com', status: 'Accepted', type: 'SHS Financial Assistance', district: 'West', barangay: 'Barangay 10', year: 2022 }
];

const districtBarangays = {
    'East': ['Barangay 1', 'Barangay 2', 'Barangay 3'],
    'West': ['Barangay 10', 'Barangay 11', 'Barangay 12'],
    'North': ['Barangay 20', 'Barangay 21', 'Barangay 22'],
    'South': ['Barangay 30', 'Barangay 31', 'Barangay 32']
};

// Filters
let selectedType = '';
let selectedDistrict = '';
let selectedBarangay = '';
let selectedYear = '';

// Load applicants with all filters applied
function loadApplicants() {
    applicantContainer.innerHTML = ''; // Clear current rows

    applicants
        .filter(applicant => 
            (selectedType === '' || applicant.type === selectedType) &&
            (selectedDistrict === '' || applicant.district === selectedDistrict) &&
            (selectedBarangay === '' || applicant.barangay === selectedBarangay) &&
            (selectedYear === '' || applicant.year == selectedYear)
        )
        .forEach((applicant, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${applicant.name}</td>
                <td>${applicant.email}</td>
                <td>${applicant.status}</td>
                <td>
                    <button class="edit" id="editBtn-${index}">Edit</button>
                    <button class="delete" id="deleteBtn-${index}">Delete</button>
                    <button class="view" id="viewBtn-${index}">Evaluate Application</button>
                </td>
            `;
            applicantContainer.appendChild(row);

            // Add actions for each button
            document.getElementById(`editBtn-${index}`).addEventListener('click', () => promptPassword(applicant, true)); // Edit button leads to password prompt
            document.getElementById(`deleteBtn-${index}`).addEventListener('click', () => deleteApplicant(index));
            document.getElementById(`viewBtn-${index}`).addEventListener('click', () => viewApplicationForm(applicant, false)); // View mode
        });
}

const searchInput = document.getElementById('searchInput'); // Search input field

// Search function to filter applicants by name or email
function searchApplicants() {
    const searchTerm = searchInput.value.toLowerCase(); // Get the search term and convert to lowercase

    const filteredApplicants = applicants.filter(applicant => 
        applicant.name.toLowerCase().includes(searchTerm) || 
        applicant.email.toLowerCase().includes(searchTerm)
    );

    // Update the table with filtered applicants
    displayApplicants(filteredApplicants);
}

// Function to load and display applicants (use this to display both filtered and initial applicants)
function displayApplicants(applicantList) {
    applicantContainer.innerHTML = ''; // Clear the current table content

    applicantList.forEach((applicant, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${applicant.ctrlNumber}</td>
            <td>${applicant.name}</td>
            <td>${applicant.email}</td>
            <td>${applicant.status}</td>
            <td>
                <button class="edit" id="editBtn-${index}">Edit</button>
                <button class="delete" id="deleteBtn-${index}">Delete</button>
                <button class="view" id="viewBtn-${index}">View Application</button>
            </td>
        `;
        applicantContainer.appendChild(row);

        // Add event listeners for each button
        document.getElementById(`editBtn-${index}`).addEventListener('click', () => promptPassword(applicant, true));
        document.getElementById(`deleteBtn-${index}`).addEventListener('click', () => deleteApplicant(index));
        document.getElementById(`viewBtn-${index}`).addEventListener('click', () => viewApplicationForm(applicant, false));
    });
}


// Load applicants on page load
loadApplicants(); // This will load the initial list of applicants

// Update the loadApplicants function to use the new displayApplicants
function loadApplicants() {
    displayApplicants(applicants); // Display all applicants initially
}


// Prompt password before editing
function promptPassword(applicant, editMode) {
    currentApplicant = applicant; // Store the current applicant
    isEditMode = editMode; // Set the flag to true for editing
    passwordModal.style.display = 'flex'; // Show password modal
}

// Handle password submission
submitPasswordBtn.addEventListener('click', () => {
    const password = passwordInput.value;
    
    if (password === 'admin123') { // Example password validation
        passwordModal.style.display = 'none'; // Close password modal
        viewApplicationForm(currentApplicant, isEditMode); // Show the application form in edit mode if applicable
    } else {
        // Use SweetAlert for incorrect password alert
        Swal.fire({
            icon: 'error',
            title: 'Incorrect Password',
            text: 'Please enter the correct password!'
        });
    }
});

// View or Edit the Application Form
function viewApplicationForm(applicant, editMode) {
    isEditMode = editMode;

    // Populate the form in the modal with applicant data
    document.getElementById('applicantName').value = applicant.name;
    document.getElementById('applicantId').value = "EBA-109-24"; // Dummy ID
    document.getElementById('applicantType').value = applicant.type;
    document.getElementById('applicantStatus').value = applicant.status;
    document.getElementById('dateOfBirth').value = "01/01/2000"; // Dummy data
    document.getElementById('placeOfBirth').value = "Lipa City"; // Dummy data
    document.getElementById('gender').value = "Female"; // Dummy data
    document.getElementById('age').value = "24"; // Dummy data
    document.getElementById('civilStatus').value = "Single"; // Dummy data
    document.getElementById('contactNumber').value = "09952318729"; // Dummy data
    document.getElementById('district').value = applicant.district;
    document.getElementById('address').value = "Brgy.Sico Lipa City"; // Dummy data

    // Toggle between view and edit mode
    toggleFormEditable(editMode);

    // Show the modal
    viewApplicationModal.style.display = 'flex';
}


// Toggle between view and edit mode
function toggleFormEditable(editable) {
    const formFields = document.querySelectorAll('#viewApplicationModal input');

    formFields.forEach(field => {
        field.readOnly = !editable; // Set fields to read-only if not editable
    });

    // Show the save and cancel buttons only if in edit mode
    saveEditBtn.style.display = editable ? 'block' : 'none';
    cancelEditBtn.style.display = editable ? 'block' : 'none';

    // Show accept/fail buttons only in view mode
    document.getElementById('acceptBtn').style.display = editable ? 'none' : 'block';
    document.getElementById('failBtn').style.display = editable ? 'none' : 'block';
}


// Save edited applicant
saveEditBtn.addEventListener('click', () => {
    const name = document.getElementById('applicantName').value;
    const email = document.getElementById('editEmail').value; // Assuming email is present

    // Update current applicant with new data
    currentApplicant.name = name;
    currentApplicant.email = email; // Update email in the data

    viewApplicationModal.style.display = 'none'; // Close the modal after saving
    loadApplicants(); // Reload the list to reflect changes
});


// Cancel edit operation
cancelEditBtn.addEventListener('click', () => {
    viewApplicationModal.style.display = 'none'; // Close the modal and discard changes
});

// Delete applicant
function deleteApplicant(index) {
    applicants.splice(index, 1); // Remove from the array
    loadApplicants(); // Reload the list
}

// Close modals
closeModalBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        viewApplicationModal.style.display = 'none'; // Close view/edit modal
        passwordModal.style.display = 'none'; // Close password modal
    });
});

// Cancel password modal
cancelPasswordBtn.addEventListener('click', () => {
    passwordModal.style.display = 'none'; // Close password modal
});

let sortDirection = {
    ctrlNumber: true,
    name: true,
    email: true,
    status: true
};

function sortApplicants(property) {
    const sortedApplicants = applicants.sort((a, b) => {
        if (sortDirection[property]) {
            return a[property] > b[property] ? 1 : -1;
        } else {
            return a[property] < b[property] ? 1 : -1;
        }
    });

    sortDirection[property] = !sortDirection[property]; // Toggle sort direction
    displayApplicants(sortedApplicants);
}

// Add event listeners to the sorting buttons
document.getElementById('sortCtrlNumber').addEventListener('click', () => sortApplicants('ctrlNumber'));
document.getElementById('sortName').addEventListener('click', () => sortApplicants('name'));
document.getElementById('sortEmail').addEventListener('click', () => sortApplicants('email'));
document.getElementById('sortStatus').addEventListener('click', () => sortApplicants('status'));

let currentPage = 1;
const rowsPerPage = 5; // Number of rows per page

// Function to display paginated applicants
function displayPaginatedApplicants() {
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const paginatedApplicants = applicants.slice(start, end);
    
    displayApplicants(paginatedApplicants); // Use the existing function
    updatePaginationControls();
}

// Update pagination controls (next/prev buttons)
function updatePaginationControls() {
    const totalPages = Math.ceil(applicants.length / rowsPerPage);
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages;

    document.getElementById('pageNumber').textContent = `Page ${currentPage} of ${totalPages}`;
}

// Go to the next page
document.getElementById('nextBtn').addEventListener('click', () => {
    currentPage++;
    displayPaginatedApplicants();
});

// Go to the previous page
document.getElementById('prevBtn').addEventListener('click', () => {
    currentPage--;
    displayPaginatedApplicants();
});

// Initial load
displayPaginatedApplicants(); // Call this instead of loadApplicants()

// Handle Accept and Failed buttons in the modal
document.getElementById('acceptBtn').addEventListener('click', () => {
    updateApplicantStatus('Accepted');
});

document.getElementById('failBtn').addEventListener('click', () => {
    updateApplicantStatus('Failed');
});

// Update applicant status
function updateApplicantStatus(status) {
    currentApplicant.status = status; // Update the applicant's status
    viewApplicationModal.style.display = 'none'; // Close the modal
    loadApplicants(); // Reload the list to reflect the updated status

    // Use SweetAlert to give user feedback
    Swal.fire({
        icon: 'success',
        title: `Applicant has been marked as ${status}`,
        showConfirmButton: false,
        timer: 1500
    });
}

// View uploaded files
document.getElementById('viewFilesBtn').addEventListener('click', () => {
    if (currentApplicant.uploadedFiles && currentApplicant.uploadedFiles.length > 0) {
        let fileList = currentApplicant.uploadedFiles.map(file => `<a href="${file}" target="_blank">${file}</a>`).join('<br>');
        Swal.fire({
            title: 'Uploaded Files',
            html: fileList,
            icon: 'info'
        });
    } else {
        Swal.fire({
            title: 'No Files',
            text: 'This applicant has not uploaded any files.',
            icon: 'warning'
        });
    }
});

// Initial load of applicants
loadApplicants();
