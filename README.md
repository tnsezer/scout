sudo apt-get install php7.1-dev php7.1-mongo
sudo pecl install mongodb

composer install

cd docker/
docker-compose up -d --build