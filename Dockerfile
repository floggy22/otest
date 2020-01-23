#FROM openshift/python:latest
FROM ubuntu
RUN apt update
RUN apt install htop -y
#RUN yum update -y
#RUN yum install top
ENTRYPOINT ["top", "b"]