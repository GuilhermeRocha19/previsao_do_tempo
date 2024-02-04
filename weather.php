<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


require 'vendor/autoload.php';

$apiKey = 'b99e0cd94eeb51e89abfc0670b7d7db4'; 
$city = isset($_GET['city']) ? $_GET['city'] : 'Brasilia'; 

$params = [
    'q' => $city,
    'appid' => $apiKey,
    'units' => 'metric', 
    'lang' => 'pt', 
];


$url = 'http://api.openweathermap.org/data/2.5/weather?' . http_build_query($params);

$client = new GuzzleHttp\Client();

$response = $client->get($url);

$data = json_decode($response->getBody(), true);
$cidade = $data['name'];
$temperatura = $data['main']['temp'];
$descricao = ucfirst($data['weather'][0]['description']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    
    <title>Previsão do Tempo - Porto Alegre</title>
    
</head>
<body>
    <script> var descricao = "<?php echo $descricao; ?>";</script>
    
    <div class="weather-container">
        <h1>Previsão do Tempo - <?=$cidade?></h1>
        <div class="temperature"><?=$temperatura?>°C</div>
        <div class="weather-details">
            <p><?=$descricao?></p>
        </div>
    </div>
</body>
</html>
<script src="index.js"></script>
