# PHP_2024

https://otus.ru/lessons/razrabotchik-php/?utm_source=github&utm_medium=free&utm_campaign=otus

# Заходим в контейнер Postgress
docker exec -it laravel-postgres psql -U postgres

## Создаем пользователя и базу данных для sonar
CREATE USER sonar WITH ENCRYPTED PASSWORD 'sonar';
CREATE DATABASE sonarqube OWNER sonar;
GRANT ALL PRIVILEGES ON DATABASE sonarqube TO sonar;

# Проверка прав на сокет Docker в контейнере Jenkins
docker exec -u jenkins laravel-jenkins ls -l /var/run/docker.sock
## Должно быть
srw-rw---- 1 root docker 0 Apr  9 14:30 /var/run/docker.sock

# Предоставление прав на сокет Docker в контейнере Jenkins
docker exec -u root laravel-jenkins chown root:docker /var/run/docker.sock

#