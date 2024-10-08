<?php include '../html/navbaradmin.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa City Applicants</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/applicantsadminpage.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<div class="container">
    <h1>Applicants</h1>

    <!-- Search Section -->
    <div class="search-section">
        <h3>Search Applicants</h3>
        <input type="text" id="searchInput" placeholder="Search by Name or Email" onkeyup="searchApplicants()">
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
                <th>Email</th>
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

<!-- Password Modal -->
<div id="passwordModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Enter Password</h2>
        <form id="passwordForm">
            <label for="password">Password:</label>
            <input type="password" id="passwordInput" placeholder="Enter password" required>
            <div class="buttons">
                <button type="button" id="submitPasswordBtn" class="modal-btn">Submit</button>
                <button type="button" id="cancelPasswordBtn" class="modal-btn cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- View Application Modal -->
<div id="viewApplicationModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Application Form</h2>
        <div id="viewApplicationDetails">
        <div class="personal-info">
                <h2>Personal Information</h2>
                <!-- Personal information section with two columns -->
                <div class="form-row">
                    <label for="applicantName">Applicant Name:</label>
                    <input type="text" id="applicantName" name="applicantName" value="Ashera Kathryn R. Aguilar" readonly>

                    <label for="applicantId">Applicant ID:</label>
                    <input type="text" id="applicantId" name="applicantId" value="EBA-109-24" readonly>
                </div>
                <div class="form-row">
                    <label for="applicantType">Applicant Type:</label>
                    <input type="text" id="applicantType" name="applicantType" value="College Financial Assistance" readonly>

                    <label for="applicantStatus">Application Status:</label>
                    <input type="text" id="applicantStatus" name="applicantStatus" value="Pending" readonly>
                </div>
                <div class="form-row">
                    <label for="dateOfBirth">Date of Birth:</label>
                    <input type="text" id="dateOfBirth" name="dateOfBirth" value="01/01/2000" readonly>

                    <label for="placeOfBirth">Place of Birth:</label>
                    <input type="text" id="placeOfBirth" name="placeOfBirth" value="Lipa City" readonly>
                </div>
                <div class="form-row">
                    <label for="gender">Gender:</label>
                    <input type="text" id="gender" name="gender" value="Female" readonly>

                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" value="24" readonly>
                </div>
                <div class="form-row">
                    <label for="civilStatus">Civil Status:</label>
                    <input type="text" id="civilStatus" name="civilStatus" value="Single" readonly>

                    <label for="contactNumber">Contact Number:</label>
                    <input type="text" id="contactNumber" name="contactNumber" value="09952318729" readonly>
                </div>
                <div class="form-row">
                    <label for="district">District:</label>
                    <input type="text" id="district" name="district" value="West District" readonly>

                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="Brgy.Sico Lipa City" readonly>
                </div>
            </div>

            <div class="family-background">
                <h2>Family Background</h2>
                <!-- Family background fields in two columns -->
                <div class="form-row">
                    <label for="fatherName">Father's Name:</label>
                    <input type="text" id="fatherName" name="fatherName" value="Angelito P. Aguilar" readonly>

                    <label for="fatherOccupation">Occupation:</label>
                    <input type="text" id="fatherOccupation" name="fatherOccupation" value="Security Guard" readonly>
                </div>
                <div class="form-row">
                    <label for="fatherContact">Father's Contact Number:</label>
                    <input type="text" id="fatherContact" name="fatherContact" value="09123456789" readonly>

                    <label for="motherName">Mother's Name:</label>
                    <input type="text" id="motherName" name="motherName" value="Mary Jane R. Aguilar" readonly>
                </div>
                <div class="form-row">
                    <label for="motherOccupation">Mother's Occupation:</label>
                    <input type="text" id="motherOccupation" name="motherOccupation" value="None" readonly>

                    <label for="motherContact">Mother's Contact Number:</label>
                    <input type="text" id="motherContact" name="motherContact" value="09123456780" readonly>
                </div>

                <h3>Sibling Information</h3>
                <table class="sibling-table">
                    <thead>
                        <tr>
                            <th>Name of Sibling</th>
                            <th>Occupation/Year Level</th>
                            <th>Company/School</th>
                            <th>Date of Birth</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="siblingTableBody">
                        <tr>
                            <td contenteditable="true">Abraham Kenneth Aguilar</td>
                            <td contenteditable="true">3rd Year College</td>
                            <td contenteditable="true">Batangas State University TNEU Lipa</td>
                            <td contenteditable="true">02/19/2004</td>
                            <td><button onclick="removeSibling(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" onclick="addSibling()">Add Sibling</button>
            </div>

            <div class="educational-background">
                <h2>Educational Background</h2>
                <!-- Educational background fields in two columns -->
                <div class="form-row">
                    <label for="primarySchool">Primary School:</label>
                    <input type="text" id="primarySchool" name="primarySchool" value="FABINHS" readonly>

                    <label for="yearGraduatedPrimary">Year Graduated (Primary):</label>
                    <input type="text" id="yearGraduatedPrimary" name="yearGraduatedPrimary" value="2012" readonly>
                </div>
                <div class="form-row">
                    <label for="secondarySchool">Secondary School:</label>
                    <input type="text" id="secondarySchool" name="secondarySchool" value="FABINHS" readonly>

                    <label for="yearGraduatedSecondary">Year Graduated (Secondary):</label>
                    <input type="text" id="yearGraduatedSecondary" name="yearGraduatedSecondary" value="2016" readonly>
                </div>
                <div class="form-row">
                    <label for="seniorhighSchool">Senior High School:</label>
                    <input type="text" id="seniorhighSchool" name="seniorhighSchool" value="FABINHS" readonly>

                    <label for="yearGraduatedSHS">Year Graduated (SHS):</label>
                    <input type="text" id="yearGraduatedSHS" name="yearGraduatedSHS" value="2016" readonly>
                </div>
                <div class="form-row">
                    <label for="presentSchool">Present School:</label>
                    <input type="text" id="presentSchool" name="presentSchool" value="Batangas State University" readonly>

                    <label for="program">Program/Strand:</label>
                    <input type="text" id="program" name="program" value="BS Information Technology" readonly>
                </div>
                <div class="form-row">
                    <label for="gwa">GWA:</label>
                    <input type="text" id="gwa" name="gwa" value="1.57" readonly>
                </div>
            </div>
            <div class="buttons">
                    <button id="saveEditBtn" class="modal-btn" style="display:none;">Save</button>
                    <button id="cancelEditBtn" class="modal-btn cancel" style="display:none;">Cancel</button>
            </div>
            <div id="viewApplicationModal" class="modal">
                <!-- Other modal content -->
                <button id="acceptBtn" class="accept-btn">Accept</button>
                <button id="failBtn" class="fail-btn">Failed</button>
                <button class="close-btn">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="../js/applicantsadminpage.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
