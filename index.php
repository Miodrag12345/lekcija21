<?php

require_once "modeli/Automobil.php";
require_once  "modeli/vozilo.php";
require_once  "modeli/Avion.php";
require_once  "modeli/Autobus.php";

$autobus=new Autobus();
$autobus->marka="Mercedes";
$autobus->brojVrata=2;
$autobus->brojSedista=70;
$autobus->spratni =false; // da li je false ili true boolean  podatak 

$boenig747= new Avion ();
$boenig747->pogon="mlazni";
$boenig747->marka="boenig";
$boenig747->model=747;
$boenig747->padobran=false;// ponovo smo predstavili padobran daa li ga imam ili ne kao boolean podatak





echo $autobus->marka."".$autobus->brojVrata;

$audiA4=new Automobil();
$audiA4->marka="Audi";
$audiA4->model="A4";
$audiA4->boja="crvena";
$audiA4->tezina=2000;

echo $audiA4->model;
echo $audiA4->tezina;

$yugo55=new Automobil();
$yugo55->marka="Yugo";
$yugo55->model="55";
$yugo55->boja="bela";

$bmwX5=new Automobil();
$bmwX5->marka="BMW";
$bmwX5->model="X5";
$bmwX5->boja="zuta";