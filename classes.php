<?php

class Person {

function __construct($firstname, $lastname, $number) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->number = $number;
    
    }

    public function writePerson() {
        echo "Välkommen $this->firstname $this->lastname $this->number <br/>";

}

public function checkHoroscope() {

    $tecken = array("vädurenFM" => 03, "vädurenLM" => 04, "vädurenFD" => 21, "vädurenLD" =>19);

    $personnummer = $this->number;
    
    if($personnummer[2] . $personnummer[3] == 03){
        if($personnummer[4] . $personnummer[5] >= 21){
            echo "du är en vädur";
        }
        else if($personnummer[4] . $personnummer[5] < 21){
            echo "du är en fisk";
        }
    }
    
}
}

/*

$month = 4;
$day = 1; 

$currentHoroscope //finns i en forloop, matchar dens datum med datumen ovan t ex.
//den innehåller firstmonth, lastmonth, firstday och en lastday alltså mellan t ex 1 första mars och 15 april

//börja jämföra månaderna, för att se på en gång om månaden inte stämmer överens för t ex en stenbock

$month <= //currenthoroscope -> lastMonth && $month >= $currentHoroscope -> firstMonth

nu för dagen, den enda lösningen du behöver sen ej det ovanför 
istället där uppe 1. $motn > $horosc-> firstmonth
and $month <$horosc->lastmonth

if $month == $horosc ->firstmonth
and $day >=$horosc ->firstday

else $month == $horosc -> lastmonth
and $day <= $horosc -> lastday 
*/


