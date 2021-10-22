<?php
header('location: projeto.index.php'); // redireciona para o local indicado

spl_autoload_register(function ($class_name) {
    include '..\\'.$class_name . '.php';
});

use Models\Projeto;
use Db\Persiste;

if ( isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['publicacao'])  && isset($_POST['autor'])  && isset($_POST['tipo']) && isset($_POST['pessoa_id']))
{
	// id foi colocado 0 pois será gerado automaticamente pelo banco de dados
	$p = new Projeto($_POST['id'],$_POST['nome'],$_POST['publicacao'],$_POST['autor'],$_POST['tipo'],$_POST['pessoa_id']);
	Persiste::Update($p);
}

?>
