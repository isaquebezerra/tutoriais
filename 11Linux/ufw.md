# Firewall ufw

É um firewall criado pela equipe do Ubuntu. UFW - Uncomplicated Firewall (Firewall Descomplicado), é uma interface para iptables desenvolvida para simplificar o processo de configuração de um firewall. Apesar da iptables ser uma ferramenta sólida e flexível, pode ser difícil para os iniciantes aprender como usá-la para configurar corretamente um firewall. Se você não tem muita experiência com o Iptables, o UFW pode ser a escolha certa para você.

O UFW vem instalado por padrão no Ubuntu, mas desabilitado.

Verificando as regras atuais:
```bash
sudo ufw status verbose

Estado: ativo
Logando: on (low)
Predefinido: deny (entrada), allow (saída), disabled (roteado)
Novos perfis: skip
```
Para garantir que o ufw esteja com sua configuração padrão, execute
```bash
sudo ufw default deny incoming
```
A política padrão incoming mudou para 'deny' (assegure-se de ter atualizado suas regras apropriadamente)
```bash
sudo ufw default allow outgoing
```
A política padrão outgoing mudou para 'allow' (assegure-se de ter atualizado suas regras apropriadamente)

Observe que a política original/padrão é bem segura

Para sair - libera todas as saídas

Para entrar - bloqueia todas as entradas

Para um computador pessoal a política padrão tá de bom tamanho.

Mas para servidores precisamos liberar a entrada de algumas portas.

Liberando a porta do SSH
```bash
sudo ufw allow ssh
```
Caso queira reforças a segurança, use uma porta mais alta:
```bash
sudo ufw allow 55522
```
Para isso precisamos configurar o SSH para que estude na porta acima e não na padrão, que é a 22.

## Habilitar o firewall

Fizemos tudo isso sem habilitar o ufw.
```bash
sudo ufw enable
```
## Verificar
```bash
sudo ufw status verbose
```
## Permitindo conexões HTTP e HTTPS
```bash
sudo ufw allow http

sudo ufw allow https
```
Estas são as portas básicas a serem abertas num servidor, para que se possa dar enrtada nestes serviços:

- SSH para o nosso acesso, entrada, ao servidor

- HTTP e HTTPS, para que possam acessar o site em nosso servidor

## Negando conexões para uma porta

Se decidirmos que não devemos permitir acessos via porta 80:
```bash
sudo ufw deny http
```
## Permitindo SSH somente para um certo IP

Para reforçar ainda mais a segurança, mude o acesso ao SSH somente para o seu IP
```bash
sudo ufw allow from 203.0.113.4 to any port 55522
```
Mas isso somente se usar IP fixo para acessar a internet, pois ADSL muda de IP sempre que reinicia.

## Excluindo regras

Para excluir alguma regra:

- Liste as rgras atuais
```bash
sudo ufw status numbered

Status: active

     To                         Action      From
     --                         ------      ----
[ 1] 22                         ALLOW IN    203.0.113.4
[ 2] 80                         ALLOW IN    Anywhere
[ 3] 443                        ALLOW IN    Anywhere
```
- Agora para remover a regra 2, da porta 80, use:
```bash
sudo ufw delete 2
```
## Desabilitando o ufw
```bash
sudo ufw disable
```
## Redefinir as regras

Se você já tiver regras do UFW configuradas, mas decidir que quer começar novamente do zero, você pode usar o comando de redefinição:
```bash
sudo ufw reset
```
## Fechahr o servidor para toda a internet, exceto para o meu IP
```bash
sudo ufw allow from 203.0.113.4
```
## Prioridade das regras

Primeiro restringir, depois liberar.

Não devo ter uma regra permitindo que todos acessem a porta 55522. E em seguida uma dizendo que somente um IP pode acessar a porta 55522.

Não vai funcionar pois a primeira regra está liberando todos e a segunda não agirá.

## Créditos

https://www.digitalocean.com/community/tutorials/how-to-set-up-a-firewall-with-ufw-on-ubuntu-18-04-pt

https://www.digitalocean.com/community/tutorials/ufw-essentials-common-firewall-rules-and-commands
