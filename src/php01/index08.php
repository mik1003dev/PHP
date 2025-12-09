<?php

$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "men"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "women"
  ]
];

foreach ($people as $p1) {
  print $p1["first_name"] . "(" . $p1["age"] . "歳" . $p1["gender"] . ")" . '<br />';
}
?>