// Add event listener for logout button
    document.getElementById('logout-button').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // SweetAlert confirmation popup
        Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, log out!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to loginadmin.php if confirmed
                window.location.href = '../html/loginadmin.php';
            }
        });
    });