"""_____________________________________________________________________________________________________
Este código tem muitos problemas de má prática, como repetição de código, lógica confusa e excesso de 
comentários, o que o torna mais difícil de ler e entender. Lembre-se de que na prática, é importante 
escrever um código claro e legível para facilitar a interpretação, manutenção e a colaboração. 
____________________________________________________________________________________________________"""

<?php

function cadastrarPessoa() {
    echo "Iniciando cadastro de pessoa...\n";

    $nome = readline("Digite o nome da pessoa: ");
    $idade = intval(readline("Digite a idade da pessoa: "));
    $email = readline("Digite o e-mail da pessoa: ");
    $telefone = readline("Digite o telefone da pessoa: ");
    $cidade = readline("Digite a cidade da pessoa: ");
    $escolaridade = readline("Digite a escolaridade da pessoa: ");
    $profissao = readline("Digite a profissão da pessoa: ");
    $cidadania = "";
    $restricao = "";
    $sus = "";
    $regiao = "";

    if ($idade > 18) {
        echo "Cadastro direto da pessoa:\n";
        $planoSaude = strtoupper(readline("A pessoa possui plano de saúde? (S/N): "));
        
        if ($planoSaude != 'S') {
            $sus = strtoupper(readline("A pessoa utiliza o SUS? (S/N): "));
            echo $sus == 'S' ? "A pessoa utiliza o SUS.\n" : "A pessoa não utiliza o SUS.\n";

            $restricaoAlimentar = strtoupper(readline("A pessoa possui alguma restrição alimentar? (S/N): "));
            
            if ($restricaoAlimentar == 'S') {
                $restricao = readline("Descreva a restrição alimentar da pessoa: ");
                echo "Restrição alimentar: $restricao\n";
            } else {
                echo "A pessoa não possui restrição alimentar.\n";
            }
        }
    } else {
        echo "A pessoa é menor de 18 anos. Informe os dados do responsável:\n";
       
        $responsavelNome = readline("Digite o nome do responsável: ");
        $responsavelEmail = readline("Digite o e-mail do responsável: ");
        $responsavelTelefone = readline("Digite o telefone do responsável: ");

        $paisBrasileiros = strtoupper(readline("A pessoa tem pai ou mãe brasileira? (S/N): "));
        $cidadania = $paisBrasileiros == 'S'  ("A pessoa recebe a cidadania brasileira.") :"A pessoa não recebe a cidadania brasileira.");

        $restricaoAlimentar = strtoupper(readline("A pessoa possui alguma restrição alimentar? (S/N): "));
        $restricao = $restricaoAlimentar == 'S' ? readline("Descreva a restrição alimentar da pessoa: ") : "";

        $sus = strtoupper(readline("A pessoa utiliza o SUS? (S/N): "));
        echo $sus == 'S' ? "A pessoa utiliza o SUS.\n" : "A pessoa não utiliza o SUS.\n";

        $estado = ucfirst(readline("Digite o estado onde a pessoa mora: "));
        switch ($estado) {
            case 'São Paulo':
            case 'Rio de Janeiro':
            case 'Minas Gerais':
            case 'Espírito Santo':
                $regiao = 'Sudeste';
                break;
            case 'Paraná':
            case 'Santa Catarina':
            case 'Rio Grande do Sul':
                $regiao = 'Sul';
                break;
            case 'Goiás':
            case 'Mato Grosso':
            case 'Mato Grosso do Sul':
            case 'Distrito Federal':
                $regiao = 'Centro-Oeste';
                break;
            case 'Bahia':
            case 'Sergipe':
            case 'Alagoas':
            case 'Pernambuco':
            case 'Paraíba':
            case 'Rio Grande do Norte':
            case 'Ceará':
            case 'Piauí':
            case 'Maranhão':
                $regiao = 'Nordeste';
                break;
            case 'Rondônia':
            case 'Acre':
            case 'Amazonas':
            case 'Roraima':
            case 'Pará':
            case 'Amapá':
            case 'Tocantins':
                $regiao = 'Norte';
                break;
            default:
                $regiao = 'Região não encontrada';
        }
    }

    echo "\nResumo do Cadastro:\n";
    echo "Nome: $nome\n";
    echo "Idade: $idade\n";
    echo "E-mail: $email\n";
    echo "Telefone: $telefone\n";
    echo "Cidade: $cidade\n";
    echo "Escolaridade: $escolaridade\n";
    echo "Profissão: $profissao\n";

    if ($idade <= 18) {
        echo "Responsável Nome: $responsavelNome\n";
        echo "Responsável Email: $responsavelEmail\n";
        echo "Responsável Telefone: $responsavelTelefone\n";
    }

    echo "Cidadania: $cidadania\n";
    echo "Restrição Alimentar: $restricao\n";
    echo "Utilização do SUS: $sus\n";
    echo "Região: $regiao\n";
    echo "Pessoa cadastrada com sucesso!\n";
}

cadastrarPessoa();
?>
