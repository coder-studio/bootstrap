
# Form controls Bootstrap-4 for Laravel 5.x

The package allows to use form controls of the Twitter Bootstrap 4 in the Laravel 5.x Blade template.

## Installation
Install with composer the Composer.

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

## Elements:
```php
Bootstrap::button($name, $value = null);
Bootstrap::checkbox($name, $value = null);
Bootstrap::hidden($name, $value = null);
Bootstrap::password($name, $value = null);
Bootstrap::reset($name, $value = null);
Bootstrap::submit($name, $value = null);
Bootstrap::text($name, $value = null);
Bootstrap::color($name, $value = null);
Bootstrap::date($name, $value = null);
Bootstrap::datetime($name, $value = null);
Bootstrap::datetime_local($name, $value = null);
Bootstrap::email($name, $value = null);
Bootstrap::number($name, $value = null);
Bootstrap::range($name, $value = null);
Bootstrap::search($name, $value = null);
Bootstrap::tel($name, $value = null);
Bootstrap::time($name, $value = null);
Bootstrap::url($name, $value = null);
Bootstrap::month($name, $value = null);
Bootstrap::week($name, $value = null);
Bootstrap::textarea($name, $value = null);
Bootstrap::select($name, $value = null);
```

## Methods:
```php
label(string $label)
help(string $help)
addonLeft(string $addon_left)
addonRight(string $addon_right)
valid()
invalid()
sm()
lg()
floatingLabel()
params(array $params)
options(array $options)
id(string $id)
cssClass(string $class)
placeholder(string $placeholder)
rows(string $rows)
get()
```

## Usage in Blade template:
```blade
<form method="POST" action="asset('submit')">
    {!! Bootstrap::text('inputName')->label('label name')->placeholder('label name')->floatingLabel()->id("idName")->params()->get() !!}    
</form>
```
