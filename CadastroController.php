<?php
session_start();
include('connection.php');

if(empty($_POST['inputNome']) || empty($_POST['inputTel'])||empty($_POST['inputEndereco']) || empty($_POST['inputInstituicao'])||empty($_POST['inputEmail']) || empty($_POST['inputPassword'])){
    header('Location: cadastro.php');
    exit();
}
$email=mysqli_real_escape_string($conexao,$_POST['inputEmail']);
$pw=mysqli_real_escape_string($conexao,$_POST['inputPassword']);

$nome=mysqli_real_escape_string($conexao,$_POST['nome']);
$endereco=mysqli_real_escape_string($conexao,$_POST['inputEndereco']);

$instituicao=mysqli_real_escape_string($conexao,$_POST['inputInstituicao']);
$tel=mysqli_real_escape_string($conexao,$_POST['inputTel']);

$query="insert into login (email,senha,nome,telefone,endereco,instituicao)values('{$email}',md5('{$pw}'),'{$nome}','{$tel}','{$endereco}','{$instituicao}')";

$resultado=mysqli_query($conexao,$query);
if($resultado){
    header('Location: login.php');
    exit(); 
}else{
    $_SESSION['nao_cadastrado']=true;
    header('Location: cadastro.php');
    exit(); 
}
