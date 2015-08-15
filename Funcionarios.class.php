<?php

class Funcionarios {


	public function __construct(){
		
		$retorno = $this->listarFuncionarios();
		print '<pre>'; print_r($retorno); print '</pre>';

	}

	private function listarFuncionarios(){
		$a[] = array(	'nome' => 'Maria', 
						'dpto' => 'Contabilidade',
						'cargo' => 'Analista Senior',
						'idade' => '35 anos');

		$a[] = array(	'nome' => 'Cintia', 
						'dpto' => 'TI',
						'cargo' => 'Gerente de TI',
						'idade' => '40 anos');

		$a[] = array(	'nome' => 'Maria', 
						'dpto' => 'Adm',
						'cargo' => 'Atendimento ao Cliente',
						'idade' => '25 anos');
		
		return $a;
	}

}