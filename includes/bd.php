<?php
use Medoo\Medoo;
require_once 'includes/Medoo.php';

$database = new Medoo([
    'type' => 'mysql',
    'host' => 'Localhost',
    'database' => 'proyecto_recetas',
    'username' => 'root',
    'password' => '1704'
]);

?>