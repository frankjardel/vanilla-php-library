#!/usr/bin/env php
<?php

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\VanillaPHP\Search;

require_once __DIR__ . '/vendor/autoload.php';

TestClass::test();
showMessage('This is Vanilla PHP Baby!');

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();
$search = new Search($client, $crawler);
$courses = $search->search('/cursos-online-programacao/php');

foreach ($courses as $course) {
   echo $course . "<br/><br/>";
}
