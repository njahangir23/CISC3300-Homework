<?php

class firstClass {
    private $new1;
    private $old;

    public function __construct($new1, $old) {
        $this->new1 = $new1;
        $this->old = $old;
    }

    public function getnew1() {
        return $this->new1;
    }

    public function setnew1($value) {
        $this->new1 = $value;
    }

    public function getold() {
        return $this->old;
    }

    public function setold($value) {
        $this->old = $value;
    }

    public static function staticMethod() {
        return "This is my static method";
    }
}