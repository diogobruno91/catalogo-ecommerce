# Catalogo E-commerce Projeto

Este é um projeto de Catalogo ecommerce utilizando **Laravel** no backend, **React** no frontend e **MySQL** como banco de dados. O projeto está dockerizado, facilitando o ambiente de desenvolvimento.

## Pré-requisitos

Antes de começar, verifique se você tem os seguintes pré-requisitos instalados:

- **Docker**: [Instalar Docker](https://www.docker.com/get-started)
- **Docker Compose**: [Instalar Docker Compose](https://docs.docker.com/compose/install/)

## Iniciando o Projeto

### 1. Clone o repositório

Primeiro, clone o repositório do projeto:

```bash
git clone <URL-DO-REPOSITORIO>
cd <NOME-DO-REPOSITORIO>
```

### 2. Subir os Containers com Docker Compose
Utilize o docker-compose para subir os containers do backend, frontend e banco de dados. No diretório raiz do projeto, execute o seguinte comando:

```bash
docker-compose up --build
```
- Este comando irá:
  - Construir as imagens Docker conforme os `Dockerfile` do backend e frontend.
  - Subir o container do banco de dados MySQL.
  - Iniciar os containers de backend (Laravel) e frontend (React).

- Após a execução do comando, o projeto estará rodando nos seguintes endpoints:

    - Backend (Laravel API): http://localhost:8080
    - Frontend (React): http://localhost:3000
    - Banco de Dados MySQL: localhost:3306 (credenciais configuradas no docker-compose.yml).

### 3. Rodar Migrações e Seeders
Após subir os containers, você precisa rodar as migrações e seeders do Laravel para criar as tabelas no banco de dados e popular com dados iniciais. Para isso, execute o seguinte comando:
```bash
docker-compose exec backend php artisan migrate --seed
```

- Este comando irá:

    - Rodar as migrações do banco de dados.
    - Executar os seeders para popular o banco com dados de exemplo.

### 4. Acessando o Frontend
Abra o navegador e acesse http://localhost:3000 para visualizar o frontend React.

### 5. Acessando o Backend (API)
Você pode testar a API diretamente no backend, que estará disponível em http://localhost:8080. 
A documentação das rotas da API pode ser encontrada em https://app.swaggerhub.com/apis/exata-de5/ecommerce/1.0.0
