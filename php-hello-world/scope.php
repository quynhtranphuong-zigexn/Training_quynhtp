<?php
$name = "Quynh";
function showLocal() {
    $name = "Quynh";
    echo $name;
}
showLocal();
function showGlobalFail() {
    echo $name;
}
showGlobalFail();
function showGlobalSuccess() {
    global $name;
    echo $name;
}
showGlobalSuccess();
