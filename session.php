<?php
include_once('includes/bd.php');

if(!isset($_SESSION)){
    session_start();
}

$user_check = $_SESSION['login_user'];
$result = $database -> select("usuario_tb", "*", ["nombre_usuario" => "$user_check"]);

$login_session = $result[0]['nombre_usuario'];

if(!isset($_SESSION['login_user'])){
    header("location: login.php");
    die();
}

?>