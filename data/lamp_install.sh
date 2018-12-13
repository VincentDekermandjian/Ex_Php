#!/bin/bash
apt update -y
apt install php7.2 -y
apt install apache2 -y
apt install libapache2-mod-php7.2
apt install mysql-server -y
apt install php7.2-mysql -y
rm index.html
