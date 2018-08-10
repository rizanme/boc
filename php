sudo apt-get install python-software-properties software-properties-common
sudo LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
sudo apt-get update

sudo apt-get remove php5-common -y

sudo apt-get purge php5-common -y
And finally install PHP 7:

sudo apt-get install php7.0 php7.0-fpm php7.0-mysql -y
Optionally clean up unneeded packages afterwards:

sudo apt-get --purge autoremove -y

sudo apt-get install php7.0 
Or

sudo apt-get install php
