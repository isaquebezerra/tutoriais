# Dicas sobre git

## Enviar arquivos de um repositório local para um remoto
```bash
git add .
git commit -am "my comment"
git push
```
## Forçar o envio
```bash
git push -f
```
## Caso tenha problema tente
```bash
git add -A
ao invés de
git add .
```
## Receber arquivos de um repositório remoto num repositório local
```bash
git add .
git commit -am "my comment"
git pull
```
## Script para sincronizar os repositórios local e remoto
```bash
usr/local/bin/gs

git add .
git commit -m "$1"
git pull
git push
```
