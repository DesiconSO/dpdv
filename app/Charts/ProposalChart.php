<?php

namespace App\Charts;

use App\Enums\StatusProposal;
use App\Models\Proposal;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class ProposalChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function chart()
    {
        $dadosMeses = $this->contagemPorMeses(now()->year);

        $dados = $this->montarDadosPorMeses($dadosMeses);

        $this->labels([
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro',
        ]);

        $this->dataset('Aceitas', 'bar', $dados[0][0])
            ->options([
                'backgroundColor' => 'rgba(56, 203, 137, 0.6)',
                'responsive' => true,
            ]);
        $this->dataset('Pendentes', 'bar', $dados[0][2])
            ->options([
                'backgroundColor' => 'rgba(255, 166, 0, 0.6)',
            ]);
        $this->dataset('Recusadas', 'bar', $dados[0][1])
            ->options([
                'backgroundColor' => 'rgba(255, 86, 48, 0.6)',
            ]);

        return $this;
    }

    public function contagemPorMeses($ano)
    {
        $dadosMeses = array();

        for ($i = 1; $i <= 12; $i++) {
            $dados = Proposal::whereYear('created_at', $ano)->whereMonth('created_at', $i)->get();
            if (count($dados) == 0)
                array_push($dadosMeses, 0);
            else {
                array_push($dadosMeses, $dados);
            }
        }

        return $dadosMeses;
    }

    public function montarDadosPorMeses($dadosMeses)
    {
        $dados = array();

        $aceitas = array();
        $pendentes = array();
        $recusadas = array();

        foreach ($dadosMeses as $dadosMes) {
            if ($dadosMes === 0) {
                array_push($aceitas, 0);
                array_push($pendentes, 0);
                array_push($recusadas, 0);
            } else {
                array_push(
                    $aceitas,
                    count(
                        $dadosMes->where('status', StatusProposal::ACCEPT->value)
                    )
                );
                array_push(
                    $pendentes,
                    count(
                        $dadosMes->where('status', StatusProposal::WAITING->value)
                    )
                );
                array_push(
                    $recusadas,
                    count(
                        $dadosMes->where('status', StatusProposal::REJECT->value)
                    )
                );
            }
        }

        array_push($dados, [$aceitas, $recusadas, $pendentes]);
        return $dados;
    }
}
