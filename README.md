# Laravel + Docker – Technical Test

## 🔧 How to run

```bash
cp .env.example .env
docker-compose up --build
```

Then access: [http://localhost:8000](http://localhost:8000)

## 📚 API Documentation
API Application Setup
---------------------------------------------------------------------------------------------------
1. Installed Laravel basic setup via composer.
2. Installed laravel Breeze via composer install "composer require laravel/breeze --dev" and "php artisan breeze:install".
3. Installed passport via "composer require laravel/passport" and configured it via "php artisan passport:install", and migrated the essential migration.
4. Added 'api' guards in config/auth.php file and genetated passport key php artisan passport:keys.
5. added PASSPORT_PRIVATE_KEY and PASSPORT_PUBLIC_KEY in .env file.
6. Created API AuthController.php file to handle login, profile and logout endpoint.
7. setup added files in sanctom.php and passport.php files in config directory.

7. Some files such as ProfileController.php in controllers dir and User.php in Models created while set the project

## Virtual Host on local machine
I created and configurred virtual url for application which run app automatic with http://test-app.test URL, I made changes in window "host" and apache "httpd-vhosts.conf" file.

## Containarization  through Docker
I used following steps to create docker files and docker image creation
1. Initialize docker in root folder via "docker init" command, this commands generated required files such as "Dockerfile","compose.yml",".dockerignore" etc files
2. run the "docker compose up --build" command to create build, docker image and run container, docker push to push images over docker Hub.



Please describe the endpoints you have implemented in the table below:

| Method | Endpoint         | Description                                         | Requires Auth  |
|--------|------------------|-----------------------------------------------------|--------------- |
| POST   | /api/login       | The login API endpoint authenticate client request  | ❌             |
|        |                  |  and generate new access token key and return in the|                |
|        |                  | response                                            |                |
|        |                  |                                                     |                |
| GET    | /api/profile     | This API endpoint is a protected GET URL, and can   | ✅             |
                            | access with token after login successfull           |                |
| POST   | /api/logout      | This API endpoint is a protected POST methos, anc   | ✅             |
|        |                  | will be access with token after login successfull   |                |
|--------|------------------|-----------------------------------------------------|-----------------|

## Setup and configure the application from github repository
1. clone the repository "https://github.com/diid21ani/app-test.git" into htdocs folder
2. create db name 'blank' in mysql database.
3. run composer update or composer install command to updated dependencies
4. run 'php artisan migrate' command to migrate db tables.
5. rename .env.example file with .env

After thse project will be set, if you want create virtual host, you can create as i explained above. Use postman to check the API



## 🧪 Tests

If you implemented any tests, describe how to run them below:

```bash
php artisan test
```