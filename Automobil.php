<?php

// ucitavamo fajl vozilo.php  zato sto se nalazi u jednom folderu nemoramo kucati  lokaciju tog foldera
require_once "vozilo.php";

// Automobil ima pod klasu ili sub klasu vozilo 
// Automobil je parent od vozila  .Imamo pristup svim atributima koji ima vozilo 
class Automobil extends Vozilo  // extends je za nasledjivanje klase u drugu klasu znaci da automobil nasledjuje atribute klase vozila 
   { public $velicinaPrtzljanika;
    public $mestoPrtzljanika;
    public $brojVrata;

}
