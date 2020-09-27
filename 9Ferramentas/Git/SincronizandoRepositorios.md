# Sincronizando repositório local com o remoto

Em seu desktop mantenha um repositório sincronizado com o repositório do GitHub.

```bash
cd crud-generator
git config --global user.name "Ribamar FS"
git config --global user.email "ribafs@gmail.com"
git clone git@github.com:ribafs/crud-generator.git .

# Efetuar as modificações desejadas e executar os comandos abaixo

git merge origin/master
git add .
git checkout
git status
git commit -m "teste"
git pull # traz diferenças do remoto para cá
git push origin master # enviar para o remoto as diferenças
```
## Estes comandos abaixo basta a primeira vez em que executou o git
git config --global user.name "Ribamar FS"
git config --global user.email "ribafs@gmail.com"

## Sugestões e dicas
Caso tenha sugestões favor deixar num Issue.
