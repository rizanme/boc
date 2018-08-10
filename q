sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
After adding the repository to Ubuntu, run the commands below to search for all PHP packages related to PHP 7.1

sudo apt-get update
sudo apt-cache pkgnames | grep php7.1
