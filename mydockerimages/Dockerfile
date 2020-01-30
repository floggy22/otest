#Download base image MariaDB
FROM mariadb:latest

#Set necessary environment variables
ENV MYSQL_ROOT_PASSWORD 123

# start mysql service and create a databaseuser "bluespice" with pw "123"
CMD ["mysqld"] \ RUN mysql -e "GRANT ALL ON bluespice.* TO 'bluespice'@'127.0.0.1' IDENTIFIED BY '123';"
