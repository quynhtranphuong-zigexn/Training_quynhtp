<?php
$score = 7;
//if, elseif
if ($score >= 8) {
    $grade = 'A';
} elseif ($score >= 6) {
    $grade = 'B';
} elseif ($score >= 5) {
    $grade = 'C';
} else {
    $grade = 'D';
}

echo "Dùng if: Điểm $score => Loại $grade <br>";

//switch
$day = 1;
switch ($day) {
    case 1:
        echo "Thứ Hai";
        break;
    case 2:
        echo "Thứ Ba";
        break;
    case 3:
        echo "Thứ Tư";
        break;
    default:
        echo "Không hợp lệ";
}

