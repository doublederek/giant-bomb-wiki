<?php
use MediaWiki\Html\TemplateParser;

$jsonFile = __DIR__ . '/../../resources/data/sampleGames.json';

// Check if the file exists
if (file_exists($jsonFile)) {
    // Get contents of JSON file
    $jsonContent = file_get_contents($jsonFile);

    // Decode JSON into PHP array
    $games = json_decode($jsonContent, true);

    $hotGames = array_slice($games, 0, 3);
    $tigGames = array_slice($games, 0, 6);
    $randomGames = [...$games, ...$games];
}

$buttonData = [
    [ 'title' => 'Home',         'label' => 'Home' ],
    [ 'title' => 'New Releases', 'label' => 'New Releases' ],
    [ 'title' => 'Games',        'label' => 'Games' ],
    [ 'title' => 'Franchises',   'label' => 'Franchises' ],
    [ 'title' => 'Characters',   'label' => 'Characters' ],
    [ 'title' => 'Platforms',    'label' => 'Platforms' ],
    [ 'title' => 'People',       'label' => 'People' ],
    [ 'title' => 'Companies',    'label' => 'Companies' ],
    [ 'title' => 'Objects',      'label' => 'Objects' ],
    [ 'title' => 'Concepts',     'label' => 'Concepts' ],
    [ 'title' => 'Locations',    'label' => 'Locations' ],
    [ 'title' => 'Accessories',  'label' => 'Accessories' ],
];

// Set Mustache data
$data = [
    'buttons' => $buttonData,
    'hotGames' => $hotGames,
    'tigGames' => $tigGames,
    'games' => $randomGames,
];

// Path to Mustache templates
$templateDir = realpath(__DIR__ . '/../templates/landingPage');

// Render Mustache template
$templateParser = new TemplateParser($templateDir);
echo $templateParser->processTemplate('landing-page', $data);
