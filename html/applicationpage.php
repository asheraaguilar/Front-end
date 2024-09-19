<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipeño E-skolar System</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/applicationpage.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.net/npm/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container">
        <?php include '../html/navbar.php'; ?> 

        <!-- Main Content Wrapper with Scrollbar -->
        <div class="scrollable-content">
            <div class="main-content">
                <h1>Educational Benefit Assistance - Lipa City</h1>
                <h2>Application</h2>
                <!-- Progress Indicator -->
                <div class="container">
                <ul class="progressbar">
                    <li class="active"><i class="fa fa-user"></i> Basic Info</li>
                    <li><i class="fa fa-file"></i> Requirements</li>
                    <li><i class="fa fa-check"></i> Submit</li>
                </ul>
                <div class="content-wrapper">
                    <div class="application-steps">
                        <button class="step-button active" id="step-1" onclick="showForm('additional-info')">
                            <div class="step-icon" id="step-1-icon">1</div>
                            <div class="step-description">
                                <h3>Additional Information</h3>
                                <p>Enter details about you</p>
                            </div>
                        </button>
                        <button class="step-button" id="step-2" onclick="showForm('family-info')">
                            <div class="step-icon" id="step-2-icon">2</div>
                            <div class="step-description">
                                <h3>Family</h3>
                                <p>Family & Guardian</p>
                            </div>
                        </button>
                        <button class="step-button" id="step-3" onclick="showForm('intentions-info')">
                            <div class="step-icon" id="step-3-icon">3</div>
                            <div class="step-description">
                                <h3>Intentions</h3>
                                <p>Educational Background</p>
                            </div>
                        </button>

                        <!-- User Info Section -->
                        <div class="user-info">
                            <p><strong>Name:</strong> ASHERA KATHRYN R. AGUILAR</p>
                            <p><strong>Address:</strong> Brgy. Sico Lipa City Batangas</p>
                            <p><strong>Email:</strong> aguilarasherakathryn@gmail.com</p>
                            <p><strong>Contact Number:</strong> 09952318729</p>
                            <p><strong>Type of Beneficiary:</strong> College Financial Assistance</p>
                        </div>
                    </div>

                    <!-- Form Container -->
                    <div class="form-container">
                        <!-- Additional Information Section -->
                        <section class="form-section" id="additional-info">
                            <h3>Additional Information</h3>
                            <form onsubmit="event.preventDefault(); completeStep(1);">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="picture">Picture</label>
                                            <div class="picture-container">
                                                <img id="picture-preview" src="img/default-profile.png" alt="User Picture">
                                                <input type="file" id="picture" accept="image/*" onchange="previewImage(event)">
                                            </div>
                                        </div>
                                        <div class="form-column">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" id="dob" placeholder="Enter Date of Birth" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label>Gender</label>
                                            <label><input type="radio" name="gender" value="male" required> Male</label>
                                            <label><input type="radio" name="gender" value="female" required> Female</label>
                                        </div>
                                        <div class="form-column">
                                            <label for="age">Age</label>
                                            <input type="number" id="age" placeholder="Enter your age" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="gwa">General Weighted Average</label>
                                            <input type="number" step="0.01" id="gwa" placeholder="Enter General Weighted Average" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="civil-status">Civil Status</label>
                                            <select id="civil-status" placeholder="Enter Civil Status" required>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="divorced">Divorced</option>
                                                <option value="widowed">Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="next-btn">Next</button>
                            </form>
                        </section>

                        <!-- Family Information Section -->
                        <section class="form-section" id="family-info" style="display: none;">
                            <h3>Family Information</h3>
                            <form onsubmit="event.preventDefault(); completeStep(2);">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="mother-first-name">Mother's First Name</label>
                                            <input type="text" id="mother-first-name" placeholder="Enter mother's first name" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="mother-middle-name">Mother's Middle Name</label>
                                            <input type="text" id="mother-middle-name" placeholder="Enter mother's middle name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="mother-last-name">Mother's Surname</label>
                                            <input type="text" id="mother-last-name" placeholder="Enter mother's surname" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="mother-contact-number">Mother's Contact Number</label>
                                            <input type="text" id="mother-contact-number" placeholder="Enter mother's contact number" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="mother-occupation">Mother's Occupation</label>
                                            <input type="text" id="mother-occupation" placeholder="Enter mother's occupation">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="father-first-name">Father's First Name</label>
                                            <input type="text" id="father-first-name" placeholder="Enter father's first name" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="father-middle-name">Father's Middle Name</label>
                                            <input type="text" id="father-middle-name" placeholder="Enter father's middle name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="father-last-name">Father's Surname</label>
                                            <input type="text" id="father-last-name" placeholder="Enter father's surname" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="father-contact-number">Father's Contact Number</label>
                                            <input type="text" id="father-contact-number" placeholder="Enter father's contact number" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="father-occupation">Father's Occupation</label>
                                            <input type="text" id="father-occupation" placeholder="Enter father's occupation">
                                        </div>
                                    </div>
                                </div>

                                <h3>Sibling Information</h3>
                                <table id="siblings-table" border="1" cellpadding="10" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name of Sibling</th>
                                            <th>Occupation/Year Level</th>
                                            <th>Company/School</th>
                                            <th>Date of Birth</th>
                                            <th>Age</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="sibling-name[]" required></td>
                                            <td><input type="text" name="sibling-occupation[]" required></td>
                                            <td><input type="text" name="sibling-company[]" required></td>
                                            <td><input type="date" name="sibling-dob[]" required></td>
                                            <td><input type="number" name="sibling-age[]" required></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <button type="button" onclick="addSiblingRow()">Add Sibling</button>

                                <button type="submit" class="next-btn">Next</button>
                            </form>
                        </section>

                        <!-- Intentions Form Section -->
                        <section class="form-section" id="intentions-info" style="display: none;">
                            <h3>Intentions</h3>
                            <form action="requirementspage.php" method="post">
                                <!-- Educational Background Section -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="elementary-school">Elementary School</label>
                                            <input type="text" id="elementary-school" name="elementary_school" placeholder="Enter Elementary School" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="elementary-year">Year Graduated</label>
                                            <input type="number" id="elementary-year" name="elementary_year" placeholder="Enter Year Graduated" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="junior-high-school">Junior High School</label>
                                            <input type="text" id="junior-high-school" name="junior_high_school" placeholder="Enter Junior High School" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="junior-year">Year Graduated</label>
                                            <input type="number" id="junior-year" name="junior_year" placeholder="Enter Year Graduated" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="senior-high-school">Senior High School</label>
                                            <input type="text" id="senior-high-school" name="senior_high_school" placeholder="Enter Senior High School" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="senior-year">Year Graduated</label>
                                            <input type="number" id="senior-year" name="senior_year" placeholder="Enter Year Graduated" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Present Education Section -->
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-column">
                                            <label for="present-school">Present School</label>
                                            <input type="text" id="present-school" name="present_school" placeholder="Enter Present School" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="course-strand">Course/Strand</label>
                                            <input type="text" id="course-strand" name="course_strand" placeholder="Enter Course or Strand" required>
                                        </div>
                                        <div class="form-column">
                                            <label for="year-level">Year Level/Grade</label>
                                            <input type="text" id="year-level" name="year_level" placeholder="Enter Year Level or Grade" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Other Scholarship Grants Section -->
                                <div class="form-group">
                                    <label>Have you applied for or is currently enjoying other scholarship grants beside our EBA scholarship Program?</label>
                                    <label><input type="radio" name="other_scholarship" value="yes" required> Yes</label>
                                    <label><input type="radio" name="other_scholarship" value="no" required> No</label>
                                </div>

                                <button type="submit" class="next-btn">Submit</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include JS File -->
    <script src="../js/applicationpage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>