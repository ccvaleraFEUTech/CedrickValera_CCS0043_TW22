<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Computation</title>
</head>
<body>
    <div>
        <?php
        $hours_worked = 45;
        $rate_per_hour = 100;
        $salary = 0;

        if ($hours_worked > 40) {
            $overtime = $hours_worked - 40;
            $salary = (40 * $rate_per_hour) + ($overtime * ($rate_per_hour * 1.5));
        } else {
            $salary = $hours_worked * $rate_per_hour;
        }
        ?>

        <h3>Salary Computation</h3>

        <p>Hours Worked: <?= $hours_worked; ?></p>
        <p>Rate per Hour: <?= $rate_per_hour; ?></p>
        <p>Total Salary: <?= $salary; ?></p>

        <h4>Daily Count</h4>
        <?php for ($day = 1; $day <= 5; $day++): ?>
            <p>Day <?= $day; ?></p>
        <?php endfor; ?>
    </div>
</body>
</html>