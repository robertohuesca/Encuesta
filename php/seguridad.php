<?
//reaundamos la session
@session_start();
if ($_SESSION['logged'] !="si"){
    header("Location:login.php");
    exit();
}
?>