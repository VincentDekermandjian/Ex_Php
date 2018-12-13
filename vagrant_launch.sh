#!/bin/bash
# Créer le vagrantfile
# Demander infos 1.Choisir l'adresseIp / 2.Nom du dossier partagé à créer
# Remplir le vagrantfile
# Vagrant up
# Vagrant ssh
echo "Création du fichier vagrant"
touch Vagrantfile
echo "Choisssez la fin de votre adresse ip :"
read -p "192.168.33." ip
echo "Choisissez votre nom de dossier partagé"
read -p "./" dir

cat > vagrantfile << eof
# -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure("2") do |config|
config.vm.box = "ubuntu/xenial64"
config.vm.network "private_network", ip: "192.168.33.$ip"
config.vm.synced_folder "./$dir", "/var/www/html"
end
eof

mkdir $dir

cd $dir

cat > lamp_install.sh << eof
#!/bin/bash
apt update -y
apt install php7.2 -y
apt install apache2 -y
apt install libapache2-mod-php7.2
apt install mysql-server -y
apt install php7.2-mysql -y
rm index.html
eof

cat > index.php << eof
<h3>Configurer les fichier suivants</h3>
<h4>Pour afficher les erreurs PHP : </h4>
<p>cd /var/www/html puis lancer lamp_install avec sudo</p>
<p>cd /etc/php/5.0/apache2/</p>
<p>sudo vim php.ini</p>
<p>Changer les lignes display_errors : Off && display_startup_errors : Off en ON</p>
<h4>MySQL config</h4>
<p>cd /etc/apache2</p>
<p>sudo vim envvars</p>
<p>APACHE RUN USER = vagrant && APACHE RUN GOUP = vagrant</p>
<h4>Installer adminer</h4>
<p>wget adminerlink et renommer</p>
<h4>Relancer apache</h4>
<p>sudo service apache2 restart</p>
eof

cd ../
vagrant up
vagrant ssh
