<?php
#Import the helper functions
require 'helpers.php';

/*
# this causes an error
require 'foobar.php';

# this causes a warning
include 'foobar.php';
*/

#Then test them out:
dump('hi');
dump(['apples', 'oranges', 'pears']);
dump(sanitize('<script>alert("Hi!")</script>'));

$countries = [
    "US" => [
        "name" => "United States",
        "languages" => ["English"],
    ],
    "CA" => [
        "name" => "Canada",
        "languages" => ["English", "French"],
    ],
    "MX" => [
        "name" => "Mexico",
        "languages" => ["Spanish"],
        ],
    ];

foreach($countries as $countryCode => $country) {
    echo $country['name'].'<br>';
}

foreach ($countries as $countryCode => $country)
{
    echo $countryCode.'<br>';
}

foreach($countries as $countryCode => $country) {
    echo '<br>Primary language(s) of '.$country['name'].' ('.$countryCode.'): <br>';
    
    foreach($country['languages'] as $key => $language) {
        echo $language.'<br>';
    }
}

foreach ($countries as $countryCode => $country) {
    $countries[$countryCode]['name'] = strtoupper($countries[$countryCode]['name']);
}

echo $country['name'].'<br>';

foreach ($countries as $countryCode => &$country) {
    $country['name'] = strtoupper($country['name']);
}

echo $country['name'];