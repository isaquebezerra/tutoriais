#!/bin/bash
#
# Criado por Ribamar FS - http://ribafs.me, partindo de tudotiais e exemplos distribuidos generosamente na internet, aos quais sou muito grato
#
apt install -y dialog;
#
while :
 do
    clear
servico=$(dialog --stdout --backtitle 'Instalação de pacotes no Ubuntu Server 16.04 LTS - 64' \
                --menu 'Selecione a opção com a seta ou o número e tecle Enter\n' 0 0 0 \
                1 'Atualizar repositórios' \
                2 'Instalar LAMP e outros' \
                0 'Sair' )
    case $servico in
      1) apt update;;
      2) clear;
# LAMP
apt install -y apache2 libapache2-mod-php7.4 aptitude git composer mc curl phpunit;
apt install -y mariadb-server;
apt install -y php7.4 php7.4-bcmath php7.4-gd php7.4-mysql php7.4-pdo-mysql php7.4-curl;
apt install -y php-pear php7.4-xml php7.4-xsl php-xdebug php7.4-intl;
apt install -y php7.4-zip php7.4-mbstring php7.4-fpm;
phpenmod mbstring;

apt install -y php-apcu;
wget http://spout.ussg.indiana.edu/linux/ubuntu/pool/main/m/memcached/memcached_1.5.22-2ubuntu0.1_amd64.deb;
dpkg -i memcached_1.5.22-2ubuntu0.1_amd64.deb;
apt install -y php-memcache;
a2enmod rewrite;
systemctl restart apache2;

# Instalar outros softwares
apt install -y ttf-mscorefonts-installer fonts-crosextra-carlito fonts-crosextra-caladea vokoscreen;
apt install -y rar unrar zip unzip p7zip-full ubuntu-restricted-extras kolourpaint searchmonkey;
add-apt-repository -y ppa:linuxuprising/shutter && apt update && apt install -y shutter;
apt install -y skypeforlinux guvcview virtualbox

#Cubic
apt-add-repository -y ppa:cubic-wizard/release
apt update
apt install -y cubic

#peek - gifs animados
add-apt-repository -y ppa:peek-developers/stable
apt-get update
apt-get install -y peek

# GitHub Desktop
wget -qO - https://packagecloud.io/shiftkey/desktop/gpgkey | apt-key add -
sh -c 'echo "deb [arch=amd64] https://packagecloud.io/shiftkey/desktop/any/ any main" > /etc/apt/sources.list.d/packagecloud-shiftky-desktop.list'
    apt-get update
apt install -y github-desktop

# Warpinator para troca de arquivos em rede
flatpak install -y flathub org.x.Warpinator

#Typora - editor de markdown com bons recursos e ágeis teclas de atalho
wget -qO - https://typora.io/linux/public-key.asc | apt-key add -
add-apt-repository -y 'deb https://typora.io/linux ./'
apt-get update
apt-get install -y typora

# Alarme
wget https://go.microsoft.com/fwlink/?LinkID=760868
wget http://launchpadlibrarian.net/206882204/alarm-clock-applet_0.3.4-1_amd64.deb
dpkg -i alarm-clock-applet_0.3.4-1_amd64.deb
apt install -f

#Anydesk para cesso remoto
wget -qO - https://keys.anydesk.com/repos/DEB-GPG-KEY | apt-key add -
echo "deb http://deb.anydesk.com/ all main" > /etc/apt/sources.list.d/anydesk-stable.list
apt update
apt install -y anydesk

#Desinstalar alguns pacotes que não uso

apt remove -y --purge thunderbird
apt remove -y --purge timeshift
apt update;
apt upgrade -y;
apt autoremove;;
      0) clear;exit;;
   esac
done
