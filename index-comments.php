<?php
//include 'inc/names.php';
//include 'inc/functions.php';
//
//$firstLetters = [];
//?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" type="text/css" href="./styles/simple.css">-->
<!--    <link rel="stylesheet" type="text/css" href="./styles/custom.css"> <!---damit wird dick umrandet wenn Kategorie ausgewählt wird-->-->
<!--    <title> Projekt 7 </title>-->
<!--</head>-->
<!--<body>-->
<!--<header>-->
<!--    <h1>Geburtsstatistiken</h1>-->
<!--    <p>Hier finden Sie die Geburtsstatistiken aus Amerika</p>-->
<!--</header>-->
<?php
//foreach($names AS $nameArray) {
//    $nameFirstLetter = $nameArray['name'][0];
//
//    if(empty($firstLetters[$nameFirstLetter])) {
//        $firstLetters[$nameFirstLetter] = true;
//    }
//}
//?>
<!--    <nav class="nav">-->
<!--        --><?php //foreach ($firstLetters as $firstLetter => $Schleife): ?>
<!--            <a-->
<!--                href="index-comments.php?char=?--><?php //echo $firstLetter; ?><!--"-->
<!--                --><?php //if(!empty($_GET['char']) && $_GET['char'] === $firstLetter):?>
<!--                class = "selected"-->
<!--                --><?php //endif; //mit if-Bedingung wird class=selected je nach dem geöffnet und geschlossen;
//                // Wenn ein Buchstabe ausgewählt wird dann wird ihm die Klasse "selected" zugeordnet?>
<!--            >--><?php //echo $firstLetter; //aktueller Buchstabe ausgegeben und Link Schließen ?><!--</a>-->
<!--        --><?php //endforeach; ?>
<!--    </nav>-->
<!---->
<?php
//                        // deshalb hier sichergehen dass es sich um ein String handelt
//    if(!empty($_GET['char']) && is_string($_GET['char'])):?>
<!---->
<!--       <hr /> <!--Ausgabe der Horizontol Row, es bedarf aber noch einer CSS Regel (width auf 100% setzen)// Dabei handelt es sich um eine dünne graue Trennwand-->-->
<!--        --><?php
//            $char = $_GET['char'][0]; //bei $_GET[char] handelt es sich um ein String und wir wollen auf das erste [0] Element zugreifen
//            // da es aber nur aufgrund der akutellen Übergabe der Namen (mit dem Buchstaben)
//            // es sich um eine String handelt müssen wir sicherstellen dass das nur funktioniert wenn es sich dabei um ein String handelt deshlab bei if-bedingnung zusätzl.
//
//            $filtered = []; //Wir wollen die gefilterten Namen nach dem ersten Buchstaben speichern
//
//            foreach($names AS $nameArray) {
//                $currentName = $nameArray['name']; // 'name' ist Value vom Array-daten $names
//
//                if($currentName[0] !== $char){
//                    continue;
//                }
//
//                if(empty($filtered[$currentName])) {// Gibt es im Array $filtered ein Key das bereits den übergebenem Namen($currentName) hat?
//                    $filtered[$currentName] = true; // wenn der Name nicht bereits im anderen Array drin ist also noch nicht bereits betrachtet wurde
//                    // ----> dann wird der array auf true gesetzt um ihn zum Array hinzuzufügen, da die Namen mit dem aktuell entsprechend ausgewählten Buchstaben mit true und false ausgewählt werden
//                }
//
//            }
//        ?>
<!--        <h3>Namen, die mit --><?php //echo e($char); ?><!-- beginnen: </h3>-->
<!--        <ul>-->
<!--            --><?php //foreach ($filtered as $currentName => $Array): ?>
<!--                <li>-->
<!--                    <a href="name.php?--><?php //echo http_build_query(['name'=>$currentName]); //query verwendet da manche Namen besondere Zeichen haben, und deshalb einfach echo $currentName nicht ausreicht ?><!--">-->
<!--                        --><?php //echo e($currentName); ?>
<!--                    </a>-->
<!--                </li>-->
<!--            --><?php //endforeach; ?>
<!--        </ul>-->
<!--  --><?php //endif; ?>
<!---->
<!--</body>-->
<!--</html>-->