<?php
namespace Models; // agrupamento de classes (caminho)

// Classe (ou Tipo) de Objeto
class Livro{
	// Propriedades
	protected $id;
	protected $nome;
	protected $publicacao;
	protected $autor;
	protected $tipo;
	protected $pessoa_id;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($id,$nome,$publicacao,$autor,$tipo,$pessoa_id){
		$this->id=$id;
		$this->nome=$nome;
		$this->publicacao=$publicacao;
		$this->autor=$autor;
		$this->tipo=$tipo;		
		$this->pessoa_id=$pessoa_id;
	}

	// Inclui o conteúdo do Trait
	use trait__get;
}