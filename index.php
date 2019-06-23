<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//Carrega um usuário
//$root = new Usuario();
//$root->loadById(2);
//echo $root;


//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega um úsuario usando o login e senha
//$usuario = new Usuario();
//$usuario->login("user", "12345");

//echo $usuario;

/* //Criando um novo usuário
$aluno = new Usuario("aluno", "@lun@");
$aluno->insert();
echo $aluno;
*/


//Alterar Usuarios
//$usuario = new Usuario();
//$usuario->loadById(4);
//$usuario->update("professor", "44556688");

//echo $usuario;


//Deletar usuario

$usuario = new Usuario();
$usuario->loadById(4);

$usuario->delete();
echo $usuario;

?>