Concerning Laravel. I found myself repeating a very basic form of code each time i begin a new REST API. in which the whole Interface's pieces are developed from a sample of each piece. eg:each one of the Models, Controllers, Routes, Test suits, Requests and so on follow a certain manner of writing code.

in this repository i've collected these files samples, so i can get rid of repeating them each time in each project. and since i love to share code with others, i decided to share that repository with you! i hope you can find it useful.  


## Available sample files 
- [A Model file](app/Models/Sample.php)
- [A Controller file (Note that this class extends the base controller for the API)](app/Http/Controllers/Api/SampleController.php)
- [A Base Base Controller file](app/Http/Controllers/ApiController.php)
- [A Request file (Note that this class extends the base form request)](app/Http/Requests/SampleRequest.php)
- [A Base Form Request file](app/Http/Requests/CustomFormRequest.php)
- [API v1 Routes(Routes are loaded from the RouteServiceProvider class)](routes/api/v1.php)
- [A Feature Test File](tests/Feature/SampleTest.php) 

## Requirements
Basically, you'll need -besides Laravel 8.x requirements- to activate pdo_sqlite extension in your php configuration file if you're running your application in windows OS and install it if you're doing that in linux OS. 

## Installation 
1. As any other github repo, download or clone the repository 

```
git clone https://github.com/adnane-ka/dev-suite.git
```
2. Install the app's dependencies

```
composer install
```

3. Create a database and run laravel migrations 

```
php artisan migrate
```

## Initialization
Since everything is based on use cases, i love to let tests run and control the application. so to make sure that everything works well just run phpunit.

```
vendor/bin/phpunit.xml
```
