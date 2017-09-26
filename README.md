# Goat-Site-Design

This is the repo for my personal website/portfolio.  It is currently built with the following technologies:

* PHP
* Composer
* MySQL
* JavaScript
* jQuery
* SCSS
* Gulp

## Composer

This project uses [Composer](https://getcomposer.org/) to manage PHP Dependencies.  Composer should already be installed globally on your system.  To install the packages listed in **composer.json**, run the following command:

```
composer install
```

## Credentials

In order to connect to the database and use services such as Google ReCaptcha and MailGun, a configuration file called **credentials.php** should be present in the **/includes** directory.  This file has been excluded from the repo for security reasons.  The following values need to be defined:

```php
<?php
define('HOST', 'SomeHost'); 
define('USER', 'SomeUser');
define('PASS', 'SomePassword');
define('DB', 'SomeDatabase');
define('GRC_SECRET', 'SomeReCaptchaKey');
define('MAILGUN_KEY', 'SomeMailGunKey');
?>
```

## Gulp

This project uses [Gulp](http://gulpjs.com/) to build a production-ready CSS file.  During this build process, the SCSS is compiled into CSS, files are minified, auto-prefixed, and combined into a single file.  Node and Gulp should already be installed globally on your system before you run the following commands:

```
npm install
```

```
gulp sass
```

If Gulp isn't installed on your system globally, you can run the following:

```
./node_modules/gulp/bin/gulp.js sass
```