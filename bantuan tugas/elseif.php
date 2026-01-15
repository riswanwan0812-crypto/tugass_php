<?php
$nilai = 78;

if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 75) {
    $grade = "B";
} elseif ($nilai >= 65) {
    $grade = "C";
} else {
    $grade = "D";
}

echo "Nilai: $nilai <br>";
echo "Grade: $grade";
?>
