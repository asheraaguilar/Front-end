<?php include '../html/navbaradmin.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa City Applicants</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/ticketadmin.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<div class="container">
    <h1>Applicants</h1>

    <!-- Search Section -->
    <div class="search-section">
        <h3>Search Applicants</h3>
        <input type="text" id="searchInput" placeholder="Search by Name" onkeyup="searchApplicants()">
    </div>

    <!-- Filter by Applicant Type -->
    <div class="filter-section">
        <h3>Filter by Applicant Type</h3>
        <button class="filter-btn" onclick="filterByType('SHS Financial Assistance')">SHS Financial Assistance</button>
        <button class="filter-btn" onclick="filterByType('College Financial Assistance')">College Financial Assistance</button>
        <button class="filter-btn" onclick="filterByType('College Scholarship')">College Scholarship</button>
    </div>

    <!-- Filter by District and Barangay -->
    <div class="filter-section">
        <h3>Filter by District</h3>
        <select id="districtDropdown" class="styled-dropdown" onchange="filterByDistrict(this.value)">
            <option value="">All Districts</option>
            <option value="East">East</option>
            <option value="Urban">Urban</option>
            <option value="South">South</option>
            <option value="West">West</option>
            <option value="North">North</option>
        </select>

        <select id="barangayDropdown" class="styled-dropdown" onchange="filterByBarangay(this.value)" style="display:none;">
            <option value="">All Barangays</option>
        </select>
    </div>

    <!-- Filter by Year -->
    <div class="filter-section">
        <h3>Filter by Year</h3>
        <select id="yearDropdown" class="styled-dropdown" onchange="filterByYear(this.value)">
            <option value="">All Years</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>
    </div>

    <!-- Applicants Table -->
    <table>
        <thead>
            <tr>
                <th>Control Number</th>
                <th>Full Name</th>
                <th>Date</th>
                <th>Concern</th>
                <th>Remarks</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="applicantContainer">
            <!-- Applicant rows will be dynamically added here -->
        </tbody>
    </table>

    <div class="pagination">
                <button id="prevBtn">Previous</button>
                <span id="pageNumber">Page 1</span>
                <button id="nextBtn">Next</button>
    </div>
</div>

<script src="../js/ticketadmin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
