# Set up project

## In the root directory of your project create a .env file from the existing .env.example file and modify the following fields in your .env file to use the values specified in the database container
```
cp .env.example .env
```
```
DB_CONNECTION=mysql
DB_HOST=eatery_db
DB_PORT=3306
DB_DATABASE=eatery
DB_USERNAME=root
DB_PASSWORD=root
```
## To bring all containers up:
```
docker-compose up -d
```
## Any change you make to the Dockerfile or any other file that the Dockerfile uses (excluding docker-compose.yaml) you will need to build the images again for the changes to take effect by executing the following command.
```
docker-compose build && docker-compose up -d
```
## To list all running containers:
```
docker ps
```
## To get inside app container's app and run specific commands in your app container's terminal:
```
docker-compose exec eatery_api bash
```
## "Permissions denied" case:
Then use the `sudo` command

## Run set up for the project
1. You need to use application's container bash to set up, because of that you need to get inside the app container [using application's container bash](#To-get-inside-app-container's-app-and-run-specific-commands-in-your-app-container's-terminal:)
2. Set up conmmand:

Necessary:
- Upgrading and installing dependencies:
```
composer upgrade && composer install
```
- Generating app key:
```
php artisan key:generate
```

Optional:
- Creating and migrating databases:
```
php artisan migrate
```
- Seeding fake data:
```
php artisan db:seed
```
- Start server:
```
php artisan serve
```
- The migration process is just run from where you updated. Because of that when you need to change all the migration and seeder code, you need to run a refresh command:
```
php artisan migrate:refresh --seed
```
## To exit a container:
```
exit
```
## To bring all containers down:
```
docker-compose down
```
## API for testing services:
After setting up, building docker and application, and run the server using ```php artisan serve```, then you can use this API to test the server:
```
http://localhost:8000/api/hello
```
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).