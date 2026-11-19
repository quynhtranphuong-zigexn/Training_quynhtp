<?php

$result = array();

for ($i = 1; $i <= 50; $i++) {
    
    if ($i % 2 == 0) {
        $val = $i * $i;
    } else {
        $val = $i * 2;
    }

    $result[] = $val;
}

print_r($result);

$hash = array_flip ($result);

print_r($hash);
