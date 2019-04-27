<?php
define('HOST','localhost');
define('USUARIO','root');
define('SENHA','BDgeral.123');
define('DB','loginGame');

$conexao=mysqli_connect(HOST,USUARIO,SENHA,DB) or die('Não foi possível conectar');

