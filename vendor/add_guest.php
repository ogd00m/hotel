<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$birthday = $_POST['birthday'];

mysqli_query($connect, "INSERT INTO `clients` (`id`, `name`, `surname`, `birthday`) VALUES (NULL, '$name', '$surname', '$birthday')");

header('Location: /');