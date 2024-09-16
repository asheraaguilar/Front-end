document.addEventListener('DOMContentLoaded', () => {
    const steps = document.querySelectorAll('.form-step');
    const circles = document.querySelectorAll('.circle');
    const progress = document.getElementById('progress');
    let currentStep = 0;

    // Function to show the current step and hide others
    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            if (index === stepIndex) {
                step.classList.add('active');
                step.style.display = 'block';
            } else {
                step.classList.remove('active');
                step.style.display = 'none';
            }
        });

        circles.forEach((circle, index) => {
            if (index <= stepIndex) {
                circle.classList.add('active');
            } else {
                circle.classList.remove('active');
            }
        });

        const progressPercent = (stepIndex / (steps.length - 1)) * 100;
        progress.style.width = `${progressPercent}%`;
    }

    // Next step function
    function nextStep() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    }

    // Previous step function
    function prevStep() {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    }

    // Attach event listeners to all "Previous" and "Next" buttons
    const nextButtons = document.querySelectorAll('.next-btn');
    const prevButtons = document.querySelectorAll('.prev-btn');

    nextButtons.forEach(button => {
        button.addEventListener('click', nextStep);
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', prevStep);
    });

    // Initially show the first step
    showStep(currentStep);

    // Sibling Table: Adding new rows dynamically
    const addSiblingBtn = document.getElementById('add-sibling-btn');
    const siblingsTable = document.getElementById('siblings-table').getElementsByTagName('tbody')[0];

    addSiblingBtn.addEventListener('click', () => {
        const newRow = siblingsTable.insertRow();

        newRow.innerHTML = `
            <td><input type="text" name="sibling-name[]" required></td>
            <td><input type="text" name="sibling-occupation[]" required></td>
            <td><input type="text" name="sibling-company[]" required></td>
            <td><input type="date" name="sibling-dob[]" required></td>
            <td><input type="number" name="sibling-age[]" required></td>
        `;
    });

    // Handle form submission
    const form = document.getElementById('registration-form');
    
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Trigger the SweetAlert2
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
