<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function  getPrice(){

    $producten = ["banaan","mango","kiwi","cracker","kaas","ham","boter","brood","melk","pizza"];
    $prijzen = [1.25,1.75,0.80,2,1.50,1.30,2.20,2.50,1.85,4.25];
    

}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

?>