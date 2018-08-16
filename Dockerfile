from debian
expose 80 
maintainer Matheus Oliveira Guedes
run apt update
run apt upgrade -y
#run apt install wget -y
#run dpkg-reconfigure tzdata
#cmd 2
#cmd 22
run apt install apache2 -y
run apt install php7.0 -y
#run apt install apt-transport-https lsb-release ca-certificates -y
#run echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
#cmd apt update
#cmd apt upgrade -y
#cmd apt install php7.2 -y
volume /var/www/html
#WORKDIR /var/www/html

#ENTRYPOINT docker exec webV1 /etc/init.d/apache2 start
