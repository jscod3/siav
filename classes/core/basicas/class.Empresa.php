<?php
class Empresa {
	
	public $idEmpresa;
	public $oMunicipio;
	public $oSituacao;
	public $oIncentivos;
	public $oModalidade;
	public $cnpj;
	public $cnpjMatriz;
	public $anoBase;
	public $anoAprovacao;
	public $razaoSocial;
	public $telefone;
	public $fax;
	public $email;
	public $fonteOrigem;
	public $latitude;
	public $longitude;
	public $endereco;
	public $numero;
	public $complemento;
	public $bairro;
	public $cep;
	public $setor;
	public $enq;
	public $numSudam;
	public $procurador;
	public $laudoData;
	public $laudoNumero;
	public $anoCalendario;
	public $resolucaoData;
	public $resolucaoNumero;
	public $declaracaoData;
	public $declaracaoNumero;
	public $situacaoCadastro;
	public $projetoSocial;
	public $politicaAmbiental;
	public $vigente;
	public $anoVigencia;
	public $dataHoraAlteracao;
	public $usuarioAlteracao;
	
	function __construct($idEmpresa = NULL, Municipio $oMunicipio = NULL, Situacao $oSituacao = NULL, Incentivos $oIncentivos = NULL, Modalidade $oModalidade = NULL, $cnpj = NULL, $cnpjMatriz = NULL, $anoBase = NULL, $anoAprovacao = NULL, $razaoSocial = NULL, $telefone = NULL, $fax = NULL, $email = NULL, $fonteOrigem = NULL, $latitude = NULL, $longitude = NULL, $endereco = NULL, $numero = NULL, $complemento = NULL, $bairro = NULL, $cep = NULL, $setor = NULL, $enq = NULL, $numSudam = NULL, $procurador = NULL, $laudoData = NULL, $laudoNumero = NULL, $anoCalendario = NULL, $resolucaoData = NULL, $resolucaoNumero = NULL, $declaracaoData = NULL, $declaracaoNumero = NULL, $situacaoCadastro = NULL, $projetoSocial = NULL, $politicaAmbiental = NULL, $vigente = NULL, $anoVigencia = NULL, $dataHoraAlteracao = NULL, $usuarioAlteracao = NULL){
		$this->idEmpresa = $idEmpresa;
		$this->oMunicipio = $oMunicipio;
		$this->oSituacao = $oSituacao;
		$this->oIncentivos = $oIncentivos;
		$this->oModalidade = $oModalidade;
		$this->cnpj = $cnpj;
		$this->cnpjMatriz = $cnpjMatriz;
		$this->anoBase = $anoBase;
		$this->anoAprovacao = $anoAprovacao;
		$this->razaoSocial = $razaoSocial;
		$this->telefone = $telefone;
		$this->fax = $fax;
		$this->email = $email;
		$this->fonteOrigem = $fonteOrigem;
		$this->latitude = $latitude;
		$this->longitude = $longitude;
		$this->endereco = $endereco;
		$this->numero = $numero;
		$this->complemento = $complemento;
		$this->bairro = $bairro;
		$this->cep = $cep;
		$this->setor = $setor;
		$this->enq = $enq;
		$this->numSudam = $numSudam;
		$this->procurador = $procurador;
		$this->laudoData = $laudoData;
		$this->laudoNumero = $laudoNumero;
		$this->anoCalendario = $anoCalendario;
		$this->resolucaoData = $resolucaoData;
		$this->resolucaoNumero = $resolucaoNumero;
		$this->declaracaoData = $declaracaoData;
		$this->declaracaoNumero = $declaracaoNumero;
		$this->situacaoCadastro = $situacaoCadastro;
		$this->projetoSocial = $projetoSocial;
		$this->politicaAmbiental = $politicaAmbiental;
		$this->vigente = $vigente;
		$this->anoVigencia = $anoVigencia;
		$this->dataHoraAlteracao = $dataHoraAlteracao;
		$this->usuarioAlteracao = $usuarioAlteracao;
	}
}