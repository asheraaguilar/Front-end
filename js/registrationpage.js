document.addEventListener('DOMContentLoaded', () => {
    const steps = document.querySelectorAll('.form-step');
    const circles = document.querySelectorAll('.circle');
    const progress = document.getElementById('progress');
    let currentStep = 0;

    // Function to show the current step and hide others
    function showStep(stepIndex) {
        console.log("Current Step Index: ", stepIndex); // Log step index

        steps.forEach((step, index) => {
            if (index === stepIndex) {
                console.log("Showing step: ", stepIndex); // Debug which step is shown
                step.classList.add('active');
                step.style.display = 'block';  // Show the active step
            } else {
                console.log("Hiding step: ", index); // Debug which step is hidden
                step.classList.remove('active');
                step.style.display = 'none';  // Hide non-active steps
            }
        });

        // Update progress circles
        circles.forEach((circle, index) => {
            if (index <= stepIndex) {
                circle.classList.add('active');
            } else {
                circle.classList.remove('active');
            }
        });

        // Update progress bar width
        const progressPercent = (stepIndex / (steps.length - 1)) * 100;
        progress.style.width = `${progressPercent}%`;
    }

    // Next step function
    window.nextStep = () => {
        console.log("Next Step Function Called"); // Debugging log for next step function
        if (currentStep < steps.length - 1) {
            currentStep++;
            console.log("Current Step Updated: ", currentStep); // Log updated step index
            showStep(currentStep);
        }
    };

    // Previous step function
    window.prevStep = () => {
        console.log("Previous Step Function Called"); // Debugging log for previous step function
        if (currentStep > 0) {
            currentStep--;
            console.log("Current Step Updated: ", currentStep); // Log updated step index
            showStep(currentStep);
        }
    };

    // Initially show the first step
    showStep(currentStep);

    // Sibling Table: Adding new rows dynamically
    const addSiblingBtn = document.getElementById('add-sibling-btn');
    const siblingsTable = document.getElementById('siblings-table').getElementsByTagName('tbody')[0];

    // Function to add a new row in the table
    addSiblingBtn.addEventListener('click', () => {
        const newRow = siblingsTable.insertRow();  // Add new row

        // Add cells with input fields
        newRow.innerHTML = `
            <td><input type="text" name="sibling-name[]" required></td>
            <td><input type="text" name="sibling-occupation[]" required></td>
            <td><input type="text" name="sibling-company[]" required></td>
            <td><input type="date" name="sibling-dob[]" required></td>
            <td><input type="number" name="sibling-age[]" required></td>
        `;
    });
});
