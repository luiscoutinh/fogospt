<?php

return [
    'about' => [
        'entries_from' => 'Registos retirados da <a href="http://www.prociv.pt/">Página da Protecção Civil Portuguesa</a>',
        'update_interval' => 'Actualizações de 2 em 2 minutos',
        'near_location' => 'Localização aproximada.',
        'suggestion_bugs' => 'Sugestões / Bugs - <a href="mailto:mail@fogos.pt">mail@fogos.pt</a>',
        'made_by' => 'Made with ♥ by <a href="https://twitter.com/tomahock">Tomahock</a>'
    ],
    'information' => [
        'statesOfOccurrences' => [
            'title' => 'Estados das Ocorrências',
            'items' => [
                'firstAlertdispatch' => 'Despacho de 1º alerta – Meios em trânsito para o teatro de operações.',
                'arrivalToOccurrence' => 'Chegada ao TO – chegada ao teatro de operações.',
                'ongoing' => 'Em curso - Incêndio em evolução sem limitação de área',
                'inResolution' => 'Em resolução – Incêndio sem perigo de propagação para além do perímetro já atingido',
                'inConclusion' => 'Em conclusão – Incêndio extinto, com pequenos focos de combustão dentro do perímetro do incêndio',
                'surveillance' => 'Vigilância – Meios no local para actuar em caso de necessidade',
                'closed' => 'Encerrada – Entrada, nas respectivas entidades, de todos os meios envolvidos​',
                'fake' => 'Falso alerta',
                'false' => 'Falso alarme'
            ]
        ],
        'typeOfUnits' => [
            'title' => 'Meios',
            'items' => [
                'humans' => 'HUMANOS - Bombeiros, Força Especial de Bombeiros, PSP, Forças Armadas, INEM, Equipas Sapadores
                    Florestais, GNR, GIPS Grupo Intervenção de Proteção e Socorro',
                'terrestrial' => 'TERRESTRES - Veículos rodoviários',
                'air' => 'AEREOS - Helicópteros / Aviões'
            ],

        ],
        'numberDescription' => 'Os números disponibilizados são os totais de meios accionados. O número pode diferir do que se encontra
                no terreno, uma vez que os meios accionados podem ainda estar em trânsito.',
        'hoursDescription' => 'As horas indicadas tanto no gráfico de meios como na linha do tempo dos estados do incêndios, são as
                horas que o nosso sistema detetou uma mudança de dados por parte da ANPC podendo não corresponder ao
                momento exato em que essa alteração ocorreu.',
        'source' => 'Risco de incêndio recolhido do IPMA.'
    ],
    'notifications' => [
        'aveiro' => 'Aveiro',
        'beja' => 'Beja',
        'braga' => 'Braga',
        'braganca' => 'Bragança',
        'casteloBranco' => 'Castelo Branco',
        'coimbra' => 'Coimbra',
        'evora' => 'Évora',
        'faro' => 'Faro',
        'guarda' => 'Guarda',
        'leiria' => 'Leiria',
        'lisboa' => 'Lisboa',
        'portalegre' => 'Portalegre',
        'porto' => 'Porto',
        'santarem' => 'Santarém',
        'setubal' => 'Setúbal',
        'vianadoCastelo' => 'Viana do Castelo',
        'vilaReal' => 'Vila Real',
        'viseu' => 'Viseu',

        'important' => 'Ocorrências importantes',
        'alerts' => 'Alertas',
    ],
    'stats' => [
        'now' => [
            'stats' => ':date - :total Incêndios em curso* combatidos por :man meios humanos, :cars meios terrestres e :aerial meios aereos.',
            'footer' => 'Incêndios no estado \'Despacho de 1º Alerta\' ou no estado \'Em Curso\''
        ],
        'now-text' => 'Agora',
        'today' => 'Hoje',
        'yesterday' => 'Ontem',
        'last-night' => 'Última noite',
        'last-days' => 'Últimos dias',
        'last-night-footer' => 'Incêndios entre as 21h e as 09h',
    ]

];
