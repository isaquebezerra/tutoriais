# Listar maiores arquivos de um diretório

## Ordem crescente sem ocultos
```bash
du --human-readable * | sort --human-numeric-sort
```
## Inclusive os ocultos
```bash
du -h | egrep -v "\./.+/" | sort -h
```
## Do ordem decrescente, com ocultos
```bash
sudo du -a /dir/ | sort -n -r | head -n 20
```
## Ordem decrescente, sem ocultos
```bash
alias maiores='du -cks * | sort -rn | head'
```
## Outro para ordem decrescente, sem ocultos

find $HOME -type f -printf '%s %p\n' | sort -nr | head -10
