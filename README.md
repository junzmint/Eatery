# Set up project

## In the root directory of your project create a .env file from the existing .env.example file and modify the following fields in your .env file to use the values specified in the database container
```
cp .env.example .env
```
```
DB_CONNECTION=mysql
DB_HOST=eatery_db
DB_PORT=3308
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

## Or you can simply use the shell command
1. Run docker command: docker_init.sh
2. Init project: initproject.sh (run just one time)
3. Start server: startproject.sh


# API documentation
# Get all food and drink labels
1. Method: Get
2. URL: ```http://127.0.0.1:8000/api/food_drinks```
# Create user favourite food and drink profile
1. Attach "user-id" as 1 in header request 
2. Method: Post
3. URL: ```http://127.0.0.1:8000/api/users/profile```
4. Body: 
```
{
    "favourites": [
        1,
        2,
        3,
        4,
        5
    ]
}
// favourite food and drink id list
```
# Get all the eateries
1. Method: Get
2. URL: ```http://127.0.0.1:8000/api/eateries/all```
# Get highest rating eateries
1. Method: Get
2. URL: ```http://127.0.0.1:8000/api/eateries/highest_ratings```
# Get eateries based on user favourtie
1. Attach "user-id" as 1 in header request 
2. Method: Get  
3. URL: ```http://127.0.0.1:8000/api/eateries/user_favourite```
# Get eatery's info and its reviews
1. Method: Get
2. URL: ```http://127.0.0.1:8000/api/eateries/{eatery_id}```
# Like, dislike a review
1. Method: Post
2. URL: ```http://localhost:8000/api/reviews/{review_id}?type={type}```
3. ```type``` is "like" or "dislike"
