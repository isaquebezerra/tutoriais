#!/bin/bash
#
# Criado/adaptado por Ribamar FS - http://ribafs.org
#
dnf install dialog;
#
while :
 do
    clear
servico=$(dialog --stdout --backtitle 'Instalação de pacotes no Ubuntu Server 16.04 LTS - 64' \
                --menu 'Selecione a opção com a seta ou o número e tecle Enter\n' 0 0 0 \
                2 'Instalar LAMP e outros' \
                0 'Sair' )
    case $servico in
      2) clear;
dnf -y update;
dnf -y install nano bash-completion curl wget telnet composer mcrypt phpunit;

setenforce 0;
sed -i 's/^SELINUX=.*/SELINUX=disabled/g' /etc/selinux/config;

dnf -y install httpd;
systemctl restart httpd;
systemctl enable httpd;

dnf -y install php php-cli php-php-gettext php-mbstring php-mcrypt php-mysqlnd php-pear php-curl php-gd php-xml php-bcmath php-zip php-xdebug;

rpm --import https://packages.microsoft.com/keys/microsoft.asc;
sh -c 'echo -e "[code]\nname=Visual Studio Code\nbaseurl=https://packages.microsoft.com/yumrepos/vscode\nenabled=1\ngpgcheck=1\ngpgkey=https://packages.microsoft.com/keys/microsoft.asc" > /etc/yum.repos.d/vscode.repo';
dnf check-update;
dnf install -y code;

dnf install mariadb-server;
systemctl start mariadb;
systemctl enable mariadb;

# Instalar outros softwares
dnf install -y vokoscreen unrar kolourpaint gnome-search-tool mediawriter shutter gparted kalarm;

# "Efetuar update e upgrade do Sistema. Geralmente é necessário reboot, nos casos em que o kernel seja atualizado";
apt -y update;
apt -y upgrade;;
      0) clear;exit;;
   esac
done
