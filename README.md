# Laravel 5.1 Slug Package


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

  `'Slug' => 'RaccoonSoftware\Slug\Facades\Slug::class',`

## Usage

Call of the method: `Slug::convert($text)`

Call of the method with specific separator: `Slug::make($text, '_')`.