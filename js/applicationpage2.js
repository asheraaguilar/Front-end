// Add sibling dynamically to the table
function addSibling() {
    const table = document.getElementById('siblingTableBody');
    const row = document.createElement('tr');
    
    // Adding editable table cells for each column
    row.innerHTML = `
        <td contenteditable="true">Enter Name</td>
        <td contenteditable="true">Enter Occupation/Year Level</td>
        <td contenteditable="true">Enter Company/School</td>
        <td contenteditable="true">Enter Date of Birth</td>
        <td><button onclick="removeSibling(this)">Remove</button></td>
    `;
    table.appendChild(row);
}

// Remove sibling row
function removeSibling(button) {
    const row = button.parentElement.parentElement;
    row.remove();
}

function enableEdit() {
    // Enable all input fields for editing
    let inputs = document.querySelectorAll('input[type="text"]');
    inputs.forEach(input => {
        input.removeAttribute('readonly');
    });

    // Show the submit button and disable renewal button
    document.getElementById('submitBtn').style.display = 'inline';
    document.getElementById('renewalBtn').disabled = true;

    // Show the upload section with file input buttons
    document.getElementById('uploadSection').style.display = 'block';
}
