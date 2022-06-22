<?php

$connect = mysqli_connect('127.0.0.1', 'root', 'root', 'hotel');

if (!$connect) {
    die('Error');
}