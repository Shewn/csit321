<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php 
$data = '{
    
    "id": 123333,
    "trackId": 233333,
    "datetime": "2011-07-13T22:44:33+0300",
    "info":
    {
        "temp": 12,
        "light": 33,
        "RHexposure": 100,
        "illumination": 1111,
        "Geolocation":
        {
            "considerIp": "false",
            "wifiAccessPoints": [
              {
                  "macAddress": "00:25:9c:cf:1c:ac",
                  "signalStrength": -43,
                  "signalToNoiseRatio": 0
              },
              {
                  "macAddress": "00:25:9c:cf:1c:ad",
                  "signalStrength": -55,
                  "signalToNoiseRatio": 0
              }
            ]
          }}}';


$myJSON = json_decode($data);
echo ($myJSON->id);
echo " ";
echo ($myJSON->trackId);
echo " ";
echo ($myJSON->datetime);
echo " ";
echo ($myJSON->info->temp);
echo " ";
echo ($myJSON->info->light);
echo " ";
echo ($myJSON->info->RHexposure);
echo " ";
echo ($myJSON->info->illumination);
echo " ";
echo ($myJSON->info->Geolocation->considerIp);
echo " ";
echo ($myJSON->info->Geolocation->wifiAccessPoints[1]->macAddress);
echo " ";
?>
</body>
</html>