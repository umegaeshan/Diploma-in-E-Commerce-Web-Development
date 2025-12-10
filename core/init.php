<?php


$conn = mysqli_connect('localhost', 'root', '', 'odara_alison');

if (mysqli_connect_error()) {
    echo "Database Connection Failed With The Following Errors " . mysqli_connect_error();
    die();
}
