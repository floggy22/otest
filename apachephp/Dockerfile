FROM centos:7
RUN yum update -y
#PHP KRAMs
RUN yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm 
RUN yum -y install epel-release yum-utils
RUN yum-config-manager --disable remi-php54
RUN yum-config-manager --enable remi-php73
RUN yum -y install php php-cli php-fpm php-mysqlnd php-zip php-devel php-gd php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json
RUN yum -y install php-intl php-opcache php-tidy 

#Python3
RUN yum -y install centos-release-scl
RUN yum -y install rh-python36
RUN scl enable rh-python36 bash

#memcached problems..
#RUN yum -y install memcached

#NodeJS visual
#RUN yum -y install nodejs npm

RUN sed -i 's/^max_execution_time.*$/max_execution_time = 600/g' /etc/php.ini
RUN sed -i 's/^post_max_size.*$/post_max_size = 128M/g' /etc/php.ini
RUN sed -i 's/^upload_max_filesize.*$/upload_max_filesize = 128M/g' /etc/php.ini
RUN sed -i 's/^;date.timezone.*$/date.timezone = Europe\/Berlin/g' /etc/php.ini
COPY bluespice.conf /etc/httpd/conf.d/bluespice.conf
#RUN mkdir -p /var/www/bluespice/w
RUN mkdir -p /var/www/html/w

COPY bluespice.zip /tmp/bluespice.zip
RUN yum -y install unzip
RUN cd /tmp && unzip bluespice.zip && cd bluespice && mv * /var/www/html/w/ && rm -f /tmp/bluespice.zip && rm -fR /tmp/bluespice
#COPY LocalSettings.php /var/www/html/w/LocalSettings.php
#RUN rm -f /tmp/bluespice.zip && rm -fR /tmp/bluespice 

#parsoid
#RUN yum -y install git make
#RUN cd /opt && git clone --depth 1 --branch v0.10.0 https://gerrit.wikimedia.org/r/p/mediawiki/services/parsoid parsoid && cd /opt/parsoid && npm install
#RUN cp /var/www/html/w/extensions/BlueSpiceVisualEditorConnector/docs/parsoid/* /opt/parsoid/

#Single instance
#RUN npm install -g pm2


#RUN yum -y remove make unzip
RUN yum -y remove unzip
#extend search
#RUN yum -y install java
#https://artifacts.elastic.co/downloads/elasticsearch/elasticsearch-7.5.2-x86_64.rpm

#COPY 020-BlueSpiceExtendedSearch.php /var/www/html/w/settings.d/020-BlueSpiceExtendedSearch.php
COPY 020-VisualEditor.php /var/www/html/w/settings.d/020-VisualEditor.php
COPY 020-BlueSpiceVisualEditorConnector.php /var/www/html/w/settings.d/020-BlueSpiceVisualEditorConnector.php


RUN chown apache:apache /var/www -Rf
#DEBUG
RUN yum -y install vim 

RUN yum clean all

RUN mkdir -p /opt/mediarun
RUN touch /opt/mediarun/first.run
COPY run.sh /opt/mediarun
#COPY index.php /var/www/html/index.php
#COPY index.htm /var/www/bluespice/index.html
#CMD httpd
#ENTRYPOINT ["httpd", "-X"]
ENTRYPOINT /opt/mediarun/run.sh 