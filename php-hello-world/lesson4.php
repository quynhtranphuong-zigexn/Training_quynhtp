<?php
function toKansuji($number)
{
    $digit = array('零', '一', '二', '三', '四', '五', '六', '七', '八', '九');
    $small = array('千' => 1000, '百' => 100, '十' => 10);
    $big = array('兆' => 1000000000000, '億' => 100000000, '万' => 10000, '' => 1);
    $result = '';
    foreach ($big as $bigChar => $bigUnit) {
        $group = intdiv($number, $bigUnit) % 10000;
        if ($group == 0) {
            continue;
        }
        foreach ($small as $char => $unit) {
            $d = intdiv($group, $unit) % 10;
            if ($d == 0) {
                continue;
            } elseif ($d == 1) {
                $result .= $char;
            } else {
                $result .= $digit[$d] . $char;
            }
        }
        if ($group % 10 > 0) {
            $result .= $digit[$group % 10];
        }
        $result .= $bigChar;
    }
    return $result;
}
function toNumber($kansuji)
{
    $digit = array('零' => 0, '一' => 1, '二' => 2, '三' => 3, '四' => 4, '五' => 5, '六' => 6, '七' => 7, '八' => 8, '九' => 9);
    $small = array('千' => 1000, '百' => 100, '十' => 10);
    $big = array('兆' => 1000000000000, '億' => 100000000, '万' => 10000);
    $number = 0;
    $groupValue = 0;
    $currentUnit = 0;

    foreach (mb_str_split($kansuji) as $char) {
        if (isset($digit[$char])) {
            $currentUnit = $digit[$char];
        } elseif (isset($small[$char])) {
            $groupValue += ($currentUnit == 0 ? 1 : $currentUnit) * $small[$char];
            $currentUnit = 0;
        } elseif (isset($big[$char])) {
            $groupValue += $currentUnit;
            $number += ($groupValue == 0 ? 1 : $groupValue) * $big[$char];
            $groupValue = 0;
            $currentUnit = 0;
        }
    }
    $number += $groupValue + $currentUnit;
    return $number; 
}

echo toKansuji(1234567890123) . "\n";
echo toNumber('一兆二千三百四十五億六千七百八十九万十二') . "\n";
