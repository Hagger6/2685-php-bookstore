<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <h2> hiii </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium aut voluptas doloremque. Deserunt laborum minima nihil a laudantium iste inventore neque, doloremque eaque dolorum ipsa. Nihil dolorum ullam quod architecto.</p>
    <h3> jjjj</h3>
</body>
</html>!-->
<?php

$host = 'localhost';
$database = '2685_php_bookstore';
$user = 'root';
$password = '';

$db = new mysqli($host, $user, $password, $database);

var_dump($db);