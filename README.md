# Backend - Sistema de Agendamento

Este repositório contém o backend do sistema de agendamento, desenvolvido em **Laravel** (PHP).

## Tecnologias

-   [Laravel](https://laravel.com/) - Framework PHP
-   [Composer](https://getcomposer.org/) - Gerenciador de dependências
-   [MySQL/PostgreSQL] - Banco de dados (definir)

## Estrutura inicial

-   `app/` → código principal (Models, Http, Providers)
-   `bootstrap/` → inicialização do framework
-   `config/` → arquivos de configuração
-   `database/` → migrations, seeders e factories
-   `routes/` → definição de rotas (API em `api.php`)

## Requisitos

-   PHP >= 8.1
-   Composer
-   MySQL ou PostgreSQL
-   Node.js & NPM (para Vite, se necessário)

## Como rodar o projeto

1. Clonar o repositório:
    ```bash
    git clone https://github.com/seu-usuario/seu-repo.git
    cd backend
    Instalar dependências:
    composer install
    Configurar variáveis de ambiente:
    cp .env.example .env
    Edite o arquivo .env com suas credenciais do banco de dados.
    Gerar chave da aplicação:
    php artisan key:generate
    Rodar migrações:
    php artisan migrate
    Iniciar o servidor local:
    php artisan serve
    O backend estará rodando em http://127.0.0.1:8000.
    ```
