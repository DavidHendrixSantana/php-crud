<?php

//Star a session in order to save variables we can use in a future
session_start();

//Instance of the connecion
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_crud'
);



?>