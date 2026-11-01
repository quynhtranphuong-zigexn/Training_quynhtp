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

$hash = array();

for ($i = 0; $i < count($result); $i++) {
    $valhash = $result[$i];
    $hash[$valhash] = $i;
}
print_r($hash);
