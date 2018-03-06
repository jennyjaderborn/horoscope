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

    

        /*'oxenFM' => 4,
        'oxenLM' => 5,
        'oxenFD' => 20,
        'oxenLD' => 20,
        'tvilingFM' => 5,
        'tvilingLM' => 6,
        'tvilingFD' => 21,
        'tvilingLD' => 21,
        'kräftaFM' => 6,
        'kräftaLM' => 7,
        'kräftaFD' => 22,
        'kräftaLD' => 22,
        'lejonFM' => 7,
        'lejonLM' => 8,
        'lejonFD' => 23,
        'lejonLD' => 22*/
   

    $persnr = $this->number;

//mars månad
     if($persnr[2] . $persnr[3] == 03){
        if($persnr[4] . $persnr[5] >= 21){
            echo "du är en vädur";
        }
        else if($persnr[4] . $persnr[5] < 21){
            echo "du är en fisk";
        }
    }
//april månad
    if($persnr[2] . $persnr[3] == 04){
        if($persnr[4] . $persnr[5] <= 19){
            echo "du är en vädur";
        }
        else if($persnr[4] . $persnr[5] >= 20){
            echo "du är en Oxe";
        }
    }

//maj månad

        if($persnr[2] . $persnr[3] == 05){
            if($persnr[4] . $persnr[5] <= 20){
                echo "du är en Oxe";
            }
            else if($persnr[4] . $persnr[5] >= 21){
                echo "du är en tvilling";
            }
        }

 //juni månad
        if($persnr[2] . $persnr[3] == 06){
            if($persnr[4] . $persnr[5] <= 21){
                echo "du är en tvilling";
            }
            else if($persnr[4] . $persnr[5] >= 22){
                echo "du är en kräfta";
            }
        }

    //juli månad 

    if($persnr[2] . $persnr[3] == 07){
        if($persnr[4] . $persnr[5] <= 22){
            echo "du är en kräfta";
        }
        else if($persnr[4] . $persnr[5] >= 23){
            echo "du är ett lejon";
        }
    }

    //augusti månad 

            if($persnr[2] . $persnr[3] == "08"){
                if($persnr[4] . $persnr[5] <= 22){
                    echo "du är ett lejon";
                }
                else if($persnr[4] . $persnr[5] >= 23){
                    echo "du är en jungfru";
                }
            }

    //september månad


        if($persnr[2] . $persnr[3] == "09"){
            if($persnr[4] . $persnr[5] <= 22){
                echo "du är en jungfru";
            }
            else if($persnr[4] . $persnr[5] >= 23){
                echo "du är en våg";
            }
        }

    //oktober månad 

        if($persnr[2] . $persnr[3] == 10){
            if($persnr[4] . $persnr[5] <= 22){
                echo "du är en våg";
            }
            else if($persnr[4] . $persnr[5] >= 23){
                echo "du är en skorpion";
            }
        }

     //november månad 

        if($persnr[2] . $persnr[3] == 11){
            if($persnr[4] . $persnr[5] <= 21){
                echo "du är en skorpion";
            }
            else if($persnr[4] . $persnr[5] >= 22){
                echo "du är en skytt";
            }
        }

    //december månad 

        if($persnr[2] . $persnr[3] == 12){
            if($persnr[4] . $persnr[5] <= 21){
                echo "du är en skytt";
            }
            else if($persnr[4] . $persnr[5] >= 22){
                echo "du är en stenbock";
            }
        }

    //januari månad 

        if($persnr[2] . $persnr[3] == 01){
            if($persnr[4] . $persnr[5] <= 19){
                echo "du är en Stenbock";
            }
            else if($persnr[4] . $persnr[5] >= 20){
                echo "du är en vattuman";
            }
        }

     //februari månad 

        if($persnr[2] . $persnr[3] == 02){
            if($persnr[4] . $persnr[5] <= 18){
                echo "du är en vattuman";
            }
            else if($persnr[4] . $persnr[5] >= 19){
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


