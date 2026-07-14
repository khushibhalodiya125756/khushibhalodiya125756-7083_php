<?php


const SEMESTER_NAME = "Sem-5";
const INSTITUTION_NAME = "Marwadi University";
const GRADING_SCALE_MAX = 100;

$studentName = "Yuvrajsinh Chudasama";
$studentId = "92400527132";
$studentDept = "BCA";

$subjects = [
    [
        'code' => '05BC3501',
        'name' => 'SIP-2',
        'credit' => 4,
        'marks' => 88
    ],
    [
        'code' => '05BC3502',
        'name' => 'Web Application Development Using PHP',
        'credit' => 3,
        'marks' => 92
    ],
    [
        'code' => '05BC3503',
        'name' => 'Data Mining',
        'credit' => 2,
        'marks' => 75
    ],
    [
        'code' => '05BC3504',
        'name' => 'Information Security',
        'credit' => 4,
        'marks' => 65
    ]
];



$totalQualityPoints = 0;
$totalCredits = 0;

foreach ($subjects as $subj) {
   
    $totalQualityPoints += ($subj['marks'] * $subj['credit']);
    $totalCredits += $subj['credit'];
}


$sgpa = ($totalCredits > 0) ? ($totalQualityPoints / $totalCredits) : 0;
$sgpa = number_format($sgpa, 2); 


?>
<!DOCTYPE html>
<html>
<head>
    <title>Previous Semester Result</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .result-card {
            width: 600px; margin: 50px auto; background: #fff;
            padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: center; }
        th { background-color: #007BFF; color: white; }
        .summary { margin-top: 20px; text-align: right; font-weight: bold; }
    </style>
</head>
<body>

<div class="result-card">
  
    <h2><?php echo INSTITUTION_NAME; ?></h2>
    <h3 style="text-align: center; color: #555;">Semester Report: <?php echo SEMESTER_NAME; ?></h3>
    
    <hr>

   
    <p><strong>Student Name:</strong> <?php echo $studentName; ?> (ID: <?php echo $studentId; ?>)</p>
    <p><strong>Department:</strong> <?php echo $studentDept; ?></p>

    <table>
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Credits</th>
                <th>Marks (<?php echo GRADING_SCALE_MAX; ?>)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($subjects as $row): ?>
                <tr>
                    <td><?php echo $row['code']; ?></td>
                    <td style="text-align: left;"><?php echo $row['name']; ?></td>
                    <td><?php echo $row['credit']; ?></td>
                    <td><?php echo $row['marks']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
    <div class="summary">
        <p>Total Credits: <?php echo $totalCredits; ?></p>
        <p>SGPA: <?php echo $sgpa; ?> / 100.00</p>
    </div>
</div>

</body>
</html>