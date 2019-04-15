<?php

// Declareerd Variabels met initial waardes
$mijn_variabele = 2;
$voornaam = $achternaam = "";

//
//PHP ondersteunt impliciet de volgende 8 datatypen:
//PHP kent 4 enkelvoudige datatypen (ook wel scalars genoemd):
//• String (tekst)
//• Integer (heel getal)
//• Floating point (gebroken getal)
//• Boolean (Waar of niet waar)
//PHP kent 2 complexe of compound datatypen (die zo heten omdat ze kunnen worden samengesteld uit variabelen van meer dan één datatype):
//• Array
//    • Object
//Bovendien is er een datatype dat gebruikt wordt voor verwijzingen naar externe bronnen buiten PHP:
//• Resource
//Dit datatype komen we bijvoorbeeld tegen bij het werken met bestanden en databases.
//
//Tot slot is er een speciaal datatype dat de afwezigheid van data aangeeft:
//• NULL
//

// STRING Als hij tussen "" of '' staat heb je een string waarde!
$voornaam = "Robert";
$Achternaam = 'Paats';
// De volgende is ook een string en met deze variabel kan je dus niet rekenen!!!!
$mijn_variabele="2034";
$mijn_variabele='534543';

// INTEGER variabel dient een heel getal te zijn positief of negatief
$mijn_variabele =   2034;
$mijn_variabele =   -2034;

// PHP kan ook overweg met Octal en Hex getal stelsels base8 en base16
$getal  =   255;    // Decimaal
$getal  =   0xFF;   // Hexadecimaal (Cijfer Null gevolgt door een lower case x!!)
$getal  =   0377;   // Octaal, getal begint met een 0 (Cyfer Null!!)

// FLOATING POINT variabele bevatten een comma in het getal. (Punt vanwege die gekke americanen!!)
$mijn_variabele =   20.34;
$mijn_variabele =   -20.34;

// Boolian variabels bevatten twee states True of False
$getrouwd = true;
$getrouwd = false;
// Letop dat je Bolians niet kan printen!! true geeft een "1" als output en false geeft "" als output!

// Een leege variabel kan je initialiseren met een NULL waarde wat leeg betekend.
$heelveelgeld = NULL;

// Met var_dump kan je de iegen schappen van een variabel dumpen zodat je de exacte state kan onderzoeken.
var_dump($heelveelgeld);
var_dump($mijn_variabele);
var_dump($getrouwd);
var_dump($getal);
var_dump($mijn_variabele);

// Door NULL te gebruiken als je nog niet weet wat je wilt toekennen voorkom je problemen met niet gedeclareerde variabele.
if (is_null($naam)) {
    echo 'naam heeft nog geen waarde...';
} else {
    echo $naam;
}

// Een array in PHP $naam-variable[] tussen de blokhaken kan je de index ID opnemen om de betreffende index uit te lezen.
$weekend = 'Zaterdag';  // index = 0
$weekend = 'Zondag';    // index = 1
$weekend = 'Maandag';   // index = 2
$weekend = 'Dinsdag';   // index = 3
$weekend = 'Woensdag';  // index = 4
$weekend = 'Donderdag'; // index = 5
$weekend = 'Vrijdag';   // index = 6

echo $weekend[2];       // Print de string Maandag uit op het scherm.



