// Sample data for scholarships per barangay
var barangayData = {
    labels: ['Barangay 1', 'Barangay 2', 'Barangay 3', 'Barangay 4', 'Barangay 5'],
    datasets: [{
        label: 'Scholarships Awarded',
        data: [85, 90, 78, 65, 95],
        backgroundColor: ['#FF5733', '#FFC300', '#DAF7A6', '#C70039', '#900C3F']
    }]
};

// Create the bar chart for Barangays
new Chart(document.getElementById('barangayBarChart'), { type: 'bar', data: barangayData });

var districtData = {
    labels: ['District 1', 'District 2', 'District 3', 'District 4'],
    datasets: [{
        label: 'Scholarships by District',
        data: [500, 400, 350, 250],
        backgroundColor: ['#FF5733', '#FFC300', '#DAF7A6', '#C70039']
    }]
};

var fundYearData = {
    labels: ['2020', '2021', '2022', '2023'],
    datasets: [{
        label: 'Fund Distribution (₱)',
        data: [5000000, 6000000, 7000000, 8000000],
        backgroundColor: ['#FF5733', '#FFC300', '#DAF7A6', '#C70039']
    }]
};

var applicationStatusData = {
    labels: ['Approved', 'Pending', 'Rejected'],
    datasets: [{
        label: 'Application Status',
        data: [1500, 300, 200],
        backgroundColor: ['#FF5733', '#FFC300', '#C70039']
    }]
};

var staffAllocationData = {
    labels: ['2021', '2022', '2023', '2024'],
    datasets: [{
        label: 'Staff Allocation Prediction',
        data: [50, 55, 60, 65],
        backgroundColor: ['#FF5733']
    }]
};

var slotAllocationData = {
    labels: ['2021', '2022', '2023', '2024'],
    datasets: [{
        label: 'Slot Allocation Prediction',
        data: [1500, 1600, 1700, 1800],
        backgroundColor: ['#FFC300']
    }]
};

// Create the charts
new Chart(document.getElementById('barangayChart'), { type: 'bar', data: barangayData });
new Chart(document.getElementById('districtChart'), { type: 'bar', data: districtData });
new Chart(document.getElementById('fundYearChart'), { type: 'line', data: fundYearData });
new Chart(document.getElementById('applicationStatusPieChart'), { type: 'pie', data: applicationStatusData });
new Chart(document.getElementById('staffAllocationChart'), { type: 'line', data: staffAllocationData });
new Chart(document.getElementById('slotAllocationChart'), { type: 'line', data: slotAllocationData });
