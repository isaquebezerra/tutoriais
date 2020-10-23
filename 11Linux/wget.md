# Wget - gerenciador de downloads para o terminal

Existe também para windows

Simples, ágil e continua o download, caso caia.

Efetuar download e continuar caso caia

wget -c https://sitequalquer/minha.iso

Se cair, basta repetir o comando:

wget -c https://sitequalquer/minha.iso

## Como fazer download de um site completo.

wget \
     --recursive \
     --no-clobber \
     --page-requisites \
     --html-extension \
     --convert-links \
     --restrict-file-names=windows \
     --no-parent \
         $1


## Exemplo

sh wget.sh https://laravel.com/docs/8.x

## Observação

Este site abaixo era um site criado com Joomla e baixei com o script acima tornando-se um site estático, então o hospedei no GitHub.

https://ribafs.github.io
