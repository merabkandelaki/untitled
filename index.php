<meta charset="UTF-8">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

// მომზადებული მოთხოვნები
$connection = new PDO("mysql:host=localhost;dbname=mysite;charset=utf8", "root", "root");

// პირდაპირი მოთხოვნა
//$query = "INSERT users (name, age, login) VALUE ('Игор', '5', 'Игорик')";
//$count = $connection->exec($query);

$name = 'Olya';
$age = 22;
$login = 'user52';
$param = [
    'n' => $name,
    'age' => $age,
    'l' => $login
];


$sql = "INSERT users (name, age, login) VALUE (:n, :age, :l)"; // ვამზადებთ მოთხოვნას პლეისჰოლდერით
$query = $connection->prepare($sql); // ვამზადებთ თავად მოთხოვნას
$query->execute($param);





