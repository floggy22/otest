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


RUN sed -i 's/^max_execution_time.*$/max_execution_time = 600/g' /etc/php.ini
RUN sed -i 's/^post_max_size.*$/post_max_size = 128M/g' /etc/php.ini
RUN sed -i 's/^upload_max_filesize.*$/upload_max_filesize = 128M/g' /etc/php.ini
RUN sed -i 's/^;date.timezone.*$/date.timezone = Europe\/Berlin/g' /etc/php.ini
COPY bluespice.conf /etc/httpd/conf.d/bluespice.conf
RUN mkdir -p /var/www/bluespice

COPY bluespice.zip /tmp/bluespice.zip
RUN yum -y install unzip
RUN cd /tmp && unzip bluespice.zip && cd bluespice && mv * /var/www/bluespice
RUN chown apache /var/www -R && chgrp apache /var/www -R
RUN rm -f /tmp/bluespice.zip && rm -fR /tmp/bluespice
RUN yum -y remove unzip

#DEBUG
RUN yum -y install vim 

RUN yum clean all
#COPY index.html /var/www/html/index.html
#COPY index.php /var/www/html/index.php
#COPY index.htm /var/www/bluespice/index.html

#ENTRYPOINT ["httpd", "-X"]