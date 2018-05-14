<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 14-5-2018
 * Time: 13:53
 */
if($_POST['voornaam'] == ""){
    echo "<br>Je moet nog een naam invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
};
if($_POST['E-mail'] == ""){
    echo "<br>Je moet nog een e-mail invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
};
if($_POST['Adres'] == ""){
    echo "<br>Je moet nog een adres invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
};
if($_POST['wachtwoord'] == ""){
    echo "<br>Je moet nog een wachtwoord invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
};
echo "<br><img src='img/apen/".$_POST['apen']."jpg'>";