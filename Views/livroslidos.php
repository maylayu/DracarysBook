<?php
spl_autoload_register(function ($class_name) {
    include '..\\'.$class_name . '.php';
});
?>

<?php include 'cabecalho.php'; ?>

	<h4>Livros Lidos</h4>
	<a href="livro.create.php" class="btn btn-primary btn-small">Novo Livro</a>
	<table class="table table-striped" style="margin-top: 5px">
		<tr><th>ID</th><th>Nome</th><th>Publicação</th><th>Autor</th><th>Pessoa</th><th></th></th></th></th><th></th><th></th></tr>
	<?php
	use Db\Persiste;
	use Models\Projeto;
	$projetos = Persiste::GetAll("Models\\Projeto");

	foreach($projetos as $p){
		if ($p->gettipo == 1) 
		{
			echo "<tr><td>$p->getid</td><td>$p->getnome</td><td>$p->getpublicacao</td><td>$p->getautor</td>"
		    ."<td>$p->getpessoa_id</td>"
			."<td><a href='livro.edit.php?id=$p->getid' class='btn btn-primary btn-small'>Editar</a></td>"
			."<td><a href='livro.delete.php?id=$p->getid' class='btn btn-primary btn-small'>Excluir</a></td></tr>";
		}
	}
	?>
	</table>

<?php include 'rodape.php'; ?>
