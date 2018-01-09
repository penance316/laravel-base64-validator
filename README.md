Laravel Base64 Validator
============

Install
-------
```
composer require "penance316/laravel-base64-validator"
```

Add the required validator to boot method of `app/Providers/AppServiceProvider.php`
 
```
Validator::extend('base64', 'Penance316\Validators\Base64Validator@validateBase64');
```

Add the following lines to `resources/lang/en/validation.php` 

```
'base64' => 'The :attribute must be a valid Base64 string.',
```

Use like other validators

```
...
'reference'     => 'required|max:255',
'data'          => 'required|base64',
'email'         => 'required|email',
...
```

Test
-----

Use vendor phpunit

```
./vendor/phpunit/phpunit/phpunit --testdox
```