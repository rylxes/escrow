# Escrow
Simple Escrow for Laravel, with mysql and  php-fpm
# Pre-requisites
* Docker running on the host machine.
* Docker compose running on the host machine.
* Basic knowledge of Docker.
 

# Installation
+ To get started, the following steps needs to be taken:
+ Clone the repo.
+ `cd escrow` to the project directory.
+ `cp .env.example .env` to use env config file
+ Run `docker-compose build` to build the containers.
+ Run `docker-compose up -d` to start the containers.
+ Visit http://0.0.0.0:8009 to see your Laravel application.

# usage:
+ `docker-compose up -d` to start all containers
+ `docker-compose down` to stop all containers
+ If you need to restart after modifying *docker-compose.yml* restart with `docker-compose down` and `docker-compose up -d`

# Images
+ php:7
+ mysql:5.7
+ phpmyadmin/phpmyadmin

#Collection
+ postman collection url for the API: https://www.getpostman.com/collections/d2c16f079760088e6e9b