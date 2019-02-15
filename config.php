<?php
// auth token
// auth token generisete u vasem gpanelu pod stavkom "Profil"
// ako ga regenerisete, moracete da izmenite ovaj config i unesete novi token !
$config['tokens'] = array("1a2s3d1a2s3d1a2s3d1a2s3d1a2s3d1a2s3d1a2s3d1a2s3d");

// Broj provera
// Ovaj broj oznacava koliko ce skripta puta da se konektuje na GT.xyz i proveri da li je neki server offline ili ne
// Desava se nekad da je server na GT-u prikazan kao offline, tako da ovaj broj sprecava iskoriscavanje te greske
// Sto je veci broj, to je proces restarta duzi za jednu sekundu
// Preporuceno je da stavite broj izmedju 3 i 5
$config['broj_skeniranja'] = 3;

// Ignorisanje servera
// U ovaj niz stavljate ID od Servera koji mozete videti u game panelu.
// Server koji se nalazi u ovoj listi nece biti prikazan u listi.
// Primer: 	array('25140', '26254', '28141')
$config['ignorisi'] = array();

// Vrsta Feed-a
// 1 - file_get_contents
// 2 - cURL
$config['feedVrsta'] = 2;

// link ka Gpanel i GTXYZ API-ju (ne menjati ako ne znate za sta sluzi !)
$config['apilink'] = "http://nerds-hosting.com/";
//šta će ovo sranje ovde
$config['gtapilink'] = "http://www.gametracker.xyz/autorestart";
?>
