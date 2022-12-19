<?php

namespace App\Traits;

trait DifalTrait
{
    public function getDifal($product, $client, bool $nfe, $sellType)
    {
        try {
            $clientType = $this->clientType($client);

            if ($clientType == false) {
                /* Verifica se o client é de são paulo */
                if ($client->uf == 'SP') {
                    /* Verifica se o client quer ou não nota */
                    if ($nfe == false) {
                        /* Pega os produtos que não são ST */
                        if (!strpos($product['grupoProduto'], 'ST')) {
                            return 12;
                        } else {
                            return 0;
                        }
                    } else {
                        return 0;
                    }
                } else {
                    return 0;
                }
            } elseif ($clientType == true) {
                /* Verificar se é consumo e ou revenda */
                if ($sellType == 0) {
                    return $this->descontoUF($product, $client, $nfe);
                } elseif ($sellType == 1) {
                    // dd(strpos($produto['grupoProduto'], 'ST'));
                    if (strpos($product['grupoProduto'], 'ST') !== false) {
                        dd('Verificar produto!');
                    } else {
                        return $this->descontoUF($product, $client, $nfe);
                    }
                }
            } else {
                return 0;
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    private function clientType($client)
    {
        switch ($client->contribuinte) {
            case '1':
                return true;
                break;

            case '2' || '9':
                return false;
                break;

            default:
                return 'Não encontrou';
                break;
        }
    }

    private function descontoUF($produto, $client, $nfe)
    {
        if ($client->uf == 'SP') {
            /* Verifica se o client quer ou não nota */
            if ($nfe == 'false') {
                /* Pega os produtos que não são ST */
                if (!strpos($produto['grupoProduto'], 'ST')) {
                    return 12;
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
        } else {
            if ($produto['grupoProduto'] == 'Importado' || $produto['grupoProduto'] == 'importado') {
                if ($client->uf == 'RJ') {
                    return 12;
                } else {
                    return 14;
                }
            } elseif ($produto['grupoProduto'] == 'Nacional' || $produto['grupoProduto'] == 'nacional') {
                if ($client->uf == 'RJ') {
                    return 4;
                } elseif ($client->uf == 'PR' || $client->uf == 'MG' || $client->uf == 'RS') {
                    return 6;
                } else {
                    return 11;
                }
            } else {
                return 0;
            }
        }
    }
}
