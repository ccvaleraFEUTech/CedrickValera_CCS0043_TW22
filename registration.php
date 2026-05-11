<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
//VARIABLE DECLARATIONS

// Student basic information
$student_id = "202410110";
$first_name = "Cedrick Nicolas";
$middle_name = "Cugas";
$last_name  = "Valera";
$year_level = "2nd Year College";
$age        = 21;

// String manipulation using PHP functions
$full_name = ucwords($first_name . " " . $middle_name . " " . $last_name);
$course    = strtoupper("bs information technology web and mobile application");

// Personal details
$gender = "Male";
$dateOfBirth = "March 5, 2005";

// School information
$schoolName = "FEU Institute of Technology";
$schoolAddress = "Sampaloc, Manila City";

// Health information
$medicalCondition = "None";
$epipenRequired = "No";

// Citizenship information
$birthCountry = "Philippines";
$citizenship = "Filipino";
$dateEntered = "March 2024";
?>

<div class="container">

    <h1>Student Registration Form</h1>

    <!-- Using ECHO to display variables -->
    <div class="section">
        <label>Student ID Number:</label>
        <p><?php echo $student_id; ?></p>

        <label>Year Level:</label>
        <p><?php echo $year_level; ?></p>

        <label>Age:</label>
        <p><?php print $age; ?></p>
    </div>

    <div class="section-title">STUDENT INFORMATION</div>

    <div class="section">
        <label>Full Name:</label>
        <p><?php echo $full_name; ?></p>

        <label>Gender:</label>
        <p><?php echo $gender; ?></p>

        <label>Date of Birth:</label>
        <p><?php echo $dateOfBirth; ?></p>
    </div>

    <div class="section-title">SCHOOL INFORMATION</div>

    <div class="section">
        <label>Course:</label>
        <p><?php echo $course; ?></p>

        <label>School Name:</label>
        <p><?php echo $schoolName; ?></p>

        <label>School Address:</label>
        <p><?php echo $schoolAddress; ?></p>
    </div>

    <div class="section-title">HEALTH INFORMATION</div>

    <div class="section">
        <label>Medical Condition:</label>
        <p><?php echo $medicalCondition; ?></p>

        <label>Epi-pen Required:</label>
        <p><?php echo $epipenRequired; ?></p>
    </div>

    <div class="section-title">CITIZENSHIP INFORMATION</div>

    <div class="section">
        <label>Birth Country:</label>
        <p><?php echo $birthCountry; ?></p>

        <label>Citizenship:</label>
        <p><?php print $citizenship; ?></p>

        <label>Date Entered:</label>
        <p><?php echo $dateEntered; ?></p>
    </div>

</div>

</body>
</html>