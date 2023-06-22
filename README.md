## Requisitos para o funcionamento da API

- PHP 8.1 ou posterior
- Banco de dados MySQL

## Passos para executar a ApI

É necessário executar os passos abaixo:

- Crie o banco de dados: create database mw_db;
- configure as variaveis do arquivo .env com os parametros: DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE=mw_db, DB_USERNAME, DB_PASSWORD de acordo com seu banco de dados.
- Dentro do projeto, execute o comando [php artisan migrate] no terminal para que possam ser criadas as tabelas no banco.
- Dentro do projeto, execute o comando [php artisan db:seed] para popular o banco de dados com produtos.
- Dentro do projeto, execute o comando [php artisan serve] para iniciar a api. É necessário que o banco de dados tambem ja esteja em funcionamento.
- Após startar esta api, vá até o diretório raiz do projeto mw_front e execute os passos contidos no README.md
