<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa City Scholarship Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../img/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <?php include '../html/navbaradmin.php'; ?>
        
        <!-- Main Content -->
        <div class="main-content">
            <h1>Scholarship Management Dashboard - Lipa City</h1>

            <!-- Filter Section -->
            <div class="filter-section">
                <button class="filter-button active" data-filter="all">All</button>
                <button class="filter-button" data-filter="shs-financial">SHS Financial</button>
                <button class="filter-button" data-filter="college-financial">College Financial</button>
                <button class="filter-button" data-filter="college-scholarship">College Scholarship</button>
            </div>

            <!-- KPI Section -->
            <div class="kpi-section">
                <div class="kpi-box">
                    <i class="fas fa-graduation-cap fa-3x"></i>
                    <div class="kpi-text">
                        <h3>Total Scholarships Awarded</h3>
                        <h1>1500</h1>
                    </div>
                </div>
                <div class="kpi-box">
                    <i class="fas fa-money-bill-wave fa-3x"></i>
                    <div class="kpi-text">
                        <h3>Total Fund Distributed</h3>
                        <h1>₱20M</h1>
                    </div>
                </div>
                <div class="kpi-box">
                    <i class="fas fa-file-alt fa-3x"></i>
                    <div class="kpi-text">
                        <h3>Applications Pending</h3>
                        <h1>300</h1>
                    </div>
                </div>
            </div>

            <!-- Charts Grid Section -->
            <div class="charts-grid">
                <div class="chart-box">
                    <h3>Scholarships Awarded by Barangay</h3>
                    <canvas id="barangayChart"></canvas>
                </div>

                <div class="chart-box">
                    <h3>Scholarships by District</h3>
                    <canvas id="districtChart"></canvas>
                </div>

                <div class="chart-box">
                    <h3>Fund Distribution by Year</h3>
                    <canvas id="fundYearChart"></canvas>
                </div>

                <div class="chart-box">
                    <h3>Application Status Breakdown</h3>
                    <canvas id="applicationStatusPieChart"></canvas>
                </div>

                <div class="chart-box">
                    <h3>Staff Allocation Prediction</h3>
                    <canvas id="staffAllocationChart"></canvas>
                </div>

                <div class="chart-box">
                    <h3>Slot Allocation Prediction</h3>
                    <canvas id="slotAllocationChart"></canvas>
                </div>
            </div>          
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/dashboard.js"></script>
</body>
</html>
