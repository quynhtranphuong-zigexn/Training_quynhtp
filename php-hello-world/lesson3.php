<?php

class Assignment {

    public function getLesson1Result() {
        $result = array();

    for ($i = 1; $i <= 50; $i++) { 
        if ($i % 2 == 0) {
            $val = $i * $i;
        } else {
        $val = $i * 2;
        }
        $result[] = $val;
        }
    return $result;
    }
   
    public static function getLesson2Result() {
        
        $result = array();

    for ($i = 1; $i <= 50; $i++) {
    
        if ($i % 2 == 0) {
            $val = $i * $i;
        } else {
            $val = $i * 2;
        }
        $result[] = $val;
        }

        $hash = array();

    for ($i = 0; $i < count($result); $i++) {
        $valhash = $result[$i];
        $hash[$valhash] = $i;
        }
    return $hash;
    }
}

$assignment = new Assignment();
$res1 = $assignment->getLesson1Result();

echo "--- KẾT QUẢ BÀI 1 ---<br>";
print_r($res1);
echo "<br><br>";


$res2 = Assignment::getLesson2Result();

echo "--- KẾT QUẢ BÀI 2 ---<br>";
print_r($res2);
?>
