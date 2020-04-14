<?php

require_once('src/config.php');
error_reporting(0);
$bdd = new PDO('mysql:host='.$configBDD['host'].';dbname='.$configBDD['dbname'].';charset=utf8', $configBDD['user'], $configBDD['pass']);


$fullname = $bdd->query("SELECT content FROM static where name = 'fullname'")->fetchAll(PDO::FETCH_ASSOC)[0][content];
$description = $bdd->query("SELECT content FROM static where name = 'description'")->fetchAll(PDO::FETCH_ASSOC)[0][content];
$aboutme = $bdd->query("SELECT content FROM static where name = 'qui-suis-je'")->fetchAll(PDO::FETCH_ASSOC)[0][content];
$footer = $bdd->query("SELECT content FROM static where name = 'footer'")->fetchAll(PDO::FETCH_ASSOC)[0][content];

$projects =  $bdd->query("SELECT * FROM projects")->fetchAll(PDO::FETCH_ASSOC);

require_once('vue/general.php');

?>