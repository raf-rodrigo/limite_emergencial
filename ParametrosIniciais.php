<?php

class ParametrosIniciais{

    public $urlBase;// = "https://api-sandbox-limit-digimason.axxispay.com.br";
    public $urlAutenticacaoClient; // /v2/oauth/token;
    public $urlAutenticacaoUser; // /v2/users/auth;
    public $urlAdesao; // /v2/accessions;
    public $urlListar; // /v2/accessions;
    public $urlAtualizar; // /v2/accessions/{{uuid}};
    public $urlDetalhar; // /v2/accessions/{{uuid}};
    public $urlExcluir; // /v2/accessions/{{uuid}};
    public $urlConultarDetalhes; // /v2/partner/employees/emergency-limit/detail
    public $urlSolictarAntecipacao; // /v2/partner/employees/emergency-limit/store;
    //parâmetros que serão passados no Body em formato JSON
    public $clientId;
    public $clientSecret;
    public $grantType;
    public $scope;
    public $accessTokenCliente;
    public $email;
    public $password;
    public $accessTokenUser;
    public const $authorization = "Bearer";
    public $companyName;
    public $companyDocument;
    public $companyResponsibleName;
    public $companyPhone;
    public $companyEmail;
    public $employeeFirstName;
    public $employeeLastName;
    public $employeeDocument;
    public $employeeEmail;
    public $employeeMobile;
    public $uuid;
    public $status;// FAZER BUSCAR NO AQUIVO JSON
    public $valorTotal;

    function __construct(
        $urlBase;
        $urlAutenticacaoClient;
        $urlAutenticacaoUser;
        $urlAdesao;
        $urlListar;
        $urlAtualizar;
        $urlDetalhar;
        $urlExcluir;
        $urlConultarDetalhes;
        $urlSolictarAntecipacao;
        $clientId;
        $clientSecret;
        $grantType;
        $scope;
        $accessTokenCliente;
        $email;
        $password;
        $accessTokenUser;
        $authorization = "Bearer";
        $companyName;
        $companyDocument;
        $companyResponsibleName;
        $companyPhone;
        $companyEmail;
        $employeeFirstName;
        $employeeLastName;
        $employeeDocument;
        $employeeEmail;
        $employeeMobile;
        $uuid;
        $status;// FAZER BUSCAR NO AQUIVO JSON
        $valorTotal;
    ){
        $this -> urlBase = $urlBase;
        $this -> urlAutenticacaoClient = $urlAutenticacaoClient;
        $this -> urlAutenticacaoUser = $urlAutenticacaoUser;
        $this -> urlAdesao = $urlAdesao;
        $this -> urlLisrtar = $urlListar;
        $this -> urlAtualizar = $urlAtualizar;
        $this -> urlDetalhar = $urlDetalhar;
        $this -> urlExcluir = $urlExcluir;
        $this -> urlComsultarDetalhes = $urlConultarDetalhes;
        $this -> urlSolicitarAntecipacao = $urlSolictarAntecipacao;
        $this -> cliendId = $clientId;
        $this -> clientSecret = $clientSecret;
        $this -> grantType = $grantType;
        $this -> $scope;
        $this -> $accessTokenCliente;
        $this -> $email;
        $this -> $password;
        $this -> $accessTokenUser;
        $this -> $authorization;
        $this -> $companyName;
        $this -> $companyDocument;
        $this -> $companyResponsibleName;
        $this -> $companyPhone;
        $this -> $companyEmail;
        $this -> $employeeFirstName;
        $this -> $employeeLastName;
        $this -> $employeeDocument;
        $this -> $employeeEmail;
        $this -> $employeeMobile;
        $this -> $uuid;
        $this -> $status;
        $this -> $valorTotal;
        }
    
}