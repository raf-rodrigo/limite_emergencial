URL BASE  - https://api-sandbox-limit-digimason.axxispay.com.br

1. Autenticação de Partner (Banco) - autenticationClient.php -> gera o access_token, que será utiliado na próxima solicitação
    URL de Autenticação -> /v2/oauth/token, solicitação -> POST, Header -> Content_Type: application/json, Parâmetros -> passado no body json{"client_id","client_secret","grant_type","scope"}
    Retorno: {
        "token_type":"Bearer",
        "expires_in":86400,
        "access_token":"ejJo....."
    }
2. Autenticação do Cliente - autenticationUser.php -> utiliza o access_token da solicitação anterior, sendo gerado access_token e refresh_token, o access_token será utilizados nas próximas solicitações
    URL de Autenticação -> /v2/users/auth, solicitação -> POST, Header -> Content_Type: application/json, Parâmetros -> passado no body json {"email","password"}
    Retorno: {
        "status": "success",
    "code": 0,
    "message": "Login realizado com sucesso!",
    "data": {
        "user": {
            "uuid": "8abb9d0f-a01e-4045-a756-551e8525d4e5",
            "email": "admin@cardban.com.br",
            "name": "Admin Cardban",
            "status": "ACTIVE"
        },
        "profile": {
            "uuid": "205a53d0-bcab-42cf-8dfe-74a6f079d85e",
            "type": "SYSTEM_ADMIN",
            "profile": "system-admin",
            "slug": "system-admin",
            "name": "Administrador do Sistema"
        },
        "company": null,
        "token": {
            "token_type": "Bearer",
            "expires_in": 86400,
            "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1N.......",
            "refresh_token": "def50200911a8cab685ad7879833835ed03bf672....."
        }
        }
    }
3. Adesão ao Limite Emergencial (Cliente) - requestAccession.php -> utiliza o access_token da requisição autenticationUser
    URL de Consulta -> /v2/accessions, solicitação -> POST, Header -> Content-Type: appliction/json, Authorization: Bearer eyJ0e....., Parâmetros -> passados no body em json{"company_name":"nome da empresa" (string), "company_document":"CNPJ da Empresa sem pontuação" (sring), "company_responsible_name":"Nome do Responsável do RH"(string), "company_phone":"telefone da empresa com ddd sem pontuação"(string),"company_email":"e-maul do RH"(string),"employee_frist_name":"Primeiro Nome do Funcionário"(string),"employee_last_name":"Sobrenome do funcionário"(string),"employee_document":"CPF do funcionário sem pontuação"(string),"employee_email":"e-mail do funcionário"(string), "employee_mobile":"celular do funcionário com ddd"(string)}
    Retorno: {
    "status": "success",
    "code": 0,
    "message": "Adesão criada com sucesso.",
    "data": {
        "uuid": "e7b71136-55fb-4de1-9687-5d41cfe526d8",
        "status": null,
        "company": {
            "id": null,
            "name": "Ollé Tecnologia",
            "responsible_name": "Carlos Alexandre",
            "document": "10998575000107",
            "phone": "1938385629",
            "email": "olletecnologia@gmail.com"
        },
        "employee": {
            "id": null,
            "first_name": "Tatiane",
            "last_name": "Rosângela da Costa",
            "document": "76734472230",
            "mobile": "19991312477",
            "email": "csitecnologia@gmail.com"
        }
    }
    }
4. Listar adesões (Banco) - listaccession.php -> utiliza o access_token da requisição autenticationUser
    URL de Consulta -> /v2/accessions, solicitação -> GET, Header -> Content-Type: application/json, Authorization: Bearer eyJ0eXAiO......, 
    Retorno:
    {
    "status": "success",
    "code": 0,
    "message": "Lista paginada de adesões.",
    "data": {
        "list": {
            "current_page": 1,
            "total_records": 6,
            "total_pages": 1,
            "total_per_pages": 10,
            "accessions": [
                {
                    "uuid": "e7b71136-55fb-4de1-9687-5d41cfe526d8",
                    "status": "OPENED",
                    "company": {
                        "id": null,
                        "name": "Ollé Tecnologia",
                        "responsible_name": "Carlos Alexandre",
                        "document": "10998575000107",
                        "phone": "1938385629",
                        "email": "olletecnologia@gmail.com"
                    },
                    "employee": {
                        "id": null,
                        "first_name": "Tatiane",
                        "last_name": "Rosângela da Costa",
                        "document": "76734472230",
                        "mobile": "19991312477",
                        "email": "csitecnologia@gmail.com"
                    }
                },
                {
                    "uuid": "4de10df0-341e-4859-aa99-7f7adb7745bf",
                    "status": "PENDING",
                    "company": {
                        "id": null,
                        "name": "Ollé Tecnologia",
                        "responsible_name": "Carlos Alexandre",
                        "document": "10998575000107",
                        "phone": "1938385629",
                        "email": "olletecnologia@gmail.com"
                    },
                    "employee": {
                        "id": null,
                        "first_name": "Tatiane",
                        "last_name": "Rosângela da Costa",
                        "document": "76734472230",
                        "mobile": "19991312477",
                        "email": "csitecnologia@gmail.com"
                    }
                },
                {
                    "uuid": "873b473f-f419-4432-951f-ae86667150d9",
                    "status": "PENDING",
                    "company": {
                        "id": null,
                        "name": "Ollé Tecnologia",
                        "responsible_name": "Carlos Alexandre",
                        "document": "10998575000107",
                        "phone": "1938385629",
                        "email": "olletecnologia@gmail.com"
                    },
                    "employee": {
                        "id": null,
                        "first_name": "Tatiane",
                        "last_name": "Rosângela da Costa",
                        "document": "76734472230",
                        "mobile": "19991312477",
                        "email": "csitecnologia@gmail.com"
                    }
                },
                {
                    "uuid": "ee49f7c4-9c5f-4e91-a3c6-3805f84d2ed7",
                    "status": "PENDING",
                    "company": {
                        "id": null,
                        "name": "Ollé Tecnologia",
                        "responsible_name": "Carlos Alexandre",
                        "document": "10998575000107",
                        "phone": "1938385629",
                        "email": "olletecnologia@gmail.com"
                    },
                    "employee": {
                        "id": null,
                        "first_name": "Tatiane",
                        "last_name": "Rosângela da Costa",
                        "document": "76734472230",
                        "mobile": "19991312477",
                        "email": "csitecnologia@gmail.com"
                    }
                },
                {
                    "uuid": "f54973a7-ec08-4747-bb46-c550c02aec30",
                    "status": "PENDING",
                    "company": {
                        "id": null,
                        "name": "Ollé Tecnologia",
                        "responsible_name": "Carlos Alexandre",
                        "document": "10998575000107",
                        "phone": "1938385629",
                        "email": "olletecnologia@gmail.com"
                    },
                    "employee": {
                        "id": null,
                        "first_name": "Tatiane",
                        "last_name": "Rosângela da Costa",
                        "document": "76734472230",
                        "mobile": "19991312477",
                        "email": "csitecnologia@gmail.com"
                    }
                },
                {
                    "uuid": "0f02f56c-ca97-4e02-abc7-2b6b6b2b36b8",
                    "status": "DONE",
                    "company": {
                        "id": null,
                        "name": "Honda",
                        "responsible_name": "Lincon Toledo",
                        "document": "17802954000110",
                        "phone": "5511987653421",
                        "email": "honda@gmail.com"
                    },
                    "employee": {
                        "id": null,
                        "first_name": "Fernando",
                        "last_name": "Alvarenga",
                        "document": "25426205043",
                        "mobile": "5519989765643",
                        "email": "fernando@teste.com"
                        }
                    }
                ]
            }
        }
    }
5. Atualizar Adesão (Banco) - updateAccession.php -> utiliza o access_token da solicitação autenticationUse.php
    URL de Consulta -> /v2/accessions/{{UUID}}, solicitação -> PUT, Header -> Content-Type: application/json, Authorization: Bearer eyJ0eXAi...., Parâmetros -> passados no body em json {"company_name":"nome da empresa" (string), "company_document":"CNPJ da Empresa sem pontuação" (sring), "company_responsible_name":"Nome do Responsável do RH"(string), "company_phone":"telefone da empresa com ddd sem pontuação"(string),"company_email":"e-maul do RH"(string),"employee_frist_name":"Primeiro Nome do Funcionário"(string),"employee_last_name":"Sobrenome do funcionário"(string),"employee_document":"CPF do funcionário sem pontuação"(string),"employee_email":"e-mail do funcionário"(string), "employee_mobile":"celular do funcionário com ddd"(string), "status":"status da adesão"(string - status: OPENED, DONE, PENDING, CANCELED)}
    Retorno:{
        "status": "success",
        "code": 0,
        "message": "Adesão atualizada com sucesso.",
        "data": { "uuid": "be2b29aa-3773-4a21-977e-36cc471be74a",
        "status": "PENDING",
        "company": {
        "id": null,
        "name": "Ollé Tecnologia",
        "responsible_name": "Carlos Alexandre",
        "document": "10998575000107",
        "phone": "1938385629",
        "email": "olletecnologia@gmail.com"
        },
        "employee": {
        "id": null,
        "first_name": "Tatiane",
        "last_name": "Rosângela da Costa",
        "document": "76734472230",
        "mobile": "19991312477",
        "email": "csitecnologia@gmail.com"
        }
        }
    }
6. Detalhes da adesão (Banco) - viewAccessionByUuid.php -> utiliza o access_token da solicitação autenticationUser.php
    URL da Consulta -> /v2/accessions/{{UUID}}, solicitação -> GET, Header -> Content-Type: application/json Authorization: Bearer eyJ0eXAiOiJKV1QiLC......., 
    Retorno:{
    "status": "success",
    "code": 0,
    "message": "Detalhe da adesão.",
    "data": {
        "uuid": "f54973a7-ec08-4747-bb46-c550c02aec30",
        "status": "PENDING",
        "company": {
            "id": null,
            "name": "Ollé Tecnologia",
            "responsible_name": "Carlos Alexandre",
            "document": "10998575000107",
            "phone": "1938385629",
            "email": "olletecnologia@gmail.com"
        },
        "employee": {
            "id": null,
            "first_name": "Tatiane",
            "last_name": "Rosângela da Costa",
            "document": "76734472230",
            "mobile": "19991312477",
            "email": "csitecnologia@gmail.com"
            }
        }
    }
7. Excluir Adesão (Banco) - deleteAccession.php -> utiliza o access_token da solicitação do autenticationUser.php
    URL de Consulta -> v2/accessions/{{UUID}}, solicitação -> DELETE, Header -> Content-Type: application/json Authorization: Bearer eyJ0eXAiOiJKV1QiLC.......
    Retorno:
    {
        "status": "success",
        "code": 0,
        "message": "Adesão deletada com sucesso.",
        "data": true
    }

8. getLimitAvailiable.php

9. Consultar Detalhes do Limete - limitDetail.php utiliza o access_token da solicitação autenticationUser.php
    URL da Consulta -> /v2/partner/employees/emergency-limit/detail, solicitação -> GET, Header -> Content-Type: application/json Authorization: Bearer eyJ0eXAiOiJKV1QiLC......., Parâmetros -> {
        "document":"CPF do Funcionário sem pontuação"(string)}
    Retorno: {
            "total": 2100,
            "amount_to_release": 0,
            "used": 1000,
            "available": 1100
        }

10. Solicitar Antecipação - Valor do Limite (Cliente/Banco) - requestLimit.php utiliza o access_token da solicitação de autenticação autenticationUser.php
    URL de consulta -> /v2/partner/employees/emergency-limit/store, solicitação -> POST, Header -> Content-Type: application/json Authorization: Bearer eyJ0eXAiOiJKV1QiLC......., Parâmetro passado no body em raw-json -> {
        "document":"CPF do Funcionário sem pontuação"(string), "total":valor a ser usado do limite (float)}
    Retorno:{                
        "status": "success",
        "code": 0,
        "message": "Antecipação solicitada com sucesso!",
        "data": {
        "uuid": "433de140-95cd-4f6e-a6fa-56d4c5485c4b",
        "employee": {
        "uuid": "e69f7a37-c4e7-4d18-b8b0-36a3b0fb3bf8",
        "name": "Mikayla Martinez"
        },
        "status": "AWAITING_CONTRACT_SIGNING",
        "payment_status": "PENDING",
        "requested_at": "2022-06-08T21:01:10.836630Z",
        "approved_at": null,
        "conciliated_at": null,
        "amount": 10,
        "fee": 0.1,
        "total": 10.1,
        "amount_paid": 0,
        "fee_paid": 0,
        "total_paid": 0,
        "credit_request_contract": {
        "contract_number": 1,
        "status": "AWAITING_SIGNING",
        "signed_at": null,
        "clicksign_document_uuid": "609dfb67-f532-426cb0c7d55c157895f1",
        "clicksign_document_download_link":
        "https://clicksignsandbox-content.s3.amazonaws.com/2022/06/08/21/01/11/
        d870a1ab-1ac8-4e76a8ed-895053d202f3/CCB%20-%20MIKAYLA%20MARTINEZ.docx?XAmz-Expires=301&X-Amz-Date=20220608T210110Z&X-Amz-SecurityToken=IQoJb3JpZ2luX2VjEPz%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCXVzLWVhc3QtMS
        JGMEQCICNT0qnPfDb%2FlRuIhdiq%2FjCOelxrH6HIHdY%2BBgWZFUOyAiAluhE5AihxAVct
        xGklt9sRkJ45aJWDHA%2FSgEkQBgPK%2FSrcBAj0%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8B
        EAIaDDc0MDY2MjI3ODc5MyIMVS4vqMomng%2FPsOT0KrAEqUoVEdca%2BsvXoQLQfljv2U6t
        POCVgeWOqFG%2BX%2BHTzQFZZ8RB9lx%2B0auI8z5nOaJSwhEaksUfNWtjbVqwEoyhHPGSWo
        tZcHzxoKsrl30eDxhJjjDpKE68SHBbfPJf1I64T%2FHGszUWUYIV9wQdjv9zOsOpSXaPcyk1
        DC2s1TYiku9kPvikR9ZsoLAN0wwyDRhpaohhqWJyx1lYbE9HVPqcigsBn0vgFU5esayaOO5%
        2FlsaSzl7h%2FR6FUWXTRGTaNQPNreZoPS%2F6Y5N81qEG88KtGMl8ifh%2FYsK0srolLEdr
        GjWcQF%2Bv2hNAMiWnKueJ1nr%2BZ8QZJLyzGZQafE4eMzamghcrqMsMw3zy87saJ%2FG%2F
        24MPRkFjlKw4Pz3vQkbW9oEBQM7sK0hk0C2PWa5ic7Eu1vAAExo3ujluTyhvGUrjm3eI1vPH
        8%2Fc%2BCTvjcN1R%2BYXwAqVRUb7eZzDVXlLy0acwhEiNj3uVJU5xEluK1klr%2FdL5T%2B
        iG8z%2BxgHrsZSW2E6atbllf5IymfrdJUiGmKTHzmrZP9n4NsbhkXxIYGzOzK4IeHOVsp%2F
        2j0i0LudmrpAsrUkx8a61Vkj%2FLojD4wfPYqnJ9HqYQoABhhhJ%2FdnrSJFQnZnVOj0JxGK
        mIj9reDs85CaF1kwmJcqDiZIINv7OP4ejrIfljCXbi6d46KOc0LwalzCyLXcwo9zBJfhOvQi
        BijSNWwDsbF8twiuGRSN4uZh0B8hsGD77Mx2BZJh5p7lcw7ueDlQY6qgHkxYHJqUkjbkGb8f
        xtnxLQBDiCnsD5e9plticpwtXQrjBgbBC6N6aLsDaHbJOGke4%2Bcm8FnNxYdWxYhjIDFbHu
        vwgzQqyjrdCNFYLMkZItLc1TOjhDW%2Fcb1lAaWoYg%2FwqDdzYxoRtOQNTTGpbGSI0K%2FG
        1TOrEZG4XCiJ7R0nKM8316hOQDbUcb4oslWVZg36SROuoybjPIyJMaEorGYCv8LnBKaP3COa
        Yemw%3D%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-AmzCredential=ASIA2Y4XJPKESJB7PCWG%2F20220608%2Fus-east-
        1%2Fs3%2Faws4_request&X-Amz-SignedHeaders=host&X-AmzSignature=903d5a84dfc8c78c37191c1ebaced1f4018b5b7f137ece8391945db5058804
        0d"
        }
        }
        }
