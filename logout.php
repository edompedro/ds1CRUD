<?php
session_start();
if(isset($_SESSION['Nome'])){
    session_destroy();
    header("Location:login.php");
}
?>