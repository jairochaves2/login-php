<?php
session_start();
include('connection.php');
if(empty($_POST['inputEmail']) || empty($_POST['inputPassword'])){
    header('Location: index.php');
    exit();
}
$user=mysqli_real_escape_string($conexao,$_POST['inputEmail']);
$pw=mysqli_real_escape_string($conexao,$_POST['inputPassword']);

$query="select idlogin,email from login where email='{$user}' and senha=md5('{$pw}')";
$resultado=mysqli_query($conexao,$query);
$row= mysqli_num_rows($resultado);
if($row==1){
    $_SESSION['email']=$user;
    header('Location: painel.php');
    exit();
}else{
    $_SESSION['nao_autenticado']=true;
    header('Location: index.php');
    exit(); 
}
