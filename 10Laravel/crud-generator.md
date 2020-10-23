# Pacote gerador de CRUds para laravel 5.3+

ribafs/crud-generator
       
## Gera CRUDs com bons recursos

É um fork do ótimo https://github.com/appzcoder/crud-generator, com alguns acréscimos

- Altera $loop->iteration para  $item->id na index das views, que a meu ver corrige um bug

- Muda <table class="table"> para <table class="table table-sm"> nas index. Me parece mais adequado

- Muda o layouts/app.blade.php no laravel 8

- Adiciona orderBy() no controller

- Adiciona a pasta includes nas views com o sidebar contendo um menu

- Adiciona as views errors: 404, 402 and 500

Entre outras alterações

https://github.com/ribafs/crud-generator

## crud-generator-acl

Partindo do pacote acima criei este abaixo para trabalhar em conjunto com os pacotes ribafs/laravel*-acl, quando desejasse adicionar um CRUD e ele já viesse com o ACL implementado e compatível com o laravel-acl.

https://github.com/ribafs/crud-generator-acl

## Tutorial sobre criação de pacotes para Laravel

Em breve liberarei um tutorial sobre o assunto

