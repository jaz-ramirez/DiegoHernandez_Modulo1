<?php

    $return="./tabla.html";

    $letters;
    $toTranslate="";
    $key="";
    $comparation="";
    $validation=1;

    $morseA=".-";
    $morseB="-...";
    $morseC="-.-.";
    $morseD="-..";
    $morseE=".";
    $morseF="..-.";
    $morseG="--.";
    $morseH="....";
    $morseI="..";
    $morseJ=".---";
    $morseK="-.-";
    $morseL=".-..";
    $morseM="--";
    $morseN="-.";
    $morseO="---";
    $morseP=".--.";
    $morseQ="--.-";
    $morseR=".-.";
    $morseS="...";
    $morseT="-";
    $morseU="..-";
    $morseV="...-";
    $morseW=".--";
    $morseX="-..-";
    $morseY="-.--";
    $morseZ="--..";
    $morseQuest="..--..";
    $morseAdm="--..--";

    $morse1=".----";
    $morse2="..---";
    $morse3="...--";
    $morse4="....-";
    $morse5=".....";
    $morse6="-....";
    $morse7="--...";
    $morse8="---..";
    $morse9="----.";
    $morse0="-----";

    $resultM=[];
    $resultS=[];
    $i=0;
    $y=0;

    $translation=(isset($_POST["translation"])&&$_POST["translation"]!="")?$_POST["translation"]:"Inválido";
    $text=(isset($_POST["text"])&&$_POST["text"]!="")?$_POST["text"]:"Inválido";


    var_dump($translation);
    var_dump($text);


    echo "<form action=".$return.">";
        if($translation==="mToS")
        {
            $letters=str_split($text, 1);

            foreach($letters as $key => $comparation)
            {
                $i++;
            }
            for($y=0;$y<$i;$y++)
            {
                $validation=0;
                if(ord($letters[$y])>=60&&ord($letters[$y])<=90)
                {
                    echo $letters[$y];
                    $validation=1;
                }
                elseif(ord($letters[$y])==$ascciMin)
                {
                    echo $letters[$y];
                    $validation=1;   
                }
                elseif(ord($letters[$y])==33||ord($letters[$y])==63)
                {
                    echo $letters[$y];
                    $validation=1;
                }
                elseif($validation==0)
                {
                    echo "fail";
                }
            }

        }
        elseif($translation==="sToM")
        {

        }

    echo "<button type="."submit".">Regresar</button>";
    echo "</table>";
?>