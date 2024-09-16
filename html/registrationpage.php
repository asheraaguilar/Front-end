<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipeño E-skolar System</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/registrationpage.css">
</head>
<body>
    <div class="container">
        <div class="progress-container">
            <div class="progress" id="progress"></div>
            <div class="circle active">1</div>
            <div class="circle">2</div>
            <div class="circle">3</div>
            <div class="circle">4</div>
        </div>
        <div class="form-steps">
            <!-- Step 1: Personal Background -->
            <div class="form-step active" id="step-1">
                <h2>Personal Background</h2>
                <form id="registration-form">
                    <!-- All input fields for Personal Background -->
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" id="surname" required>
                            <label for="surname">Surname</label>
                        </div>
                        <div class="input-data">
                            <input type="text" id="first-name" required>
                            <label for="first-name">First Name</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" id="middle-name" required>
                            <label for="middle-name">Middle Name</label>
                        </div>
                        <div class="input-data">
                            <input type="text" id="suffix-name">
                            <label for="suffix-name">Suffix Name</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="date" id="dob" required>
                            <label for="dob">Date of Birth</label>
                        </div>
                        <div class="input-data">
                            <input type="number" id="age" required>
                            <label for="age">Age</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <select id="gender" required>
                                <option value="" disabled selected></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <label for="gender">Gender</label>
                        </div>
                        <div class="input-data">
                            <select id="civil-status" required>
                                <option value="" disabled selected></option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                            <label for="civil-status">Civil Status</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="tel" id="contact-number" required>
                            <label for="contact-number">Contact Number</label>
                        </div>
                        <div class="input-data">
                            <input type="email" id="email" required>
                            <label for="email">Email Address</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" id="place-of-birth" required>
                            <label for="place-of-birth">Place of Birth</label>
                        </div>
                        <div class="input-data">
                            <select id="district" required>
                                <option value="" disabled selected></option>
                                <option value="west">West</option>
                                <option value="east">East</option>
                                <option value="south">South</option>
                                <option value="north">North</option>
                                <option value="urban">Urban</option>
                            </select>
                            <label for="district">District</label>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" id="purok" required>
                            <label for="purok">Purok/Street</label>
                        </div>
                        </div>
                        <div class="input-data">
                            <select id="barangay" required>
                                <option value="" disabled selected></option>
                                <option value="barangay0">Sico</option>
                                <option value="barangay1">Tambo</option>
                                <option value="barangay2">San Salvador</option>
                                <option value="barangay3">Brgy Fernando</option>
                                <option value="barangay4">Dizon</option>
                            </select>
                            <label for="barangay">Barangay</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <select id="apptype" required>
                                <option value="" disabled selected></option>
                                <option value="shs">SHS Educational Financial Assistance</option>
                                <option value="college">College Educational Financial Assistance</option>
                                <option value="scholarship">College Scholarship</option>
                            </select>
                            <label for="apptype">Application Type</label>
                        </div>
                        <div class="input-data">
                            <select id="benefits" required>
                                <option value="" disabled selected></option>
                                <option value="benefit0">None</option>
                                <option value="benefit1">4p's Assistance</option>
                                <option value="benefit2">Solo Parent Assistance</option>
                                <option value="benefit3">PWD Assistance</option>
                                <option value="benefit4">Others</option>
                            </select>
                            <label for="benefits">Other Benefit Received</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="password" id="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-data">
                            <input type="password" id="conpassword" required>
                            <label for="conpassword">Confirm Password</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="checkbox-group">
                            <label>
                                Select all that may apply. 
                                <input type="checkbox" name="student-type">
                                <span class="red-text">Lipeno Student</span>
                            </label>
                            <label>
                                <input type="checkbox" name="student-type">
                                <span class="red-text">Non-KLL Student</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-row submit-btn">
                        <input type="button" value="Next" onclick="nextStep()">
                    </div>
                </form>
            </div>

            <!-- Step 2: Family Background -->
            <div class="form-step" id="step-2">
                <h2>Family Background</h2>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="father-surname" required>
                        <label for="father-surname">Father's Surname</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="father-fname" required>
                        <label for="father-fname">Father's First Name</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="father-middlename" required>
                        <label for="father-middlename">Father's Middle Name</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="father-suffix">
                        <label for="father-suffix">Father's Suffix</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="father-occupation" required>
                        <label for="father-occupation">Father's Occupation</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="father-contact" required>
                        <label for="father-contact">Father's Contact Number</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="mother-surname" required>
                        <label for="mother-surname">Mother's Surname</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="mother-fname" required>
                        <label for="mother-fname">Mother's First Name</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="mother-middlename" required>
                        <label for="mother-middlename">Mother's Middle Name</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="mother-occupation" required>
                        <label for="mother-occupation">Mother's Occupation</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="mother-contact" required>
                        <label for="mother-contact">Mother's Contact Number</label>
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
                
                <!-- Button to add more rows -->
                <div class="form-row">
                    <button type="button" class="btn" id="add-sibling-btn">Add Sibling</button>
                </div>
            </div>

            <div class="form-row navigation-buttons">
                    <input type="button" value="Back" onclick="prevStep()">
                    <input type="button" value="Next" onclick="nextStep()">
            </div>

            <!-- Step 3: Educational Background -->
            <div class="form-step" id="step-3">
                <h2>Educational Background</h2>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="elem-school" required>
                        <label for="elem-school">Elementary School</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="elem-year" required>
                        <label for="elem-year">Year Graduated</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="jhs-school" required>
                        <label for="jhs-school">Junior High School</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="jhs-year">
                        <label for="jhs-year">Year Graduated</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="shs-school" required>
                        <label for="shs-school">Senior High School</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="shs-year" required>
                        <label for="shs-year">Year Graduated</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="present-school" required>
                        <label for="present-school">Elementary School</label>
                    </div>
                    <div class="input-data">
                        <input type="text" id="present-year" required>
                        <label for="present-year">Year Level/Grade</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="text" id="course" required>
                        <label for="course">Course/Strand</label>
                    </div>
                </div>
                <div class="form-row navigation-buttons">
                    <input type="button" value="Back" onclick="prevStep()">
                    <input type="button" value="Next" onclick="nextStep()">
                </div>
            </div>

            <!-- Step 4: Upload Requirements -->
            <div class="form-step" id="step-4">
                <h2>Upload Requirements</h2>
                <div class="form-row">
                    <div class="input-data">
                        <input type="file" id="picture-upload" required>
                        <label for="picture-upload">Picture</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="file" id="signature-upload" required>
                        <label for="signature-upload">Signature</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="file" id="certresi-upload" required>
                        <label for="certresi-upload">Certificate of Residency</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="file" id="reg-upload" required>
                        <label for="reg-upload">Registration/Enrollment Form</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-data">
                        <input type="file" id="grades-upload" required>
                        <label for="grades-upload">Certified True Copy of Grades</label>
                    </div>
                </div>
                <div class="form-row navigation-buttons">
                    <input type="button" value="Back" onclick="prevStep()">
                    <input type="submit" value="Submit" onclick="submitForm(event)">
                </div>
            </div>
        </div>
    </div>
    <script src="../js/registrationpage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
