# Exercício: Sistema de Análise de Turma

## Objetivo

Uma escola deseja analisar as notas de uma turma. Crie um programa em **PHP** que:

1. Tenha uma função chamada `classificarAluno($nota)`.
2. A função deve retornar:
   - **"Aprovado"** se a nota for maior ou igual a `7`.
   - **"Recuperação"** se a nota for maior ou igual a `5` e menor que `7`.
   - **"Reprovado"** se a nota for menor que `5`.
3. Armazene as notas de **10 alunos** em um array.
4. Utilize um **laço de repetição** para percorrer todas as notas.
5. Para cada aluno:
   - Exiba a nota.
   - Exiba a situação retornada pela função.
6. Ao final, mostre:
   - Quantos alunos foram aprovados.
   - Quantos ficaram em recuperação.
   - Quantos foram reprovados.
   - A média da turma.

---

## Exemplo de Entrada

```php
$notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];
```

---

## Exemplo de Saída

```text
Aluno 1: Nota = 8.5 -> Aprovado
Aluno 2: Nota = 6.0 -> Recuperação
Aluno 3: Nota = 4.5 -> Reprovado
...

Resumo da turma:
Aprovados: 4
Recuperação: 3
Reprovados: 3
Média da turma: 6.62
```

---

## Regra Adicional

Após calcular a média da turma:

- Se a média for maior ou igual a `7`, exiba:

```text
Turma com bom desempenho!
```

- Caso contrário, exiba:

```text
Turma precisa melhorar.
```

---

## Requisitos Técnicos

- Utilizar **funções**.
- Utilizar **arrays**.
- Utilizar **laços de repetição**.
- Realizar **cálculo de média**.
- Utilizar **estruturas condicionais** (`if`, `elseif`, `else`).

## Conceitos Trabalhados

- Funções em PHP
- Arrays
- Estruturas de decisão
- Estruturas de repetição
- Acumuladores e contadores
- Processamento de dados
