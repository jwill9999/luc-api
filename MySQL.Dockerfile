# Base image
FROM mysql:5.7

COPY etc/mysql/conf.d/* /etc/mysql/mysql.conf.d/

RUN chmod a-w /etc/mysql/mysql.conf.d/*