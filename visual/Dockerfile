FROM centos:7
RUN yum update -y
RUN yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm 
RUN yum -y install epel-release yum-utils

#NodeJS
RUN yum -y install nodejs npm git make
#parsoid
RUN cd /opt && git clone --depth 1 --branch v0.10.0 https://gerrit.wikimedia.org/r/p/mediawiki/services/parsoid parsoid && cd /opt/parsoid && npm install
#original from extensions/BlueSpiceVisualEditorConnector/docs/parsoid/*
COPY localsettings.js /opt/parsoid/localsettings.js
COPY config.yaml /opt/parsoid/config.yaml

RUN yum -y remove git make && yum clean all
#DEBUG
#RUN yum -y install vim 

RUN mkdir -p /opt/mediarun
COPY run.sh /opt/mediarun
ENTRYPOINT /opt/mediarun/run.sh 