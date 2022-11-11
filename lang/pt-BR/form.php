<?php

return [
    'name' => 'Nome',
    'email' => 'Email',
    'fone' => 'Telefone',
    'cell' => 'Celular',
    'identification' => 'Identificação',
    'zipcode' => 'CEP',
    'state_registration' => 'Inscrição Estadual',
    'cpf_cnpj' => 'CPF / CNPJ',
    'adress' => 'Endereço',
    'number' => 'Número',
    'complement' => 'Complemento',
    'district' => 'Bairro',
    'city' => 'Cidade',
    'state' => 'Estado',
    'contributor' => 'Contribuinte',
    'fantasy' => 'Fantasia',
    'tax_regime_code' => 'Código do Regime Tributário',
    'person_type' => 'Tipo de Pessoa',
    'fu' => 'UF',
    'observation' => 'Observação',
    'seller' => 'Vendedor',

    'first_select' => 'Selecione uma das opções...',

    'enums' => [
        'contributor' => [
            'contributor' => 'Contribuinte ICMS',
            'exempted' => 'Contribuinte isento de Inscrição no cadastro de Contribuintes do ICMS',
            'no_contributor' => 'Não Contribuinte, que pode ou não possuir Inscrição Estadual no Cadastro de Contribuintes do ICMS',
        ],
        'person_type' => [
            'legal_entity' => 'Pessoa Jurídica',
            'natural_person' => 'Pessoa Física',
            'foreigner' => 'Estrangeiro',
        ],
        'tax_regime_code' => [
            'simple_national' => 'Simples Nacional',
            'simple_national_gross' => 'Simples Nacional - excesso de sublimite de receita bruta',
            'normal_regime' => 'Regime Normal',
            'non_contributor' => 'Não Contribuinte',
        ],
    ]
];
