<form class="list-none" x-data="{showCategories: false}" wire:submit.prevent="search" method="GET">
    <div class="text-sm">
        <ul>
            <!-- Sem Categoria -->
            <li>
                <div class="input-checkbox">
                    <input type="checkbox" wire:model="categories" id="ckb1" value="todos">
                    <label for="ckb1" style="margin-right: 5px;"></label>
                </div>
                <label id="lbl1" for="ckb1">Todos</label>
            </li>

            <!-- Sem Categoria -->
            <li>
                <div class="input-checkbox">
                    <input type="checkbox" wire:model="categories" id="ckb0" value="Sem categoria">
                    <label for="ckb0" style="margin-right: 5px;"></label>
                </div>
                <label id="lbl0" for="ckb0">Sem categoria</label>
            </li>

            <!-- Custo Fixo -->
            <div x-data="{ custoFixo1: false }">
                <li class="flex items-center" @click="custoFixo1 = ! custoFixo1">
                    <div class="input-checkbox">
                        <input type="checkbox" wire:model="categories" value="3 - CUSTO FIXO" id="ckb13634580255">
                        <label for="ckb13634580255" style="margin-right: 5px;"></label>
                    </div>
                    <label id="lbl13634580255" for="ckb13634580255">3 - CUSTO FIXO</label>
                    <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                </li>
                <ul style="padding-left: 15px" x-show="custoFixo1" x-data="{ custoFixo2: false }" x-transition>
                    <li class="" @click="custoFixo2 = ! custoFixo2">

                        <div class="input-checkbox">
                            <input type="checkbox" wire:model="categories" value="3.1 - PREDIAL" id="ckb13608843992">
                            <label for="ckb13608843992" style="margin-right: 5px;"></label>
                        </div>
                        <label id="lbl13608843992" for="ckb13608843992">3.1 - PREDIAL</label>
                        <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                    </li>
                    <ul style="display: block; padding-left: 15px" x-show="custoFixo2" x-data="{ custoFixo3: false }" x-transition>
                        <li class="" @click="custoFixo3 = ! custoFixo3">

                            <div class="input-checkbox">
                                <input type="checkbox" wire:model="categories" value="3.1.1 - ALUGUEL" id="ckb1154857922">
                                <label for="ckb1154857922" style="margin-right: 5px;"></label>
                            </div>
                            <label id="lbl1154857922" for="ckb1154857922">3.1.1 - ALUGUEL</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul style="padding-left: 15px" x-show="custoFixo3" x-transition>
                            <li class="">
                                <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.1.1 - ALUGUEL" id="ckb13957212152"><label for="ckb13957212152" style="margin-right: 5px;"></label></div>
                                <label id="lbl13957212152" for="ckb13957212152">3.1.1.1 - ALUGUEL</label>
                            </li>
                            <li class="">
                                <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.1.2 - DEPÓSITO CAUÇÃO" id="ckb7499987285"><label for="ckb7499987285" style="margin-right: 5px;"></label></div>
                                <label id="lbl7499987285" for="ckb7499987285">3.1.1.2 - DEPÓSITO CAUÇÃO</label>
                            </li>
                        </ul>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.10 - IPTU/TFE" id="ckb8265167064"><label for="ckb8265167064" style="margin-right: 5px;"></label></div>
                            <label id="lbl8265167064" for="ckb8265167064">3.1.10 - IPTU/TFE</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.11 - MANUTENCAO" id="ckb7070342186"><label for="ckb7070342186" style="margin-right: 5px;"></label></div>
                            <label id="lbl7070342186" for="ckb7070342186">3.1.11 - MANUTENCAO</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.2 - CONDOMINIO" id="ckb8153784069"><label for="ckb8153784069" style="margin-right: 5px;"></label></div>
                            <label id="lbl8153784069" for="ckb8153784069">3.1.2 - CONDOMINIO</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.3 - AGUA" id="ckb13608862457"><label for="ckb13608862457" style="margin-right: 5px;"></label></div>
                            <label id="lbl13608862457" for="ckb13608862457">3.1.3 - AGUA</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.4 - ENERGIA" id="ckb1154857921"><label for="ckb1154857921" style="margin-right: 5px;"></label></div>
                            <label id="lbl1154857921" for="ckb1154857921">3.1.4 - ENERGIA</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.5 - TELEFONE FIXO" id="ckb13608972746"><label for="ckb13608972746" style="margin-right: 5px;"></label></div>
                            <label id="lbl13608972746" for="ckb13608972746">3.1.5 - TELEFONE FIXO</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.6 - TELEFONE MOVEL" id="ckb13608978081"><label for="ckb13608978081" style="margin-right: 5px;"></label></div>
                            <label id="lbl13608978081" for="ckb13608978081">3.1.6 - TELEFONE MOVEL</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.7 - INTERNET" id="ckb7969147816"><label for="ckb7969147816" style="margin-right: 5px;"></label></div>
                            <label id="lbl7969147816" for="ckb7969147816">3.1.7 - INTERNET</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.8 - SEGURO PATRIMONIAL" id="ckb1154857926"><label for="ckb1154857926" style="margin-right: 5px;"></label></div>
                            <label id="lbl1154857926" for="ckb1154857926">3.1.8 - SEGURO PATRIMONIAL</label>
                        </li>
                        <li class="">
                            <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.1.9 - SEGURANCA E ALARME" id="ckb7638509997"><label for="ckb7638509997" style="margin-right: 5px;"></label></div>
                            <label id="lbl7638509997" for="ckb7638509997">3.1.9 - SEGURANCA E ALARME</label>
                        </li>
                    </ul>
                    <div x-data="{ custoFixo4: false }">
                        <li class="" @click="custoFixo4 = ! custoFixo4">
                            <div class="input-checkbox" @click="custoFixo4 = ! custoFixo4">
                                <input type="checkbox" wire:model="categories" value="3.2 - PESSOAL" id="ckb7013525693">
                                <label for="ckb7013525693" style="margin-right: 5px;"></label>
                            </div>
                            <label id="lbl7013525693" for="ckb7013525693">3.2 - PESSOAL</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul style="padding-left: 15px" x-show="custoFixo4" x-data="{ custoFixo5: false }" x-transition>
                            <li class="" @click="custoFixo5 = ! custoFixo5">

                                <div class="input-checkbox">
                                    <input type="checkbox" wire:model="categories" value="3.2.1 - SALARIOS" id="ckb7672710275">
                                    <label for="ckb7672710275" style="margin-right: 5px;"></label>
                                </div>
                                <label id="lbl7672710275" for="ckb7672710275">3.2.1 - SALARIOS</label>
                                <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                            </li>
                            <ul style=" padding-left: 15px" x-show="custoFixo5" x-transition>
                                <li class="">
                                    <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.1.1 - REGIME CLT" id="ckb7913646473"><label for="ckb7913646473" style="margin-right: 5px;"></label></div>
                                    <label id="lbl7913646473" for="ckb7913646473">3.2.1.1 - REGIME CLT</label>
                                </li>
                                <li class="">
                                    <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.1.2 - TEMPORARIO/ESTAGIARIO" id="ckb13609211425"><label for="ckb13609211425" style="margin-right: 5px;"></label></div>
                                    <label id="lbl13609211425" for="ckb13609211425">3.2.1.2 - TEMPORARIO/ESTAGIARIO</label>
                                </li>
                            </ul>
                            <div x-data="{ custoFixo6: false }">
                                <li class="" @click="custoFixo6 = ! custoFixo6">

                                    <div class="input-checkbox">
                                        <input type="checkbox" wire:model="categories" value="3.2.2 - ENCARGOS" id="ckb13609243379">
                                        <label for="ckb13609243379" style="margin-right: 5px;"></label>
                                    </div>
                                    <label id="lbl13609243379" for="ckb13609243379">3.2.2 - ENCARGOS</label>
                                    <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                                </li>
                                <ul style="padding-left: 15px" x-show="custoFixo6" x-transition>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.2.1 - FGTS" id="ckb8728333783"><label for="ckb8728333783" style="margin-right: 5px;"></label></div>
                                        <label id="lbl8728333783" for="ckb8728333783">3.2.2.1 - FGTS</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.2.2 - INSS" id="ckb8728569845"><label for="ckb8728569845" style="margin-right: 5px;"></label></div>
                                        <label id="lbl8728569845" for="ckb8728569845">3.2.2.2 - INSS</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.2.3 - IR" id="ckb13887365874"><label for="ckb13887365874" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13887365874" for="ckb13887365874">3.2.2.3 - IR</label>
                                    </li>
                                </ul>
                            </div>

                            <div x-data="{ custoFixo7: false }">
                                <li class="" @click="custoFixo7 = ! custoFixo7">

                                    <div class="input-checkbox">
                                        <input type="checkbox" wire:model="categories" value="3.2.3 - BENEFÍCIOS" id="ckb13609195674">
                                        <label for="ckb13609195674" style="margin-right: 5px;"></label>
                                    </div>
                                    <label id="lbl13609195674" for="ckb13609195674">3.2.3 - BENEFÍCIOS</label>
                                    <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                                </li>
                                <ul style="padding-left: 15px" x-show="custoFixo7" x-transition>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.3.1 - VALE TRANSPORTE" id="ckb7913647727"><label for="ckb7913647727" style="margin-right: 5px;"></label></div>
                                        <label id="lbl7913647727" for="ckb7913647727">3.2.3.1 - VALE TRANSPORTE</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.3.2 - VALE REFEIÇÃO" id="ckb7913649018"><label for="ckb7913649018" style="margin-right: 5px;"></label></div>
                                        <label id="lbl7913649018" for="ckb7913649018">3.2.3.2 - VALE REFEIÇÃO</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.3.3 - CONVÊNIO MÉDICO" id="ckb12853989835"><label for="ckb12853989835" style="margin-right: 5px;"></label></div>
                                        <label id="lbl12853989835" for="ckb12853989835">3.2.3.3 - CONVÊNIO MÉDICO</label>
                                    </li>
                                </ul>
                            </div>
                            <div x-data="{ custoFixo8: false }">
                                <li class="" @click="custoFixo8 = ! custoFixo8">

                                    <div class="input-checkbox">
                                        <input type="checkbox" wire:model="categories" value="3.2.4 - OUTROS BENEFÍCIOS" id="ckb13609291657">
                                        <label for="ckb13609291657" style="margin-right: 5px;"></label>
                                    </div>
                                    <label id="lbl13609291657" for="ckb13609291657">3.2.4 - OUTROS BENEFÍCIOS</label>
                                    <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                                </li>
                                <ul style="padding-left: 15px" x-show="custoFixo8" x-transition>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.1 - RESCISÕES" id="ckb13609303631"><label for="ckb13609303631" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609303631" for="ckb13609303631">3.2.4.1 - RESCISÕES</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.10 - SEGURO DE VIDA" id="ckb14476789293"><label for="ckb14476789293" style="margin-right: 5px;"></label></div>
                                        <label id="lbl14476789293" for="ckb14476789293">3.2.4.10 - SEGURO DE VIDA</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.2 - FÉRIAS" id="ckb13609307929"><label for="ckb13609307929" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609307929" for="ckb13609307929">3.2.4.2 - FÉRIAS</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.3 - HORA EXTRA" id="ckb13609313618"><label for="ckb13609313618" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609313618" for="ckb13609313618">3.2.4.3 - HORA EXTRA</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.4 - 13ª SALÁRIO" id="ckb13609319801"><label for="ckb13609319801" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609319801" for="ckb13609319801">3.2.4.4 - 13ª SALÁRIO</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.5 - AÇÕES TRABALHISTA" id="ckb13609325506"><label for="ckb13609325506" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609325506" for="ckb13609325506">3.2.4.5 - AÇÕES TRABALHISTA</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.6 - UNIFORMES" id="ckb13609327813"><label for="ckb13609327813" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609327813" for="ckb13609327813">3.2.4.6 - UNIFORMES</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.7 - MEDICINA OCUPACIONAL" id="ckb13609331391"><label for="ckb13609331391" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609331391" for="ckb13609331391">3.2.4.7 - MEDICINA OCUPACIONAL</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.8 - BONIFICAÇÃO/GRATIFICAÇÃO" id="ckb13609335047"><label for="ckb13609335047" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609335047" for="ckb13609335047">3.2.4.8 - BONIFICAÇÃO/GRATIFICAÇÃO</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.4.9 - TREINAMENTO/CURSOS" id="ckb13609343796"><label for="ckb13609343796" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609343796" for="ckb13609343796">3.2.4.9 - TREINAMENTO/CURSOS</label>
                                    </li>
                                </ul>
                            </div>
                            <div x-data="{ custoFixo9: false }">
                                <li class="" @click="custoFixo9 = ! custoFixo9">

                                    <div class="input-checkbox">
                                        <input type="checkbox" wire:model="categories" value="3.2.5 - SÓCIOS" id="ckb13609364444">
                                        <label for="ckb13609364444" style="margin-right: 5px;"></label>
                                    </div>
                                    <label id="lbl13609364444" for="ckb13609364444">3.2.5 - SÓCIOS</label>
                                    <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                                </li>
                                <ul style="padding-left: 15px" x-show="custoFixo9" x-transition>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.5.1 - PRÓ LABORE" id="ckb7070417381"><label for="ckb7070417381" style="margin-right: 5px;"></label></div>
                                        <label id="lbl7070417381" for="ckb7070417381">3.2.5.1 - PRÓ LABORE</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.5.2 - ANTECIPACAO DE LUCRO" id="ckb12226667915"><label for="ckb12226667915" style="margin-right: 5px;"></label></div>
                                        <label id="lbl12226667915" for="ckb12226667915">3.2.5.2 - ANTECIPACAO DE LUCRO</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.5.3 - DESPESA DE CISÃO" id="ckb8507137190"><label for="ckb8507137190" style="margin-right: 5px;"></label></div>
                                        <label id="lbl8507137190" for="ckb8507137190">3.2.5.3 - DESPESA DE CISÃO</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.5.4 - IR PRÓ LABORE" id="ckb13609391034"><label for="ckb13609391034" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609391034" for="ckb13609391034">3.2.5.4 - IR PRÓ LABORE</label>
                                    </li>
                                    <li class="">
                                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.2.5.5 - INSS PRÓ LABORE" id="ckb13609393711"><label for="ckb13609393711" style="margin-right: 5px;"></label></div>
                                        <label id="lbl13609393711" for="ckb13609393711">3.2.5.5 - INSS PRÓ LABORE</label>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                    <li class="">
                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.3 - CONTABILIDADE" id="ckb7070017023"><label for="ckb7070017023" style="margin-right: 5px;"></label></div>
                        <label id="lbl7070017023" for="ckb7070017023">3.3 - CONTABILIDADE</label>
                    </li>
                    <li class="">
                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.4 - SOFTWARE" id="ckb7825317439"><label for="ckb7825317439" style="margin-right: 5px;"></label></div>
                        <label id="lbl7825317439" for="ckb7825317439">3.4 - SOFTWARE</label>
                    </li>
                    <div x-data="{ custoFixo10: false }">
                        <li class="" @click="custoFixo10 = ! custoFixo10">

                            <div class="input-checkbox">
                                <input type="checkbox" wire:model="categories" value="3.5 - TARIFA BANCARIA" id="ckb7070471080">
                                <label for="ckb7070471080" style="margin-right: 5px;"></label>
                            </div>
                            <label id="lbl7070471080" for="ckb7070471080">3.5 - TARIFA BANCARIA</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul style="padding-left: 15px" x-show="custoFixo10" x-transition>
                            <li class="">
                                <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.5.1 - TARIFA" id="ckb13609465234"><label for="ckb13609465234" style="margin-right: 5px;"></label></div>
                                <label id="lbl13609465234" for="ckb13609465234">3.5.1 - TARIFA</label>
                            </li>
                            <li class="">
                                <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.5.2 - PACOTE MENSAL" id="ckb13609470660"><label for="ckb13609470660" style="margin-right: 5px;"></label></div>
                                <label id="lbl13609470660" for="ckb13609470660">3.5.2 - PACOTE MENSAL</label>
                            </li>
                            <li class="">
                                <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.5.3 - JUROS" id="ckb13609474108"><label for="ckb13609474108" style="margin-right: 5px;"></label></div>
                                <label id="lbl13609474108" for="ckb13609474108">3.5.3 - JUROS</label>
                            </li>
                        </ul>
                    </div>
                    <li class="">
                        <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.6 - DESPESA ALIMENTACAO" id="ckb7363574792"><label for="ckb7363574792" style="margin-right: 5px;"></label></div>
                        <label id="lbl7363574792" for="ckb7363574792">3.6 - DESPESA ALIMENTACAO</label>
                    </li>
                    <div x-data="{ custoFixo11: false }">
                        <li class="" @click="custoFixo11 = ! custoFixo11">

                            <div class="input-checkbox">
                                <input type="checkbox" wire:model="categories" value="3.7 - HIGIENE E LIMPEZA" id="ckb1154857925">
                                <label for="ckb1154857925" style="margin-right: 5px;"></label>
                            </div>
                            <label id="lbl1154857925" for="ckb1154857925">3.7 - HIGIENE E LIMPEZA</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul style="padding-left: 15px" x-show="custoFixo11" x-transition>
                            <li class="">
                                <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.7.1 - PRODUTOS DE LIMPEZA" id="ckb13609449532"><label for="ckb13609449532" style="margin-right: 5px;"></label></div>
                                <label id="lbl13609449532" for="ckb13609449532">3.7.1 - PRODUTOS DE LIMPEZA</label>
                            </li>
                            <li class="">
                                <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="3.7.2 - MÃO DE OBRA" id="ckb13609452598"><label for="ckb13609452598" style="margin-right: 5px;"></label></div>
                                <label id="lbl13609452598" for="ckb13609452598">3.7.2 - MÃO DE OBRA
                            <li class="">
                                <div class="input-checkbox"><input type="checkbox" wire:model="categories" value="4.23 - JURIDICO" id="ckb8105419613"><label for="ckb8105419613" style="margin-right: 5px;"></label></div>
                                <label id="lbl8105419613" for="ckb8105419613">4.23 - JURIDICO</label>
                            </li>
                        </ul>
                    </div>
            </div>

            <!-- Custo Variavel -->
            <div x-data="{ custoVariavel0: false }">
                <li @click="custoVariavel0 = ! custoVariavel0" data-id="13634604383" class="selected"><span class=" tree-arrow fa fa-caret-right"></span>
                    <div class="input-checkbox checkbox-partial-check">
                        <input type="checkbox" id="ckb13634604383" value="4 - CUSTO VARIAVEL">
                        <label for="ckb13634604383" style="margin-right: 5px;"></label>
                    </div>
                    <label id="lbl13634604383" for="ckb13634604383">4 - CUSTO VARIAVEL</label>
                    <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                </li>

                <ul data-id-parent="13634604383" style="padding-left: 15px" x-show="custoVariavel0" x-transition x-data="{ custoVariavel1: false }">
                    <li data-id="6359354895" @click="custoVariavel1 = ! custoVariavel1" class="selected"><span class="tree-arrow fa fa-caret-down"></span>
                        <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.1 - MERCADORIA PARA REVENDA" id="ckb6359354895"><label for="ckb6359354895" style="margin-right: 5px;"></label></div>
                        <label id="lbl6359354895" for="ckb6359354895">4.1 - MERCADORIA PARA REVENDA</label>
                        <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                    </li>
                    <ul data-id-parent="6359354895" style="padding-left: 15px" x-show="custoVariavel1" x-transition>
                        <div x-data="{ custoVariavel2: false }">
                            <li data-id="13630256082" class="selected" @click="custoVariavel2 = ! custoVariavel2">
                                <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.1.1 - NACIONAL" id="ckb13630256082"><label for="ckb13630256082" style="margin-right: 5px;"></label></div>
                                <label id="lbl13630256082" for="ckb13630256082">4.1.1 - NACIONAL</label>
                                <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                            </li>
                            <ul data-id-parent="13630256082" style="padding-left: 15px" x-show="custoVariavel2" x-transition>
                                <li data-id="7560705086" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.1.1.1 - A PAGAR" id="ckb7560705086"><label for="ckb7560705086" style="margin-right: 5px;"></label></div>
                                    <label id="lbl7560705086" for="ckb7560705086">4.1.1.1 - A PAGAR</label>
                                </li>
                                <li data-id="7560706207" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.1.1.2 - A VISTA" id="ckb7560706207"><label for="ckb7560706207" style="margin-right: 5px;"></label></div>
                                    <label id="lbl7560706207" for="ckb7560706207">4.1.1.2 - A VISTA</label>
                                </li>
                            </ul>
                        </div>

                        <div x-data="{ custoVariavel3: false }">
                            <li data-id="13630259086" class="selected" @click="custoVariavel3 = ! custoVariavel3">
                                <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.1.2 - IMPORTADO" id="ckb13630259086"><label for="ckb13630259086" style="margin-right: 5px;"></label></div>
                                <label id="lbl13630259086" for="ckb13630259086">4.1.2 - IMPORTADO</label>
                                <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                            </li>
                            <ul data-id-parent="13630259086" style="padding-left: 15px" x-show="custoVariavel3" x-transition>
                                <li data-id="13630310728" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.1.2.1 - A PAGAR" id="ckb13630310728"><label for="ckb13630310728" style="margin-right: 5px;"></label></div>
                                    <label id="lbl13630310728" for="ckb13630310728">4.1.2.1 - A PAGAR</label>
                                </li>
                                <li data-id="13630315348" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.1.2.2 - A VISTA" id="ckb13630315348"><label for="ckb13630315348" style="margin-right: 5px;"></label></div>
                                    <label id="lbl13630315348" for="ckb13630315348">4.1.2.2 - A VISTA</label>
                                </li>
                            </ul>
                        </div>
                        <div x-data="{ custoVariavel4: false }">
                            <li data-id="13548153531" class="selected" @click="custoVariavel4 = ! custoVariavel4">
                                <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.1.3 - IMPORTAÇÃO" id="ckb13548153531"><label for="ckb13548153531" style="margin-right: 5px;"></label></div>
                                <label id="lbl13548153531" for="ckb13548153531">4.1.3 - IMPORTAÇÃO</label>
                                <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                            </li>
                            <ul data-id-parent="13548153531" style="padding-left: 15px" x-show="custoVariavel4" x-transition>
                                <li data-id="14605076139" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.1.3.1 - FRETE IMPORTAÇÃO" id="ckb14605076139"><label for="ckb14605076139" style="margin-right: 5px;"></label></div>
                                    <label id="lbl14605076139" for="ckb14605076139">4.1.3.1 - FRETE IMPORTAÇÃO</label>
                                </li>
                                <li data-id="14605076199" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.1.3.2 - IMPOSTOS IMPORTAÇÃO" id="ckb14605076199"><label for="ckb14605076199" style="margin-right: 5px;"></label></div>
                                    <label id="lbl14605076199" for="ckb14605076199">4.1.3.2 - IMPOSTOS IMPORTAÇÃO</label>
                                </li>
                                <li data-id="14605076202" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.1.3.3 - MERCADORIA IMPORTAÇÃO" id="ckb14605076202"><label for="ckb14605076202" style="margin-right: 5px;"></label></div>
                                    <label id="lbl14605076202" for="ckb14605076202">4.1.3.3 - MERCADORIA IMPORTAÇÃO</label>
                                </li>
                                <li data-id="14605971579" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.1.3.4 - TAXAS IMPORTAÇÃO" id="ckb14605971579"><label for="ckb14605971579" style="margin-right: 5px;"></label></div>
                                    <label id="lbl14605971579" for="ckb14605971579">4.1.3.4 - TAXAS IMPORTAÇÃO</label>
                                </li>
                            </ul>
                        </div>
                    </ul>

                    <li data-id="13633177720" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.10 - REEMBOLSO SAÍDA" id="ckb13633177720"><label for="ckb13633177720" style="margin-right: 5px;"></label></div>
                        <label id="lbl13633177720" for="ckb13633177720">4.10 - REEMBOLSO SAÍDA</label>
                    </li>
                    <li data-id="13633198308" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.11 - DESCONTO COMERCIAL" id="ckb13633198308"><label for="ckb13633198308" style="margin-right: 5px;"></label></div>
                        <label id="lbl13633198308" for="ckb13633198308">4.11 - DESCONTO COMERCIAL</label>
                    </li>
                    <li data-id="13633189024" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.12 - PROMOCAO/EVENTO" id="ckb13633189024"><label for="ckb13633189024" style="margin-right: 5px;"></label></div>
                        <label id="lbl13633189024" for="ckb13633189024">4.12 - PROMOCAO/EVENTO</label>
                    </li>
                    <li data-id="7459048632" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.13 - SERVICO DE TERCEIRO" id="ckb7459048632"><label for="ckb7459048632" style="margin-right: 5px;"></label></div>
                        <label id="lbl7459048632" for="ckb7459048632">4.13 - SERVICO DE TERCEIRO</label>
                    </li>
                    <li data-id="9256560140" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.14 - MANUTENCAO/REPARO EQUIPAMENTO" id="ckb9256560140"><label for="ckb9256560140" style="margin-right: 5px;"></label></div>
                        <label id="lbl9256560140" for="ckb9256560140">4.14 - MANUTENCAO/REPARO EQUIPAMENTO</label>
                    </li>
                    <li data-id="8521364737" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.15 - MATERIAL DE CONSUMO" id="ckb8521364737"><label for="ckb8521364737" style="margin-right: 5px;"></label></div>
                        <label id="lbl8521364737" for="ckb8521364737">4.15 - MATERIAL DE CONSUMO</label>
                    </li>
                    <li data-id="7070109629" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.16 - CORREIO" id="ckb7070109629"><label for="ckb7070109629" style="margin-right: 5px;"></label></div>
                        <label id="lbl7070109629" for="ckb7070109629">4.16 - CORREIO</label>
                    </li>
                    <li data-id="8361863457" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.17 - CARTORIO" id="ckb8361863457"><label for="ckb8361863457" style="margin-right: 5px;"></label></div>
                        <label id="lbl8361863457" for="ckb8361863457">4.17 - CARTORIO</label>
                    </li>
                    <li data-id="7273008650" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.18 - CONFRATERNIZACAO" id="ckb7273008650"><label for="ckb7273008650" style="margin-right: 5px;"></label></div>
                        <label id="lbl7273008650" for="ckb7273008650">4.18 - CONFRATERNIZACAO</label>
                    </li>
                    <li data-id="7214683219" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.19 - VIAGEM" id="ckb7214683219"><label for="ckb7214683219" style="margin-right: 5px;"></label></div>
                        <label id="lbl7214683219" for="ckb7214683219">4.19 - VIAGEM</label>
                    </li>

                    <div x-data="{ custoVariavel5: false }">
                        <li data-id="1154857924" class="selected" @click="custoVariavel5 = ! custoVariavel5">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.2 - IMPOSTO" id="ckb1154857924"><label for="ckb1154857924" style="margin-right: 5px;"></label></div>
                            <label id="lbl1154857924" for="ckb1154857924">4.2 - IMPOSTO</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="1154857924" style="padding-left: 15px" x-show="custoVariavel5" x-transition>
                            <li data-id="7880214810" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.1 - ISS" id="ckb7880214810"><label for="ckb7880214810" style="margin-right: 5px;"></label></div>
                                <label id="lbl7880214810" for="ckb7880214810">4.2.1 - ISS</label>
                            </li>
                            <li data-id="14605776946" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.10 - DIFAL FULL" id="ckb14605776946"><label for="ckb14605776946" style="margin-right: 5px;"></label></div>
                                <label id="lbl14605776946" for="ckb14605776946">4.2.10 - DIFAL FULL</label>
                            </li>
                            <li data-id="14605985915" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.11 - DIFAL COM IE" id="ckb14605985915"><label for="ckb14605985915" style="margin-right: 5px;"></label></div>
                                <label id="lbl14605985915" for="ckb14605985915">4.2.11 - DIFAL COM IE</label>
                            </li>
                            <li data-id="8823190311" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.2 - ICMS" id="ckb8823190311"><label for="ckb8823190311" style="margin-right: 5px;"></label></div>
                                <label id="lbl8823190311" for="ckb8823190311">4.2.2 - ICMS</label>
                            </li>
                            <li data-id="8728704124" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.3 - PIS" id="ckb8728704124"><label for="ckb8728704124" style="margin-right: 5px;"></label></div>
                                <label id="lbl8728704124" for="ckb8728704124">4.2.3 - PIS</label>
                            </li>
                            <li data-id="8728197253" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.4 - COFINS" id="ckb8728197253"><label for="ckb8728197253" style="margin-right: 5px;"></label></div>
                                <label id="lbl8728197253" for="ckb8728197253">4.2.4 - COFINS</label>
                            </li>
                            <li data-id="7236039206" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.5 - DIFAL" id="ckb7236039206"><label for="ckb7236039206" style="margin-right: 5px;"></label></div>
                                <label id="lbl7236039206" for="ckb7236039206">4.2.5 - DIFAL</label>
                            </li>
                            <li data-id="13631374065" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.6 - CSLL" id="ckb13631374065"><label for="ckb13631374065" style="margin-right: 5px;"></label></div>
                                <label id="lbl13631374065" for="ckb13631374065">4.2.6 - CSLL</label>
                            </li>
                            <li data-id="13631369064" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.6 - IR" id="ckb13631369064"><label for="ckb13631369064" style="margin-right: 5px;"></label></div>
                                <label id="lbl13631369064" for="ckb13631369064">4.2.6 - IR</label>
                            </li>
                            <li data-id="8728219351" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.8 - SIMPLES NACIONAL" id="ckb8728219351"><label for="ckb8728219351" style="margin-right: 5px;"></label></div>
                                <label id="lbl8728219351" for="ckb8728219351">4.2.8 - SIMPLES NACIONAL</label>
                            </li>
                            <li data-id="13818734138" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.2.9 - ST" id="ckb13818734138"><label for="ckb13818734138" style="margin-right: 5px;"></label></div>
                                <label id="lbl13818734138" for="ckb13818734138">4.2.9 - ST</label>
                            </li>
                        </ul>
                    </div>

                    <div x-data="{ custoVariavel6: false }">
                        <li data-id="7649850623" class="selected" @click="custoVariavel6 = ! custoVariavel6">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.20 - TAXAS" id="ckb7649850623"><label for="ckb7649850623" style="margin-right: 5px;"></label></div>
                            <label id="lbl7649850623" for="ckb7649850623">4.20 - TAXAS</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="7649850623" style="padding-left: 15px" x-show="custoVariavel6" x-transition>
                            <li data-id="13687863926" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.20.1 - MULTA ATRASO" id="ckb13687863926"><label for="ckb13687863926" style="margin-right: 5px;"></label></div>
                                <label id="lbl13687863926" for="ckb13687863926">4.20.1 - MULTA ATRASO</label>
                            </li>
                            <li data-id="13687867750" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.20.2 - JUROS ATRASO" id="ckb13687867750"><label for="ckb13687867750" style="margin-right: 5px;"></label></div>
                                <label id="lbl13687867750" for="ckb13687867750">4.20.2 - JUROS ATRASO</label>
                            </li>
                            <li data-id="14615287772" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.20.3 - JUROS ANTECIPAÇÃO" id="ckb14615287772"><label for="ckb14615287772" style="margin-right: 5px;"></label></div>
                                <label id="lbl14615287772" for="ckb14615287772">4.20.3 - JUROS ANTECIPAÇÃO</label>
                            </li>
                        </ul>
                    </div>

                    <li data-id="13818957480" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.21 - EMPRESTIMO MIXSO" id="ckb13818957480"><label for="ckb13818957480" style="margin-right: 5px;"></label></div>
                        <label id="lbl13818957480" for="ckb13818957480">4.21 - EMPRESTIMO MIXSO</label>
                    </li>
                    <li data-id="13818921197" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.22 - CONSULTORIA/ASSESSORIA" id="ckb13818921197"><label for="ckb13818921197" style="margin-right: 5px;"></label></div>
                        <label id="lbl13818921197" for="ckb13818921197">4.22 - CONSULTORIA/ASSESSORIA</label>
                    </li>
                    <li data-id="13819037615" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.24 - TRS ENTRE CONTAS" id="ckb13819037615"><label for="ckb13819037615" style="margin-right: 5px;"></label></div>
                        <label id="lbl13819037615" for="ckb13819037615">4.24 - TRS ENTRE CONTAS</label>
                    </li>
                    <li data-id="1154857923" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.25 - APLICACAO" id="ckb1154857923"><label for="ckb1154857923" style="margin-right: 5px;"></label></div>
                        <label id="lbl1154857923" for="ckb1154857923">4.25 - APLICACAO4.25 - APLICACAO </label>
                    </li>
                    <div x-data="{ custoVariavel7: false }">
                        <li data-id="8745660614" class="selected" @click="custoVariavel7 = ! custoVariavel7">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.27 - CANCELAMENTO MARKETPLACE<" id="ckb8745660614"><label for="ckb8745660614" style="margin-right: 5px;"></label></div>
                            <label id="lbl8745660614" for="ckb8745660614">4.27 - CANCELAMENTO MARKETPLACE</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="8745660614" style="padding-left: 15px" x-show="custoVariavel7" x-transition>
                            <li data-id="8745669498" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.27.1 - B2W" id="ckb8745669498"><label for="ckb8745669498" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745669498" for="ckb8745669498">4.27.1 - B2W</label>
                            </li>
                            <li data-id="8745671828" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.27.2 - MAGALU" id="ckb8745671828"><label for="ckb8745671828" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745671828" for="ckb8745671828">4.27.2 - MAGALU</label>
                            </li>
                            <li data-id="8745667642" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.27.3 - MERCADO LIVRE" id="ckb8745667642"><label for="ckb8745667642" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745667642" for="ckb8745667642">4.27.3 - MERCADO LIVRE</label>
                            </li>
                            <li data-id="8745678748" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.27.4 - MADEIRA MADEIRA" id="ckb8745678748"><label for="ckb8745678748" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745678748" for="ckb8745678748">4.27.4 - MADEIRA MADEIRA</label>
                            </li>
                            <li data-id="13344565598" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.27.5 - OLIST" id="ckb13344565598"><label for="ckb13344565598" style="margin-right: 5px;"></label></div>
                                <label id="lbl13344565598" for="ckb13344565598">4.27.5 - OLIST</label>
                            </li>
                            <li data-id="9004400790" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.27.6 - SHOPEE" id="ckb9004400790"><label for="ckb9004400790" style="margin-right: 5px;"></label></div>
                                <label id="lbl9004400790" for="ckb9004400790">4.27.6 - SHOPEE</label>
                            </li>
                        </ul>
                    </div>

                    <div x-data="{ custoVariavel8: false }">
                        <li data-id=" 8745765155" class="selected" @click="custoVariavel8 = ! custoVariavel8">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.28 - COMISSAO MARKETPLACE" id="ckb8745765155"><label for="ckb8745765155" style="margin-right: 5px;"></label></div>
                            <label id="lbl8745765155" for="ckb8745765155">4.28 - COMISSAO MARKETPLACE</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="8745765155" style="padding-left: 15px" x-show="custoVariavel8" x-transition>
                            <li data-id="8745787505" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.28.1 - MERCADO LIVRE" id="ckb8745787505"><label for="ckb8745787505" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745787505" for="ckb8745787505">4.28.1 - MERCADO LIVRE</label>
                            </li>
                            <li data-id="8745780596" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.28.2 - MAGALU" id="ckb8745780596"><label for="ckb8745780596" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745780596" for="ckb8745780596">4.28.2 - MAGALU</label>
                            </li>
                            <li data-id="8745777326" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.28.3 - B2W" id="ckb8745777326"><label for="ckb8745777326" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745777326" for="ckb8745777326">4.28.3 - B2W</label>
                            </li>
                            <li data-id="13344585002" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.28.4 - OLIST" id="ckb13344585002"><label for="ckb13344585002" style="margin-right: 5px;"></label></div>
                                <label id="lbl13344585002" for="ckb13344585002">4.28.4 - OLIST</label>
                            </li>
                            <li data-id="11472208645" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.28.5 - SHOPEE" id="ckb11472208645"><label for="ckb11472208645" style="margin-right: 5px;"></label></div>
                                <label id="lbl11472208645" for="ckb11472208645">4.28.5 - SHOPEE</label>
                            </li>
                            <li data-id="8745785810" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.28.6 - MADEIRA MADEIRA" id="ckb8745785810"><label for="ckb8745785810" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745785810" for="ckb8745785810">4.28.6 - MADEIRA MADEIRA</label>
                            </li>
                        </ul>
                    </div>

                    <div x-data="{ custoVariavel9: false }">
                        <li data-id="8746035259" class="selected" @click="custoVariavel9 = ! custoVariavel9">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.29 - FRETE MARKETPLACE" id="ckb8746035259"><label for="ckb8746035259" style="margin-right: 5px;"></label></div>
                            <label id="lbl8746035259" for="ckb8746035259">4.29 - FRETE MARKETPLACE</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="8746035259" style="padding-left: 15px" x-show="custoVariavel9" x-transition>
                            <li data-id="8746051825" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.29.1 - MERCADO LIVRE" id="ckb8746051825"><label for="ckb8746051825" style="margin-right: 5px;"></label></div>
                                <label id="lbl8746051825" for="ckb8746051825">4.29.1 - MERCADO LIVRE</label>
                            </li>
                            <li data-id="8746049798" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.29.2 - MAGALU" id="ckb8746049798"><label for="ckb8746049798" style="margin-right: 5px;"></label></div>
                                <label id="lbl8746049798" for="ckb8746049798">4.29.2 - MAGALU</label>
                            </li>
                            <li data-id="8746045600" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.29.3 - B2W" id="ckb8746045600"><label for="ckb8746045600" style="margin-right: 5px;"></label></div>
                                <label id="lbl8746045600" for="ckb8746045600">4.29.3 - B2W</label>
                            </li>
                            <li data-id="13344612165" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.29.4 - OLIST" id="ckb13344612165"><label for="ckb13344612165" style="margin-right: 5px;"></label></div>
                                <label id="lbl13344612165" for="ckb13344612165">4.29.4 - OLIST</label>
                            </li>
                            <li data-id="8746059002" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.29.5 - MADEIRA MADEIRA" id="ckb8746059002"><label for="ckb8746059002" style="margin-right: 5px;"></label></div>
                                <label id="lbl8746059002" for="ckb8746059002">4.29.5 - MADEIRA MADEIRA</label>
                            </li>
                            <li data-id="9004409871" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.29.6 - SHOPEE" id="ckb9004409871"><label for="ckb9004409871" style="margin-right: 5px;"></label></div>
                                <label id="lbl9004409871" for="ckb9004409871">4.29.6 - SHOPEE</label>
                            </li>
                        </ul>
                    </div>
                    <div x-data="{ custoVariavel10: false }">
                        <li data-id=" 13630366094" class="selected" @click="custoVariavel10 = ! custoVariavel10">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.3 - COMISSAO" id="ckb13630366094"><label for="ckb13630366094" style="margin-right: 5px;"></label></div>
                            <label id="lbl13630366094" for="ckb13630366094">4.3 - COMISSAO</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="13630366094" style="padding-left: 15px" x-show="custoVariavel10" x-transition>
                            <li data-id="14610826399" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.3.1 COMISSAO VENDEDOR" id="ckb14610826399"><label for="ckb14610826399" style="margin-right: 5px;"></label></div>
                                <label id="lbl14610826399" for="ckb14610826399">4.3.1 COMISSAO VENDEDOR</label>
                            </li>
                            <li data-id="14610826400" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.3.2 - COMISSAO PARCEIRO COMERCIAL" id="ckb14610826400"><label for="ckb14610826400" style="margin-right: 5px;"></label></div>
                                <label id="lbl14610826400" for="ckb14610826400">4.3.2 - COMISSAO PARCEIRO COMERCIAL</label>
                            </li>
                        </ul>
                    </div>

                    <li data-id="7070216859" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.30 - DESPESA OPERACIONAL" id="ckb7070216859"><label for="ckb7070216859" style="margin-right: 5px;"></label></div>
                        <label id="lbl7070216859" for="ckb7070216859">4.30 - DESPESA OPERACIONAL</label>
                    </li>

                    <div x-data="{custoVariavel11: false}">
                        <li data-id="10380157694" class="selected" @click="custoVariavel11 = ! custoVariavel11">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.31 - TAXA OPERACIONAL" id="ckb10380157694"><label for="ckb10380157694" style="margin-right: 5px;"></label></div>
                            <label id="lbl10380157694" for="ckb10380157694">4.31 - TAXA OPERACIONAL</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="10380157694" style="padding-left: 15px" x-show="custoVariavel11" x-transition>
                            <li data-id="11379544994" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.31.1 - PAGAR.ME" id="ckb11379544994"><label for="ckb11379544994" style="margin-right: 5px;"></label></div>
                                <label id="lbl11379544994" for="ckb11379544994">4.31.1 - PAGAR.ME</label>
                            </li>
                            <li data-id="10380170455" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.31.2 - PAGSEGURO" id="ckb10380170455"><label for="ckb10380170455" style="margin-right: 5px;"></label></div>
                                <label id="lbl10380170455" for="ckb10380170455">4.31.2 - PAGSEGURO </label>
                            </li>
                            <li data-id="10380167609" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.31.3 - SUMUP" id="ckb10380167609"><label for="ckb10380167609" style="margin-right: 5px;"></label></div>
                                <label id="lbl10380167609" for="ckb10380167609">4.31.3 - SUMUP </label>
                            </li>
                            <li data-id="14608225489" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.31.4 - ASSAS" id="ckb14608225489"><label for="ckb14608225489" style="margin-right: 5px;"></label></div>
                                <label id="lbl14608225489" for="ckb14608225489">4.31.4 - ASSAS</label>
                            </li>
                            <li data-id="14627047425" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.31.5 - SAFRA" id="ckb14627047425"><label for="ckb14627047425" style="margin-right: 5px;"></label></div>
                                <label id="lbl14627047425" for="ckb14627047425">4.31.5 - SAFRA </label>
                            </li>
                        </ul>
                    </div>

                    <div x-data="{custoVariavel12: false}">
                        <li data-id="8745968039" class="selected" @click="custoVariavel12 = ! custoVariavel12">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.32 - ESTORNO MARKETPLACE" id="ckb8745968039"><label for="ckb8745968039" style="margin-right: 5px;"></label></div>
                            <label id="lbl8745968039" for="ckb8745968039">4.32 - ESTORNO MARKETPLACE</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="8745968039" style="padding-left: 15px" x-show="custoVariavel12" x-transition>
                            <li data-id="8745994195" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.32.1 - MERCADO LIVRE" id="ckb8745994195"><label for="ckb8745994195" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745994195" for="ckb8745994195">4.32.1 - MERCADO LIVRE</label>
                            </li>
                            <li data-id="8745990666" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.32.2 - MAGALU" id="ckb8745990666"><label for="ckb8745990666" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745990666" for="ckb8745990666">4.32.2 - MAGALU</label>
                            </li>
                            <li data-id="8745985767" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.32.3 - B2W" id="ckb8745985767"><label for="ckb8745985767" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745985767" for="ckb8745985767">4.32.3 - B2W</label>
                            </li>
                            <li data-id="13632785013" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.32.4 - OLIST" id="ckb13632785013"><label for="ckb13632785013" style="margin-right: 5px;"></label></div>
                                <label id="lbl13632785013" for="ckb13632785013">4.32.4 - OLIST</label>
                            </li>
                            <li data-id="13632793956" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.32.5 - SHOPEE" id="ckb13632793956"><label for="ckb13632793956" style="margin-right: 5px;"></label></div>
                                <label id="lbl13632793956" for="ckb13632793956">4.32.5 - SHOPEE</label>
                            </li>
                            <li data-id="8745992367" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.32.6 - MADEIRA MADEIRA" id="ckb8745992367"><label for="ckb8745992367" style="margin-right: 5px;"></label></div>
                                <label id="lbl8745992367" for="ckb8745992367">4.32.6 - MADEIRA MADEIRA</label>
                            </li>
                        </ul>
                    </div>

                    <li data-id="14609010883" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.33 - PAGAMENTO DIVIDO" id="ckb14609010883"><label for="ckb14609010883" style="margin-right: 5px;"></label></div>
                        <label id="lbl14609010883" for="ckb14609010883">4.33 - PAGAMENTO DIVIDO</label>
                    </li>
                    <li data-id="14609013000" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.34 - DESCONTO DE FRETE" id="ckb14609013000"><label for="ckb14609013000" style="margin-right: 5px;"></label></div>
                        <label id="lbl14609013000" for="ckb14609013000">4.34 - DESCONTO DE FRETE</label>
                    </li>
                    <li data-id="14609257586" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.35 - COMBUSTIVEL" id="ckb14609257586"><label for="ckb14609257586" style="margin-right: 5px;"></label></div>
                        <label id="lbl14609257586" for="ckb14609257586">4.35 - COMBUSTIVEL</label>
                    </li>
                    <li data-id="14611311411" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.36 - USO INTERNO" id="ckb14611311411"><label for="ckb14611311411" style="margin-right: 5px;"></label></div>
                        <label id="lbl14611311411" for="ckb14611311411">4.36 - USO INTERNO</label>
                    </li>

                    <div x-data="{custoVariavel13: false}">
                        <li data-id="10018929276" class="selected" @click="custoVariavel13 = ! custoVariavel13">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.37 - TARIFA MARKETPLACE" id="ckb10018929276"><label for="ckb10018929276" style="margin-right: 5px;"></label></div>
                            <label id="lbl10018929276" for="ckb10018929276">4.37 - TARIFA MARKETPLACE</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="10018929276" style="padding-left: 15px" x-show="custoVariavel13" x-transition>
                            <li data-id="10018955467" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.37.1 - MERCADO LIVRE" id="ckb10018955467"><label for="ckb10018955467" style="margin-right: 5px;"></label></div>
                                <label id="lbl10018955467" for="ckb10018955467">4.37.1 - MERCADO LIVRE</label>
                            </li>
                            <li data-id="10018952342" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.37.2 - MAGALU" id="ckb10018952342"><label for="ckb10018952342" style="margin-right: 5px;"></label></div>
                                <label id="lbl10018952342" for="ckb10018952342">4.37.2 - MAGALU</label>
                            </li>
                            <li data-id="10018935253" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.37.3 - B2W" id="ckb10018935253"><label for="ckb10018935253" style="margin-right: 5px;"></label></div>
                                <label id="lbl10018935253" for="ckb10018935253">4.37.3 - B2W</label>
                            </li>
                            <li data-id="13344637139" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.37.4 - OLIST" id="ckb13344637139"><label for="ckb13344637139" style="margin-right: 5px;"></label></div>
                                <label id="lbl13344637139" for="ckb13344637139">4.37.4 - OLIST</label>
                            </li>
                            <li data-id="10018971831" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.37.5 - E-COMMERCE" id="ckb10018971831"><label for="ckb10018971831" style="margin-right: 5px;"></label></div>
                                <label id="lbl10018971831" for="ckb10018971831">4.37.5 - E-COMMERCE</label>
                            </li>
                            <li data-id="10018949793" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.37.6 - MADEIRA MADEIRA" id="ckb10018949793"><label for="ckb10018949793" style="margin-right: 5px;"></label></div>
                                <label id="lbl10018949793" for="ckb10018949793">4.37.6 - MADEIRA MADEIRA</label>
                            </li>
                        </ul>
                    </div>

                    <div x-data="{custoVariavel14: false}">
                        <li data-id="7508554158" class="selected" @click="custoVariavel14 = ! custoVariavel14">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.4 - ATIVO IMOBILIZADO" id="ckb7508554158"><label for="ckb7508554158" style="margin-right: 5px;"></label></div>
                            <label id="lbl7508554158" for="ckb7508554158">4.4 - ATIVO IMOBILIZADO</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="7508554158" style="padding-left: 15px" x-show="custoVariavel14" x-transition>
                            <li data-id="7673288891" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.4.1 - ARMAZENAGEM" id="ckb7673288891"><label for="ckb7673288891" style="margin-right: 5px;"></label></div>
                                <label id="lbl7673288891" for="ckb7673288891">4.4.1 - ARMAZENAGEM</label>
                            </li>
                            <li data-id="7639262120" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.4.2 - ESCRITÓRIO" id="ckb7639262120"><label for="ckb7639262120" style="margin-right: 5px;"></label></div>
                                <label id="lbl7639262120" for="ckb7639262120">4.4.2 - ESCRITÓRIO</label>
                            </li>
                            <li data-id="14611820549" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.4.3 - LOJA FISICA" id="ckb14611820549"><label for="ckb14611820549" style="margin-right: 5px;"></label></div>
                                <label id="lbl14611820549" for="ckb14611820549">4.4.3 - LOJA FISICA</label>
                            </li>
                            <li data-id="14621621324" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.4.4 - VEÍCULOS" id="ckb14621621324"><label for="ckb14621621324" style="margin-right: 5px;"></label></div>
                                <label id="lbl14621621324" for="ckb14621621324">4.4.4 - VEÍCULOS </label>
                            </li>
                        </ul>
                    </div>
                    <div x-data="{custoVariavel15: false}">
                        <li data-id="7070137728" class="selected" @click="custoVariavel15 = ! custoVariavel15">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.5 - MATERIAL EMBALAGEM" id="ckb7070137728"><label for="ckb7070137728" style="margin-right: 5px;"></label></div>
                            <label id="lbl7070137728" for="ckb7070137728">4.5 - MATERIAL EMBALAGEM</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="7070137728" style="padding-left: 15px" x-data="{custoVariavel18: false}" x-show="custoVariavel15">
                            <li data-id="7638836732" class="selected" @click="custoVariavel18 = ! custoVariavel18">
                                <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.5.1 - E-COMMERCE" id="ckb7638836732"><label for="ckb7638836732" style="margin-right: 5px;"></label></div>
                                <label id="lbl7638836732" for="ckb7638836732">4.5.1 - E-COMMERCE</label>
                                <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                            </li>
                            <ul data-id-parent="7638836732" style="padding-left: 15px" x-show="custoVariavel18" x-transition>
                                <li data-id="7690776458" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.5.1.1 - CAIXA DE PAPELAO" id="ckb7690776458"><label for="ckb7690776458" style="margin-right: 5px;"></label></div>
                                    <label id="lbl7690776458" for="ckb7690776458">V</label>
                                </li>
                                <li data-id="7690780957" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.5.1.2 - ENVELOPE PLASTICO" id="ckb7690780957"><label for="ckb7690780957" style="margin-right: 5px;"></label></div>
                                    <label id="lbl7690780957" for="ckb7690780957">4.5.1.2 - ENVELOPE PLASTICO</label>
                                </li>
                                <li data-id="8520126604" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.5.1.3 - ETIQUETA TERMICA" id="ckb8520126604"><label for="ckb8520126604" style="margin-right: 5px;"></label></div>
                                    <label id="lbl8520126604" for="ckb8520126604">4.5.1.3 - ETIQUETA TERMICA</label>
                                </li>
                                <li data-id="7690786917" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.5.1.4 - FITA ADESIVA/GOMADA" id="ckb7690786917"><label for="ckb7690786917" style="margin-right: 5px;"></label></div>
                                    <label id="lbl7690786917" for="ckb7690786917">4.5.1.4 - FITA ADESIVA/GOMADA</label>
                                </li>
                                <li data-id="7638838702" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.5.1.5 - PAPEL KRAFT" id="ckb7638838702"><label for="ckb7638838702" style="margin-right: 5px;"></label></div>
                                    <label id="lbl7638838702" for="ckb7638838702">4.5.1.5 - PAPEL KRAFT</label>
                                </li>
                                <li data-id="14626244293" class="selected">
                                    <div class="input-checkbox"><input type="checkbox" value="4.5.1.6 - FILME STRETCH" id="ckb14626244293"><label for="ckb14626244293" style="margin-right: 5px;"></label></div>
                                    <label id="lbl14626244293" for="ckb14626244293">4.5.1.6 - FILME STRETCH</label>
                                </li>
                            </ul>
                        </ul>
                    </div>
                    <div x-data="{custoVariavel16: false}">
                        <li data-id="7622684162" class="selected" @click="custoVariavel16 = ! custoVariavel16">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.6 - PROPAGANDA E MARKETING" id="ckb7622684162"><label for="ckb7622684162" style="margin-right: 5px;"></label></div>
                            <label id="lbl7622684162" for="ckb7622684162">4.6 - PROPAGANDA E MARKETING</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="7622684162" style="padding-left: 15px" x-show="custoVariavel16" x-transition>
                            <li data-id="13630665655" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.6.1 - MÍDIAS ONLINE" id="ckb13630665655"><label for="ckb13630665655" style="margin-right: 5px;"></label></div>
                                <label id="lbl13630665655" for="ckb13630665655">4.6.1 - MÍDIAS ONLINE</label>
                            </li>
                            <li data-id="13630670811" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.6.2 - MÍDIAS OFFLINE" id="ckb13630670811"><label for="ckb13630670811" style="margin-right: 5px;"></label></div>
                                <label id="lbl13630670811" for="ckb13630670811">4.6.2 - MÍDIAS OFFLINE</label>
                            </li>
                            <li data-id="13630678424" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.6.3 - OUTROS" id="ckb13630678424"><label for="ckb13630678424" style="margin-right: 5px;"></label></div>
                                <label id="lbl13630678424" for="ckb13630678424">4.6.3 - OUTROS</label>
                            </li>
                        </ul>
                    </div>
                    <div x-data="{custoVariavel17: false}">
                        <li data-id="1154857927" class="selected" @click="custoVariavel17 = ! custoVariavel17">
                            <div class="input-checkbox checkbox-partial-check"><input type="checkbox" value="4.7 - FRETE" id="ckb1154857927"><label for="ckb1154857927" style="margin-right: 5px;"></label></div>
                            <label id="lbl1154857927" for="ckb1154857927">4.7 - FRETE</label>
                            <x-bxs-down-arrow class="w-3 h-3 ml-2" />
                        </li>
                        <ul data-id-parent="1154857927" style="padding-left: 15px" x-show="custoVariavel17" x-transition>
                            <li data-id="14611589965" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.7.1 - VENDA" id="ckb14611589965"><label for="ckb14611589965" style="margin-right: 5px;"></label></div>
                                <label id="lbl14611589965" for="ckb14611589965">4.7.1 - VENDA</label>
                            </li>
                            <li data-id="14611589967" class="selected">
                                <div class="input-checkbox"><input type="checkbox" value="4.7.2 - COMPRA" id="ckb14611589967"><label for="ckb14611589967" style="margin-right: 5px;"></label></div>
                                <label id="lbl14611589967" for="ckb14611589967">4.7.2 - COMPRA</label>
                            </li>
                        </ul>
                    </div>
                    <li data-id="11876872476" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.8 - DEVOLUCAO/ESTORNO" id="ckb11876872476"><label for="ckb11876872476" style="margin-right: 5px;"></label></div>
                        <label id="lbl11876872476" for="ckb11876872476">4.8 - DEVOLUCAO/ESTORNO</label>
                    </li>
                    <li data-id="7684541378" class="selected">
                        <div class="input-checkbox"><input type="checkbox" value="4.9 - PREJUIZO DE VENDA" id="ckb7684541378"><label for="ckb7684541378" style="margin-right: 5px;"></label></div>
                        <label id="lbl7684541378" for="ckb7684541378">4.9 - PREJUIZO DE VENDA</label>
                    </li>
                </ul>
            </div>
        </ul>

        <div class="flex justify-end w-full gap-4 mt-5">
            <x-primary-button wire:click.prevent="clearCategories()">Limpar</x-primary-button>
            <x-primary-button>Buscar</x-primary-button>
        </div>
</form>