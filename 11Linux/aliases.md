# Aliases para o bashrc

São atalhos, tipo scripts ou comandos, que executam tarefas para nós.

No caso do linux Min eu os coloco no 

~/.bashrc

Me parece que o Windows não tem similar, não sei. Mas podem ser tranformados, cada um, em um script .bat e copiados para a pasta c:\windows.

```bash
alias maiores='du -cks * | sort -rn | head'
alias cw='cd /var/www/html'
alias af='php artisan migrate:fresh'
alias am='php artisan migrate'
alias as='php artisan serve'
alias ams='composer du;php artisan migrate --seed'
alias asd='composer du;php artisan db:seed'
alias at='php artisan tinker'
alias auth7='composer require laravel/ui --dev;php artisan ui bootstrap --auth;npm install && npm run dev;npm audit fix'
alias clearall='php artisan view:clear;php artisan cache:clear;php artisan route:clear;php artisan optimize;composer dumpautoload'
```
