<?php
$cities = [
    1 => 'Saint Petersberg',
    2 => 'Moscow',
    3 => 'Rostov on Don'
];

$userAge = 17;
$userCity = 3;

$userAgeCity = $userAge * 1000000 + $userCity;
//var_dump($userAgeCity);

$age = floor($userAgeCity / 1000000);
$city = $userAgeCity - $age * 1000000;
//var_dump($age, $city);

$userAgeCityBin = ($userAge << 32) | $userCity;
var_dump(
    [
        'userAgeBin' => decbin($userAge),
        'userCityBin' => decbin($userCity),
        'userAgeCityBin' => decbin($userAgeCityBin),
        '0xFFFFFF' => 0xFFFFFFFF,
        '0xFFFFFFbin' => decbin(0xFFFFFFFF),
    ]
);
$age = $userAgeCityBin >> 32;
$city = $userAgeCityBin & 0xFFFFFFFF;
var_dump($age, $city);
