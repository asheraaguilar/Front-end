// Initialize SweetAlert (make sure SweetAlert library is included in your project)
const applicantContainer = document.getElementById('applicantContainer');
const closeModalBtns = document.querySelectorAll('.close-btn');

let currentApplicant; // To store the applicant being edited

// Dummy data for applicants
const applicants = [
    { ctrlNumber: '001', fullName: 'John Doe', date: '2024-10-01', concern: 'Scholarship Application', remarks: 'Pending review', resolved: false },
    { ctrlNumber: '002', fullName: 'Jane Smith', date: '2024-10-02', concern: 'Document Submission', remarks: 'Awaiting documents', resolved: true }
];

// Load applicants with all filters applied
function loadApplicants() {
    applicantContainer.innerHTML = ''; // Clear current rows

    applicants.forEach((applicant, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${applicant.ctrlNumber}</td>
            <td>${applicant.fullName}</td>
            <td>${applicant.date}</td>
            <td>${applicant.concern}</td>
            <td>${applicant.remarks}</td>
            <td>
                <label class="switch">
                    <input type="checkbox" ${applicant.resolved ? 'checked' : ''} onchange="toggleResolved(${index})">
                    <span class="slider round"></span>
                </label>
            </td>
            <td>
                <button class="delete" id="deleteBtn-${index}">Delete</button>
            </td>
        `;
        applicantContainer.appendChild(row);

        // Add event listener for delete button
        document.getElementById(`deleteBtn-${index}`).addEventListener('click', () => deleteApplicant(index));
    });
}

// Delete applicant
function deleteApplicant(index) {
    applicants.splice(index, 1); // Remove from the array
    loadApplicants(); // Reload the list
}

// Toggle resolved status
function toggleResolved(index) {
    applicants[index].resolved = !applicants[index].resolved; // Toggle the resolved status
    loadApplicants(); // Reload the list to reflect changes
}

// Close modals
closeModalBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Close view/edit modal logic here if applicable
    });
});

// Initial load of applicants
loadApplicants();
