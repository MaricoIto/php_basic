<?php
$people = [
    [
        "name" => "Taro", 
        "age" => "25歳",
        "sex" => "men"
    ],
    [
        "name" => "Jiro", 
        "age" => "20歳",
        "sex" => "men"
    ],
    [
        "name" => "Hanako", 
        "age" => "16歳",
        "sex" => "women"
    ],
];

foreach ($people as $person) {
    echo $person["name"] . "(" . $person["age"] . $person["sex"] . ")" . "<br />";
}