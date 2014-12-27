<?php header('content-type: application/json; charset=utf-8');

$url ="http://fossasia.net/map/ffGeoJson.json";
$data = file_get_contents($url);
$json = json_encode($data);
$data = json_decode($json);

echo $_GET['callback'] . '('.$data.')';
