<?php
header('location: livro.index.php');
spl_autoload_register(function ($class_name) {
    include '..\\'.$class_name . '.php';
});

use Models\Livro; 
use Db\Persiste;

if ( isset($_POST['nome']) && isset($_POST['publicacao']) && isset($_POST['autor']) && isset($_POST['tipo'])){
	// id foi colocado 0 pois será gerado automaticamente pelo banco de dados
	$novoLivro = new Livro(0,$_POST['nome'],$_POST['publicacao'],$_POST['autor'],$_POST['tipo']);
	Persiste::Add($novoLivro);
}

?>
