# Lumen 5.5 API

## Instruções:
* abrir pasta projeto no bash
* executar comando: composer install
* abrir arquivo '.env' e adicionar configurações de BD
* executar comando: php artisan migrate
* adicionar o prefixo "http://yourHost/pathProjeto" em todas as urls listadas
* substituir "yourHost" pelo host utilizado
* substituir "pathProjeto" pelo nome da pasta do projeto utilizada

## Chamadas API (method - url)
* buscar: GET - /public/api/usuario
* buscar por id: GET - /public/api/usuario/ID
* salvar (params: nome, email, cpf): POST - /public/api/usuario
* alterar (params: nome, email, cpf): PUT - /public/api/usuario/ID
* remover: DELETE - /public/api/usuario/ID

## Tela CRUD
* link: /public/usuario

## License
The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)