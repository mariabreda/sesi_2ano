<?php
$opcao = "";
$nome = "";
$nome = readline("Digite o seu nome:");

while ($opcao != "6") {
    echo "\n ---BEM VINDO!!---\n Para que você conheça melhor a PSI da empresa consulte os tópicos: \n 1.Objetivos da PSI \n 2.Escopo da política \n 3.Responsabilidades \n 4.Boas práticas de segurança \n 5. Consequências do descumprimento \n 6. Sair \n ";

    $opcao = readline("Digite qual conceito da PSI deseja ver:");


    switch ($opcao) {
        case 1:
            echo "\n O objetivo da PSI  (Política de Segurança da Informação) é garantir que a internet e o ambiente tecnológico sejam um lugar seguro, com diretrizes que mostram e ressaltam o comprometimento da instituição com a proteção dos dados e informações garantindo confidencialidade para seus usuários que incluem empresas, órgãos ou instituições \n";
            break;
        case 2:
            echo "\n O escopo da política da PSI, define os limites, ativos, pessoas e processos abrangidos para garantir a confidencialidade, integridade e disponibilidade dos dados. Os principais componentes são:\n
    ▪ Abrangência Pessoal: Funcionários, estagiários, terceiros, prestadores de serviços e clientes.
    ▪ Diretrizes de Proteção: Definição de regras para manuseio, tratamento, armazenamento e transmissão de dados.
    ▪Gerenciamento de Riscos: Medidas para identificar, avaliar e mitigar riscos, além de gerenciar incidentes\n";
            break;
        case 3:
            echo "\n As principais responsabilidades das PSI, são garantir:\n
    ▪  Confidencialidade: para que as informações sejam acessadas apenas por pessoas autorizadas
    ▪   Integridade: para garantir que os dados não sejam alterados por pessoas sem autorização e que as informações sejam corretas e confiáveis. 
    ▪  Disponibilidade: esse princípio determina que as informações devem estar sempre disponíveis para pessoas autorizadas.\n
    ";
            break;
        case 4:
            echo "\n As PSI tem como “Boas práticas de segurança” elementos como: \n
    ▪   LGPD: A lei número 13.709/18, que acrescentou normas como a coleta, armazenamento, processamento e tratamento de dados pessoais.
    ▪  O planejamento, elaboração das normas,implementação e monitoramento, auxiliam também nas boas práticas de segurança.
    ▪ Comprometimento da Alta Direção: A liderança deve apoiar as metas, princípios e a revisão da política.
    ▪ Gestão de Acessos e Senhas: Implementar senhas fortes, troca regular e autenticação \n
    ";
            break;
        case 5:
            echo "\n As principais consequências do descumprimento:\n
    ▪  Responsabilização Legal : Violações graves que causem danos financeiros ou à imagem da empresa podem resultar em ações cíveis ou criminais contra o funcionário.
    ▪ Sanções da LGPD: Multas administrativas aplicadas pela ANPD (Autoridade Nacional de Proteção de Dados), que podem chegar a R$ 50 milhões por infração.
    ▪ Perda de Ativos de Informação: Vazamento, furto ou destruição de dados confidenciais e segredos comerciais.\n
    ";
            break;
        case 6:
            break;
    }
}
