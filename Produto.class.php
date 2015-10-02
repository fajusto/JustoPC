<?php
class Produto
{
	var $Codigo;
	var $Descrição;
	var $Preço;
	var $Quantidade;

	function ImprimeEtiqueta()
	{
		print 'Código:    ' . $this->Codigo . "\n";
		print 'Descrição: ' . $this->Descricao . "\n";
	}
}