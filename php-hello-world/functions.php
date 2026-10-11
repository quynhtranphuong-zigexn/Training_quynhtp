<?php
function printTable($n, $max=10) {
    echo "--- Bảng $n ---<br>";
    for ($i = 1; $i <= $max; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
    echo "<br>";
}

printTable(2);
printTable(6, 9);

function printCreator($name = "you") {
    return "Created by $name!<br>";
}
echo printCreator();
echo printCreator("Quynh");
