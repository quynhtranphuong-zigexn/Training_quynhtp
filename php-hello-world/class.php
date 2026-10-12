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

$student1 = new Student("Alice", 8.5);
echo $student1->introduce();

$student2 = new Student("Bob", 6.0);
echo $student2->introduce();    
