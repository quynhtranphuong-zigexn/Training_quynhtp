<?php
// bảng cửu chương
for ($n = 1; $n <= 9; $n++) {          
    echo "--- Bảng $n ---<br>";
    for ($i = 1; $i <= 10; $i++) {     
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
    echo "<br>";                         
}

// duyệt mảng
$foods = [
    'Bún bò Huế',
    'Phở',
    'Bánh mì',
    'Cơm tấm',
    'Bánh xèo'
];
foreach ($foods as $food) {
    echo "Menu: $food <br>";
}

