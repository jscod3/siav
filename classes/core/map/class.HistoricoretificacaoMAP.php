<?php
class HistoricoretificacaoMAP {

	static function getMetaData() {
		return ['historicoretificacao' => ['idHistRet', 
'idRetEmpresa', 
'idRetSudam', 
'idEmpresa', 
'idEmpresaRet', 
'anoBase', 
'cnpj', 
'status', 
'dataHoraAlteracao', 
'usuarioAlteracao'], 
'retificacaoempresa' => ['idRetEmpresa', 
'idEmpresa', 
'cnpj', 
'anoBase', 
'motivo', 
'justificativa', 
'status', 
'dataSolicitacao', 
'usuarioSolicitacao'], 
'retificacaosudam' => ['idRetSudam', 
'idRetEmpresa', 
'justificativa', 
'status', 
'dataAlteracao', 
'usuarioAlteracao'], 
'empresa' => ['idEmpresa', 
'idMunicipio', 
'idSituacao', 
'idIncentivo', 
'idModalidade', 
'cnpj', 
'cnpjMatriz', 
'anoBase', 
'anoAprovacao', 
'razaoSocial', 
'telefone', 
'fax', 
'email', 
'fonteOrigem', 
'latitude', 
'longitude', 
'endereco', 
'complemento', 
'bairro', 
'cep', 
'setor', 
'enq', 
'numSudam', 
'procurador', 
'laudoData', 
'laudoNumero', 
'anoCalendario', 
'resolucaoData', 
'resolucaoNumero', 
'declaracaoData', 
'declaracaoNumero', 
'situacaoCadastro', 
'projetoSocial', 
'politicaAmbiental', 
'vigente', 
'anoVigencia', 
'dataHoraAlteracao', 
'usuarioAlteracao']];
	}
	
	static function dataToSelect() {
		foreach(self::getMetaData() as $tabela => $aCampo){
			foreach($aCampo as $sCampo){
				$aux[] = "$tabela.$sCampo as $tabela"."_$sCampo";
			}
		}
	
		return implode(",\n", $aux);
	}
	
	static function filterLike($valor) {
		foreach(self::getMetaData() as $tabela => $aCampo){
			foreach($aCampo as $sCampo){
				$aux[] = "$tabela.$sCampo like '$valor'";
			}
		}
	
		return implode("\nor ", $aux);
	}

	static function objToRs($oHistoricoretificacao){
		$reg['idHistRet'] = $oHistoricoretificacao->idHistRet;
		$oRetificacaoempresa = $oHistoricoretificacao->oRetificacaoempresa;
		$reg['idRetEmpresa'] = $oRetificacaoempresa->idRetEmpresa;
		$oRetificacaosudam = $oHistoricoretificacao->oRetificacaosudam;
		$reg['idRetSudam'] = $oRetificacaosudam->idRetSudam;
		$oEmpresa = $oHistoricoretificacao->oEmpresa;
		$reg['idEmpresa'] = $oEmpresa->idEmpresa;
		$reg['idEmpresaRet'] = $oHistoricoretificacao->idEmpresaRet;
		$reg['anoBase'] = $oHistoricoretificacao->anoBase;
		$reg['cnpj'] = $oHistoricoretificacao->cnpj;
		$reg['status'] = $oHistoricoretificacao->status;
		$reg['dataHoraAlteracao'] = $oHistoricoretificacao->dataHoraAlteracao;
		$reg['usuarioAlteracao'] = $oHistoricoretificacao->usuarioAlteracao;
		return $reg;		   
	}

	static function objToRsInsert($oHistoricoretificacao){
		$oRetificacaoempresa = $oHistoricoretificacao->oRetificacaoempresa;
		$reg['idRetEmpresa'] = $oRetificacaoempresa->idRetEmpresa;
		$oRetificacaosudam = $oHistoricoretificacao->oRetificacaosudam;
		$reg['idRetSudam'] = $oRetificacaosudam->idRetSudam;
		$oEmpresa = $oHistoricoretificacao->oEmpresa;
		$reg['idEmpresa'] = $oEmpresa->idEmpresa;
		$reg['idEmpresaRet'] = $oHistoricoretificacao->idEmpresaRet;
		$reg['anoBase'] = $oHistoricoretificacao->anoBase;
		$reg['cnpj'] = $oHistoricoretificacao->cnpj;
		$reg['status'] = $oHistoricoretificacao->status;
		$reg['dataHoraAlteracao'] = $oHistoricoretificacao->dataHoraAlteracao;
		$reg['usuarioAlteracao'] = $oHistoricoretificacao->usuarioAlteracao;
		return $reg;		   
	}
	
	static function rsToObj($reg){
		foreach($reg as $campo=>$valor){
			$reg[$campo] = $valor;
		}
		$oHistoricoretificacao = new Historicoretificacao();
		$oHistoricoretificacao->idHistRet = $reg['historicoretificacao_idHistRet'];

		$oRetificacaoempresa = new Retificacaoempresa();
		$oRetificacaoempresa->idRetEmpresa = $reg['retificacaoempresa_idRetEmpresa'];
		$oRetificacaoempresa->cnpj = $reg['retificacaoempresa_cnpj'];
		$oRetificacaoempresa->anoBase = $reg['retificacaoempresa_anoBase'];
		$oRetificacaoempresa->motivo = $reg['retificacaoempresa_motivo'];
		$oRetificacaoempresa->justificativa = $reg['retificacaoempresa_justificativa'];
		$oRetificacaoempresa->status = $reg['retificacaoempresa_status'];
		$oRetificacaoempresa->dataSolicitacao = $reg['retificacaoempresa_dataSolicitacao'];
		$oRetificacaoempresa->usuarioSolicitacao = $reg['retificacaoempresa_usuarioSolicitacao'];
		$oHistoricoretificacao->oRetificacaoempresa = $oRetificacaoempresa;

		$oRetificacaosudam = new Retificacaosudam();
		$oRetificacaosudam->idRetSudam = $reg['retificacaosudam_idRetSudam'];
		$oRetificacaosudam->justificativa = $reg['retificacaosudam_justificativa'];
		$oRetificacaosudam->status = $reg['retificacaosudam_status'];
		$oRetificacaosudam->dataAlteracao = $reg['retificacaosudam_dataAlteracao'];
		$oRetificacaosudam->usuarioAlteracao = $reg['retificacaosudam_usuarioAlteracao'];
		$oHistoricoretificacao->oRetificacaosudam = $oRetificacaosudam;

		$oEmpresa = new Empresa();
		$oEmpresa->idEmpresa = $reg['empresa_idEmpresa'];
		$oEmpresa->cnpj = $reg['empresa_cnpj'];
		$oEmpresa->cnpjMatriz = $reg['empresa_cnpjMatriz'];
		$oEmpresa->anoBase = $reg['empresa_anoBase'];
		$oEmpresa->anoAprovacao = $reg['empresa_anoAprovacao'];
		$oEmpresa->razaoSocial = $reg['empresa_razaoSocial'];
		$oEmpresa->telefone = $reg['empresa_telefone'];
		$oEmpresa->fax = $reg['empresa_fax'];
		$oEmpresa->email = $reg['empresa_email'];
		$oEmpresa->fonteOrigem = $reg['empresa_fonteOrigem'];
		$oEmpresa->latitude = $reg['empresa_latitude'];
		$oEmpresa->longitude = $reg['empresa_longitude'];
		$oEmpresa->endereco = $reg['empresa_endereco'];
		$oEmpresa->complemento = $reg['empresa_complemento'];
		$oEmpresa->bairro = $reg['empresa_bairro'];
		$oEmpresa->cep = $reg['empresa_cep'];
		$oEmpresa->setor = $reg['empresa_setor'];
		$oEmpresa->enq = $reg['empresa_enq'];
		$oEmpresa->numSudam = $reg['empresa_numSudam'];
		$oEmpresa->procurador = $reg['empresa_procurador'];
		$oEmpresa->laudoData = $reg['empresa_laudoData'];
		$oEmpresa->laudoNumero = $reg['empresa_laudoNumero'];
		$oEmpresa->anoCalendario = $reg['empresa_anoCalendario'];
		$oEmpresa->resolucaoData = $reg['empresa_resolucaoData'];
		$oEmpresa->resolucaoNumero = $reg['empresa_resolucaoNumero'];
		$oEmpresa->declaracaoData = $reg['empresa_declaracaoData'];
		$oEmpresa->declaracaoNumero = $reg['empresa_declaracaoNumero'];
		$oEmpresa->situacaoCadastro = $reg['empresa_situacaoCadastro'];
		$oEmpresa->projetoSocial = $reg['empresa_projetoSocial'];
		$oEmpresa->politicaAmbiental = $reg['empresa_politicaAmbiental'];
		$oEmpresa->vigente = $reg['empresa_vigente'];
		$oEmpresa->anoVigencia = $reg['empresa_anoVigencia'];
		$oEmpresa->dataHoraAlteracao = $reg['empresa_dataHoraAlteracao'];
		$oEmpresa->usuarioAlteracao = $reg['empresa_usuarioAlteracao'];
		$oHistoricoretificacao->oEmpresa = $oEmpresa;
		$oHistoricoretificacao->idEmpresaRet = $reg['historicoretificacao_idEmpresaRet'];
		$oHistoricoretificacao->anoBase = $reg['historicoretificacao_anoBase'];
		$oHistoricoretificacao->cnpj = $reg['historicoretificacao_cnpj'];
		$oHistoricoretificacao->status = $reg['historicoretificacao_status'];
		$oHistoricoretificacao->dataHoraAlteracao = $reg['historicoretificacao_dataHoraAlteracao'];
		$oHistoricoretificacao->usuarioAlteracao = $reg['historicoretificacao_usuarioAlteracao'];
		return $oHistoricoretificacao;		   
	}
}
