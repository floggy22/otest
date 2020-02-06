Bluespice Test:

Start Config: http://localhost:8080/mw-config/index.php REWRITE ERROR!

Apache 80/443
Elastic 9200
parsoid 8000   

   
DB:
CREATE DATABASE wikidb;
CREATE USER 'wikiuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON wikidb.* TO 'wikiuser'@'localhost' WITH GRANT OPTION;



/var/www/html/w/maintenance
php install.php bla myadmin --dbpass 123 --pass "1qayxsw2   

php install.php bla admin --dbserver db --dbpass 123 --pass "1qayxsw2"

 docker exec -it otest_web_1 /bin/bash

php install.php bla admin --dbuser root --dbserver db --dbpass 123 --pass "1qayxsw2"
after install run
php update.php (sch.. bluespice :())

da hat jemand schon fast alles erledigt https://gitlab.com/baip/openshift-mediawiki/blob/master/libs/setup-env danke!


php install.php bla admin --dbserver db --dbpass 123 --pass 123