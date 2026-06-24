<?php
    // 1.	Tenha uma função chamada classificarAluno($nota). 
    // 2.	A função deve retornar: 
    //     o	"Aprovado" se a nota for maior ou igual a 7. 
    //     o	"Recuperação" se a nota for maior ou igual a 5 e menor que 7. 
    //     o	"Reprovado" se a nota for menor que 5. 

    function classificarAluno($nota){
        // A FUNÇÃO VAI RECEBER UM VETOR COM NOTAS
        $condicao = "";
        // LÓGICA DO CALCULO DA CONDICAO => STRING: APROVADO, RECUPERAÇÃO OU REPROVADO



        return $condicao;
    }


    // VETOR COM AS NOTAS DE 10 ALUNOS - TURMA INTEIRA
    $notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];

    //CHAMAR O VETOR PASSANDO AS NOTAS
    //OBS: FUNÇÃO VAI DEVOLVER UMA STRING....AQUI PODEMOS REAVALIAR O FORMATO DA DEVOLUÇÃO
    //STRING, NUMEROS, VETOR, ETC

    $resultado = classificarAluno($notas);

    // Exemplo de saída
    // Aluno 1: Nota = 8.5 -> Aprovado
    // Aluno 2: Nota = 6.0 -> Recuperação
    // Aluno 3: Nota = 4.5 -> Reprovado
    // ...

    // Resumo da turma:
    // Aprovados: 4
    // Recuperação: 3
    // Reprovados: 3
    // Média da turma: 6.62

    // •Se a média for maior ou igual a 7, exiba:
    //     Turma com bom desempenho!
    // •Caso contrário:
    //     Turma precisa melhorar.



?>