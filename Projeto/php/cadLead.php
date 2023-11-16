<?php

require_once ("../class/Sql.php");
require_once ("../class/Lead.php");

try {

    $txtNomeEmpresa = $_POST["txt-nomeEmpresa"];
    $txtCepEmpresa = $_POST["txt-cepEmpresa"];
    $txtRuaEmpresa = $_POST["txt-ruaEmpresa"];
    $txtBairroEmpresa = $_POST["txt-bairroEmpresa"];
    $txtCidadeEmpresa = $_POST["txt-cidadeEmpresa"];
    $txtEstadoEmpresa = $_POST["txt-estadoEmpresa"];
    $txtEmailEmpresa = $_POST["txt-emailEmpresa"];
    $txtTelefoneEmpresa =$_POST["txt-telefoneEmpresa"];
    $txtStatusLead = $_POST["txt-statusLead"];
    $txtDescricaoDetalhes = $_POST["txt-descricaoDetalhes"];


    $lead = new Lead();

    $lead->setNomeEmpresa($txtNomeEmpresa);
    $lead->setCepEmpresa($_POST["txt-cepEmpresa"]);
    $lead->setRuaEmpresa($txtRuaEmpresa);
    $lead->setBairroEmpresa($txtBairroEmpresa);
    $lead->setCidadeEmpresa($txtCidadeEmpresa);
    $lead->setEstadoEmpresa($txtEstadoEmpresa);
    $lead->setEmailEmpresa($txtEmailEmpresa);
    $lead->setTelefoneEmpresa($txtTelefoneEmpresa);
    $lead->setStatusLead($txtStatusLead);
    $lead->setDescricaoDetalhes($txtDescricaoDetalhes);
    
    $lead->cadastroLeads();
    
} catch (PDOException $e) {
    echo $e;
}
?>