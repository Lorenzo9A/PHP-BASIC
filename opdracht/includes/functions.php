<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
    echo" is een ";
    echo gettype($input);
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    return $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    return $aantalProd;
} 

function  getPrice(){

    $producten = ["appels", "peren", "banaan","mango","kiwi","cracker","kaas","ham","boter","brood","melk","pizza"];
    $prijzen = [0.25,0.30,1.25,1.75,0.80,2,1.50,1.30,2.20,2.50,1.85,4.25];

        $aantal = getAmount(); //2
        $productnummer = getProductNr();  //0
    // echo $aantal;
    // echo $productnummer;
    $intotaal = (int)$aantal * (float)$prijzen[$productnummer];// 2* 0 = 0
        return $intotaal;
}

function getTotal(){

    $producten = ["appels", "peren", "banaan","mango","kiwi","cracker","kaas","ham","boter","brood","melk","pizza"];
    $prijzen = [0.25,0.30,1.25,1.75,0.80,2,1.50,1.30,2.20,2.50,1.85,4.25];

    if(isset($producten[getProductNr()] )){

        echo "Voor " . getAmount() . "  x " .$producten[getProductNr()]  . ' betaal je : '. getPrice();
    }
    
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';

    echo $leeftijd;
    if($leeftijd < 16){

    
        echo " je korting is: 1 euro";
    }

    if($leeftijd == 16){

        echo " je korting is: 16 cent";
    }

    if($leeftijd == 17){

        echo " je korting is: 17 cent";
    }
    if($leeftijd == 18){

        echo " je korting is: 18 cent";
    }
    if($leeftijd == 19){

        echo " je korting is: 19 cent";
    }

}

?>