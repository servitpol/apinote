<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# API for notes app.


The project was executed according to the test task https://clck.ru/RwFwT  


Use the application according to the api work description which can be found https://apinotes.wp-cpm.site/public/docs
***

**Libraries used:**  

[JSON Web Token Authentication for Laravel & Lumen](https://github.com/tymondesigns/jwt-auth)  

[Intervention Image](https://github.com/Intervention/image) - for working with images  

[Scribe](https://github.com/knuckleswtf/scribe) - to describe how the api works  


***

To deploy the application to your local computer - use the following console commands in your LAMP / WAMP environment:
```sh
$ git clone https://github.com/servitpol/apinote.git
$ composer update
```


Create a database and write the paths to it in the .env configuration file
```sh
DB_DATABASE=dn_name
DB_USERNAME=user_name
DB_PASSWORD=your_password
```

Then, use the commands:
```sh
$ php artisan jwt:secret
```
Create the database tables with the command:

```sh
$ php artisan migrate
```

Fill the database with fake values using the command:

```sh
php artisan db:seed
```

The working version of the application is deployed here https://apinotes.wp-cpm.site/

Fake (test) user:

email: admin@admin.com

pass: admin
