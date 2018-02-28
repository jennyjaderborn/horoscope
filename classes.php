<?php

class Person {

function __construct($firstname, $lastname, $number) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->number = $number;
    
    }

    public function writePerson() {
        echo "$this->firstname $this->lastname $this->number";

}
}

