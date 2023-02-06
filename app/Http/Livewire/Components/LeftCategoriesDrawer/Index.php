<?php

namespace App\Http\Livewire\Components\LeftCategoriesDrawer;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $categories;

    public array $selectedCategories = [];

    public function mount()
    {
        $this->categories = collect([
            [
                'id' => '',
                'name' => 'Sem categoria',
            ],
            [
                'id' => '3',
                'name' => 'CUSTO FIXO',
                'children' => [
                    [
                        'id' => '3.1',
                        'name' => 'PREDIAL',
                        'children' => [
                            [
                                'id' => '3.1.1',
                                'name' => 'ALUGUEL',
                                'children' => [
                                    [
                                        'id' => '3.1.1.1',
                                        'name' => 'ALUGUEL',
                                    ],
                                    [
                                        'id' => '3.1.1.2',
                                        'name' => 'DEPÓSITO CAUÇÃO',
                                    ],
                                ],
                            ],
                            [
                                'id' => '3.1.10',
                                'name' => 'IPTU/TFE',
                            ],
                            [
                                'id' => '3.1.11',
                                'name' => 'MANUTENCAO',
                            ],

                            [
                                'id' => '3.1.2',
                                'name' => 'CONDOMINIO',
                            ],
                            [
                                'id' => '3.1.3',
                                'name' => 'AGUA',
                            ],
                            [
                                'id' => '3.1.4',
                                'name' => 'ENERGIA',
                            ],
                            [
                                'id' => '3.1.5',
                                'name' => 'TELEFONE FIXO',
                            ],
                            [
                                'id' => '3.1.6',
                                'name' => 'TELEFONE MOVEL',
                            ],
                            [
                                'id' => '3.1.7',
                                'name' => 'INTERNET',],
                            [
                                'id' => '3.1.8',
                                'name' => 'SEGURO PATRIMONIAL',
                            ],
                            [
                                'id' => '3.1.9',
                                'name' => 'SEGURANCA E ALARME',
                            ],
                        ],
                    ],
                    [
                        'id' => '3.2',
                        'name' => 'PESSOAL',
                        'children' => [
                            [
                                'id' => '3.2.1',
                                'name' => 'SALARIOS',
                                'children' => [
                                    [
                                        'id' => '3.2.1.1',
                                        'name' => 'REGIME CLT',
                                    ],
                                    [
                                        'id' => '3.2.1.2',
                                        'name' => 'TEMPORARIO/ESTAGIARIO',
                                    ],
                                ],
                            ],
                            [
                                'id' => '3.2.2',
                                'name' => 'ENCARGOS',
                                'children' => [
                                    [
                                        'id' => '3.2.2.1',
                                        'name' => 'FGTS',
                                    ],
                                    [
                                        'id' => '3.2.2.2',
                                        'name' => 'INSS',
                                    ],
                                    [
                                        'id' => '3.2.2.3',
                                        'name' => 'IR',
                                    ],
                                ],
                            ],
                            [
                                'id' => '3.2.3',
                                'name' => 'BENEFÍCIOS',
                                'children' => [
                                    [
                                        'id' => '3.2.3.1',
                                        'name' => 'VALE TRANSPORTE',
                                        'children' => [
                                            [
                                                'id' => '3.0.0',
                                                'name' => 'categorie_name',
                                            ],
                                            [
                                                'id' => '3.0.1',
                                                'name' => 'categorie_name',
                                            ],
                                            [
                                                'id' => '3.0.2',
                                                'name' => 'categorie_name',
                                            ],
                                            [
                                                'id' => '3.0.3',
                                                'name' => 'categorie_name',
                                            ],
                                        ],
                                    ],
                                    [
                                        'id' => '3.2.3.2',
                                        'name' => 'VALE REFEIÇÃO',
                                    ],
                                    [
                                        'id' => '3.2.3.3',
                                        'name' => 'CONVÊNIO MÉDICO',
                                    ],
                                ],
                            ],
                            [
                                'id' => '3.2.4',
                                'name' => 'OUTROS BENEFÍCIOS',
                                'children' => [
                                    [
                                        'id' => '3.2.4.1',
                                        'name' => 'RESCISÕES',
                                        'children' => [
                                            [
                                                'id' => '3.0.0',
                                                'name' => 'categorie_name',
                                            ],
                                            [
                                                'id' => '3.0.1',
                                                'name' => 'categorie_name',
                                            ],
                                            [
                                                'id' => '3.0.2',
                                                'name' => 'categorie_name',
                                            ],
                                            [
                                                'id' => '3.0.3',
                                                'name' => 'categorie_name',
                                            ],
                                        ],
                                    ],
                                    [
                                        'id' => '3.2.4.10',
                                        'name' => 'SEGURO DE VIDA',
                                    ],
                                    [
                                        'id' => '3.2.4.2',
                                        'name' => 'FÉRIAS',
                                    ],
                                    [
                                        'id' => '3.2.4.3',
                                        'name' => 'HORA EXTRA',
                                    ],
                                    [
                                        'id' => '3.2.4.4',
                                        'name' => '13ª SALÁRIO',
                                    ],
                                    [
                                        'id' => '3.2.4.5',
                                        'name' => 'AÇÕES TRABALHISTA',
                                    ],
                                    [
                                        'id' => '3.2.4.6',
                                        'name' => 'UNIFORMES',
                                    ],
                                    [
                                        'id' => '3.2.4.7',
                                        'name' => 'MEDICINA OCUPACIONAL',
                                    ],
                                    [
                                        'id' => '3.2.4.8',
                                        'name' => 'BONIFICAÇÃO/GRATIFICAÇÃO',
                                    ],
                                    [
                                        'id' => '3.2.4.9',
                                        'name' => 'TREINAMENTO/CURSOS',
                                    ],
                                ],
                            ],
                            [
                                'id' => '3.2.5',
                                'name' => 'SÓCIOS',
                                'children' => [
                                    [
                                        'id' => '3.2.5.1',
                                        'name' => 'PRÓ LABORE',
                                    ],
                                    [
                                        'id' => '3.2.5.2',
                                        'name' => 'ANTECIPACAO DE LUCRO',
                                    ],
                                    [
                                        'id' => '3.2.5.3',
                                        'name' => 'DESPESA DE CISÃO',
                                    ],
                                    [
                                        'id' => '3.2.5.4',
                                        'name' => 'IR PRÓ LABORE',
                                    ],
                                    [
                                        'id' => '3.2.5.5',
                                        'name' => 'INSS PRÓ LABORE',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'id' => '3.3',
                        'name' => 'CONTABILIDADE',
                    ],
                    [
                        'id' => '3.4',
                        'name' => 'SOFTWARE',
                    ],
                    [
                        'id' => '3.5',
                        'name' => 'TARIFA BANCARIA',
                        'children' => [
                            [
                                'id' => '3.5.1',
                                'name' => 'TARIFA',
                                'children' => [
                                    [
                                        'id' => '3.0.0',
                                        'name' => 'categorie_name',
                                    ],
                                    [
                                        'id' => '3.0.1',
                                        'name' => 'categorie_name',
                                    ],
                                    [
                                        'id' => '3.0.2',
                                        'name' => 'categorie_name',
                                    ],
                                    [
                                        'id' => '3.0.3',
                                        'name' => 'categorie_name',
                                    ],
                                ],
                            ],
                            [
                                'id' => '3.5.2',
                                'name' => 'PACOTE MENSAL',
                            ],
                            [
                                'id' => '3.5.3',
                                'name' => 'JUROS',
                            ],
                        ],
                    ],
                    [
                        'id' => '3.6',
                        'name' => 'DESPESA ALIMENTACAO',
                    ],
                    [
                        'id' => '3.7',
                        'name' => 'HIGIENE E LIMPEZA',
                        'children' => [
                            [
                                'id' => '3.7.1',
                                'name' => 'PRODUTOS DE LIMPEZA',
                                'children' => [
                                    [
                                        'id' => '3.0.0',
                                        'name' => 'categorie_name',
                                    ],
                                    [
                                        'id' => '3.0.1',
                                        'name' => 'categorie_name',
                                    ],
                                    [
                                        'id' => '3.0.2',
                                        'name' => 'categorie_name',
                                    ],
                                    [
                                        'id' => '3.0.3',
                                        'name' => 'categorie_name',
                                    ],
                                ],
                            ],
                            [
                                'id' => '3.7.2',
                                'name' => 'PACOTE MENSAL',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.23',
                        'name' => 'JURIDICO',
                    ],
                ],
            ],
            [
                'id' => '4',
                'name' => 'CUSTO VARIAVEL',
                'children' => [
                    [
                        'id' => '4.1',
                        'name' => 'MERCADORIA PARA REVENDA',
                        'children' => [
                            [
                                'id' => '4.1.1',
                                'name' => 'NACIONAL',
                                'childrean' => [
                                    [
                                        [
                                            'id' => '4.1.1.1',
                                            'name' => ' A PAGAR',
                                        ],
                                        [
                                            'id' => '4.1.1.2',
                                            'name' => 'A VISTA',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'id' => '4.1.2',
                                'name' => 'IMPORTADO',
                                'childrean' => [
                                    [
                                        [
                                            'id' => '4.1.2.1',
                                            'name' => 'A PAGAR',
                                        ],
                                        [
                                            'id' => '4.1.2.2',
                                            'name' => 'A VISTA',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'id' => '4.1.3',
                                'name' => 'IMPORTAÇÃO',
                                'childrean' => [
                                    [
                                        [
                                            'id' => '4.1.3.1',
                                            'name' => 'FRETE IMPORTAÇÃO',
                                        ],
                                        [
                                            'id' => '4.1.3.2',
                                            'name' => 'IMPOSTOS IMPORTAÇÃO',
                                        ],
                                        [
                                            'id' => '4.1.3.3',
                                            'name' => 'MERCADORIA IMPORTAÇÃO',
                                        ],
                                        [
                                            'id' => '4.1.3.4',
                                            'name' => 'TAXAS IMPORTAÇÃO',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'id' => '4.10',
                        'name' => 'REEMBOLSO SAÍDA',
                    ],
                    [
                        'id' => '4.11',
                        'name' => 'DESCONTO COMERCIAL',
                    ],
                    [
                        'id' => '4.12',
                        'name' => 'PROMOCAO/EVENTO',
                    ],
                    [
                        'id' => '4.13',
                        'name' => 'SERVICO DE TERCEIRO',
                    ],
                    [
                        'id' => '4.14',
                        'name' => 'MANUTENCAO/REPARO EQUIPAMENTO',
                    ],
                    [
                        'id' => '4.15',
                        'name' => 'MATERIAL DE CONSUMO',
                    ],
                    [
                        'id' => '4.16',
                        'name' => 'CORREIO',
                    ],
                    [
                        'id' => '4.17',
                        'name' => 'CARTORIO',
                    ],
                    [
                        'id' => '4.18',
                        'name' => 'CONFRATERNIZACAO',
                    ],
                    [
                        'id' => '4.19',
                        'name' => 'VIAGEM',
                    ],
                    [
                        'id' => '4.2',
                        'name' => 'IMPOSTO',
                        'children' => [
                            [
                                'id' => '4.2.1',
                                'name' => 'ISS',
                            ],
                            [
                                'id' => '4.2.10',
                                'name' => 'DIFAL FULL',
                            ],
                            [
                                'id' => '4.2.11',
                                'name' => 'DIFAL COM IE',
                            ],
                            [
                                'id' => '4.2.2',
                                'name' => 'ICMS',
                            ],
                            [
                                'id' => '4.2.3',
                                'name' => 'PIS',
                            ],
                            [
                                'id' => '4.2.4',
                                'name' => 'COFINS',
                            ],
                            [
                                'id' => '4.2.5',
                                'name' => 'DIFAL',
                            ],
                            [
                                'id' => '4.2.6',
                                'name' => 'CSLL',
                                'children' => [
                                    [
                                        'id' => '4.20.1',
                                        'name' => 'MULTA ATRASO',
                                    ],
                                    [
                                        'id' => '4.20.2',
                                        'name' => 'JUROS ATRASO',
                                    ],
                                    [
                                        'id' => '4.20.3',
                                        'name' => 'JUROS ANTECIPAÇÃO',
                                    ],
                                ],
                            ],
                            [
                                'id' => '4.2.6',
                                'name' => 'IR',
                            ],
                            [
                                'id' => '4.2.8',
                                'name' => 'SIMPLES NACIONAL',
                            ],
                            [
                                'id' => '4.2.9',
                                'name' => 'ST',
                            ],
                        ],

                    ],
                    [
                        'id' => '4.20',
                        'name' => 'TAXAS',
                    ],
                    [
                        'id' => '4.21',
                        'name' => 'EMPRESTIMO MIXSO',
                    ],
                    [
                        'id' => '4.22',
                        'name' => 'CONSULTORIA/ASSESSORIA',
                    ],
                    [
                        'id' => '4.24',
                        'name' => 'TRS ENTRE CONTAS',
                    ],
                    [
                        'id' => '4.25',
                        'name' => 'APLICACAO',
                    ],
                    [
                        'id' => '4.26',
                        'name' => 'EMPRESTIMO',
                    ],
                    [
                        'id' => '4.27',
                        'name' => 'CANCELAMENTO MARKETPLACE',
                        'children' => [
                            [
                                'id' => '4.27.1',
                                'name' => 'B2W',
                            ],
                            [
                                'id' => '4.27.2',
                                'name' => 'MAGALU',
                            ],
                            [
                                'id' => '4.27.3',
                                'name' => 'MERCADO LIVRE',
                            ],
                            [
                                'id' => '4.27.4',
                                'name' => 'MADEIRA MADEIRA',
                            ],
                            [
                                'id' => '4.27.5',
                                'name' => 'OLIST',
                            ],
                            [
                                'id' => '4.27.6',
                                'name' => 'SHOPEE',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.28',
                        'name' => 'COMISSAO MARKETPLACE',
                        'children' => [
                            [
                                'id' => '4.28.1',
                                'name' => 'MERCADO LIVRE',
                            ],
                            [
                                'id' => '4.28.2',
                                'name' => 'MAGALU',
                            ],
                            [
                                'id' => '4.28.3',
                                'name' => 'B2W',
                            ],
                            [
                                'id' => '4.28.4',
                                'name' => 'OLIST',
                            ],
                            [
                                'id' => '4.28.5',
                                'name' => 'SHOPEE',
                            ],
                            [
                                'id' => '4.28.6',
                                'name' => 'MADEIRA MADEIRA',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.29',
                        'name' => 'FRETE MARKETPLACE',
                        'children' => [
                            [
                                'id' => '4.29.1',
                                'name' => 'MERCADO LIVRE',
                            ],
                            [
                                'id' => '4.29.2',
                                'name' => 'MAGALU',
                            ],
                            [
                                'id' => '4.29.3',
                                'name' => 'B2W',
                            ],
                            [
                                'id' => '4.29.4',
                                'name' => 'OLIST',
                            ],
                            [
                                'id' => '4.29.5',
                                'name' => 'MADEIRA MADEIRA',
                            ],
                            [
                                'id' => '4.29.6',
                                'name' => 'SHOPEE',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.3',
                        'name' => 'COMISSAO',
                        'children' => [
                            [
                                'id' => '4.3.1',
                                'name' => 'COMISSAO VENDEDOR',
                            ],
                            [
                                'id' => '4.3.2',
                                'name' => 'COMISSAO PARCEIRO COMERCIAL',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.30',
                        'name' => 'DESPESA OPERACIONAL',
                    ],
                    [
                        'id' => '4.31',
                        'name' => 'TAXA OPERACIONAL',
                        'children' => [
                            [
                                'id' => '4.31.1',
                                'name' => 'PAGAR.ME',
                            ],
                            [
                                'id' => '4.31.2',
                                'name' => 'PAGSEGURO',
                            ],
                            [
                                'id' => '4.31.3',
                                'name' => 'SUMUP',
                            ],
                            [
                                'id' => '4.31.4',
                                'name' => 'ASSAS',
                            ],
                            [
                                'id' => '4.31.5',
                                'name' => 'SAFRA',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.32',
                        'name' => 'ESTORNO MARKETPLACE',
                        'children' => [
                            [
                                'id' => '4.32.1',
                                'name' => 'MERCADO LIVRE',
                            ],
                            [
                                'id' => '4.32.2',
                                'name' => 'MAGALU',
                            ],
                            [
                                'id' => '4.32.3',
                                'name' => 'B2W',
                            ],
                            [
                                'id' => '4.32.1',
                                'name' => 'OLIST',
                            ],
                            [
                                'id' => '4.32.2',
                                'name' => 'SHOPEE',
                            ],
                            [
                                'id' => '4.32.3',
                                'name' => 'MADEIRA MADEIRA',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.33',
                        'name' => 'PAGAMENTO DIVIDO',
                    ],
                    [
                        'id' => '4.34',
                        'name' => 'DESCONTO DE FRETE',
                    ],
                    [
                        'id' => '4.35',
                        'name' => 'COMBUSTIVEL',
                    ],
                    [
                        'id' => '4.36',
                        'name' => 'USO INTERNO',
                    ],
                    [
                        'id' => '4.37',
                        'name' => 'TARIFA MARKETPLACE',
                        'children' => [
                            [
                                'id' => '4.37.1',
                                'name' => 'MERCADO LIVRE',
                            ],
                            [
                                'id' => '4.37.2',
                                'name' => 'MAGALU',
                            ],
                            [
                                'id' => '4.37.3',
                                'name' => 'B2W',
                            ],
                            [
                                'id' => '4.37.4',
                                'name' => 'OLIST',
                            ],
                            [
                                'id' => '4.37.5',
                                'name' => 'E-COMMERCE',
                            ],
                            [
                                'id' => '4.37.6',
                                'name' => 'MADEIRA MADEIRA',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.4',
                        'name' => 'ATIVO IMOBILIZADO',
                        'children' => [
                            [
                                'id' => '4.4.1',
                                'name' => 'ARMAZENAGEM',
                            ],
                            [
                                'id' => '4.4.2',
                                'name' => 'ESCRITÓRIO',
                            ],
                            [
                                'id' => '4.4.3',
                                'name' => 'LOJA FISICA',
                            ],
                            [
                                'id' => '4.4.4',
                                'name' => 'VEÍCULOS',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.5',
                        'name' => 'MATERIAL EMBALAGEM',
                        'children' => [
                            [
                                'id' => '4.5.1',
                                'name' => 'E-COMMERCE',
                                'children' => [
                                    [
                                        'id' => '4.5.1.1',
                                        'name' => 'CAIXA DE PAPELAO',
                                    ],
                                    [
                                        'id' => '4.5.1.2',
                                        'name' => 'ENVELOPE PLASTICO',
                                    ],
                                    [
                                        'id' => '4.5.1.3',
                                        'name' => 'ETIQUETA TERMICA',
                                    ],
                                    [
                                        'id' => '4.5.1.4',
                                        'name' => 'FITA ADESIVA/GOMADA',
                                    ],
                                    [
                                        'id' => '4.5.1.5',
                                        'name' => 'PAPEL KRAFT',
                                    ],
                                    [
                                        'id' => '4.5.1.6',
                                        'name' => 'FILME STRETCH',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'id' => '4.6',
                        'name' => 'PROPAGANDA E MARKETING',
                        'children' => [
                            [
                                'id' => '4.6.1',
                                'name' => 'MÍDIAS ONLINE',
                            ],
                            [
                                'id' => '4.6.2',
                                'name' => 'MÍDIAS OFFLINE',
                            ],
                            [
                                'id' => '4.6.3',
                                'name' => 'OUTROS',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.7',
                        'name' => 'FRETE',
                        'children' => [
                            [
                                'id' => '4.7.1',
                                'name' => 'VENDA',
                            ],
                            [
                                'id' => '4.7.2',
                                'name' => 'COMPRA',
                            ],
                        ],
                    ],
                    [
                        'id' => '4.8',
                        'name' => 'DEVOLUCAO/ESTORNO',
                    ],
                    [
                        'id' => '4.9',
                        'name' => 'PREJUIZO DE VENDA',
                    ],
                ],
            ],
            [
                'id' => '3.5.3',
                'name' => 'JUROS',
            ],
            [
                'id' => '5.0',
                'name' => 'OUTRAS DESPESAS',
                'children' => [
                    [
                        'id' => '5.0.1',
                        'name' => 'DESPESA ALIMENTAÇÃO',
                    ],
                    [
                        'id' => '5.0.1',
                        'name' => 'DESPESAS DIVERSAS',
                    ],
                ],
            ],
            [
                'id' => '6.0',
                'name' => 'SANGRIA SHOPPING',
            ],
            [
                'id' => '',
                'name' => 'AJUSTE DE SALDO',
            ],
            [
                'id' => '',
                'name' => 'Saldo ICMS',
                'children' => [
                    [
                        'id' => '',
                        'name' => 'Recuperado',
                    ],
                    [
                        'id' => '',
                        'name' => 'Utilizado',
                    ],
                ],
            ],
            [
                'id' => '',
                'name' => 'Serviços Prestados transportes Mixso',
            ],
        ]);
    }

    public function categoriesFilter()
    {
        dd($this->selectedCategories);

        $this->emit('categoriesFilter', $this->selectedCategories);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.components.left-categories-drawer.index');
    }
}
