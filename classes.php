<?php

class Person {

function __construct($firstname, $lastname, $number) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->number = $number;
    
    }

    public function writePerson() {
        echo "<h2>Välkommen $this->firstname! Här är ditt stjärntecken:</h2>";

}

public function checkHoroscope() {

    $persnr = $this->number;

    $vädur = "<div class='card'><h1>Väduren</h1><p>Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv.<br/>
    Element: Eld</p><br/><img style='width: 200px;'src='./images/vadur.jpg'></div>";

    $fisk = "<div class='card'><h1>Fiskarna</h1><p>Empati, human, slarvig, vänlig, hemlighetsfull, lättpåverkad, inspirerande<br/>
    Element: Vatten</p><br/><img style='width: 200px;'src='./images/fisk.jpg'></div>";

    $oxen = "<div class='card'><h1>Oxen</h1><p>Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk, realistisk<br/>
    Element:jord</p><br/><img style='width: 200px;'src='./images/oxe.png'></div>";

    $tvilling = "<div class='card'><h1>Tvillingarna</h1><p>Kvick, kommunikativ, ytlig, nyfiken, självständig, modig, impulsiv, stressad<br/>
    Element: luft</p><br/><img style='width: 200px;'src='./images/tvilling.jpg'></div>";

    $kräfta = "<div class='card'><h1>Kräftan</h1><p>Föräldern, beskyddaren, bevararen, den trofaste, den lojale & sympatiske<br/>
    Element: vatten</p><br/><img style='width: 200px;'src='./images/krafta.jpg'></div>";

    $lejon = "<div class='card'><h1>Lejonet</h1><p>Storsint, kärleksfull, viljestark, svarsjuk, ledare, trofast, plikttrogen<br/>
    Element: solen</p><br/><img style='width: 200px;'src='./images/lejon.jpeg'></div>";

    $jungfru = "<div class='card'><h1>Jungfrun</h1><p>Blyg, självmedveten, analytisk, produktiv, kritisk, föränderlig <br/>
    Element: jord</p><br/><img style='width: 200px;'src='./images/jungfru.jpg'></div>";

    $våg = "<div class='card'><h1>Vågen</h1><p>Förälskelse, charm, obeslutsamhet, förföriskhet, diplomati, social kompetens <br/>
    Element: luft</p><br/><img style='width: 200px;'src='./images/vag.jpg'></div>";

    $skorpion = "<div class='card'><h1>Skorpionen</h1><p>Intensiv, svarsjuk, passionerad, tystlåten, intensiv, lojal, modig, stark<br/>
    Element: vatten</p><br/><img style='width: 200px;'src='./images/skorpion.jpg'></div>";

    $skytt = "<div class='card'><h1>Skytten</h1><p>Ärlig, generös, idealistisk, optimistisk, överdrivande, entusiastisk, sökare<br/>
    Element: eld</p><br/><img style='width: 200px;'src='./images/skytt.png'></div>";

    $stenbock = "<div class='card'><h1>Stenbocken</h1><p>Tillbakadragen, blyg, trogen, pliktkänsla, ambitiös, lojal <br/>
    Element: jord</p><br/><img style='width: 200px;'src='./images/stenbock.jpg'></div>";

    $vattuman = "<div class='card'><h1>Vattumannen</h1><p>Fredsälskare, klarsynt, intuitiv, lojal, uppfinningsrik, revolutionär<br/>
    Element: vatten</p><br/><img style='width: 200px;'src='./images/vattuman.png'></div>";



//mars månad
     if($persnr[2] . $persnr[3] == 03){
        if($persnr[4] . $persnr[5] >= 21){
            echo $vädur;
        }
        else if($persnr[4] . $persnr[5] < 21){
            echo $fisk;
        }
    }
//april månad
    if($persnr[2] . $persnr[3] == 04){
        if($persnr[4] . $persnr[5] <= 19){
            echo $vädur;
        }
        else if($persnr[4] . $persnr[5] >= 20){
            echo $oxen;
        }
    }

//maj månad

        if($persnr[2] . $persnr[3] == 05){
            if($persnr[4] . $persnr[5] <= 20){
                echo $oxen;
            }
            else if($persnr[4] . $persnr[5] >= 21){
                echo $tvilling;
            }
        }

 //juni månad
        if($persnr[2] . $persnr[3] == 06){
            if($persnr[4] . $persnr[5] <= 21){
                echo $tvilling;   
            }
            else if($persnr[4] . $persnr[5] >= 22){
                echo $kräfta;
            }
        }

    //juli månad 

    if($persnr[2] . $persnr[3] == 07){
        if($persnr[4] . $persnr[5] <= 22){
            echo $kräfta;
        }
        else if($persnr[4] . $persnr[5] >= 23){
            echo $lejon;
        }
    }

    //augusti månad 

            if($persnr[2] . $persnr[3] == "08"){
                if($persnr[4] . $persnr[5] <= 22){
                    echo $lejon;
                }
                else if($persnr[4] . $persnr[5] >= 23){
                    echo $jungfru;
                }
            }

    //september månad


        if($persnr[2] . $persnr[3] == "09"){
            if($persnr[4] . $persnr[5] <= 22){
                echo $jungfru;
            }
            else if($persnr[4] . $persnr[5] >= 23){
                echo $våg;
            }
        }

    //oktober månad 

        if($persnr[2] . $persnr[3] == 10){
            if($persnr[4] . $persnr[5] <= 22){
                echo $våg;
            }
            else if($persnr[4] . $persnr[5] >= 23){
                echo $skorpion;
            }
        }

     //november månad 

        if($persnr[2] . $persnr[3] == 11){
            if($persnr[4] . $persnr[5] <= 21){
                echo $skorpion;
            }
            else if($persnr[4] . $persnr[5] >= 22){
                echo $skytt;
            }
        }

    //december månad 

        if($persnr[2] . $persnr[3] == 12){
            if($persnr[4] . $persnr[5] <= 21){
                echo $skytt;
            }
            else if($persnr[4] . $persnr[5] >= 22){
                echo $stenbock;
            }
        }

    //januari månad 

        if($persnr[2] . $persnr[3] == 01){
            if($persnr[4] . $persnr[5] <= 19){
                echo $stenbock;
            }
            else if($persnr[4] . $persnr[5] >= 20){
                echo $vattuman;
            }
        }

     //februari månad 

        if($persnr[2] . $persnr[3] == 02){
            if($persnr[4] . $persnr[5] <= 18){
                echo $vattuman;
            }
            else if($persnr[4] . $persnr[5] >= 19){
                echo $fisk;
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
   

