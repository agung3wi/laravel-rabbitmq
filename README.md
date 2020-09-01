Implementasi Send Email RabbitMQ Queue driver untuk Laravel
======================

##Clone 
```
git clone https://github.com/agung3wi/laravel-rabbitmq.git && cd laravel-rabbitmq
```

## Setup Rabit Mq

Setup RabbitMQ menggunakan `docker-compose`:

```bash
docker-compose -f rabbit-mq up -d rabbitmq
```

## Installation

```
cp .env.example .env
```
Sesuaikan Setting  file .env untuk MAIL dengan konfigurasi mail server, 

Kemudian install composer
```
composer install
```

Jalankan Laravel dengan
```
php artisan serve
```

## Testing

Akses routing /mail & /mail-queue, dengan method GET

