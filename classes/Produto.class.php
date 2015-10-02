<?php
class Produto
{
	var $Codigo;
	var $Descricao;
	var $Preco;
	var $Quantidade;

	function ImprimeEtiqueta()
	{
		print 'Código:    ' . $this->Codigo . "\n";
		print 'Descrição: ' . $this->Descricao . "\n";
	}
}