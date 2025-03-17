<?php
if (!defined('HOST')) {
    define('HOST', 'localhost');
}
if (!defined('USER')) {
    define('USER', 'root');
}
if (!defined('PASSW')) {
    define('PASSW', '');
}
if (!defined('BASE')) {
    define('BASE', 'crud');
}
//esse if previne de serem usadas mais de uma vez no mesmo script
$conn = new mysqli(HOST, USER, PASSW, BASE);
//conecta com o banco de dados no phpmyadmin
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>