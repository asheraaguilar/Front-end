// Delete button functionality
const deleteButtons = document.querySelectorAll('.delete-btn');
deleteButtons.forEach(button => {
    button.addEventListener('click', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
                // Add logic here to remove the row or file if necessary
            }
        });
    });
});

// Progress bar control object
const progressBar = {
    steps: document.querySelectorAll('.progressbar .step'),
    currentStep: 0, // Track current step index
    reset: function() {
        this.steps.forEach(step => step.classList.remove('active', 'completed'));
        this.currentStep = 0;
        this.steps[this.currentStep].classList.add('active');
    },
    next: function() {
        if (this.currentStep < this.steps.length - 1) {
            this.steps[this.currentStep].classList.remove('active');
            this.steps[this.currentStep].classList.add('completed');
            this.currentStep++;
            this.steps[this.currentStep].classList.add('active');
        }
    },
    back: function() {
        if (this.currentStep > 0) {
            this.steps[this.currentStep].classList.remove('active');
            this.steps[this.currentStep].classList.remove('completed');
            this.currentStep--;
            this.steps[this.currentStep].classList.add('active');
        }
    }
};

// Button actions for progress bar control
document.getElementById('Next').addEventListener('click', function() {
    progressBar.next();
});

document.getElementById('Back').addEventListener('click', function() {
    progressBar.back();
});

document.getElementById('Reset').addEventListener('click', function() {
    progressBar.reset();
});

// Submit button functionality
const submitButton = document.querySelector('.submit-btn');
submitButton.addEventListener('click', function() {
    Swal.fire({
        title: 'YOUR APPLICATION HAS BEEN SUBMITTED!',
        text: 'We will notify you via email as soon as we have processed your application. Thank you!',
        icon: 'success',
        confirmButtonText: 'OK',
        confirmButtonColor: '#8B0000'
    });
});
