<?php
//phpinfo();
$connection = mysqli_connect('mysql', 'root', 'root');
$connection->query('CREATE DATABASE `test_db`');