# Uso Básico do GitHub Desktop no Linux Mint 20

https://github.com/shiftkey/desktop

No site acima existem opções para outras distribuições Linux

## Boa Integração

Ele se integra muito bem com nossos repositórios do GitHub e com nosso desktop através do gerenciador de arquivos, do terminal e de um editor de código, além de outros bons recursos.

Melhora nossa produtividade e a segurança dos nossos arquivos.

## Instalação

Ubuntu, Mint e similares
```bash
wget -qO - https://packagecloud.io/shiftkey/desktop/gpgkey | sudo apt-key add -
sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/shiftkey/desktop/any/ any main" > /etc/apt/sources.list.d/packagecloud-shiftky-desktop.list'
sudo apt-get update
sudo apt install github-desktop
```

## Download da versão para Windows e para Mac

https://desktop.github.com/

## Configurações

Abrir pela primeira vez e configurar para sua conta no GitHub


## Criar um repositório local

- File - New Repository
- Name - teste
- Description - apenas um teste
- Local path - clique em Choose e selecione o diretório a armazenar os arquivosd este repositório (ex: ~/teste) - OK
- Criar README
- Selecione uma licença
- Create repositóry

### Agora temos algumas opções:

- Publicar este repositório no GitHub (clicar em Publish repository)
- Abrir o repositório num editor de código, como o VSCode para trabalhar (Open in Visual Studio Code)
- Abrir nossa pasta ~/teste no gerenciador de arquivos, onde podemos copiar arquivos/pastas para ela (Show in your Filemanager)

Clicar em Show in your Filemanager

- Copie os arquivos desejados para a nossa pasta ~/teste. Estando no Mint é bem cômodo teclar em F3 para ficar com dois paineis, um com ~/teste e outro com a pasta que contem os arquivos a copiar
- Após a cópia volte ao GitHub Desktop
- Então clique na caixa de texto à esquerda mais ou menos ao meio, onde aparece "Create nome do arquivo". Nesta caixa digite uma mensagem para commit
- Então clique abaixo em Commit to master

## Publicar este repositório que está somente lcal no GitHub

- Após a conclusão do commit clique no botão Publish repository
- Desmasque Keep this code private, caso deseje um repositório public
- Confirme clicando em Publish repository
- Vá até o site do GitHub e confira seu novo repositório

## Atualizar nosso repositório teste

Após fazer alerações no repositório local é bom sincronizar com o remoto
- Copie novos arquivos para a pasta ~/teste
- Abra o GitHub Desktop
- Abra o repositório teste
- Clique na caixa de mensagem do coommit e entre com uma mensagem indicando os arquivos enviados ou o que fez
- Clique em Commit to master
- Clique em Push origin

## Observação

Sempre que fizer alguma alteração no diretório ~/teste ao entrar no GitHub Desktop verá acima e à esquerda Changes
Então deve adicionar uma mensagem de commit e clicar no botão Commit to master e depois publicar no GH

## Atualizando nosso repositório remoto no GitHub

Após fazer alerações no repositório no GitHub pelo site é bom sincronizar com o repositório local
- Basta abrir o GitHub Desktop
- Clicar em Pull origin
- Então poderá checar no gerenciador de arquivos em ~/teste

## Removendo arquivos na pasta ~/teste local

- Abrir o GitHub Desktop
- Adicionar mensagem de commit
- Clicar em Commit to master
- Clicar em Push origin
- Vá até seu repositório no GH, atualize o navegador e veja que agora estão sincronizados local e remoto

## Sugestões
- Manter sincronizados as pastas mais importantes e que trabalhamos nelas diariamente, pois caso as percamos nos farão mais falta.
- Os arquivos em que mexemos pouco podem ficar de fora e serem jogados num repositório somente os selecionados e somente quando considerarmos que devemos fazer.
- Sempre que alterar um repositório local ou remoto sincronizar no GitHub Desktop.
