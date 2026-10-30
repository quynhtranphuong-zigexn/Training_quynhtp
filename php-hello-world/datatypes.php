<?php
$name = "Quynh";
$age = 27;
$price = 10.5;
$isActive = true;
$languages = array("English", "Vietnamese", "Japanese");
$data = NULL;

echo gettype($name) . "\n"; // string
echo gettype($age) . "\n"; // integer
echo gettype($price) . "\n"; // float
echo gettype($isActive) . "\n"; // boolean
echo gettype($languages) . "\n"; // array
echo gettype($data) . "\n"; // NULL
