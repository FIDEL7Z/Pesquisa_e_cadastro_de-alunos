# Sistema de Gerenciamento Acadêmico em PHP

Bem-vindo ao Sistema de Gerenciamento Acadêmico! Esta aplicação web foi desenvolvida como parte do meu processo de aprendizado em PHP, HTML, CSS, JavaScript e MySQL, utilizando o XAMPP como ambiente de desenvolvimento.

## Recursos Principais

- **Cadastro de Usuários e Login:**
  - Possibilidade de cadastrar usuários com funcionalidade de login.

- **CRUD de Alunos:**
  - Cadastre e gerencie informações de alunos, incluindo nome, matrícula, notas e média.

- **Operações de CRUD:**
  - Realize operações de pesquisa, edição e exclusão de registros de alunos.

- **Integração com a API do Google:**
  - Exibe o horário atual através da integração com a API do Google.

- **Interface Moderna com Bootstrap:**
  - Utiliza Bootstrap para uma interface amigável e ícones atraentes.

## Como Usar

1. Faça um clone do repositório para sua máquina local.
2. Instale e configure o XAMPP, garantindo que o Apache e o MySQL estejam em execução.
3. Crie dois bancos de dados no MySQL: um para usuários e outro para alunos.
   - **Banco de Dados de Usuários:**
     - Tabela: `usuarios`
       - Colunas: `id` (INT), `nome` (VARCHAR), `senha` (VARCHAR).

   - **Banco de Dados de Alunos:**
     - Tabela: `alunos`
       - Colunas: `id` (INT), `nome` (VARCHAR), `matricula` (VARCHAR), `nota_1` (FLOAT), `nota_2` (FLOAT).

5. Configure as credenciais de acesso ao banco de dados no arquivo `config.php`.

6. Abra a aplicação em seu navegador (por exemplo, http://localhost/seu-diretorio).

7. Comece a explorar!

## Como Contribuir

1. Faça um fork do repositório.
2. Clone o fork para sua máquina local.
3. Implemente melhorias ou correções.
4. Envie um pull request para revisão.

## Objetivos Alcançados

Durante o desenvolvimento deste projeto, explorei a linguagem PHP, enfrentei desafios e adquiri valiosas experiências que contribuirão para meu contínuo crescimento como desenvolvedor.

## Agradecimentos

Agradeço por explorar este projeto. Se gostar, não se esqueça de deixar uma estrela!
