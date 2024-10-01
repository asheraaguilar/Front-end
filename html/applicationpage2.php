<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipeño E-skolar System</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link rel="stylesheet" href="../css/applicationpage2.css">
</head>
<body>
    <div class="container">
    <?php include '../html/navbar.php'; ?>
        <h1>Educational Benefit Assistance - Lipa City</h1>
        <div class="form-container">
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
            <div id="uploadSection" style="display:none;">
                <h2>Upload Documents</h2>
                <div class="form-row">
                    <label for="uploadID">Upload ID:</label>
                    <input type="file" id="uploadID" name="uploadID">
                </div>
                <div class="form-row">
                    <label for="uploadIndigencyForm">Upload Barangay Indigency Form:</label>
                    <input type="file" id="uploadIndigencyForm" name="uploadIndigencyForm">
                </div>
                <div class="form-row">
                    <label for="uploadSemGrades">Upload Current Sem Grades:</label>
                    <input type="file" id="uploadSemGrades" name="uploadSemGrades">
                </div>
            </div>
        </div>

        <div class="button-row">
            <button type="button" id="renewalBtn" onclick="enableEdit()">Renewal</button>
            <button type="submit" id="submitBtn" style="display: none;">Submit</button>
        </div>
    </div>

    <script src="../js/applicationpage2.js"></script>
</body>
</html>
