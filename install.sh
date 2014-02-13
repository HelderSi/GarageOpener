#!/bin/sh
chmod +x *.sh
echo 'ALL ALL=NOPASSWD: /var/www/open.sh' >> /etc/sudoers
echo 'ALL ALL=NOPASSWD: /var/www/shutdown.sh' >> /etc/sudoers
echo 'ALL ALL=NOPASSWD: /var/www/gpioExport.sh' >> /etc/sudoers

if [ -f config.php ];
then
	echo 'Delete old config.php'
	rm -rf config.php
fi


echo 'Please choose a username and password:'

read -p "Enter username:" user
read -p "Enter password:" pass


echo '<?' >> config.php
echo '$user = "'$user'";' >> config.php
echo '$pass = "'$pass'";' >> config.php
echo '?>' >> config.php

echo 'Installed successfully.'
echo 'Please go to http://RASPI-IP-ADDRESS/gpio.php to export the GPIO pin'
echo 'This is a one time step'