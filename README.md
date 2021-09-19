## Passos para rodar

- Fazer o clone desse repositório;
- Executar:
- - docker-compose up --build -d
- - docker-compose exec php-fpm composer install
- - docker-compose exec php-fpm npm install
- - docker-compose exec php-fpm php artisan migrate
- - docker-compose exec php-fpm npm run dev

## Para acessar

- http://localhost
- http://localhost/laravel-websockets - Caso queira ver as mensagens sendo transmitidas