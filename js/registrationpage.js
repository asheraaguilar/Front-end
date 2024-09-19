document.addEventListener('DOMContentLoaded', () => {
    const steps = document.querySelectorAll('.form-step'); // Select all the form steps
    const circles = document.querySelectorAll('.circle'); // Select all the circles in the progress tracker
    const progress = document.getElementById('progress'); // Progress bar element
    let currentStep = 0; // Track the current step

    // Function to show the current step and hide others
    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            if (index === stepIndex) {
                step.classList.add('active');
                step.style.display = 'block'; // Show the current step
            } else {
                step.classList.remove('active');
                step.style.display = 'none'; // Hide other steps
            }
        });

        circles.forEach((circle, index) => {
            if (index <= stepIndex) {
                circle.classList.add('active'); // Highlight the completed steps in the progress bar
            } else {
                circle.classList.remove('active');
            }
        });

        const progressPercent = (stepIndex / (steps.length - 1)) * 100;
        progress.style.width = `${progressPercent}%`; // Update progress bar width
    }

    // Function to handle the "Next" button click
    function nextStep() {
        if (currentStep < steps.length - 1) {
            currentStep++; // Move to the next step
            showStep(currentStep); // Show the next step
        }
    }

    // Function to handle the "Previous" button click
    function prevStep() {
        if (currentStep > 0) {
            currentStep--; // Move to the previous step
            showStep(currentStep); // Show the previous step
        }
    }

    // Attach event listeners to all "Next" buttons
    const nextButtons = document.querySelectorAll('.next-btn');
    nextButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default form submission
            nextStep(); // Move to the next step
        });
    });

    // Attach event listeners to all "Previous" buttons
    const prevButtons = document.querySelectorAll('.prev-btn');
    prevButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default form submission
            prevStep(); // Move to the previous step
        });
    });

    // Initially show the first step
    showStep(currentStep); // Display the first step on load

    // Sibling Table: Adding new rows dynamically
    const addSiblingBtn = document.getElementById('add-sibling-btn');
    const siblingsTable = document.getElementById('siblings-table').getElementsByTagName('tbody')[0];

    addSiblingBtn.addEventListener('click', () => {
        const newRow = siblingsTable.insertRow(); // Add a new row to the table

        newRow.innerHTML = `
            <td><input type="text" name="sibling-name[]" required></td>
            <td><input type="text" name="sibling-occupation[]" required></td>
            <td><input type="text" name="sibling-company[]" required></td>
            <td><input type="date" name="sibling-dob[]" required></td>
            <td><input type="number" name="sibling-age[]" required></td>
        `;
    });

    // Handle form submission with SweetAlert2
    const form = document.getElementById('registration-form');
    
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Trigger the SweetAlert2 popup
        Swal.fire({
            title: 'YOUR APPLICATION HAS BEEN SUBMITTED!',
            text: 'We will reach out to you via email as soon as we have processed your application. Thank you!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            form.reset(); // Clear the form after submission
        });
    });
});
