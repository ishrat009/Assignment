<?php

/**
 * Description of student
 *
 * @author BCC
 */
class Student {
    private $id;
    private $student_name;
    private $creation_date;
    
    
    function __construct($student_name, $creation_date) {
        $this->student_name = $student_name;
        $this->creation_date = $creation_date;
    }

    
    public function get_id() {
        return $this->id;
    }

    public function get_student_name() {
        return $this->student_name;
    }

    public function get_creation_date() {
        return $this->creation_date;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_student_name($student_name) {
        $this->student_name = $student_name;
    }

    public function set_creation_date($creation_date) {
        $this->creation_date = $creation_date;
    }


    
    
}
