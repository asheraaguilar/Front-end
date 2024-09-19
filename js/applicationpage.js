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
          window.location.href = '../html/loginpage.php';
      }
  });
});

// Progress bar control object
const progressBar = {
  steps: document.querySelectorAll('#progress-bar .step'),
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
          this.currentStep--;
          this.steps[this.currentStep].classList.remove('completed');
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

// Form submission with SweetAlert
function submitApplication(event) {
  event.preventDefault(); // Prevent form submission
  Swal.fire({
      title: 'YOUR APPLICATION HAS BEEN SUBMITTED!',
      text: 'We will reach out to you via email as soon as we have processed your application. Thank you!',
      icon: 'success'
  }).then(() => {
      window.location.href = '../requirementspage.php'; // Redirect after submission
  });
}

// Steps navigation: update progress bar as user clicks steps
progressBar.steps.forEach((step, index) => {
  step.addEventListener('click', () => {
      // Handle user clicking directly on steps
      progressBar.steps.forEach(s => s.classList.remove('active', 'completed'));
      for (let i = 0; i <= index; i++) {
          progressBar.steps[i].classList.add(i === index ? 'active' : 'completed');
      }
      progressBar.currentStep = index;
  });
});