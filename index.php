<?php

require_once("config.php");

//$sql = new sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha 
$usuario = new Usuario();
$usuario->login("givaldo","123");
echo $usuario;


?>