# Laravel Activity Feed

An activity logger for Laravel 5

## Install

This package can be installed through Composer.

``` bash
$ composer require spatie/laravel-activity-feed
```

You must install this service provider.

```php
// config/app.php
'provider' => [
    ...
    'Spatie\ActivityFeed\ActivityFeedServiceProvider',
    ...
];
```
Then you must publish the migration-file.

``` bash
$ php artisan vendor:publish --provider="Spatie\ActivityFeed\ActivityFeedServiceProvider"
```
And run the migration.

``` bash
$ php artisan migrate
```

## Usage

Use the Activity Logger by using the provided trait in your models.
For example:

```php
class Post extends Model 
{
    use RecordsActivity;
    ...
}
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
