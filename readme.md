# Screencast Laravel Vue

### Instruções de instalação

1. Clonar este repositório
    * Branch `master` é o código do video https://www.youtube.com/watch?v=TGSJjDahlrQ
    * Branch `pagination` é o código do video https://www.youtube.com/watch?v=H1dAK9f825Q
    * Branch `pagination advanced` é o código do video https://www.youtube.com/watch?v=-0IFTI4FYDc

2. Preparar seu ambiente para acessar o projeto no browser
    * Criar um virtual host e cadastrar localmente em `hosts`
    * Configurar seu webserver para servir o projeto a partir da pasta `public`
    * ou então user o embeded web server do PHP

3. No terminal e a partir da pasta raiz do projeto, instalar as dependências do PHP com `composer install`

4. No terminal e a partir da pasta raiz do projeto, instalar as dependência do frontend com `npm install`

5. Rodar gulp para compilar os arquivos CSS e JS que serão incluídos no HTML

6. Configurar seu próprío .env para acessar um banco de dados

7. No terminal e a partir da pasta raiz do projeto, rodar as migrations e abastecer o db com os seeds: `php artisan migrate` e `php artisan db:seed`

Pronto, basta acessar seu virtual host no browser.
