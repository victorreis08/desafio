<?php

class Lead extends Sql {

    private $idLeads;
    private $nomeEmpresa;
    private $cepEmpresa;
    private $ruaEmpresa;
    private $bairroEmpresa;
    private $cidadeEmpresa;
    private $estadoEmpresa;
    private $emailEmpresa;
    private $telefoneEmpresa;
    private $descricaoDetalhes;
    private $statusLead;

    public function getIdLeads() {
        return $this->idLeads;
    }

    public function setIdLeads($value) {
        $this->idLeads = $value;
    }

    public function getNomeEmpresa() {
        return $this->nomeEmpresa;
    }

    public function setNomeEmpresa($value) {
        $this->nomeEmpresa = $value;
    }

    public function getCepEmpresa(){
        return $this->cepEmpresa;
    }

    public function setCepEmpresa($value){
        $this->cepEmpresa = $value;
    }

    public function getRuaEmpresa() {
        return $this->ruaEmpresa;
    }

    public function setRuaEmpresa($value) {
        $this->ruaEmpresa = $value;
    }

    public function getBairroEmpresa() {
        return $this->bairroEmpresa;
    }

    public function setBairroEmpresa($value) {
        $this->bairroEmpresa = $value;
    }

    
    public function getCidadeEmpresa() {
        return $this->cidadeEmpresa;
    }

    public function setCidadeEmpresa($value) {
        $this->cidadeEmpresa = $value;
    }  

    public function getEstadoEmpresa(){
        return $this->estadoEmpresa;
    }

    public function setEstadoEmpresa($value){
        return $this->estadoEmpresa = $value;
    }

    public function getEmailEmpresa(){
        return $this->emailEmpresa;
    }

    public function setEmailEmpresa($value){
        return $this->emailEmpresa = $value;
    }

    public function getTelefoneEmpresa(){
        return $this->telefoneEmpresa;
    }

    public function setTelefoneEmpresa($value){
        return $this->telefoneEmpresa = $value;
    }

    public function getDescricaoDetalhes(){
        return $this->descricaoDetalhes;
    }

    public function setDescricaoDetalhes($value){
        return $this->descricaoDetalhes = $value;
    }

    public function getStatusLead(){
        return $this->statusLead;
    }

    public function setStatusLead($value){
        return $this->statusLead = $value;
    }

    

    

    /* método statico */
    public static function getList() {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM leads;");


        return $results;
    }

    public static function carregarCodigo($codigo) {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM leads WHERE id_leads = :CODIGO", array(
            ":CODIGO" => $codigo
        ));


        return $results;
    }

    /* cadastro */
    public function cadastroLeads() {
        $sql = new Sql();

        $results = $sql->runQuery("INSERT INTO leads
        values(:CODIGO ,:NOME, :CEP, :RUA, :BAIRRO, :CIDADE, 
        :ESTADO, :EMAIL, :TELEFONE, :DESCRICAO, :STATUSLEAD)", array(
            ':CODIGO' => 0,
            ':NOME' => $this->getNomeEmpresa(),
            ':CEP' => $this->getCepEmpresa(),
            ':RUA' => $this->getRuaEmpresa(),
            ':BAIRRO' => $this->getBairroEmpresa(),
            ':CIDADE' => $this->getCidadeEmpresa(),
            ':ESTADO' => $this->getEstadoEmpresa(),
            ':EMAIL' => $this->getEmailEmpresa(),
            ':TELEFONE' => $this->getTelefoneEmpresa(),
            ':DESCRICAO' => $this->getDescricaoDetalhes(),
            ':STATUSLEAD' => $this->getStatusLead()
        ));

        if ($results->rowCount() > 0) {
            echo '<p class="msg-sucesso">Cadastrado</p>';
        } else {
            echo '<p class=""msg-fracasso">Não foi possivel realizar o cadastro</p>';
        }
    }

    public function alterarLeads() {
        $sql = new Sql();

        $results = $sql->runQuery("UPDATE leads SET id_leads = :CODIGO, "
                . "nome_empresa = :NOME, rua_empresa = :RUA,"
                . "bairro_empresa = :BAIRRO, empresa_cidade = :CIDADE, estado_empresa = :ESTADO "
                ."email_empresa = :EMAIL, telefone_empresa = :TELEFONE, descricao_detalhes = :DESCRICAO, status_lead = :STATUS"
                . "WHERE id_leads = :CODIGO", array(
            ':CODIGO' => $this->getIdLeads(),
            ':NOME' => $this->getNomeEmpresa(),
            ':CEP' => $this->getCepEmpresa(),
            ':RUA' => $this->getRuaEmpresa(),
            ':BAIRRO' => $this->getBairroEmpresa(),
            ':CIDADE' => $this->getCidadeEmpresa(),
            ':ESTADO' => $this->getEstadoEmpresa(),
            ':EMAIL' => $this->getEmailEmpresa(),
            ':TELEFONE' => $this->getTelefoneEmpresa(),
            ':DESCRICAO' => $this->getDescricaoDetalhes(),
            ':STATUSLEAD' => $this->getStatusLead()
        ));


        if ($results->rowCount() > 0) {

            echo '<p class="msg-sucesso">Alterado</p>';
        } else {
            echo '<p class="msg-fracasso">Não foi possivel realizar a alteração</p>';
        }
    }

    public function deletarLead() {
        $sql = new Sql();

        $results = $sql->runQuery("DELETE FROM leads WHERE id_leads = :CODIGO", array(
            ":CODIGO" => $this->getIdLeads()
        ));

        if ($results->rowCount() > 0) {
            echo "Exclusão Realizada com sucesso";
            //zerar objetos após exclusão
            $this->getIdLeads(0);
            $this->getNomeEmpresa("");
            $this->getRuaEmpresa("");
            $this->getBairroEmpresa("");
            $this->getCidadeEmpresa("");
            $this->getEstadoEmpresa("");
            $this->getEmailEmpresa("");
            $this->getTelefoneEmpresa("");
            $this->getDescricaoDetalhes("");
            $this->getStatusLead("");
        
        } else {
            echo "Não foi possivel excluir o registro";
        }
    }

}

?>
