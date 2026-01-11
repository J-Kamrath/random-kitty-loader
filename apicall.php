<?php

function fetch_cat_image()
{
    $env = parse_ini_file(__DIR__ . '/.env');
    $API_KEY = $env['API_KEY'];

    $url = "https://api.thecatapi.com/v1/images/search";

    $ch = curl_init($url);

    // WICHTIG: Antwort als String zurückgeben
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Header (z. B. API-Key)
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "x-api-key: $API_KEY"
    ]);

    $response = curl_exec($ch);

    // Fehler prüfen
    if ($response === false) {
        die(curl_error($ch));
    }

    curl_close($ch);

    // JSON → Array
    $arr = json_decode($response, true);
    return $data = $arr[0];
}

function fetch_cat_fact()
{
    $env = parse_ini_file(__DIR__ . '/.env');
    $API_KEY = $env['API_KEY'];

    $url = "https://www.catfacts.net/api/";

    $ch = curl_init($url);

    // WICHTIG: Antwort als String zurückgeben
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Header (z. B. API-Key)
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "x-api-key: $API_KEY"
    ]);

    $response = curl_exec($ch);

    // Fehler prüfen
    if ($response === false) {
        die(curl_error($ch));
    }

    curl_close($ch);

    // JSON → Array
    $obj = json_decode($response, true);
    return $obj["facts"][0];
}
