<?php
class Student {
    public $name;
    public $score;

    public function __construct($name, $score) {
        $this->name = $name;
        $this->score = $score;
    }

    public function introduce() {
        return "Hello, my name is {$this->name} and I have a score of {$this->score}.<br>";
    }
}

class VnStudent extends Student {
    public $truong;

    public function __construct($name, $score, $truong) {
        parent::__construct($name, $score);
        $this->truong = $truong;
    }

    public function introduce() {
        return "Xin chào. Tôi tên là {$this->name}, tôi học tại trường {$this->truong} ,điểm số là {$this->score}.<br>";
}
}

$student1 = new Student("Alice", 8.5);
echo $student1->introduce();
$student2 = new VnStudent("Duy", 6.0, "Đại học Bách Khoa");
echo $student2->introduce();
