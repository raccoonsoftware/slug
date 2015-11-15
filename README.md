# Laravel 5.1 Slug Package

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/raccoonsoftware/slug?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
[![Latest Stable Version](https://poser.pugx.org/raccoonsoftware/slug/v/stable)](https://packagist.org/packages/raccoonsoftware/slug)
[![Total Downloads](https://poser.pugx.org/raccoonsoftware/slug/downloads)](https://packagist.org/packages/raccoonsoftware/slug)
[![Latest Unstable Version](https://poser.pugx.org/raccoonsoftware/slug/v/unstable)](https://packagist.org/packages/raccoonsoftware/slug)
[![License](https://poser.pugx.org/raccoonsoftware/slug/license)](https://packagist.org/packages/raccoonsoftware/slug)

## Supported Alphabets

* Russian
* Kazakh
* Ukrainian
* Turkish

## Installation

You should install this package through Composer.

Edit your project's `composer.json` file to require `raccoonsoftware/slug`.

    "require": {
        "raccoonsoftware/slug": "*"
    },

Next, update Composer from the Terminal:
    `composer update`

Once this operation completes, the final step is to add the service provider.
Open `app/config/app.php`, and add a new item to the providers array.

  `'RaccoonSoftware\Slug\SlugServiceProvider::class',`

And add a new item to the aliases array.

  `'Slug' => 'RaccoonSoftware\Slug\Facade\Slug::class',`

## Usage

Call of the method: `Slug::convert($text)`

Call of the method with specific separator: `Slug::convert($text, '_')`.