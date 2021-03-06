<?php

use ClassLessons\ArrayUtils;
use ClassLessons\Calculator;

//fourth lesson
require 'autoloader.php';

//first lesson
$report = [6,7,8,7,8,5,9];
$calc = new Calculator();
$average = $calc->average($report);

//second lesson
$names = "Gabriel, Ana, Clara, Igor, Bernardo";
$names_array = explode(', ',$names);
$report_imploded = implode(', ',$report);

//third lesson
$psychotic_array = ["Giovanni", "John", 12, "Maria", 25, "Luis", "Luisa", "12", "Rafael"];
$psychotic_array = ArrayUtils::remove("Giovanni", $psychotic_array);

//fifth lesson
$holders = ['Giovanni', 'João', 'Maria', 'Luis', 'Luisa', 'Rafael'];
$holdersWithDebts = ['Luis', 'Luisa', 'Rafael'];
$currentHolders = array_diff($holders, $holdersWithDebts);
$amounts = [100, 200, 300];
$holdersWithAmount = array_combine($currentHolders, $amounts);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Arrays</title>
</head>
<body>
    <h1>Php Arrays</h1>
    <br>
    <h2>First lesson, create a school report average calculator:</h2>
    <p>The school report is: <?=$report_imploded?></p>
    <p>The <b>average</b> of the school report is: <?=$average?></p>

    <br><br>
    <h2>Second lesson, explode and implode:</h2>
    <h3>Explode</h3>
    <h4>A string of name exploded as array, and iterated</h4>
    <ul>
        <?php foreach ($names_array as $name){?>
            <li>Hi,<?=$name?></li>
        <?php } ?>
    </ul>
    <h3>Implode</h3>
    <p>School report imploded in a string: <?=$report_imploded?></p>

    <br><br>
    <h2>Third lesson, removing a element  of a array</h2>
    <p>The array is a psychotic thing like: ["Giovanni", "John", 12, "Maria", 25, "Luis", "Luisa", "12", "Rafael",]</p>
    <ul>
        <li>Removing the "Giovani"
            <p><b>
                <?php
                foreach ($psychotic_array as $item){
                    echo "$item, ";
                }
                ?>
            </b></p>
        </li>

        <li>Removing the "12", not the 12
            <p><b>
                <?php
                $psychotic_array = ArrayUtils::remove("12", $psychotic_array);
                foreach ($psychotic_array as $item){
                    echo "$item, ";
                }
                ?>
            </b></p>
        </li>

        <li>Removing the 12, not the "12"
            <p><b>
                <?php
                $psychotic_array = ArrayUtils::remove(12, $psychotic_array);
                foreach ($psychotic_array as $item){
                    echo "$item, ";
                }
                ?>
            </b></p>
        </li>
    </ul>

    <br><br>
    <h2>Fourth lesson, autoload implementation</h2>

    <br><br>
    <h2>Fifth lesson, associative array</h2>
    <p>Here a list of the current holders on a simple bank:</p>
    <ul>
        <?php
            foreach ($holdersWithAmount as $holder=>$amount){
                echo "<li>$holder: $amount</li>";
            }
        ?>
    </ul>
</body>
</html>
