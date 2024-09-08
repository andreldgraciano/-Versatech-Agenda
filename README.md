<p align="center"><img src="public/readme/desafio.png" width="600" alt="Versatech Logo"></p>

# Desafio Versatech Agenda
Desenvolver uma agenda utilizando as tecnologias PHP e Mysql juntamente com o Framework Laravel

### Objetivo

O objetivo deste projeto é testar as habilidades diante do uso da linguagem orientada a objetos e o padrão MVC. O Framework Laravel lida com isso de uma maneira muito elegante, além de criar páginas simples e intuitivas de forma rápida e eficaz através dos arquivos blade.

### Descrição

O projeto deverá possuir uma tela de login para as devidas autenticações e assim ser um sistema multiusuário. Deverá possuir um cadastro de usuário e outro de tarefa onde o sistema não deverá permitir cadastros de tarefas no mesmo dia e horários para um mesmo usuário. Deve-se gerar nomenclaturas intuitivas das rotas para uma identificação simples das requisições. A utilização de Javascript, jquery e ajax é livre caso ache necessário.

Para o layout poderá ser utilizado o bootstrap ou qualquer outra biblioteca para facilitar na construção do designer e assim apresentar na tela as tarefas agendadas de cada usuário.

O banco de dados utilizado deverá ser o mysql sendo necessário realizar um estudo e geração de um diagrama de entidade e relacionamento para facilitar o entendimento e utilização das tabelas do banco.

O projeto deverá ser versionado com as mudanças periódicas utilizando a ferramenta Git e publicado no GitHub.

# Desenvolvimento do App

## Tecnologias
- Laravel Framework 11.22.0
- PHP 8.2.0
- MySQL
- Tailwindcss
- Git e GitHub

## MVC
O desenvolvimento do projeto foi orientado ao padrão MVC.

### Model

**Model User**: Este model é padrão de uma app laravel, nenhuma mudança foi feita neste model.

**Model Task**: Este model foi criado através de migration, com os seguintes atributos:
- id()
- dsadsa
- string('title')
- text('description')
- date('date')
- string('address')
- time('start_time')
- integer('duration_minutes')
- timestamps()

### View

Para a criação dos templates da view, foi utilizado o blade.

### Controller

**Task Controller**: Este controller é o responsável por receber requisições, processá-las, interagir com o modelo (dados) e, em seguida, retornar uma resposta. Foram implementadas os seguintes métodos no Task Controller:
- **tasks_user()**: Método responsável por retornar uma view com todas atividades do usuário conectado.
- **tasks_all()**: Método responsável por retornar uma view com todas atividades registradas na app.
- **taskFormCreate()**: Método responsável por retornar uma view para registro de atividade.
- **store()**: Método responsável por armazenar no banco de dados uma nova atividade.
- **show($id)**: Método responsável por retornar uma view com detalhes de uma atividade através do id referente à atividade.

## Funcionalidades:
- Login (Jetstream + Wireframe)
  <p align="center"><img src="public/readme/img-login.png" width="600" alt="Versatech Logo"></p>
- Registro de Atividades
  <p align="center"><img src="public/readme/img-store-task.png" width="600" alt="Versatech Logo"></p>
- Listar Minhas Atividades
  <p align="center"><img src="public/readme/img-tasks-user.png" width="600" alt="Versatech Logo"></p>
- Listar Registro de Atividades da Empresa
  <p align="center"><img src="public/readme/img-tasks-all.png" width="600" alt="Versatech Logo"></p>
- Filtro de atividades por Título ou Data
  <p align="center"><img src="public/readme/img-filter.png" width="600" alt="Versatech Logo"></p>