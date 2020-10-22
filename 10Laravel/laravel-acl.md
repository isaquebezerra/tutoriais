# Pacotes ribafs/laravel*-acl

São pacotes para implementar ACL em aplicativos laravel

## Um para cada uma das versões:

- Para Laravel 5.8
- Para Laravel 6
- Para Laravel 7
- Para Laravel 8

Com a criação destes pacotes aprendi muita coisa sobre o Laravel e criei estes pacotes de forma simples, apenas com código nativo, pois queria fazer na unha, aprendendo. Uma de minhas intenções é que os colegas iniciantes possam aprender também com estes pacotes.

Além de ser importante cuidar do controle de acesso dos aplicativos com roles, permissions e cia, também deve ser útil aos colegas que ainda estão aprendendo a diferenciar as 4 versões do laravel. Poderá observar a implementação e as diferenças nestas versões das rotas, dos controllers, dos models, das migrations, seeders/seeds, etc.

A versão para laravel 8 utiliza os métodos novos das migrations e também vem com um recurso que as demais não tem: Uma área pública, no raiz, ou seja, o aplicativo fica dividido em uma área pública e uma administrativa e restrita. Na área pública somente as views index e show de clients.

## Alguns recursos nas 4 versões:

- Site de documentação criado com o mkdocs e hospedado no próprio repositório ribafs/laravel*-acl no GitHub
- Uso do BootStrap 4 em todas as versões, includive na versão para laravel 8, em que o bootstrap não é default
- Conta com Middleware, Provider, Trait e outros
- Gerenciamento do aplicativo pelas ferramentas do pacote:
    - Via CRUDs
    - Usando o tinker
    - Usando comandos próprios com artisan
- Tratamento de erros nas views
- Views welcome, home e layout app customizados
- Licença MIT

## Testado em Linux e Windows

Vale lembrar que a versão atual deve ser instalada em uma nova aplicação do laravel, pois os comandos substituem vários arquivos existentes. Estou trabalhando em uma versão que poderemos instalar em um aplicativo existente sem sobrescrever nada.

## Sugestões e críticas serão muito bem vindas

Segue o link dos repositórios

https://github.com/ribafs/laravel-acl - versão 8

https://github.com/ribafs/larave7-acl

https://github.com/ribafs/larave6-acl

https://github.com/ribafs/laravel58-acl

Ao lado direito quando acessar o repositório encontrará o link para o site de documentação.

Bom divertimento! :)

