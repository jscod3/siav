<?php
require_once("../classes/class.Controle.php");
$oControle = new Controle();
$idEmpresa= $_REQUEST['idEmpresa'];

$info_empresa = $oControle->getEmpresa($idEmpresa);
Util::trace($info_empresa);
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>
            Comprovante de Entrega de Dados
        </title>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/tablesaw.stackonly.css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="portlet light bordered">
                        <div class="logo">
                            <img src="img/logo.png" alt="">
                        </div>
                        <h2>
                            SUDAM - Superintendência do Desenvolvimento da Amazônia
                        </h2>
                        <h3>
                            RECIBO DE ENTREGA DE DADOS DA EMPRESA PARA MONITORAMENTO
                        </h3>
                        <table class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                            <p class="titulo">
                                <strong>
                                    Identificação de Declarante:
                                </strong>
                            </p>
                            <tbody>
                                <tr>
                                    <td>
                                        <label>
                                            CNPJ da Empresa
                                        </label>
                                        <label>
                                            42.318.949/0001-84
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            Razão Social
                                        </label>
                                        <label>
                                            DULCE MATERIAIS DE CONSTRUÇÃO LTDA
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            Telefone
                                        </label>
                                        <label>
                                            (91) 3266-6565
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>
                                            CEP
                                        </label>
                                        <label>
                                            68795-000
                                        </label>
                                    </td>
                                    <td colspan="2">
                                        <label>
                                            Endereço
                                        </label>
                                        <label>
                                            AVENIDA SÃO MIGUEL, 83
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>
                                            Bairro
                                        </label>
                                        <label>
                                            CENTRO
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            Municipio
                                        </label>
                                        <label>
                                            BELÉM
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            UF
                                        </label>
                                        <label>
                                            PARÁ
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <label>
                                            Ano Base
                                        </label>
                                        <label>
                                            2014
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="obs">
                            <p class="titulo">
                                <strong>
                                    Observação:
                                </strong>
                            </p>
                            <p>
                                Empresa realizou a atualização dos dados da empresa referente ao ano base
                                2014, recebida via internet pelo sistema de Incentivos fiscais.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-left">
                                    <span class="caption-helper">
                                        SUDAM - Superintendência do Desenvolvimento da Amazônia
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-right">
                                    <span class="caption-helper">
                                        Data: 22/03/2017 - 15h
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/tablesaw.stackonly.js'></script>
            <script src="js/index.js"></script>-->
    </body>

</html>