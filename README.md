
# Form controls Bootstrap-4 for Laravel 5.x

The package allows to use form controls of the Twitter Bootstrap 4 in the Laravel 5.x Blade template.

## Installation

```sh
$ composer require coder-studion/bootstrap
```

Add to config file in providers and aliases:

```php
'providers' => [
...
CoderStudio\Bootstrap\Providers\BootstrapServiceProvider::class,
]

'aliases' => [
...
'Bootstrap' => CoderStudio\Bootstrap\Facades\Bootstrap::class,
],
```

## Usage in Blade template
```php
// input
{!! Bootstrap::input(type : string, name : string, [label : string = null, value : string = null, help : string = null, addon_left : string = null, addon_right : string = null, state : string = null, size : string = null, $params : array|null = null]) !!}

// textarea
{!! Bootstrap::textarea(name : string, [label : string = null, value : string = null, help : string = null, addon_left : string = null, addon_right : string = null, state : string = null, size : string = null, params : array|null = null]) !!}

//select
{!! Bootstrap::select(name : string, options : array, [selected : integer|string = null, label : string = null, help : string = null, state : string = null, size : string = null, params : array|null = null]) !!}

//checkbox
{!! Bootstrap::checkbox(name: string, [label : string = null, value : string = null, help : string = null, state : string = null, params : array|null = null]) !!}

//radio
{!! Bootstrap::radio(name : string, [label : string = null, value : string = null, help : string = null, state : string = null, params : array|null = null]) !!}
```
###Examples:
```blade
<form method="POST" action="asset('submit')">
{!! Bootstrap::input('text', 'user_name', 'User name', 'Vladimir', 'Enter your username', null, null, null, 'lg', ['placeholder' => 'Enter your username']) !!}
{!! Bootstrap::textarea('description', 'Description', null, 'Enter description', null, null, null, 'lg', ['placeholder' => 'Enter description']) !!}
{!! Bootstrap::select('cars' [1 => 'Ford', 2 => 'Mitsubishi'], 2, 'Select car', null, null, null, [disabled]) !!}
{!! Bootstrap::checkbox('cars[]', 'Ford', 1, null, null, ['checked']) !!}
{!! Bootstrap::radio('car', 'Ford', 1, null, null, ['checked']) !!}
</form>
```
