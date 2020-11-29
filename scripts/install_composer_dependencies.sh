#!/bin/bash
cd /var/www/html
sudo apt-get install wget -y
sudo wget https://getcomposer.org/composer.phar
php composer.phar install