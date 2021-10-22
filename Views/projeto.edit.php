<?php 
  include 'cabecalho.php';
  spl_autoload_register(function ($class_name) {
	    include '..\\'.$class_name . '.php';
  });
  use Db\Persiste;
  use Models\Pessoa;
  $pessoas = Persiste::GetAll('Models\Pessoa');
  $projeto = Persiste::GetById('Models\Projeto',$_GET['id']);
?>

<h3>Editar Livro</h3>
<div class=container>
	<div class="row">
		<div class="col-sm-6">
			<form action="projeto.update.php" method="post">
				<input type="hidden" name="id" value="<?= $projeto->getid ?>">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" name="nome" class="form-control" maxlength="100" required value="<?= $projeto->getnome ?>" />
				</div>
				<div class="form-group">
					<label for="publicacao">Publicação</label>
					<input type="year" name="publicacao" class="form-control"  required value="<?= $projeto->getpublicacao?>"/>
				</div>
				<div class="form-group">
					<label for="autor">Autor</label>
					<input type="text" name="autor" class="form-control" value="<?= $projeto->getautor ?>"maxlength="20" required/>
				</div>
				<div class="form-group">
					<label for="tipo">Tipo</label><br>
					<input type="radio" id="lido" name="tipo" value="<?= $projeto->gettipo ?>">
					<label for="html">Lido</label><br>
					<input type="radio" id="ler" name="tipo" value="<?= $projeto->gettipo ?>">
					<label for="css">Ler</label><br>
				</div>
				<div class="form-group">
					<label for="pessoa_id">Orcamento</label>
					<select class="form-control" name="pessoa_id">
						<?php
							foreach($pessoas as $p)
							{
								if ($p->getid==$projeto->getpessoa_id) {
								  echo "<option value='$p->getid' selected>$p->getnome</option>";
								} else {
								  echo "<option value='$p->getid'>$p->getnome</option>";
								}
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" value="Salvar" class="btn btn-primary btn-small"/>
					<a href="pessoa.index.php" class="btn btn-primary btn-small">Voltar</a>
				</div>
			</form>		
		</div>
	</div>
</div>

<?php include 'rodape.php'; ?>
