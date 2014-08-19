<?php

/**
 * Description of course
 *
 * @author BCC
 */
class course {
    private $id;
    private $course_title;
    private $course_code;
    
    function __construct($course_title, $course_code) {
        $this->course_title = $course_title;
        $this->course_code = $course_code;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_course_title() {
        return $this->course_title;
    }

    public function get_course_code() {
        return $this->course_code;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_course_title($course_title) {
        $this->course_title = $course_title;
    }

    public function set_course_code($course_code) {
        $this->course_code = $course_code;
    }

  
}


