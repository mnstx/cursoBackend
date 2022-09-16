<?php
$usuario = $_POST["login"];
$pass = $_POST["password"];

$ckuser = "admin";
$ckpass = "admin";

if ($usuario == $ckuser && $pass == $ckpass){
  header("location:https://www.youtube.com/watch?v=xm3YgoEiEDc&t=3s");
} else {
  header("location:error.html");
}
?>
