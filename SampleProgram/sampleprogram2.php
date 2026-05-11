<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Sample</title>
</head>
<body>
    <div>
        <?php
        function  getRemark($grade) {
            if ($grade >=75) {
                return "Passed";
            } else {
                return "Failed";
            }
        }

        $students = array(
            "Ana" => 85,
            "Ben" => 72,
            "Cara" => 90,
            "Ledson" => 68 
        )
        ?>

        <h3>Student Grades</h3>

        <table border="1">
            <thread>
                <tr>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>getRemark</th>
</tr>
</thread>

<tbody>
    <?php foreach ($students as $name => $grade): ?>
        <tr>
            <td><?= $name; ?></td>
            <td><?= $grade; ?></td>
            <td><?= getRemark($grade); ?></td>
    </tr>
   <?php endforeach; ?>
   
    </tbody>
    </table>
    </div>
    
</body>
</html>